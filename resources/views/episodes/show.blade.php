@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="card bg-dark text-white mb-3">
                    <div class="card-body">
                        @foreach($episode->embeds as $embed)
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ $embed->web_url }}" allowfullscreen></iframe>
                        </div>
                        @endforeach
                        <div class="card-title green"><h3>
                                {{ $episode->title }}
                            </h3></div>
                        <hr>
                    </div>
                </div>
                <div class="card bg-dark text-white mb-3">
                    <div class="card-header"><h4>Shiko Trailerin ketu</h4></div>
                    <div class="card-body">
                        @foreach($episode->trailerlinks as $trailerlink)
                            <a class="btn btn-outline-danger" href="{{ url($trailerlink->web_url) }}" target="_blank">{{ $trailerlink->web_name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="card bg-dark text-white mb-3">
                    <div class="card-header"><h4>Shiko filmin ketu</h4></div>
                    <div class="card-body">
                        @foreach($episode->watchlinks as $watchlink)
                            <a class="btn btn-outline-danger" href="{{ url($watchlink->web_url) }}" target="_blank">{{ $watchlink->web_name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="card bg-dark text-white mb-3">
                    <div class="card-header"><h4>Shkarko filmin ketu</h4></div>
                    <div class="card-body">
                        @foreach($episode->downloadlinks as $downloadlink)
                            <a class="btn btn-outline-danger" href="{{ url($downloadlink->web_url) }}" target="_blank">{{ $downloadlink->web_name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
