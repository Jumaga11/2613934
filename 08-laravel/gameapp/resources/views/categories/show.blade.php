@extends('layouts.app')
@section('tittle', 'GameApp - Register')
@section('class', 'editUser')

@section('content')
    <header>
        <a href="{{ url('categories') }}" class="btn-back-2">
            <img src="{{ asset('images/btn-back.svg') }}" alt="Back">
        </a>
        <img src="{{ asset('../images/tittles/show-tittle.png') }}" alt="">
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>

    @auth
        <nav class="nav">
            <figure class="avatar">
                <img class="mask" src= "{{ asset('images') . '/' . Auth::user()->photo }}" alt="Photo">
                <img class="border" src= "{{ asset('images/border-menu.png') }}" alt="border">
            </figure>
            <h3>{{ Auth::user()->fullname }}</h3>
            <h4>{{ Auth::user()->role }}</h4>
            <menu>
                <a href="myProfile">
                    <img src="images/ico-profile.svg" alt=""> Profile
                </a>
                <a href="../dashboard">
                    <img src="images/ico-dashboard.svg" alt=""> Dashboard
                </a>
                <a href="javascript:;" onclick="logout.submit();">
                    <img src=" {{ asset('../images/ico-logout.svg') }}" alt=""> LogOut
                </a>
                <form action=" {{ route('logout') }}" id="logout" method="POST">@csrf</form>
            </menu>
        </nav>
    @endauth

    <section class="scroll">
        <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
                <div class="border" style="background-image: url('images/border-photo.svg');">
                    <div class="mask">
                        
                    </div>
                    <input id="photo" name="image" type="file">
                </div>
            </div>

            <div>
                <h3>
                    <img src="{{ asset('../images/icon-email.svg') }}" alt="">
                    <label for="name">Name:</label>
                </h3>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                    value="{{ $category->name }}" autofocus autocomplete="name" readonly />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="{{ asset('../images/icon-user.svg') }}" alt="">
                    <x-input-label for="manufacturer" :value="__('Manufacturer')" />
                </h3>
                <x-text-input id="manufacturer" class="block mt-1 w-full" type="text" name="manufacturer"
                    value="{{ $category->manufacturer }}" autofocus autocomplete="manufacturer" readonly />
                <x-input-error :messages="$errors->get('manufacturer')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="{{ asset('../images/icon-user.svg') }}" alt="">
                    <x-input-label for="releasedate" :value="__('Releasedate')" />
                </h3>
                <x-text-input id="releasedate" class="block mt-1 w-full" type="text" name="releasedate"
                    value="{{ $category->releasedate }}" autofocus autocomplete="releasedate" readonly />
                <x-input-error :messages="$errors->get('releasedate')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="{{ asset('../images/icon-user.svg') }}" alt="">
                    <x-input-label for="description" :value="__('Description')" />
                </h3>
                <textarea id="description" class="block mt-1 w-full" type="text" name="description" autofocus
                    autocomplete="description" readonly>
                            {{ $category->description }} </textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
        </form>
    </section>
@endsection

@section('js')
    <script>
        //MENU HAMBURGUESA
        $('header').on('click', '.btn-burger', function() {
            $(this).toggleClass('active')
            $('.nav').toggleClass('active')
        });

        //FUNCIONALIDAD BLUR EN EL NAVEGADOR PARA EL INPUT
        $(document).ready(function() {
            $('input').on('focus', function() {
                $(this).css('color', 'var(--cl-seventh)');
            });
            $('input').on('blur', function() {
                $(this).css('color', 'var(--cl-primary)');
            });
        });

        //CAMBIO DE FOTO DE PERFIL
    </script>
@endsection
