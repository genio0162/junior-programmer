<?php

use App\Models\Article;
use App\Models\Journal;
use App\Models\Publisher;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardArticleController;
use App\Http\Controllers\DashboardJournalController;
use App\Http\Controllers\DashboardSubjectController;
use App\Http\Controllers\DashboardPublisherController;

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

Route::get('/', [ArticleController::class, 'index']);

Route::get('/', [ArticleController::class, 'index']);

Route::get('/publishers', [PublisherController::class, 'index']);
Route::get('/publishers/{id}', [PublisherController::class, 'show']);

Route::get('/journals', [JournalController::class, 'index']);
Route::get('/journals/{id}', [JournalController::class, 'show']);

Route::get('/article/{id}', [ArticleController::class, 'show']);

Route::get('/author/{id}', [AuthorController::class, 'index']);

Route::get('/subjects', [SubjectController::class, 'index']);
Route::get('/subjects/{id}', [SubjectController::class, 'show']);

Route::get('/login' , [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login' , [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register' , [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register' , [RegisterController::class, 'store']);

Route::get('/backboard' , [DashboardController::class, 'index'])->middleware('auth');

Route::resource('/backboard/publishers' , DashboardPublisherController::class)->middleware('auth');

Route::resource('/backboard/journals' , DashboardJournalController::class)->middleware('auth');

Route::resource('/backboard/articles' , DashboardArticleController::class)->middleware('auth');

Route::resource('/backboard/users' , DashboardUserController::class)->middleware('auth');

Route::resource('/backboard/subjects' , DashboardSubjectController::class)->middleware('auth');
