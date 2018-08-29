@extends('layouts.app') 
@section('meta')
<title>{{ $movie->title }} me titra Shqip | Filma me titra Shqip</title>
@endsection
 
@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="card bg-dark text-white mb-3">
                    <div class="card-body">
                        @foreach($movie->embeds as $embed)
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ $embed->web_url }}" allowfullscreen></iframe>
                            </div>
                        @endforeach
                        <div class="card-title green"><h3>
                                {{ $movie->title }}
                            </h3></div>
                        <hr>
                        <div class="card-text">
                            <div class="row">
                                <div class="col-6">
                                    <div class="float-left green">Viti: {{ $movie->release_date }}</div>
                                </div>
                                <div class="col-6">
                                    <div class="float-right green">Vleresimi: {{ $movie->rating }}<i class="fas fa-star yellow"></i> </div>
                                </div>
                            </div>
                            <hr>
                           <div class="row">
                               <div class="col-12">
                                   <h4 class="green">Description:</h4><br>
                               </div>
                               <div class="col-12">
                                   <p>{{ $movie->description }}</p>
                               </div>

                           </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-dark text-white mb-3">
                    <div class="card-header"><h4>Shiko Trailerin ketu</h4></div>
                    <div class="card-body">
                        @foreach($movie->trailerlinks as $trailerlink)
                            <a class="btn btn-outline-danger" href="{{ url($trailerlink->web_url) }}" target="_blank">{{ $trailerlink->web_name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="card bg-dark text-white mb-3">
                    <div class="card-header"><h4>Shiko filmin ketu</h4></div>
                    <div class="card-body">
                        @foreach($movie->watchlinks as $watchlink)
                            <a class="btn btn-outline-danger" href="{{ url($watchlink->web_url) }}" target="_blank">{{ $watchlink->web_name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="card bg-dark text-white mb-3">
                    <div class="card-header"><h4>Shkarko filmin ketu</h4></div>
                    <div class="card-body">
                        @foreach($movie->downloadlinks as $downloadlink)
                            <a class="btn btn-outline-danger" href="{{ url($downloadlink->web_url) }}" target="_blank">{{ $downloadlink->web_name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">

            </div>
        </div>
    </div>
@endsection
