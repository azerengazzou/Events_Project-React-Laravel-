<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();



Route::group(['/logout' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/Clubs', function () {
    return view('index');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/Events', function () {
    return view('index');
});

Route::get('/Contact', function () {
    return view('index');
});

Route::get('/clubs/clubdetails/{club}', function () {
    return view('index');
});
Route::get('/event/details', function () {
    return view('index');
});


/*
    -----------------------
    API ROUTES FOR REACT USE
    -----------------------
*/

Route::get('/api/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Clubs 
Route::get('/api/clubs',[ClubController::class, 'showall']);
Route::get('/api/clubs/clubdetails/{club}', [ClubController::class, 'show']);
//event routes
Route::get('/api/events',[EventController::class, 'showall']);
Route::get('/api/events/eventdetails/{event}', [EventController::class,'show']);
Route::post('/api/events/eventdetails/{event}/store', [EventController::class, 'store']);

Route::get('pages',function(){
    return view ('pages');
});
/*

//Route::get('/',[HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//club routes



 */
