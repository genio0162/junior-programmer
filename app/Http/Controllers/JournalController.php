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
        if(request('search')){
            return view('journals' ,[
                'title' => "Journal",
                'journals' => Journal::latest()->filter(request(['search']))->paginate(5),
                'total' => Journal::latest()->filter(request(['search'])),
            ]);
        }else{
            return view('journals' ,[
                'title' => "Journal",
                'journals' => Journal::latest()->paginate(5),
                'total' => Journal::all(),
            ]);
        }

    }

    public function show($id){
        return view('journal' ,[
            'title' => "Journal",
            'journal' => Journal::find($id),
            'subjects' => Journal::where('subject_id' ,$id),
            'articles' => Article::where('journal_id', $id)->filter(request(['article']))->paginate(5),
            'total' => Article::where('journal_id', $id)
        ]);
    }
}
