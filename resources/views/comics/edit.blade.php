@extends('layouts.app')

@section('title', "Modifica $comic->title" )

@section('content')
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Aggiugni un nuovo fumetto</h2>
            {{-- Form --}}
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @method('PUT')
                @csrf

                <div class="mb-4">
                    <label for="title" class="form-label">Titolo:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}"">
                </div>

                
                <div class="mb-4">
                    <label for="thumb" class="form-label">Immagine:</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                </div>
                
                <div class="mb-4">
                    <label for="price" class="form-label">Prezzo:</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                </div>
                
                <div class="mb-4">
                    <label for="series" class="form-label">Serie:</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                </div>
                
                <div class="mb-4">
                    <label for="sale_date" class="form-label">Data di uscita:</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
                </div>
                
                <div class="mb-4">
                    <label for="type" class="form-label">Tipo:</label>
                    <select id="type" class="form-control" name="type">
                        <option value="">Seleziona un elemento</option>
                        <option value="comic book" @selected($comic->type === "comic book")>Comic Book</option>
                        <option value="graphic novel" @selected($comic->type === "graphic novel")>Graphic Novel</option>
                    </select>
                </div>
                
                <div class="mb-4">
                    <label for="description" class="form-label">Descrizione:</label>
                    <textarea name="description" id="description" class="form-control">{{ $comic->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Aggiorna</button>
                <button type="reset" class="btn btn-secondary">Resetta</button>
            </form>
            {{-- Form --}}
        </div>
    </section>
@endsection