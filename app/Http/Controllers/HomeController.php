<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->input('q');
        if ($q != ''){
            $books = DB::table('books')
                ->join('admins', 'books.id_admin', '=', 'admins.id')
                ->where("admins.name", "LIKE","%$q%")
                ->orWhere("books.judul", "LIKE", "%$q%")
                ->orWhere("books.deskripsi", "LIKE", "%$q%")
                ->paginate(8);
            return view('home', ['books' => $books, 'q' => $q]);
        }
        $books = DB::table('books')
                ->join('admins', 'books.id_admin', '=', 'admins.id')
                ->paginate(8);
        return view('home', ['books' => $books]);
    }
}
