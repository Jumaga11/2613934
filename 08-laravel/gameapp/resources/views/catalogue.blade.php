@extends('layouts.app')
@section('title', 'GameApp - Catalogue')
@section('class', 'catalogue')

@section('content')

    <header>
        <a href="/" class="btn-back">
            <img src="images/btn-back.svg" alt="Back">
        </a>
        <img src="images/logo-top.png" alt="logo" class="logo-top">
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>

    <nav class="nav">
        <!--<img src="../images/tittle-menu.svg" alt="Menu" class="tittle-menu">-->
        <menu>
            <a href="/register">
                <img src="../images/ico-register.png" alt=""> Register
            </a>
            <a href="/login">
                <img src="../images/ico-login.png" alt=""> Login
            </a>
            <a href="/catalogue">
                <img src="../images/ico-catalogue.svg" alt=""> Catalogue
            </a>
        </menu>
    </nav>

    <section class="scroll">
        <form action="" method="POST">
            @csrf
            <input type="text" id="fcat" list="lcat" placeholder="Filter" maxlength="18">
            <datalist id="lcat">
                <option value="All"></option>
                @foreach ($categories as $category)
                    <option value="{{ $category->name }}">
                @endforeach
            </datalist>
        </form>

        <div class="loader hidden"></div>

        <div id="content">
            @foreach ($categories as $category)
                @if (count($category->games) > 0)
                    <article>
                        <h2>
                            <img src="../images/ico-category.svg" alt="Category">
                            {{ $category->name }}
                        </h2>
                        <div class="slider owl-carousel owl-theme">
                            @foreach ($games as $game)
                                @if ($category->id == $game->category_id)
                                    <a href=" {{ url('catalogue/' . $game->id) }} ">
                                        <figure>
                                            <img src=" {{ asset('images/' . $game->image) }}" alt="" class="slide">
                                            <figcaption> {{ Str::words($game->tittle, 2, '...') }} </figcaption>
                                        </figure>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </article>
                @endif
            @endforeach
        </div>
    </section>

@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                center: false,
                loop: true,
                margin: -50,
                dots: false,
                nav: false,
                responsive: {
                    0: {
                        items: 2
                    }
                }
            })

            /*-------------------------------------------------------------
            -                       MENU HAMBURGUESA                      -
            --------------------------------------------------------------*/
            $('header').on('click', '.btn-burger', function() {
                $(this).toggleClass('active')
                $('.nav').toggleClass('active')
            })

            /*-------------------------------------------------------------
            -                           FILTRAR                           -
            --------------------------------------------------------------*/
            $('body').on('change', '#fcat', function(event) {
                event.preventDefault()
                $fcat = $(this).val()
                $tk = $('input[name="_token"]').val()
                $('.loader').removeClass('hidden')
                $('#content').hide()
                $sto = setTimeout(() => {
                    clearTimeout($sto)
                    $.post("gamesbycat", {
                            fcat: $fcat,
                            _token: $tk
                        },
                        function(data) {
                            $('.loader').removeClass('hidden')
                            $('#content').html(data).fadeIn('slow')
                            $('.owl-carousel').owlCarousel({
                                center: false,
                                loop: true,
                                margin: -50,
                                dots: false,
                                nav: false,
                                responsive: {
                                    0: {
                                        items: 2
                                    }
                                }
                            })
                        }
                    );
                }, 1500)
            })
        })
    </script>

@endsection
