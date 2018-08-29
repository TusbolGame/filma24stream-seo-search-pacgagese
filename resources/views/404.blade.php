@extends('layouts.admin') 
@section('meta')
@endsection
 
@section('content')
<!-- Main content -->
<section class="content">
    <div class="error-page">
        <h2 class="headline text-warning"> 404</h2>

        <div class="error-content">
            <h3><i class="fa fa-warning text-warning"></i> Oops! Page not found.</h3>

            <p>
                We could not find the page you were looking for. Meanwhile, you may <a href="/">return to homepage</a>
            </p>


        </div>
        <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
</section>
<!-- /.content -->
@endsection