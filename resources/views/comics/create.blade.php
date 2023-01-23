@extends('layouts.main')
@section('page-content')
    <div class="container">
        <h1 class="text-center py-5">Aggiungi un nuovo fumetto</h1>
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="type" class="form-label">Secegli il tipo</label>
                <select name="type" id="type" class="@error('type') is-invalid @enderror" required> 
                    <option value="comic book" {{old('type')=='comic book' ? 'selected' : null}}>Comic Book</option>
                    <option value="graphic novel" {{old('type')=='graphic novel' ? 'selected' : null}}>Graphic Novel</option>
                </select>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Inserisci il titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}" required>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Inserisci la serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series')}}" required>
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Inserisci il link alla copertina</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}">
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Inserisci il prezzo (€)</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" step="0.01" id="price" name="price" value="{{old('price')}}" required>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Inserisci la data di uscita</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date')}}" required>
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Inserisci la descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3" name="description">{{old('description')}}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Aggiungi</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>
        </form>
        <a href="{{route('comics.index')}}">Torna alla homepage</a>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection