<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;
use App\Models\Journal;

class PublisherController extends Controller
{
    public function index(){
    return view('publishers' ,[
        'title' => "Publisher",
        'publishers' => Publisher::paginate(5),
        'total' => Publisher::all()
    ]);
}
public function show($id){
    return view('publisher' ,[
        'title' => "Publisher",
        'publisher' => Publisher::find($id),
        'journals' => Journal::where('publisher_id', $id)->paginate(5),
        'total' => Journal::where('publisher_id', $id)
    ]);
}
}
