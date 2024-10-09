@extends('layouts.app')
@section('title', 'GameApp - Login')
@section('class', 'login')

@section('content')

    <header>
        <a href="javascript:;" class="btn-back">
            <img src="../images/btn-back.svg" alt="Back">
        </a>
        <img src="../images/login-tittle.png" alt="logo" class="logo-top">
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>

    @include('menu')


    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <section>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <h3>
                    <img src="../images/icon-email.svg" alt="">
                    <label for="email">Email:</label>
                </h3>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4 form-group">
                <h3>
                    <img src="../images/icon-password.svg" alt="">
                    <label for="password">Password:</label>
                </h3>

                <div class="password-field">
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                        <img class="ico-eye" src="../images/view-open.svg" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>

            <div class="flex items-center justify-end mt-4 form-group">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ms-3">
                    <img src="../images/btn-login.png" alt="login">
                </x-primary-button>
            </div>
        </form>
    </section>
@endsection

@section('js')
    <script>
        // MENU HAMBURGUESA
        $('header').on('click', '.btn-burger', function() {
            $(this).toggleClass('active')
            $('.nav').toggleClass('active')
        })
        // FUNCIONALIDAD BLUR EN EL NAVEGADOR PARA EL INPUT
        $(document).ready(function() {
            $('input').on('focus', function() {
                $(this).css('color', 'var(--cl-seventh)');
            });
            $('input').on('blur', function() {
                $(this).css('color', 'var(--cl-primary)');
            });
        });
        // CAMBIO DE COLOR DEL BOTON DE VIEW-EYE EN EL INPUT DE PASSWORD
        $(document).ready(function() {
            // Cambia el icono del ojo cuando el campo de entrada de la contraseña está enfocado
            $('.password-field input').focus(function() {
                $('.ico-eye').attr('src', '../images/view-open2.svg');
            });

            // Cambia el icono del ojo cuando el campo de entrada de la contraseña pierde el foco
            $('.password-field input').blur(function() {
                $('.ico-eye').attr('src', '../images/view-open.svg');
            });

            // Cambia el tipo de entrada del campo de contraseña cuando se hace clic en el icono del ojo
            $('.ico-eye').click(function() {
                var inputType = $('.password-field input').attr('type');

                if (inputType == 'password') {
                    $('.password-field input').attr('type', 'text');
                } else {
                    $('.password-field input').attr('type', 'password');
                }
            });
        });
    </script>
@endsection
