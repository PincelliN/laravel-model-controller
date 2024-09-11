{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
    {{--  @dump($titles); --}}
    @dump($movies)
    <div class="container my-5">
        <h1>Lista film</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Origina_title</th>
                    <th scope="col">date</th>
                    <th scope="col">vote</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $movie->id }}</td>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->original_title }}</td>
                        <td>{{ $movie->date }}</td>
                        <td>{{ $movie->vote }}</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection


@section('titlePage')
    home
@endsection
