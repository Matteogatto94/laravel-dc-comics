@extends('layouts.app')

@section('content')
<div class="jumbotron"></div>
<div class="container">
    <button type="button" class="btn btn-primary btn-lg">CURRENT SERIES</button>

    <section class="comics py-5 ">
        <div class="container">
            <h2>I nostri fumetti:</h2>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @forelse($comics as $comic)
                <div class="col">
                    <div class="card">
                        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                        <div class="card-body">
                            <h6 class="fw-normal">{{$comic->title}}</h6>
                            <p>{{$comic->description}}</p>
                            <p>{{$comic->series}}</p>
                            <p>Prezzo: {{$comic->price}}</p>
                            <p>Uscito nel: {{$comic->sale_date}}</p>
                            <p>Tipo: {{$comic->type}}</p>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <p>Sorry no comics in this store yet.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

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