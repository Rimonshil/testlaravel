<?php

namespace App\Http\Controllers;

use App\Supplyer;
use Illuminate\Http\Request;

class SupplyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $supplyers = Supplyer::all();
        return view('supplyer.index', compact('supplyers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplyer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplyers = Supplyer::create($request->all());
        session()->flash('success','supplyer create successfully');
        return redirect(route('supplyer.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplyer  $supplyer
     * @return \Illuminate\Http\Response
     */
    public function show(Supplyer $supplyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplyer  $supplyer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplyer = Supplyer::findorfail($id);
        return view("supplyer.edit", compact('supplyer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplyer  $supplyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplyer = Supplyer::findorfail($id);
        $supplyer->update($request->all());
        $supplyer->save();
        session()->flash('success', 'supplyer updated successfully');
        return redirect(route('supplyer.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplyer  $supplyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplyer $supplyer)
    {
        //
    }
}
