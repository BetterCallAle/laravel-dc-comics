@extends('layouts.app')

@section('title', 'Tutti i fumetti')

@section('content')
    <section>
        <div class="container">
            <div class="section-heading">
                <h2>Tutti i fumetti</h2>
            </div>

            <div class="table-section">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Titolo</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Serie</th>
                        <th scope="col">Anno</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <th scope="row">{{ $comic->title }}</th>
                                <td>{{ $comic->price }}</td>
                                <td>{{ $comic->series }}</td>
                                <td>{{ $comic->sale_date }}</td>
                                <td>
                                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection