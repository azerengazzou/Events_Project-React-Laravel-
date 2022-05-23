<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\Club;
use App\Comment;
use App\Models\User;

class EventController extends Controller
{
        

        //
        public function showall()
        {
            $Events = Event::all();
            return response()->json([
                'Events'=>$Events,
            ]);
        }
        public function showevent(Event $event)
        {
            return view('eventdetails', compact('event'));
        }
        
    public function show(Event $event)
    {
        $club = Club::where('id', '=', $event->club_id)->first();
        $comments = Comment::where('id_event', '=', $event->id)->latest()->paginate(10);
        $users = User::all();
        $nbTotal = $comments->count();

        return response()->json([
            'event'=>$club,
            'comments'=>$comments,
            'users'=>$users,
            'nbTotal'=>$nbTotal,
        ]);
    }    
    public function store(Request $req)
    {
        $Comment= new \App\Comment();
        $Comment->comment_text=$req->input('message');
        $Comment->id_user=$req->input('user');
        $Comment->id_event=$req->input('id_event');
        $Comment->save();
        //return redirect()->action([EventController::class, 'show']);
        return redirect()->action([EventController::class, 'show'], ['event' => $Comment->id_event]);
    }
        
}
