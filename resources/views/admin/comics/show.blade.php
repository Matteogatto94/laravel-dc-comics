@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card py-5 align-items-center">
        <img class="w-25 text-center" src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <div class="card-body text-center">
            <h6 class="fw-normal">{{$comic->title}}</h6>
            <p>{{$comic->description}}</p>
            <p>{{$comic->series}}</p>
            <p>Prezzo: {{$comic->price}}</p>
            <p>Uscito nel: {{$comic->sale_date}}</p>
            <p>Tipo: {{$comic->type}}</p>
        </div>
    </div>
</div>
@endsection