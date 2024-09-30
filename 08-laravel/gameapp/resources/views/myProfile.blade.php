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

<nav class="nav">
    <figure class="avatar">
        <img class="mask" src= "{{ asset('images').'/'.$user->photo }}" alt="Photo">
        <img class="border" src="images/border-menu.png" alt="border">
    </figure>
    <h3>{{ $user->fullname }}</h3>
    <h4>{{ $user->role }}</h4>
    <menu>
        <a href="myProfile">
            <img src="images/ico-profile.svg" alt=""> Profile
        </a>
        <a href="../dashboard">
            <img src="images/ico-dashboard.svg" alt=""> Dashboard
        </a>
        <a href="javascript:;" onclick="logout.submit();">
            <img src=" {{asset ('../images/ico-logout.svg') }}" alt=""> LogOut
        </a>
        <form action=" {{ route('logout')}}" id="logout" method="POST">@csrf</form>
    </menu>
</nav>

    <section>
        <figure class="avatar" >
            <img class="mask" src="{{ asset('images').'/'.$user->photo}}" alt="Photo">
            <img class="border" src="../images/border-menu.png" alt="border">
        </figure>
        <h2>{{$user->fullname}}</h2>

        <span class="email">
            <b>{{$user->email}}</b>
        </span>

        <span class="role">
            <img src="../images/ico-user-myProfile.svg" alt="role">
            <b>{{$user->role}}</b>
        </span>
        <div class="edit">
            <img src="../images/ico-edit-myProfile.png" alt="">
        </div>

        <div class="grid">
            <span class= "data data-id">
                <img src="../images/ico-user-myProfile2.svg" alt="">
                <b>{{$user->document}}</b>
            </span>
            <span class= "data data-addres">
                <img src="../images/ico-user-myProfile2.svg" alt="">
                <b>str 16A # 3-64</b>
            </span>
            <span class= "data data-phone-number">
                <img src="../images/ico-user-myProfile2.svg" alt="">
                <b>{{$user->phone}}</b>
            </span>
            <span class= "data data-birth-date">
                <img src="../images/ico-user-myProfile2.svg" alt="">
                <b>{{$user->birthdate}}</b>
            </span>
            <span class= "data data-gender">
                <img src="../images/ico-user-myProfile2.svg" alt="">
                <b>{{$user->gender}}</b>
            </span>
            <span class= "data data-status">
                <img src="images/ico-user-myProfile2.svg" alt="">
                <b>Active</b>
            </span>
        </div>
    </section>
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
