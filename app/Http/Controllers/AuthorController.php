<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Article;

class AuthorController extends Controller
{
    public function index($id){
        return view('author' ,[
            'title' => "Author",
            'user' => User::find($id),
            'articles' => Article::where('user_id' , $id)->paginate(5),
            'total' => Article::where('user_id', $id)
        ]);
    }
}
