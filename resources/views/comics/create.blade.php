@extends('layouts.app')

@section('title', 'Aggiungi un fumetto')

@section('content')
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Aggiugni un nuovo fumetto</h2>
            {{-- Form --}}
            <form action="{{ route('comics.store') }}" method="POST">

                @csrf

                <div class="mb-4">
                    <label for="title" class="form-label">Titolo:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                
                <div class="mb-4">
                    <label for="thumb" class="form-label">Immagine:</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
                
                <div class="mb-4">
                    <label for="price" class="form-label">Prezzo:</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                
                <div class="mb-4">
                    <label for="series" class="form-label">Serie:</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                
                <div class="mb-4">
                    <label for="sale_date" class="form-label">Data di uscita:</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>
                
                <div class="mb-4">
                    <label for="type" class="form-label">Tipo:</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>
                
                <div class="mb-4">
                    <label for="description" class="form-label">Descrizione:</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Aggiungi</button>
                <button type="reset" class="btn btn-secondary">Resetta</button>
            </form>
            {{-- Form --}}
        </div>
    </section>    
@endsection