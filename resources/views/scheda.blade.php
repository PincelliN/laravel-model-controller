@extends('layouts.main')

@section('content')
    <div class="text-center">

        <h4>{{ $film->title }}</h4>
        <h5>{{ $film->original_title }}</h5>
        <ul class="list-unstyled">
            <li>Anno: {{ $film->date }}</li>
            <li>Vote: {{ $film->vote }}</li>
            <li>Nazionalità: {{ $film->nationality }}</li>
        </ul>
    </div>
@endsection


@section('titlePage')
    Scheda
@endsection
