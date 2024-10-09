@extends('layouts.app')
@section('title', 'GameApp - Show User')
@section('class', 'myProfile')

@section('content')

    <header>
        <a href=" {{ url('users') }} " class="btn-back">
            <img src="{{ asset('../images/btn-back.svg') }}" alt="Back">
        </a>
        <img src="{{ asset('images/tittles/show-tittle.png') }}" alt="logo" class="logo-top">
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>

    @include('menu')

    <section>
        <figure class="avatar">
            <img class="mask" src="{{ asset('images').'/'.$user->photo }}" alt="Photo">
            <img class="border" src="../images/border-menu.png" alt="border">
        </figure>
        <h2>{{ $user->fullname }}</h2>

        <span class="email">
            <b>{{ $user->email }}</b>
        </span>

        <span class="role">
            <img src="{{ asset('') }}../images/ico-user-myProfile.svg" alt="role">
            <b>{{ $user->role }}</b>
        </span>
        <div class="edit">
            <img src="{{ asset('../images/ico-edit-myProfile.png') }}" alt="">
        </div>

        <div class="grid">
            <span class= "data data-id">
                <img src="{{ asset('../images/ico-user-myProfile2.svg') }}" alt="">
                <b>{{ $user->document }}</b>
            </span>
            <span class= "data data-addres">
                <img src="{{ asset('../images/ico-user-myProfile2.svg') }}" alt="">
                <b>str 16A # 3-64</b>
            </span>
            <span class= "data data-phone-number">
                <img src="{{ asset('../images/ico-user-myProfile2.svg') }}" alt="">
                <b>{{ $user->phone }}</b>
            </span>
            <span class= "data data-birth-date">
                <img src="{{ asset('../images/ico-user-myProfile2.svg') }}" alt="">
                <b>{{ $user->birthdate }}</b>
            </span>
            <span class= "data data-gender">
                <img src="{{ asset('../images/ico-user-myProfile2.svg') }}" alt="">
                <b>{{ $user->gender }}</b>
            </span>
            <span class= "data data-status">
                <img src="{{ asset('images/ico-user-myProfile2.svg') }}" alt="">
                <b>Active</b>
            </span>
        </div>
    </section>

@endsection

@section('js')
    <script>
        //------------------------MENU HAMBURGUESA
        $('header').on('click', '.btn-burger', function() {
            $(this).toggleClass('active')
            $('.nav').toggleClass('active')
        })
    </script>
@endsection
