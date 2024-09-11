{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <h2>Film ordinati per data</h2>
    <div class="container d-flex flex-wrap">

        @foreach ($movies_vote as $movie_vote)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie_vote->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie_vote->title }}</h6>
                    <p class="card-text">{{ $movie_vote->date }}</p>
                    <p class="card-text">{{ $movie_vote->vote }}</p>
                    <a href="{{ route('scheda', ['id' => $movie_vote->id]) }}" class="card-link btn btn-warning">Vai</a>
                </div>
            </div>
        @endforeach


    </div>
@endsection


@section('titlePage')
    Film
@endsection
