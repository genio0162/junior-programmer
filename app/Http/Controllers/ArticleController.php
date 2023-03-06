<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Journal;
use App\Models\Publisher;

class ArticleController extends Controller
{
    public function index(){

        if(request('search')){
            return view('index' ,[
                'title' => "Home",
                'journals' => Journal::all(),
                'publishers' => Publisher::all(),
                'articles' => Article::latest()->filter(request(['search']))->paginate(5),
                'total' => Journal::all(),
                'totalAT' => Article::all(),
                'totalA' =>  Article::latest()->filter(request(['search'])),
            ]);
        } else{
            return view('index' ,[
                'title' => "Home",
                'journals' => Journal::all(),
                'publishers' => Publisher::all(),
                'articles' => Article::latest()->paginate(5),
                'total' => Journal::all(),
                'totalAT' => Article::all(),
                'totalA' => Article::all()
            ]);
        }


    }

    public function show($id){
        return view('article' ,[
            'title' => "Article",
            'article' => Article::find($id),
        ]);
    }
}
