@extends('layouts.main')
@section('page-content')
    <div class="container d-flex">
        <div class="col-left">
            <h1>{{$comic->series}}</h1>
            <h3>{{$comic->title}}</h3>
            <div>Data di Uscita: {{$comic->sale_date}}</div>
            <div>Tipo: {{$comic->type}}</div>
            <h4>Descrizione:</h4>
            <p>{{$comic->description}}</p>
            <a href="{{route('comics.index')}}">Torna alla homepage</a>
        </div>
        <div class="col-right p-4">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        </div>
    </div>
@endsection