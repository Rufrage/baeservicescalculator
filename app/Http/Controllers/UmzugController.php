<?php

namespace App\Http\Controllers;

use App\Umzug;
use Illuminate\Http\Request;

class UmzugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $umzuege = Umzug::all();
        return view('umzug.index', compact('umzuege'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('umzug.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $umzug = new Umzug($request->all());
        $umzug->save();
        return redirect(route('umzug.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Umzug  $umzug
     * @return \Illuminate\Http\Response
     */
    public function show(Umzug $umzug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Umzug  $umzug
     * @return \Illuminate\Http\Response
     */
    public function edit(Umzug $umzug)
    {
        return view('umzug.kundendaten', compact('umzug'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Umzug  $umzug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Umzug $umzug)
    {
        $umzug->update($request->all());

        switch($request->switch){
            case "kundendaten":
                return view('umzug.kundendaten', compact('umzug'));
            case "wohnzimmer":
                return view('umzug.wohnzimmer', compact('umzug'));
            case "küche":
                return view('umzug.küche', compact('umzug'));
            case "schlafzimmer":
                return view('umzug.schlafzimmer', compact('umzug'));
            case "esszimmer":
                return view('umzug.esszimmer', compact('umzug'));
            case "bad":
                return view('umzug.bad', compact('umzug'));
            case "kinderzimmer":
                return view('umzug.kinderzimmer', compact('umzug'));
            case "weitere_zimmer":
                return view('umzug.weitere_zimmer', compact('umzug'));
            case "sonstiges":
                return view('umzug.sonstiges', compact('umzug'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Umzug  $umzug
     * @return \Illuminate\Http\Response
     */
    public function destroy(Umzug $umzug)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Umzug  $umzug
     * @return \Illuminate\Http\Response
     */
    public function switch(Request $request)
    {

    }
}
