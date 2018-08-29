@extends('layouts.app')
@section('content')
<div class="row">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="col-sm-8 offset-2 mt-3">
        @if (Session::has('message'))
        <span class="text-info">{{ Session::get('message')}}</span> @endif
        <div class="card">
            <div class="card-header">Contact us</div>
            <div class="card-body">
                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="control-label">Your Name</div>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <div class="control-label">Your Email</div>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Message</label>
                        <textarea class="form-control" name="msg"></textarea>
                    </div>
                    <input type="submit" value="Contact" class="btn btn-info">
                </form>

            </div>
        </div>
    </div>

</div>
@endsection
