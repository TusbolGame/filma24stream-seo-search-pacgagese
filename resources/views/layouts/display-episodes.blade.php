@foreach($season->episodes as $episod)
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 d-flex">
    <div class="card text-white bg-dark flex-fill elevation-4">
        <a href="{{ route('episodes.show',  $episod->slug)}}" class="img-container">
            <img class="img-fluid"  style="height: 370px; width: 100%" src="{{ $season->getFirstMediaUrl('posterSeason') }}">
            <div class="bottom-left">
                    {{ $episod->title }}
    </div>
    </a>
</div>
</div>
@endforeach

