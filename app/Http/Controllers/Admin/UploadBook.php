<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\book;
use Auth;
use Illuminate\Support\Facades\Storage;
use Alert;

class UploadBook extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    /**
     * post book.
     *
     * @return redirect
     */
    public function postBook(Request $request)
    {
        $this->validate($request, [
            'coverBook' => 'required|mimes:jpeg,bmp,png,jpg',
            'book' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        //inisia variable
        $idAdmin = Auth::guard('admins')->user()->id;
        $coverBook = $request->file('coverBook');
        $book = $request->file('book');
        $judul = $request->input('judul');
        $deskripsi = $request->input('deskripsi');
        $nameBook = rand(1,999).'-'.bcrypt($idAdmin).'-'.$judul;

        // return $book;
        //upload file
        Storage::putFileAs('/app/public/book/penulis/'.$idAdmin, $book, $nameBook.'.epub');
        Storage::putFileAs('/app/public/book/penulis/'.$idAdmin.'/cover/', $coverBook, $nameBook.'.jpg');
        // if(Storage::putFileAs('/book/penulis/'.$idAdmin.'/cover/', $coverBook, $nameBook.'.jpg'))
        // {
        //     Storage::copy(storage_path().'/app/book/penulis/'.$idAdmin.'/cover/'.$nameBook.'.jpg', Storage::disk('public').'/book/cover/'.$idAdmin.$nameBook);
        // }
    
        //save data
        $saveBook = new book;
        $saveBook->id_admin = $idAdmin;
        $saveBook->judul = $judul;
        $saveBook->deskripsi = $deskripsi;
        $saveBook->nameFile = $nameBook;
        $saveBook->save();

        //view
        Alert::success('Success Message', 'Optional Title')->autoclose(3500);
        return redirect('/admin/home');
    }
}
