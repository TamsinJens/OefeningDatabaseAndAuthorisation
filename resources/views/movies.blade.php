@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-responsive">
            <thead class="thead-dark">
            <tr>
                <th>Titel</th>
                <th>Jaar</th>
            </tr>
            </thead>
        <tbody>
    @foreach($movies as $movie)
        <tr>
            <td>{{$movie->titel}}</td>
            <td>{{$movie->jaar}}</td>
        </tr>
    @endforeach
        </tbody>
        </table>
    </div>
@endsection