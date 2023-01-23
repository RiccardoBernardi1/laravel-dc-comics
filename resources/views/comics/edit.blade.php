@extends('layouts.main')
@section('page-content')
    <div class="container">
        <h1 class="text-center py-5">Modifica:</h1>
        <form action="{{route('comics.update',$comic->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="type" class="form-label">Modifica il tipo</label>
                <select name="type" id="type" required> 
                    <option value="comic book" {{old('type',$comic->type) =="comic book" ? "selected" : null}}>Comic Book</option>
                    <option value="graphic novel" {{old('type',$comic->type) =="graphic novel" ? "selected" : null}}>Graphic Novel</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Modifica il titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title',$comic->title)}}" required>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Modifica la serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{old('series',$comic->series)}}" required>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Modifica il link alla copertina</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb',$comic->thumb)}}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Modifica il prezzo (€)</label>
                <input type="number" class="form-control" id="price" name="price" value="{{old('price',$comic->price)}}" required>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Modifica la data di uscita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date',$comic->sale_date)}}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Modifica la descrizione</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{old('description',$comic->description)}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>
        </form>
        <a href="{{route('comics.index')}}">Torna alla homepage</a>
    </div>
@endsection