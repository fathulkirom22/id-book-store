<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');
    Route::get('home', 'HomeController@index');
    Route::post('home/postBook', 'UploadBook@postBook');
    Route::get('home/postBook', 'UploadBook@index');
});

Route::group(['namespace' => 'Autor', 'prefix' => 'autor'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');
    Route::get('home', 'HomeController@index');
    Route::post('home/postBook', 'UploadBook@postBook');
    Route::get('home/postBook', 'UploadBook@index');
});


Route::get('/book_view',function () {
    return view('bib-epup-viewer');
})->middleware('auth');;

Route::get('/profil/{id}', 'UsersProfil@show');
Route::get('/home/mylibrary', 'MyLibraryController@index');




// Route::get('/test',function () {
//     return 'Hello World';
// });



// Route::get('/book_view/book1',function () {
//     // return view('bib-epup-viewer');storage/book/penulis/1/244-1-coba2.epub
//     $pathToFile = storage_path()."/book/penulis/1/268-1-coba.epub";
//     $name = "test.epub";
//     // return response()->download($pathToFile, $name, $headers);
//     return Response::make(file_get_contents($pathToFile), 200, [
//         'Content-Type' => 'application/octet-stream',
//         'Content-Disposition' => 'inline; filename="'.$name.'"'
//     ]);
// });