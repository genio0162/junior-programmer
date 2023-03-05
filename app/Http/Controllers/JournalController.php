<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal;
use App\Models\Article;
use App\Models\Publisher;
use App\Models\Subject;

class JournalController extends Controller
{
    public function index(){
        return view('journals' ,[
            'title' => "Journal",
            'journals' => Journal::paginate(5),
            'articles' => Article::paginate(5),
            'total' => Journal::all(),
            'totalA' => Article::all()
        ]);
    }

    public function main(){
        return view('index' ,[
            'title' => "Home",
            'journals' => Journal::all(),
            'publishers' => Publisher::all(),
            'articles' => Article::latest()->paginate(5),
            'total' => Journal::all(),
            'totalA' => Article::all()
        ]);
    }

    public function show($id){
        return view('journal' ,[
            'title' => "Journal",
            'journal' => Journal::find($id),
            'subjects' => Journal::where('subject_id' ,$id),
            'articles' => Article::where('journal_id', $id)->paginate(5),
            'total' => Article::where('journal_id', $id)
        ]);
    }
}
