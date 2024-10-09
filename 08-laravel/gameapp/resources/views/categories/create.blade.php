@extends('layouts.app')
@section('tittle', 'GameApp - Show Category')
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

    @include('menu')

    <section class="scroll">
        <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">

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
                    <x-input-label for="releasedate" :value="__('Releasedate')" />
                </h3>
                <x-text-input id="releasedate" class="block mt-1 w-full" type="text" name="releasedate" :value="old('releasedate')"
                    required autofocus autocomplete="releasedate" />
                <x-input-error :messages="$errors->get('releasedate')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="{{ asset('../images/icon-user.svg') }}" alt="">
                    <x-input-label for="description" :value="__('Description')" />
                </h3>
                <textarea id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')"
                    required autofocus autocomplete="description"></textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2"/>
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
