@extends('layouts.app')
@section('title', 'GameApp - Welcome')
@section('class', 'welcome')

@section('content')
<header>
    <img src="images/logo.png" alt="logo">
</header>
<section class="slider owl-carousel owl-theme">
    <img class="img-valhalla" src="{{ asset ('images/slide.png')}}" alt="slide01">
    <img class="img-valhalla" src="{{ asset ('images/slide.png')}}" alt="slide01">
    <img class="img-valhalla" src="{{ asset ('images/slide.png')}}" alt="slide01">
</section>
<footer>
    <a href="{{asset('catalogue')}}" class="btn btn-explore">
        <img class="explore" src="images/content-btn-welcome.svg" alt="Explore">
    </a>
</footer>
@endsection

@section('js')
<script>
    $(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        autoplay: false,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1
            }
        }
    })
})
</script>
@endsection

