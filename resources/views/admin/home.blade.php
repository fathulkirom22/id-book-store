@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Welcome Admin, You are logged in!
                    <br>
                    <a href="{{ url('/admin/home/postBook') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Upload Book</a>
                    <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Free Template Cover Book</a>
                    <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Free Template Epub</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
