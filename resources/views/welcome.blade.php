@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-3">
    @include('layouts.display-movies')
    </div>
</div>
<div class="container">
    <div class="container mt-3 pt-3">
        <div class="card card-info mt-3">
            <div class="card-header">Serialet e fundit</div>
        </div>
        <div class="row">
            @include('layouts.display-series4')
        </div>
    </div>
</div>
@endsection
