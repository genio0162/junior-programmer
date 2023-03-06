<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;
use App\Models\Journal;

class PublisherController extends Controller
{
    public function index(){
        if(request('search')){
            return view('publishers' ,[
                'title' => "Publisher",
                'publishers' => Publisher::latest()->filter(request(['search']))->paginate(5),
                'total' => Publisher::latest()->filter(request(['search']))
            ]);
        }else{
            return view('publishers' ,[
                'title' => "Publisher",
                'publishers' => Publisher::latest()->filter(request(['search']))->paginate(5),
                'total' => Publisher::all()
            ]);
        }

}
public function show($id){
    return view('publisher' ,[
        'title' => "Publisher",
        'publisher' => Publisher::find($id),
        'journals' => Journal::where('publisher_id', $id)->filter(request(['journal']))->paginate(5),
        'total' => Journal::where('publisher_id', $id)
    ]);
}
}
