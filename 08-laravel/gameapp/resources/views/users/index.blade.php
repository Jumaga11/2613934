@extends('layouts.app')
@section('tittle', 'GameApp - Users Module')
@section('class', 'users')

@section('content')
    <header>
        <a href="{{ url('dashboard') }}" class="btn-back">
            <img src="../images/btn-back.svg" alt="Back">
        </a>
        <img src="../images/tittles/users-tittle.png" alt="logo" class="logo-top">
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>

    @include('menu')

    <section class="scroll">
        <div class="area">
            <a class="add" href="{{ url('users/create') }}">
                <img src="{{ asset('images/tittles/add.png') }}" alt="Add">
            </a>
            <div class="options">

                <form action="{{ url('import/users') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" id="file" class="hidden" accept="application/vnd.openxlmformats-officedocument.spreadsheetml.sheet">
                    <button type="button" class="btn-import">
                        <img src="{{ asset('images/btn-import-excel.svg') }}" alt="este es">
                    </button>
                </form>

                <a href="{{ url('export/users/pdf') }}">
                    <img src="{{ asset('images/pdf-icon.svg') }}" style="height: 35px; margin-right:10px">
                </a>
                <input name="qsearch" id="qsearch" type="text">
                <a href="{{ url('export/users/excel') }}">
                    <img src="{{ asset('images/excel-icon.svg') }}" style="height: 35px; margin-left:10px">
                </a>
            </div>

            <div id="list">
                @foreach ($users as $user)
                    <article class="record">
                        <figure class="avatar">
                            <img class="mask" src="{{ asset('images').'/'.$user->photo }}" alt="Photo">
                            <img class="border" src="{{ asset('images/border-mask-card.png') }}" alt="border">
                        </figure>
                        <aside>
                            <h3>{{ $user->fullname }}</h3>
                            <h4>{{ $user->role }}</h4>
                        </aside>
                        <figure class="actions">
                            <a href="{{ url('users/' . $user->id) }}">
                                <img src="../images/ico-view.svg" alt="viewUser">
                            </a>
                            <a href="{{ url('users/' . $user->id . '/edit') }}">
                                <img src="../images/ico-edit.svg" alt="viewUser">
                            </a>
                            <a href="javascript:;" class="delete" data-fullname="{{ $user->fullname }}">
                                <img src="../images/ico-delete.svg" alt="Delete">
                            </a>
                            <form action="{{ url('users/' . $user->id) }}" method="POST" style="display: none">
                                @csrf
                                @method('delete')
                            </form>
                        </figure>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        //------------------------MENU HAMBURGUESA---------------
        $(document).ready(function() {

            $('header').on('click', '.btn-burger', function() {
                $(this).toggleClass('active')
                $('.nav').toggleClass('active')
            })
            $('.btn-import').click(function(e) {
                $('#file').click()
            })
            $('#file').change(function(event) {
                $('this').parent().submit()
            })
        })

        //--------------------------------------------------------
        $('figure').on('click', '.delete', function() {

            $fullname = $(this).attr('data-fullname')
            Swal.fire({
                title: "Are you sure?",
                text: "You want to eliminate: " + $fullname,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#bf7bffc7",
                toast: true,
                cancelButtonColor: "#bf7bffc7",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).next().submit()
                }
            })
        })
        //--------------------------------------------------------
        $('#qsearch').on('keyup', function() {
            $query = $(this).val()
            $token = $('input[name=_token]').val()
            $model = 'users'

            $.post($model + '/search', {
                    q: $query,
                    _token: $token
                },
                function(data) {
                    $('#list').html(data)
                }
            )
        });
    </script>
@endsection
