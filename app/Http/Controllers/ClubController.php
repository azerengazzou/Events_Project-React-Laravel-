<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;
use App\Event;

class ClubController extends Controller
{
     //
     public function index()
     {
         $Clubs = Club::all();
         return view('clubs', compact('Clubs'));
     }
 
     public function showwithevent(Club $club)
     {
        $events = Event::where('id', '=', $club->id)->latest();
        //$events=Event::all();
        return view('clubdetails', compact('club','events'));
     }
}
