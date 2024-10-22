@extends('layouts.app')
@section('tittle', 'GameApp - Edit Game')
@section('class', 'editUser')

@section('content')
    <header>
        <a href="{{ url('games') }}" class="btn-back-2">
            <img src="{{ asset('images/btn-back.svg') }}" alt="Back">
        </a>
        <img src="{{ asset('../images/tittles/edit-tittle.png') }}" alt="">
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>
    </header>

    @include('menu')

    <section class="scroll">
        <form method="POST" action="{{ url('games/' . $game->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="border" style="background-image: url('images/border-photo.svg');">
                    <div class="mask"></div>
                    <input id="photo" name="image" type="file">
                    <input type="hidden" name="originphoto" value="{{ $game->image }}">
                </div>
            </div>

            <div>
                <h3>
                    <img src="{{ asset('../images/icon-email.svg') }}" alt="">
                    <label for="tittle">Tittle</label>
                </h3>
                <x-text-input id="tittle" class="block mt-1 w-full" type="text" name="tittle" :value="old('tittle', $game->tittle)"
                    required autofocus autocomplete="tittle" />
                <x-input-error :messages="$errors->get('tittle')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="{{ asset('../images/icon-user.svg') }}" alt="">
                    <x-input-label for="developer" :value="__('developer')" />
                </h3>
                <x-text-input id="developer" class="block mt-1 w-full" type="text" name="developer" :value="old('developer', $game->developer)"
                    required autofocus autocomplete="developer" />
                <x-input-error :messages="$errors->get('developer')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="{{ asset('../images/icon-user.svg') }}" alt="">
                    <x-input-label for="releasedate" :value="__('releasedate')" />
                </h3>
                <x-text-input id="releasedate" class="block mt-1 w-full" type="text" name="releasedate" :value="old('releasedate', $game->releasedate)"
                    required autofocus autocomplete="releasedate" />
                <x-input-error :messages="$errors->get('releasedate')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="{{ asset('../images/ico-date.svg') }}" alt="">
                    <x-input-label for="category_id" :value="__('category_id')" />
                </h3>
                <select name="category_id" value="{{ old('category_id') }}">
                    @foreach ($cats as $cat)
                        <option value="{{ $cat->id }}" @if (old('category_id') == $cat->id) selected @endif>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="{{ asset('../images/icon-phone.svg') }}" alt="">
                    <x-input-label for="price" :value="__('Price')" />
                </h3>
                <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price', $game->price)"
                    required autofocus autocomplete="price" />
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="{{ asset('../images/icon-phone.svg') }}" alt="">
                    <x-input-label for="genre" :value="__('genre')" />
                </h3>
                <x-text-input id="genre" class="block mt-1 w-full" type="text" name="genre" :value="old('genre')"
                    required autofocus autocomplete="genre" />
                <x-input-error :messages="$errors->get('genre')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="{{ asset('../images/icon-email.svg') }}" alt="">
                    <x-input-label for="slider" :value="__('slider')" />
                </h3>
                <select name="slider">
                    <option value="">Select...</option>
                    <option value="0" @if (old('slider') == 1) selected @endif> <h3> Inactive </h3></option>
                    <option value="1" @if (old('slider') == 0) selected @endif> <h3> Active </h3></option>
                </select>
                <x-input-error :messages="$errors->get('slider')" class="mt-2" />
            </div>

            <div>
                <h3>
                    <img src="{{ asset('../images/icon-user.svg') }}" alt="">
                    <x-input-label for="description" :value="__('description')" />
                </h3>
                <textarea id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')"
                    required autofocus autocomplete="description"></textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2"/>
            </div>

            <button type="submit" class="btn-add">
                <img src="{{ asset('images/tittles/save.png') }}" alt="btn-register">
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
        /* $(document).ready(function() {
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
        }); */

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
