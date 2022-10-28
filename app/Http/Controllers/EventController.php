<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Event;
class EventController extends Controller
{   public function index()
    {
       
    
        $event = Event::all();
        return view ('event.index')->with('event', $event);
    }
    
    public function create()
    {
        return view('event.create');
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
               $file_name = time() . '.' . request()->picture->getClientOriginalExtension();
               request()->picture->move(public_path('images'), $file_name);
               
               $velo = new Event;

               $velo->place = $request->place;
               $velo->nameevent = $request->nameevent;
               $velo->dateajout = $request->dateajout;
               $velo->datefin = $request->datefin;
               $velo->velo_id = $request->velo_id;
               $velo->picture = $file_name;
             
               $velo->save();
        // $input = $request->all();
        // $filename=time().$request->file('picture')->getClientOriginalName();
        // $path=$request->file('picture')->storeAs('images',$filename,'public');
        // $input["picture"]='storage/'.$path;
        // Event::create($input);
        return redirect('admin/admin/event')->with('flash_message', 'event Addedd!');  
    }
    
    public function show($id)
    {
        $event = Event::find($id);
        return view('event.show')->with('event', $event);
    }
    
    public function edit($id)
    {
        $event = Event::find($id);
        return view('event.edit')->with('event', $event);
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
        return redirect('admin/admin/event')->with('flash_message', 'event Updated!');  
    }
  
    public function destroy($id)
    {
        Event::destroy($id);
        return redirect('admin/admin/event')->with('flash_message', 'Event deleted!');  
    }
    public function getCyclicte($event_id)
    {
        $eventscyclicte = Event::find($event_id);

      
        return view('event.CyclicteEvent')->with('eventscyclicte', $eventscyclicte);
    }
    public function indexFilter(Request $request)
    {
        $event  = Event::where('place', 'LIKE', '%' . $request->search . '%')
            ->orWhere('nameevent', 'LIKE', '%' . $request->search . '%')
            ->orWhere('dateajout', 'LIKE', '%' . $request->search . '%')
            ->orWhere('datefin', 'LIKE', '%' . $request->search . '%')
            
            ->paginate(2);

        if (count($event) > 0)
            return view('event.index', compact('event'))->withDetails($event)->withQuery($request->search);
        else
            return view('event.index', compact('event'))->withMessage('No Event Details found. Try to search again !');
    } 

}

