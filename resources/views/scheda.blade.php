@extends('layouts.main')

@section('content')
@endsection

<div class="tex-center">

    <h4>{{ $film->title }}</h4>
    <h5>{{ $film->original_title }}</h5>
    <ul>
        <li>{{ $film->date }}</li>
        <li>{{ $film->vote }}</li>
        <li>{{ $film->nationality }}</li>
    </ul>


</div>

@section('titlePage')
    Scheda
@endsection
