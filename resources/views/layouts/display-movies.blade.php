@foreach($movies as $movie)
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 d-flex">
    <div class="card text-white bg-dark flex-fill elevation-4">
        <a href="{{ route('movies.show', $movie->slug)}}" class="img-container">
            <img class="img-fluid"  style="height: 370px; width: 100%" src="{{ $movie->getFirstMediaUrl('poster') }}">
          <div class="top-right yellow"><span>{{ $movie->rating }} <i class="fas fa-star"></i> </span></div>
            <div class="top-left yellow rounded"><span>{{ $movie->release_date }}</span></div>
            <div class="bottom-left">
                    @foreach($movie->genres as $genre)
            <a href="{{ route('showGenreBySlug', $genre->slug)}}" class="badge badge-success">{{ $genre->name }}</a>        @endforeach
    </div>
    </a>
</div>
</div>
@endforeach
<div class="container mt-3 d-flex justify-content-center">
    {{ $movies->links() }}
</div>

