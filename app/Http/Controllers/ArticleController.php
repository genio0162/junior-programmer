<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Journal;

class ArticleController extends Controller
{
    public function index($id){
        return view('article' ,[
            'title' => "Article",
            'article' => Article::find($id),
        ]);
    }
}
