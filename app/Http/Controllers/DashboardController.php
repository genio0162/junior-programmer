<?php

namespace App\Http\Controllers;
use App\Models\Publisher;
use App\Models\Journal;
use App\Models\Article;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view( 'dashboard.index',[
            'publishers' => Publisher::all(),
            'journals' => Journal::all(),
            'articles' => Article::all(),
            'users' => User::all(),
        ]);
    }
}
