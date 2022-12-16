@extends('layouts.app')

@section('content')
    <div class="section-home">
        <div class="banner">
            {{-- <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt=""> --}}
        </div>
        <h1 class="my-3 text-center">La nostra home</h1>
        <div class="container">
            <div class="row row-cols-6 bg-dark">
                @foreach ($comics as $comic)
                    <div class="col mb-3">
                        <div class="comic-carda">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <p class="my-2 text-light">{{ $comic['title'] }}</p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
