@extends('layouts.main')
@section('page-content')
    <div class="container">
        <h1 class="text-center py-5">Aggiungi un nuovo fumetto</h1>
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="type" class="form-label">Secegli il tipo</label>
                <select name="type" id="type" required> 
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Inserisci il titolo</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Inserisci la serie</label>
                <input type="text" class="form-control" id="series" name="series" required>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Inserisci il link alla copertina</label>
                <input type="text" class="form-control" id="thumb" name="thumb" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Inserisci il prezzo (€)</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Inserisci la data di uscita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Inserisci la descrizione</label>
                <textarea class="form-control" id="description" rows="3" name="description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Aggiungi</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>
        </form>
        <a href="{{route('comics.index')}}">Torna alla homepage</a>
    </div>
@endsection