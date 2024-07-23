@extends('layouts.app')
@section('title', 'GameApp - Catalogue')
@section('class', 'catalogue')

@section('content')

<header>
    <a href="/" class="btn-back">
        <img src="images/btn-back.svg" alt="Back">
    </a>
    <img src="images/logo-top.png" alt="logo" class="logo-top">
    <svg class="btn-burger" viewBox="0 0 100 100" width="80">
        <path class="line top"
            d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
        <path class="line middle" d="m 70,50 h -40" />
        <path class="line bottom"
            d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
    </svg>
</header>

<nav class="nav">
    <!--<img src="../images/tittle-menu.svg" alt="Menu" class="tittle-menu">-->
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
    <form action="" method="POST">
        <input type="text" placeholder="Filter" maxlength="18">
    </form>
    <article>
        <h2>
            <img src="../images/ico-category.svg" alt="Category">
            Play Station 5
        </h2>
        <div class="slider owl-carousel owl-theme">
            <a href="view-game.html">
                <figure>
                    <img src="../images/slide-c1-01.png" alt="" class="slide">
                    <figcaption>God of war</figcaption>
                </figure>
            </a>
            <a href="view-game.html">
                <figure>
                    <img src="../images/slide-c1-02.png" alt="" class="slide">
                    <figcaption>Crash bandicoot</figcaption>
                </figure>
            </a>
            <a href="view-game.html">
                <figure>
                    <img src="../images/slide-c1-03.png" alt="" class="slide">
                    <figcaption>Red Redemption</figcaption>
                </figure>
            </a>
        </div>
    </article>
    <article>
        <h2>
            <img src="../images/ico-category.svg" alt="Category">
            Play Station 4
        </h2>
        <div class="owl-carousel owl-theme">
            <a href="view-game.html">
                <figure>
                    <img src="../images/slide-c02-01.png" alt="" class="slide">
                    <figcaption>Forza Horizon 4</figcaption>
                </figure>
            </a>
            <a href="view-game.html">
                <figure>
                    <img src="../images/slide-c02-02.png" alt="" class="slide">
                    <figcaption>Resident Evil 4</figcaption>
                </figure>
            </a>
            <a href="view-game.html">
                <figure>
                    <img src="../images/slide-c02-03.png" alt="" class="slide">
                    <figcaption>Valhalla</figcaption>
                </figure>
            </a>
        </div>
    </article>
    <article>
        <h2>
            <img src="../images/ico-category.svg" alt="Category">
            Xbox Series X
        </h2>
        <div class="owl-carousel owl-theme">
            <a href="view-game.html">
                <figure>
                    <img src="../images/slide-c03-c01.png" alt="" class="slide">
                    <figcaption>Ghost Recon</figcaption>
                </figure>
            </a>
            <a href="view-game.html">
                <figure>
                    <img src="../images/slide-c03-c02.png" alt="" class="slide">
                    <figcaption>Watch Dogs 2</figcaption>
                </figure>
            </a>
            <a href="view-game.html">
                <figure>
                    <img src="../images/slide-c03-c03.png" alt="" class="slide">
                    <figcaption>Mortal Kombat II</figcaption>
                </figure>
            </a>

        </div>
    </article>
    <article>
        <h2>
            <img src="../images/ico-category.svg" alt="Category">
            Play Station 5
        </h2>
        <div class="owl-carousel owl-theme">
            <a href="view-game.html">
                <figure>
                    <img src="../images/slide-c1-01.png" alt="" class="slide">
                    <figcaption>God of war</figcaption>
                </figure>
            </a>
            <a href="view-game.html">
                <figure>
                    <img src="../images/slide-c1-02.png" alt="" class="slide">
                    <figcaption>Crash bandicoot</figcaption>
                </figure>
            </a>
            <a href="view-game.html">
                <figure>
                    <img src="../images/slide-c1-03.png" alt="" class="slide">
                    <figcaption>Red Redemption</figcaption>
                </figure>
            </a>
        </div>
    </article>
    <article>
        <h2>
            <img src="../images/ico-category.svg" alt="Category">
            Play Station 4
        </h2>
        <div class="owl-carousel owl-theme">
            <a href="view-game.html">
                <figure>
                    <img src="../images/slide-c02-01.png" alt="" class="slide">
                    <figcaption>Forza Horizon 4</figcaption>
                </figure>
            </a>
            <a href="view-game.html">
                <figure>
                    <img src="../images/slide-c02-02.png" alt="" class="slide">
                    <figcaption>Resident Evil 4</figcaption>
                </figure>
            </a>
            <a href="view-game.html">
                <figure>
                    <img src="../images/slide-c02-03.png" alt="" class="slide">
                    <figcaption>Valhalla</figcaption>
                </figure>
            </a>
        </div>
    </article>
    <article>
        <h2>
            <img src="../images/ico-category.svg" alt="Category">
            Xbox Series X
        </h2>
        <div class="owl-carousel owl-theme">
            <a href="view-game.html">
                <figure>
                    <img src="../images/slide-c03-c01.png" alt="" class="slide">
                    <figcaption>Ghost Recon</figcaption>
                </figure>
            </a>
            <a href="view-game.html">
                <figure>
                    <img src="../images/slide-c03-c02.png" alt="" class="slide">
                    <figcaption>Watch Dogs 2</figcaption>
                </figure>
            </a>
            <a href="view-game.html">
                <figure>
                    <img src="../images/slide-c03-c03.png" alt="" class="slide">
                    <figcaption>Mortal Kombat II</figcaption>
                </figure>
            </a>

        </div>
    </article>
</section>

@endsection
@section('js')
<script>
    $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                center: false,
                loop: true,
                margin: -50,
                dots: false,
                nav: false,
                responsive: {
                    0: {
                        items: 2
                    }
                }
            })

        /*-------------------------------------------------------------
        -                       MENU HAMBURGUESA                      -
        --------------------------------------------------------------*/
        $('header').on('click', '.btn-burger', function () {
                $(this).toggleClass('active')
                $('.nav').toggleClass('active')
            })
        })
</script>

@endsection


