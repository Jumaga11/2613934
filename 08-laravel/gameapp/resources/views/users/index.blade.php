@extends('layouts.app')
@section('tittle', 'GameApp - Users Module')
@section('class', 'users')

@section('content')
    <header>
        <a href="../dashboard.html" class="btn-back">
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

    <nav class="nav">
        <figure class="avatar">
            <img class="mask" src="../images/Profile-pictures/Jeremy Springfield.jpg" alt="Photo">
            <img class="border" src="../images/border-menu.png" alt="border">
        </figure>
        <h3>Jeremy Springfield</h3>
        <h4>Admin</h4>
        <menu>
            <a href="../myProfile.html">
                <img src="../images/ico-profile.svg" alt=""> Profile
            </a>
            <a href="../dashboard.html">
                <img src="../images/ico-dashboard.svg" alt=""> Dashboard
            </a>
            <a href="../index.html">
                <img src="../images/ico-logout.svg" alt=""> LogOut
            </a>
        </menu>
    </nav>

    <section class="scroll">
        <div class="area">
            <a class="add" href="addUser.html">
                <img src="{{asset('images/tittles/+ add.png')}}" alt="Add">
            </a>

            @foreach ($users as $user)
                <article class="record">
                    <figure class="avatar">
                        <img class="mask" src="{{ $user->photo }}" alt="Photo">
                        <img class="border" src="{{asset('../images/border-mask-card.png')}}" alt="border">
                    </figure>
                    <aside>
                        <h3>{{$user->fullname}}</h3>
                        <h4>{{$user->role}}</h4>
                    </aside>
                    <figure class="actions">
                        <a href="showUser.html">
                            <img src="../images/ico-view.svg" alt="viewUser">
                        </a>
                        <a href="editUser.html">
                            <img src="../images/ico-edit.svg" alt="viewUser">
                        </a>
                        <a href="#">
                            <img src="../images/ico-delete.svg" alt="viewUser">
                        </a>
                    </figure>
                </article>
            @endforeach
        </div>
    </section>
@endsection
