<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;
use App\Event;

class ClubController extends Controller
{
     //
     public function showall()
     {
        $Clubs = Club::all();
        return response()->json([
            'Clubs'=>$Clubs,
        ]);
     }
 
     public function show(Club $club)
    {
        $Events = Event::where('id', '=', $club->id_event)->latest()->paginate(10);
        $cnt=$Events->count();

        return response()->json([
            'Events'=>$Events,
            'club'=>$club,
            'cnt'=>$cnt,
        ]);
    }
    public function withevent(Club $club)
    {
        $Events = Event::where('club_id', '=', $club->id);
        return response()->json([
            'Events'=>$Events,
        ]);
    }
}
