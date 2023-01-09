@extends('layouts.app')

@section('title', "Modifica $comic->title" )

@section('content')
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Aggiugni un nuovo fumetto</h2>

            @if ($errors->any())                
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- Form --}}
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @method('PUT')
                @csrf

                <div class="mb-4">
                    <label for="title" class="form-label">Titolo:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}"">
                </div>

                
                <div class="mb-4">
                    <label for="thumb" class="form-label">Immagine:</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                </div>
                
                <div class="mb-4">
                    <label for="price" class="form-label">Prezzo:</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $comic->price) }}">
                </div>
                
                <div class="mb-4">
                    <label for="series" class="form-label">Serie:</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ old('series', $comic->series) }}">
                </div>
                
                <div class="mb-4">
                    <label for="sale_date" class="form-label">Data di uscita:</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                </div>
                
                <div class="mb-4">
                    <label for="type" class="form-label">Tipo:</label>
                    <select id="type" class="form-control" name="type">
                        <option value="">Seleziona un elemento</option>
                        <option value="comic book" @selected(old('type', $comic->type) === "comic book")>Comic Book</option>
                        <option value="graphic novel" @selected(old('type', $comic->type) === "graphic novel")>Graphic Novel</option>
                    </select>
                </div>
                
                <div class="mb-4">
                    <label for="description" class="form-label">Descrizione:</label>
                    <textarea name="description" id="description" class="form-control">{{ old('description', $comic->description) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Aggiorna</button>
                <button type="reset" class="btn btn-secondary">Resetta</button>
            </form>
            {{-- Form --}}
        </div>
    </section>
@endsection