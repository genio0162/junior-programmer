<?php

use App\Models\Article;
use App\Models\Journal;
use App\Models\Publisher;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\SubjectController;
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

Route::get('/', [JournalController::class, 'main']);

Route::get('/publishers', [PublisherController::class, 'index']);
Route::get('/publishers/{id}', [PublisherController::class, 'show']);

Route::get('/journals', [JournalController::class, 'index']);
Route::get('/journals/{id}', [JournalController::class, 'show']);

Route::get('/article/{id}', [ArticleController::class, 'index']);

Route::get('/author/{id}', [AuthorController::class, 'index']);

Route::get('/subjects', [SubjectController::class, 'index']);
