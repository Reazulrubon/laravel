<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Trust;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Team::all();
        return view('team_list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('add_team');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
        Team::create([
            'photo' => $name,
            'name' => $request->name,
            'designation' => $request->designation,
        ]);
        $photo->move('./pictures/', $name);
        return redirect()->route('mbr.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $team = Team::findOrFail($id);
        return view('show_team', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $team = Team::findOrFail($id);
        return view('edit_team', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $trUp=Team::findOrFail($id);
        $trUp->update($request->all());
        return redirect()->route('mbr.index');


        //
        // $team = Team::findOrFail($id);
        // $photo = $request->file('photo');
        // $name = $photo->getClientOriginalName();
        // $team->update([
        //     'photo' => $name,
        //     'name' => $request->name,
        //     'designation' => $request->designation,
        // ]);
        // $photo->move('./pictures/', $name);
        // return redirect()->route('mbr.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
        $team->delete();
        return redirect()->route('mbr.index');
    }
  
}
