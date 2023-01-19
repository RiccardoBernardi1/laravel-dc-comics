@extends('layouts.main')
@section('page-content')
    <div class="container">
        <h1 class="text-center py-5">Lista Fumetti</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data di Uscita</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{$comic['id']}}</th>
                        <td>{{$comic['title']}}</td>
                        <td>{{$comic['price']}}</td>
                        <td>{{$comic['series']}}</td>
                        <td>{{$comic['sale_date']}}</td>
                        <td>{{$comic['type']}}</td>
                        <td><a href="{{route('comics.show',$comic->id)}}" class="btn btn-primary">Maggiori Dettagli</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('comics.create')}}" class="btn btn-success">Aggiungi un nuovo fumetto</a>
    </div>
@endsection
