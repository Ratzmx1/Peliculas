@extends('layouts.app')

@section('content')
<div class="container">

    <p class="display-3 text-center mt-2 mb-4">Peliculas</p>

    <div class="row">

        @foreach($movies as $movie)
            <div class="col-3">
                <div class="card mb-5">
                    <img class="card-img-top" src="{{asset('storage/movies/'.$movie->image)}}"  />
                    <div class="card-body text-right ">
                        <h5><b>{{$movie->name}}</b></h5>
                        <p>{{$movie->description}} </p>
                        <h6> <b>${{$movie->price}}</b></h6>
                        <button class="btn btn-block btn-primary"> Agregar al carrito</button>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

</div>
@endsection
