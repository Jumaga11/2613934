@extends('layouts.app')
@section('tittle', 'GameApp - Register')
@section('class', 'editUser')

@section('content')
    <header>
        <a href="{{ url('categories') }}" class="btn-back-2">
            <img src="{{ asset('images/btn-back.svg') }}" alt="Back">
        </a>
        <img src="{{ asset('../images/tittles/add-tittle.png') }}" alt="">
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
        <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
                <div class="border" style="background-image: url('images/border-photo.svg');">
                    <div class="mask"></div>
                    <input id="photo" name="image" type="file">
                </div>
            </div>

            <div>
                <h3>
                    <img src="{{ asset('../images/icon-email.svg') }}" alt="">
                    <label for="name">Name:</label>
                </h3>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="{{ asset('../images/icon-user.svg') }}" alt="">
                    <x-input-label for="manufacturer" :value="__('Manufacturer')" />
                </h3>
                <x-text-input id="manufacturer" class="block mt-1 w-full" type="text" name="manufacturer"
                    :value="old('manufacturer')" required autofocus autocomplete="manufacturer" />
                <x-input-error :messages="$errors->get('manufacturer')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="{{ asset('../images/icon-user.svg') }}" alt="">
                    <x-input-label for="Releasedate" :value="__('')" />
                </h3>
                <x-text-input id="releasedate" class="block mt-1 w-full" type="text" name="releasedate" :value="old('releasedate')"
                    required autofocus autocomplete="releasedate" />
                <x-input-error :messages="$errors->get('releasedate')" class="mt-2" />
            </div>

            {{--  <div>
                <h3>
                    <img src="{{ asset('../images/ico-date.svg') }}" alt="">
                    <x-input-label for="birthdate" :value="__('Birthdate')" />
                </h3>
                <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')"
                    required autofocus autocomplete="birthdate" />
                <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
            </div> --}}

            <div>
                <h3>
                    <img src="{{ asset('../images/icon-phone.svg') }}" alt="">
                    <x-input-label for="phone" :value="__('Phone')" />
                </h3>
                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"
                    required autofocus autocomplete="phone" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            {{-- <div>
            <h3>
                <img src="{{ asset('../images/icon-user.svg')}}" alt="">
                <x-input-label for="role" :value="__('Role')" />
            </h3>
            <x-text-input id="role" class="block mt-1 w-full" type="text" name="role" :value="old('role')"
                required autofocus autocomplete="role" />
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div> --}}

            <div>
                <h3>
                    <img src="{{ asset('../images/icon-email.svg') }}" alt="">
                    <x-input-label for="email" :value="__('Email')" />
                </h3>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="{{ asset('images/icon-password.svg') }}" alt="">
                    <x-input-label for="password" :value="__('Password')" />
                </h3>
                <div class="password-field">
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                    <img class="ico-eye" src="{{ asset('images/view-open.svg') }}" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>

            <div>
                <h3>
                    <img src="{{ asset('images/icon-password.svg') }}" alt="">
                    <x-input-label for="confirm_password" :value="__('Confirm Password')" />
                </h3>
                <div class="password-field">
                    <x-text-input id="confirm_password" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>

            <button type="submit" class="btn-add">
                <img src="{{ asset('images/tittles/add.png') }}" alt="btn-register">
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