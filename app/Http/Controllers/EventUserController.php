<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Event;
class EventUserController extends Controller
{   public function index()
    {
       
    
        $event = Event::all();
        return view ('eventuser.index')->with('event', $event);
    }
    
    public function create()
    {
        return view('eventuser.create');
    }
  
    public function store(Request $request)
    {   
        $request->validate([
            'place' =>'required',
            'nameevent' =>'required',
            'dateajout' =>'required',
            'datefin' =>'required ',
            'picture' =>'required',
            
            'velo_id' =>'required'
            
               ]);
        $input = $request->all();
        $filename=time().$request->file('picture')->getClientOriginalName();
        $path=$request->file('picture')->storeAs('images',$filename,'public');
    $input["picture"]='storage/'.$path;
        Event::create($input);
        return redirect('eventuser')->with('flash_message', 'event Addedd!');  
    }
    
    public function show($id)
    {
        $event = Event::find($id);
        return view('eventuser.show')->with('event', $event);
    }
    
    public function edit($id)
    {
        $event = Event::find($id);
        return view('eventuser.edit')->with('event', $event);
    }
  
    public function update(Request $request, $id)
    {  
        $request->validate([
            'place' =>'required',
            'nameevent' =>'required',
            'dateajout' =>'required',
            'datefin' =>'required ',
            'picture' =>'required',
            
            'velo_id' =>'required'
            
               ]);
        $event = Event::find($id);
        $input = $request->all();
        $event->update($input);
        return redirect('eventuser')->with('flash_message', 'event Updated!');  
    }
  
    public function destroy($id)
    {
        Event::destroy($id);
        return redirect('eventuser')->with('flash_message', 'Event deleted!');  
    }
         }

