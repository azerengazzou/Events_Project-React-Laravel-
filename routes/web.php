<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;

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

Route::get('/', function () {
    return view('index');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('pages',function(){
    return view ('pages');
});

Route::get('/',[HomeController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//club routes
Route::get('clubs',[ClubController::class, 'index']);
Route::get('clubs/clubdetails/{club}', [ClubController::class, 'showwithevent']);

//event routes
Route::get('events',[EventController::class, 'showall']);
Route::get('events/eventdetails/{event}', [EventController::class, 'showevent']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
