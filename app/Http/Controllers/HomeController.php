<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;
use App\Event;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Events = Event::latest()->paginate(3);
        $Clubs = Club::all();
        
        return response()->json([
            'Events'=>$Events,
            'Clubs'=>$Clubs
        ]);
    }
}
