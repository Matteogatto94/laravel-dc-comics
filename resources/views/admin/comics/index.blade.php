@extends('layouts.app')

@section('content')
<div class="jumbotron"></div>
<div class="container">
    <button type="button" class="btn btn-primary btn-lg">CURRENT SERIES</button>

    <section class="comics py-5 ">
        <div class="container">
            <div class="heading d-flex justify-content-between">
                <h2>I nostri fumetti:</h2>
                <div>
                    <a href="{{route('comics.create')}}" class="btn btn-primary text-white">Add a new Comics</a>
                </div>
            </div>

            @if(session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>{{session('message')}}</strong>
            </div>
            @endif
            <div class="table-responsive-md">
                <table class="table table-striped
                table-hover	
                table-borderless
                table-primary
                align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Series</th>
                            <th>Sale Date</th>
                            <th>Genre</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @forelse($comics as $comic)
                        <tr class="table-primary">
                            <td scope="row">{{$comic->id}}</td>
                            <td>{{$comic->title}}</td>
                            <td>{{$comic->description}}</td>
                            <td><img src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                            <td>$ {{$comic->price}}</td>
                            <td>{{$comic->series}}</td>
                            <td>{{$comic->sale_date}}</td>
                            <td>{{$comic->type}}</td>
                            <td>
                                <a href="{{route('guest.comics.show', $comic->id)}}" class="view btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                    </svg>
                                </a>
                                <a href="{{route('comics.edit', $comic->id)}}" class="edit btn btn-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                    </svg>
                                </a>
                                <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr class="table-primary">
                            <td scope="row">Sorry no comics in this store yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
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