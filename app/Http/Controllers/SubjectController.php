<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Journal;

class SubjectController extends Controller
{
    public function index(){
        $subject = Journal::latest();
        return view('subjects' ,[
            'title' => "Subject",
            'subjects' => Subject::all(),
            'journals' => $subject->filter(request(['search','subject']))->paginate(5),
            'total' => Journal::all()
        ]);
    }
}
