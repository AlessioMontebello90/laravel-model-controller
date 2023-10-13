@foreach ($movies as $movie)
    <div class="col">
        <div class="card">
            <img src="{{ $movie->img }}" class="card-img-top" alt="...">
            <div class="hover text-center">
                <h2 class="mt-4">{{ $movie->original_title }}</h2>
                <div>
                    <h4>Language: {{ $movie->nationality }}</h4>
                    <h5>Vote: {{ $movie->vote }} </h5>
                </div>
            </div>
            <div class="card-body text-center">
                <h4 class="card-title">{{ $movie->title }}</h4>
                <p class="card-text d-none">{{ $movie->vote }}</p>
            </div>
        </div>
    </div>
@endforeach
