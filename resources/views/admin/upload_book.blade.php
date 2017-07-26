@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Welcome Admin, You are logged in!
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::open(['url' => 'admin/home/postBook', 'files'=>'true', 'enctype'=>"multipart/form-data"]) !!}
                        
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                        {!! Form::label('Nama Buku') !!}
                        {!! Form::text('judul', null, array('class'=>'form-control')) !!}
                        </div>
                        
                        <div class="form-group">
                        {!! Form::label('Deskripsi Buku') !!}
                        {!! Form::textarea('deskripsi', null, array('class'=>'form-control')) !!}
                        </div>

                        <div class="form-group">
                        {!! Form::label('Cover book.') !!}
                        {!! Form::file('coverBook', array('class'=>'form-control btn btn-info')) !!}
                        </div>

                        <div class="form-group">
                        {!! Form::label('File e-book.') !!}
                        {!! Form::file('book', array('class'=>'form-control btn btn-success')) !!}
                        </div>
                        
                        <div class="form-group">
                        {!! Form::submit('Upload Buku', array('class'=>'btn btn-primary')) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
