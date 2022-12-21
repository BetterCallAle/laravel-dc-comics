@extends('layouts.app')

@section('title', $comic->title)

@section('content')
    <section class="py-5">
        <div class="container">
            <h2 class="mb-4">{{ $comic->title }}</h2>
            @if (!empty($comic->thumb))
                <img src="{{ $comic->thumb }}" alt="Copertina di {{ $comic->title }}">
            @else
                <img src="{{ Vite::asset('resources/img/no-image-found.jpg') }}" alt="No image found">
            @endif

            <dl class="mt-4">
                <dt>Titolo:</dt>
                <dl>{{ $comic->title }}</dl>
                <dt>Serie:</dt>
                <dl>{{ $comic->series }}</dl>
                <dt>Tipologia:</dt>
                <dl>{{ $comic->type }}</dl>
                <dt>Prezzo:</dt>
                <dl>{{ $comic->price }}</dl>
                <dt>Data di uscita:</dt>
                <dl>{{ $comic->sale_date }}</dl>
            </dl>

            <p>{{ $comic->description }}</p>
        </div>
    </section>
@endsection