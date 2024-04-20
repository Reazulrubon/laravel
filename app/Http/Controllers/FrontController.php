<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Team;
use App\Models\Trust;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $data = Team::all();
        $trust = Trust::all();
        $slider =Slider::all();
        return view('welcome',compact(['data','slider','trust']));
    }
}
