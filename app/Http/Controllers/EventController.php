<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class EventController extends Controller
{
        

        //
        public function showall()
        {
            $Events = Event::all();
            return view('events', compact('Events'));
        }
    
        public function showevent(Event $event)
        {
            return view('eventdetails', compact('event'));
        }
}
