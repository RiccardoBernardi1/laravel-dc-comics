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
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
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
                        <td>
                            <a href="{{route('comics.show',$comic->id)}}" class="btn btn-primary">Info</a>
                        </td>
                        <td>
                            <a href="{{route('comics.edit',$comic->id)}}" class="btn btn-warning">Modifica</a>
                        </td>
                        <td>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal{{$comic->id}}">Elimina</button>
                        </td>
                    </tr>
                    <div class="modal fade" id="modal{{$comic->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Vuoi davvero eliminare {{$comic->title}}?
                                </div>
                                <div class="modal-footer">
                                    <form action="{{route('comics.destroy',$comic->id)}}"    method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                        <button type="submit" class="btn btn-primary">Conferma</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('comics.create')}}" class="btn btn-success ms-4">Aggiungi un nuovo fumetto</a>
    </div>
@endsection
