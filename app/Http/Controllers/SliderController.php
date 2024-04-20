<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Slider::all();
        return view('slider_list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('add_slider');
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
        slider::create([
            'photo' => $name,
            'name' => $request->name,
            'designation' => $request->designation,
        ]);
        $photo->move('./pictures/', $name);
        return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $slider = slider::findOrFail($id);
        return view('show_slider', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $slider = slider::findOrFail($id);
        return view('edit_slider', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $trUp=Slider::findOrFail($id);
        $trUp->update($request->all());
        return redirect()->route('slider.index');

        //
        // $slider = Slider::findOrFail($id);
        // $photo = $request->file('photo');
        // $name = $photo->getClientOriginalName();
        // $slider->update([
        //     'photo' => $name,
        //     'name' => $request->name,
        //     'designation' => $request->designation,
        // ]);
        // $photo->move('./pictures/', $name);
        // return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
        $slider->delete();
        return redirect()->route('slider.index');
    }

}
