<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\Request;


class DashboardPublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.publishers.index',[
            'publishers' => Publisher::latest()->paginate(10)
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
            'alias' => 'required|unique:publishers',
            'province_id' => 'required',
            'regency_id' => 'required',
            'website' => 'required|url',
            'abstract' => 'required'
        ]);
        
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publisher $publisher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        //
    }
}
