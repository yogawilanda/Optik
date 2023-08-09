<?php

namespace App\Http\Controllers;

use App\Models\bpjs;
use App\Http\Requests\StorebpjsRequest;
use App\Http\Requests\UpdatebpjsRequest;

class BpjsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bpjsRecord = Bpjs::all();
        return view('bpjs.index', ['bpjsRecord' => $bpjsRecord]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorebpjsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(bpjs $id)
    {
        $bpjsRecord = Bpjs::find($id);
        return view('bpjs.show', ['bpjsRecord' => $bpjsRecord]);   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bpjs $bpjs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebpjsRequest $request, bpjs $bpjs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bpjs $bpjs)
    {
        //
    }
}
