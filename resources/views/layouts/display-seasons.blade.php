@foreach($serie->seasons as $season)
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 d-flex">
    <div class="card text-white bg-dark flex-fill elevation-4">
        <a href="{{ route('seasons.show', [$serie->slug ,$season->id])}}" class="img-container">
            <img class="img-fluid"  style="height: 370px; width: 100%" src="{{ $season->getFirstMediaUrl('posterSeason') }}">
            <div class="bottom-left">
                    {{ $season->season_nr }}
    </div>
    </a>
</div>
</div>
@endforeach
