<?php

namespace App\Http\Controllers;

use App\Models\Trust;
use Illuminate\Http\Request;

class TrustController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trust = Trust::all();
        return view('trust_list', compact('trust'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_trust');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
        Trust::create([
            'photo' => $name,
            'name' => $request->name,
            'designation' => $request->designation,
        ]);
        $photo->move('./pictures/', $name);
        return redirect()->route('tru.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trust  $trust
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trust = Trust::findOrFail($id);
        return view('show_trust', compact('trust'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trust = Trust::findOrFail($id);
        return view('edit_trust', compact('trust'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trust  $trust
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $trUp=Trust::findOrFail($id);
        $trUp->update($request->all());
        return redirect()->route('tru.index');

        // $trust = Trust::findOrFail($id);
        // $photo = $request->file('photo');
        // $name = $photo->getClientOriginalName();
        // $trust->update([
        //     'photo' => $name,
        //     'name' => $request->name,
        //     'designation' => $request->designation,
        // ]);
        // $photo->move('./pictures/', $name);
        // return redirect()->route('tru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trust  $trust
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trust $trust)
    {
        $trust->delete();
        return redirect()->route('tru.index');
    }
 
}
