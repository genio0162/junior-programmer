<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Journal;

class SubjectController extends Controller
{
    public function index(){
        return view('subjects' ,[
            'title' => "Subject",
            'subjects' => Subject::all(),
            'journals' => Journal::paginate(5),
            'total' => Journal::all()
        ]);
    }
}
