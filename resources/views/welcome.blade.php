@extends('layouts.app')

@section('content')
<div class="jumbotron"></div>
<div class="container">
    <a class="btn btn-primary btn-lg">CURRENT SERIES</a>

    <div class="content text-center">
        <h3>Consulta la nostra vastissima scelta di fumetti!</h3>
        <a href="{{route('comics.index')}}" class="btn btn-primary">Clicca Qui</a>
    </div>

</div>

<section class="banner_list bg-primary">
    <div class="container text-white py-3">
        <div class="row">
            <div class="col">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                <span>DIGITAL COMICS</span>
            </div>

            <div class="col">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                <span>DC MERCHANDISE</span>
            </div>

            <div class="col">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                <span>SUBSCRIPTION</span>
            </div>

            <div class="col">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="" class="locator">
                <span>COMIC SHOP LOCATOR</span>
            </div>

            <div class="col">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                <span>DC POWER VISA</span>
            </div>
        </div>
    </div>
</section>
@endsection