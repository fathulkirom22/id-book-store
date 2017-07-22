@extends('layouts.app')

@section('content')

{{-- search area --}}
<div class="search-div" style="background-color: #2874f0">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
        <form class="" role="search">
            <div class="input-group">
                <input type="text" class="form-control input-search" placeholder="Search for Books, Autor and more" name="q">
                <div class="input-group-btn">
                    <button class="btn btn-default btn-search" type="submit">
                        <svg width="15px" height="15px">
                            <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                        </svg>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>       

<div class="container">
    <!-- Page Header -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">E-BOOK
                <small>Find your book</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    @forelse ($books as $book)
        
        <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="thumbnail">
            <a href="{{ url('/')}}/book_view/?book={{ $book->id_admin.'/'.$book->nameFile }}.epub">
                <img class="img-responsive img-rounded cover-book" style="width:100%; height:300px;" src="{{ asset('storage/book/penulis/'.$book->id_admin.'/cover/'.$book->nameFile.'.jpg') }}" alt="">
            </a>
            <div class="caption">
                {{-- <h3>
                    <a href="{{ url('/')}}/book_view/?book={{ $book->nameFile }}.epub">{{ $book->judul }}</a>
                </h3> --}}
                <strong>Autor : 
                <a href="{{ url('/')}}/profil/{{$book->id_admin}}">
                    {{ $book->name}}</strong>
                </a>
                <p>{{ $book->deskripsi }}</p>
                <button style="width: 100%; radius:0;" class="btn btn-info">Beli</button>
            </div>
        </div>
        </div>

    @empty
        <h4 align="center">Not Book</h4>
    @endforelse

</div>
<div class="container">
    {{ $books->appends(Request::only('q'))->links() }}
</div>
@endsection
