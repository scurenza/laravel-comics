@extends('layouts.app')

@section('content')
    <section class="section-comics">
        <h1 class="text-center my-5">I Nostri Fumetti</h1>

        <div class="container">
            <div class="row row-cols-3">
                @foreach ($comics as $comic)
                    <div class="col mb-3">
                        <div class="comic-card bg-light text-center">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <h3 class="my-2">{{ $comic['title'] }}</h3>
                            <p>{{ $comic['description'] }}</p>
                            <a class="price" href="">
                                <span>{{ $comic['price'] }}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
