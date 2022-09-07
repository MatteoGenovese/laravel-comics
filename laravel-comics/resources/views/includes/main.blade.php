@extends('layouts.layout')

@section('title', 'home')

@section('main-content')

<main>

    <div class="jumbo-box">
        <img src=" {{ asset('./assets/images/jumbotron.jpg') }}" alt="non trovato"></img>
    </div>
    <div class="container">
        <div class="current">CURRENT SERIES</div>
    </div>
    <div class="main-content">
        <div class="container">
        <div id="cards">

            @forelse ($comics as $comic)
            
            <div class="pz_card">
                    <div class="img-container">
                        <img src="{{ $comic->image }}" alt="Default">
                    </div>
                    <div>{{ $comic->title  }}</div>
                    <div>{{ $comic->type }}</div>
                </div>
            
            @empty

            @endforelse
            </div>



        </div>
        <a class="blue-button">
            load more
        </a>

    </div>

</main>

@endsection