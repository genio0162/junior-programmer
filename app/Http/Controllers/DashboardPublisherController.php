<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Article;
use App\Models\Journal;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class DashboardPublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('dashboard.publishers.index',[
            'publishers' => Publisher::latest()->filter(request(['search']))->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.publishers.create', [
            'provinces' => Province::all(),
            'regencies' => Regency::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255|unique:publishers',
            'img' => 'image|file|max:1024',
            'alias' => 'required|uppercase|unique:publishers',
            'province_id' => 'required',
            'regency_id' => 'required',
            'website' => 'required|url',
        ]);

        if($request->file('img')){
            $validatedData['img'] = $request->file('img')->store('publisher-images');
        }

        $provinceName = Province::find($request['province_id']);
        $regencyName = Regency::find($request['regency_id']);
        $validatedData['province_name'] = $provinceName->name;
        $validatedData['regency_name'] = $regencyName->name;

        Publisher::create($validatedData);

        return redirect('/backboard/publishers')->with('success', 'New publishers has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        return view('dashboard.publishers.show', [
            'publisher' => $publisher
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        return view('dashboard.publishers.edit',[
            'publisher' => $publisher,
            'provinces' => Province::all(),
            'regencies' => Regency::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publisher $publisher)
    {
        $rules = [
            'img' => 'image|file|max:1024',
            'province_id' => 'required',
            'regency_id' => 'required',
            'website' => 'required|url',
        ];

        if($request->name != $publisher->name){
            $rules['name'] =  'required|min:3|max:255|unique:publishers';
        }
        if($request->alias != $publisher->alias){
            $rules['alias'] =  'required|unique:publishers';
        }

        $validatedData = $request->validate($rules);
        $provinceName = Province::find($request['province_id']);
        $regencyName = Regency::find($request['regency_id']);
        $validatedData['province_name'] = $provinceName->name;
        $validatedData['regency_name'] = $regencyName->name;

        if($request->file('img')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['img'] = $request->file('img')->store('publisher-images');
        }

        Publisher::where('id', $publisher->id)
                    ->update($validatedData);

        return redirect('/backboard/publishers')->with('success', 'Publishers has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        if($publisher->img){
            Storage::delete($publisher->img);
        }
        Publisher::destroy($publisher->id);

        Article::where('publisher_id', $publisher->id)
                    ->update(['publisher_id' => 1]);
        Journal::where('publisher_id', $publisher->id)
                    ->update(['publisher_id' => 1]);
        User::where('publisher_id', $publisher->id)
                    ->update(['publisher_id' => 1]);


        return redirect('/backboard/publishers')->with('deleted', 'Publishers has been deleted!');
    }
}
