@extends('layouts.app')
@section('title', 'GameApp - Dashboard')
@section('class', 'dashboard')

@section('content')
    <header>
        <a href="javascript:;" class="btn-back">
            <img src="../images/btn-back.svg" alt="Back">
        </a>
        <img src="../images/tittle-dashboard.png" alt="logo" class="logo-top">
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>

    @include('menu')

    <section>
        <div class="tarjet">
            <div class="icon">
                <img src="images/ico-mod-users.png" alt="">
                <span class="count-rows">
                    {{ App\Models\User::count() }}
                </span>
            </div>
            <div class="text">
                <h3>Module USERS</h3>
            </div>
            <div class="btn">
                <a href="{{ url('users') }}">view</a>
            </div>
        </div>

        <div class="tarjet">
            <div class="icon">
                <img src="images/ico-mod-categories.png" alt="">
                <span class="count-rows">
                    {{ App\Models\Category::count() }}
                </span>
            </div>
            <div class="text">
                <h3>Module CATEGORIES</h3>
            </div>
            <div class="btn">
                <a href="{{ url('categories') }}">view</a>
            </div>
        </div>

        <div class="tarjet">
            <div class="icon">
                <img src="images/ico-mod-games.png" alt="">
                <span class="count-rows">
                    {{ App\Models\Game::count() }}
                </span>
            </div>
            <div class="text">
                <h3>Module GAMES</h3>
            </div>
            <div class="btn">
                <a href="{{ url('games') }}">view</a>
            </div>
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
