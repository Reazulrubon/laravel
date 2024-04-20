<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TrustController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/services', function () {
    return view('services');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/',[FrontController::class,'index']);

Route::get('/about', function () {
    return view('about');
});


Route::get('/body',function(){

    return view('admin.body');
});

Route::resource('team',TeamController::class)->names('mbr');

Route::resource('slider',SliderController::class)->names('slider');

Route::get('adminh',[BackendController::class,'body']);

Route::resource('trust',TrustController::class)->names('tru');

Route::resource('mail',ContactController::class)->names('mail');