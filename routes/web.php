<?php

use App\Http\Controllers\JournalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\PublisherController;
use App\Models\Article;
use App\Models\Journal;
use App\Models\Publisher;

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
        'title' => "Home",
        'publishers' => Publisher::all(),
        'journals' => Journal::all(),
        'articles' => Article::all()
    ]);
});

Route::get('/publishers', [PublisherController::class, 'index']);
Route::get('/publishers/{id}', [PublisherController::class, 'show']);

Route::get('/journals', [JournalController::class, 'index']);
Route::get('/journals/{id}', [JournalController::class, 'show']);

Route::get('/subjects', [SubjectController::class, 'index']);
