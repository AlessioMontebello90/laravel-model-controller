@foreach ($movies as $movie)
    <div class="col">
        <div class="card">
            <img src="{{ $movie->img }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h4 class="card-title">{{ $movie->title }}</h4>
                <p class="card-text d-none">{{ $movie->vote }}</p>
            </div>
        </div>
    </div>
@endforeach
