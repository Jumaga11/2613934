@extends('layouts.app')
@section('title', 'GameApp - Register')
@section('class', 'register')

@section('content')
    <header>
        <a href={{ url('/catalogue') }} class="btn-back">
            <img src="images/btn-back.svg" alt="Back">
        </a>
        <img src="images/tittle-register.png" alt="">
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>

    <nav class="nav">
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
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <div class="border" style="background-image: url('images/border-photo.svg');">
                    <div class="mask"></div>
                    <input id="photo" name="photo" type="file">
                </div>
            </div>

            <div>
                <h3>
                    <img src="../images/icon-email.svg" alt="">
                    <label for="document">Document:</label>
                </h3>
                <x-text-input id="document" class="block mt-1 w-full" type="text" name="document" :value="old('document')"
                    required autofocus autocomplete="document" />
                <x-input-error :messages="$errors->get('document')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="../images/icon-user.svg" alt="">
                    <x-input-label for="fullname" :value="__('FullName')" />
                </h3>
                <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')"
                    required autofocus autocomplete="fullname" />
                <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="../images/icon-user.svg" alt="">
                    <x-input-label for="gender" :value="__('Gender')" />
                </h3>
                <x-text-input id="gender" class="block mt-1 w-full" type="text" name="gender" :value="old('gender')"
                    required autofocus autocomplete="gender" />
                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="../images/ico-date.svg" alt="">
                    <x-input-label for="birthdate" :value="__('Birthdate')" />
                </h3>
                <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')"
                    required autofocus autocomplete="birthdate" />
                <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="../images/icon-phone.svg" alt="">
                    <x-input-label for="phone" :value="__('Phone')" />
                </h3>
                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"
                    required autofocus autocomplete="phone" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="../images/icon-user.svg" alt="">
                    <x-input-label for="role" :value="__('Role')" />
                </h3>
                <x-text-input id="role" class="block mt-1 w-full" type="text" name="role" :value="old('role')"
                    required autofocus autocomplete="role" />
                <x-input-error :messages="$errors->get('role')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="../images/icon-email.svg" alt="">
                    <x-input-label for="email" :value="__('Email')" />
                </h3>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="images/icon-password.svg" alt="">
                    <x-input-label for="password" :value="__('Password')" />
                </h3>
                <div class="password-field">
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <img class="ico-eye" src="../images/view-open.svg" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>

            <div>
                <h3>
                    <img src="images/icon-password.svg" alt="">
                    <x-input-label for="confirm_password" :value="__('Confirm Password')" />
                </h3>
                <div class="password-field">
                    <x-text-input id="confirm_password" class="block mt-1 w-full" type="password"  name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>

            <button type="submit" class="btn-register">
                <img src="images/register.png" alt="btn-register">
            </button>
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

        //CAMBIO DE COLOR DEL BOTON DE VIEW-EYE EN EL INPUT DE PASSWORD
        $(document).ready(function() {
            // Cambia el icono del ojo cuando el campo de entrada de la contraseña está enfocado
            $('.password-field input').focus(function() {
                $('.ico-eye').attr('src', 'images/view-open2.svg');
            });

            // Cambia el icono del ojo cuando el campo de entrada de la contraseña pierde el foco
            $('.password-field input').blur(function() {
                $('.ico-eye').attr('src', 'images/view-open.svg');
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

        //CAMBIO DE FOTO DE PERFIL
        $(document).ready(function() {
            $('#photo').change(function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    // Establece la imagen de la clase "mask" como el fondo de la imagen de la clase "border"
                    $('.border').css('background-image', 'url(' + e.target.result + ')');
                    $('.border').css('background-size', 'cover');
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>

@endsection
