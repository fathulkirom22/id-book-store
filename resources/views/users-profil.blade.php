@extends('layouts.app')

@section('content')
<div class="">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="http://lorempixel.com/100/100/people/9/">
        </div>
        <div class="card-info"> <span class="card-title">{{ $admin->name }}</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Books</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">About</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Following</div>
            </button>
        </div>
    </div>

    <div class="isi-tab container">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          @forelse ($books as $book)
                <div class="col-md-3 portfolio-item">
                    <a href="{{ url('/')}}/book_view/?book={{ $book->id_admin.'/'.$book->nameFile }}.epub">
                        <img class="img-responsive cover-book" src="{{ asset('storage/book/penulis/'.$book->id_admin.'/cover/'.$book->nameFile.'.jpg') }}" alt="">
                    </a>
                    <h3>
                        <a href="{{ url('/')}}/book_view/?book={{ $book->nameFile }}.epub">{{ $book->judul }}</a>
                    </h3>
                    <p>{{ $book->deskripsi }}</p>
                </div>
            @empty
                <h4 align="center">Not Book</h4>
            @endforelse
            
            <div class="container col-sm-12">
                {{ $books->appends(Request::only('q'))->links() }}
            </div>
        </div>

        <div class="tab-pane fade in" id="tab2">
          <h3>This is tab 2</h3>
        </div>

        <div class="tab-pane fade in" id="tab3">
          <h3>This is tab 3</h3>
        </div>
      </div>
    </div>
    
    </div>
@endsection 