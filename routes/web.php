<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublisherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index' ,[
        'title' => "Home"
    ]);
});

Route::get('/publishers', [PublisherController::class, 'index']);

Route::get('/publishers/{id}', [PublisherController::class, 'show']);

Route::get('/journals', function () {
    return view('journal' ,[
        'title' => "Journal"
    ]);
});

Route::get('/subjects', function () {
    return view('subject' ,[
        'title' => "Subject"
    ]);
});
