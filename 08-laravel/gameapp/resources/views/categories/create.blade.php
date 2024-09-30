@extends('layouts.app')
@section('tittle', 'GameApp - Register')
@section('class', 'editUser')

@section('content')
        <header>
            <a href="{{ url('categories') }}" class="btn-back-2">
                <img src="{{ asset('images/btn-back.svg')}}" alt="Back">
            </a>
            <img src="{{ asset('images/tittles/add-tittle.png')}}" alt="">
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
                <img class="mask" src="{{ asset('images/Profile-pictures/Jeremy Springfield.jpg')}}" alt="Photo">
                <img class="border" src="{{ asset('images/border-menu.png')}}" alt="border">
            </figure>
            <h3>{{ Auth::user()->fullname }}</h3>
            <h4>{{ Auth::user()->role }}</h4>
            <menu>
                <a href="{{ url('myProfile') }}">
                    <img src="{{ asset('images/ico-profile.svg')}}" alt=""> Profile
                </a>
                <a href="{{ url('dashboard') }}">
                    <img src="{{ asset('images/ico-dashboard.svg')}}" alt=""> Dashboard
                </a>
                <a href="{{ url('welcome') }}">
                    <img src="{{ asset('images/ico-logout.svg')}}" alt=""> LogOut
                </a>
            </menu>
        </nav>

        <section class="scroll">
            <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
            @csrf
            @if ( count( $errors->all()) > 0 )
                @foreach ( $errors->all() as $message )
                    <li> {{ $message }} </li>
                @endforeach
            @endif
                <!-- <div class="form-group">
                    <div class="border" style="background-image: url('images/border-photo.svg');">
                        <div class="mask"></div>
                        <input id="photo" type="file">
                    </div>
                </div> -->
        <div class="form-group">
            <img id="upload" class="mask" src="{{ asset('images/bg-upload-photo.svg') }}" height="160px" alt="Photo">
            <img class="border" src="{{ asset('images/shape-border-photo.svg') }}" alt="Border">
            <input id="photo" type="file" name="image" accept="images/*">
        </div>
        <div class="form-group">
                <div class="border" style="background-image: url('images/border-photo.svg');">
                    <div class="mask"></div>
                    <input id="photo" name="photo" type="file">
                </div>
            </div>

            <div>
                <h3>
                    <img src="{{ asset('images/icon-email.svg') }}" alt="">
                    <x-input-label for="name" :value="__('CATEGORY')" />
                    <!-- <label for="name">CATEGORY:</label> -->
                </h3>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="PS4"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="{{ asset('images/icon-user.svg') }}" alt="">
                    <x-input-label for="manufacturer" :value="__('MANUFACTURER')" />
                </h3>
                <x-text-input id="manufacturer" class="block mt-1 w-full" type="text" name="manufacturer" placeholder="SONY"
                    required autofocus autocomplete="manufacturer" />
                <x-input-error :messages="$errors->get('manufacturer')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="{{ asset('images/icon-user.svg') }}" alt="">
                    <x-input-label for="releasedate" :value="__('RELEASEDATE')" />
                </h3>
                <x-text-input id="releasedate" class="block mt-1 w-full" type="text" name="releasedate" placeholder="2013-11-15"
                    required autofocus autocomplete="releasedate" />
                <x-input-error :messages="$errors->get('releasedate')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="{{ asset('images/icon-email.svg') }}" alt="Date">
                    <x-input-label for="description" :value="__('DESCRIPTION')" />
                </h3>
                <x-textarea id="description" class="block mt-1 w-full" name="description" placeholder="2013-11-15"
                    required autofocus autocomplete="description" />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>


                <button type="submit" class="btn-save">
                    <img src="../images/tittles/+ add.png" alt="btn-register">
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
            $('.ico-eye').attr('src','images/view-open2.svg');
        });

        // Cambia el icono del ojo cuando el campo de entrada de la contraseña pierde el foco
        $('.password-field input').blur(function() {
            $('.ico-eye').attr('src','images/view-open.svg');
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
