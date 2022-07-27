<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/comics', function () {
    $dcComic = config("comics");
    return view('comics.index', ["dcComic" => $dcComic]);
})->name('comics');


Route::get('/comics/{id}', function ($id) {
    $dcComic = config("comics");
    $foundComic = null;

    foreach($dcComic as $i => $comic){
        if($comic['id'] === intval($id)){
            $foundComic = $comic;
            break;
        }
    }

    return view('comics.show', [
        "detailsComic" => $foundComic
    ]);
})->name("comics.show");

