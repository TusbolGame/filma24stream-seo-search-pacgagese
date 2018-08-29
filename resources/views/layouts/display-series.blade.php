@foreach($series as $serie)
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 d-flex">
    <div class="card text-white bg-dark flex-fill elevation-4">
        <a href="{{ route('series.show', $serie->slug)}}" class="img-container">
            <img class="img-fluid"  style="height: 370px; width: 100%" src="{{ $serie->getFirstMediaUrl('posterSerie') }}">
            <div class="top-left yellow rounded"><span>{{ $serie->created_year }}</span></div>
            <div class="bottom-left">
                 {{ $serie->title}}  
          </div>
    </a>
    </div>
</div>
@endforeach
<div class="container mt-3 d-flex justify-content-center">
    {{ $series->links() }}
</div>
