@extends('layouts.app')
@section('title', 'GameApp - My Profile')
@section('class', 'myProfile')

@section('content')

<header>
    <a href="/dashboard" class="btn-back">
        <img src="../images/btn-back.svg" alt="Back">
    </a>
    <img src="../images/tittles/myProfile.png" alt="logo" class="logo-top">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top"
            d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom"
            d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>

    <section>

    </section>

@endsection

@section('js')
<script>
    //------------------------MENU HAMBURGUESA
    $('header').on('click', '.btn-burger', function () {
        $(this).toggleClass('active')
        $('.nav').toggleClass('active')
    })
</script>
@endsection
