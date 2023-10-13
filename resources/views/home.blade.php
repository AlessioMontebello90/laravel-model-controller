@extends('layout.public')
@section('title', 'Homepage')

@section('homeContent')
    <header>
        @include('partials.navbar')
    </header>

    <main>
        <div class="container">
            <div class="row row-cols-4 g-4 mt-2">
                @include('partials.cardContent')
            </div>
        </div>
    </main>
@endsection
