@extends('layouts.app')

@section('title', 'Tutti i fumetti')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="section-heading mb-4">
                <h2 class="text-center">Tutti i fumetti</h2>
            </div>

            <div class="table-section">
                <div class="text-end mb-4">
                    <a href="{{ route('comics.create') }}" class="btn btn-primary text-end"><i class="fa-solid fa-plus"></i></a>
                </div>

                @include('partials.comics-table')
                
            </div>
        </div>
    </section>
@endsection