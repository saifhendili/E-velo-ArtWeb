<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Cyclicte;
class CyclicteController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Cyclicte::all();
        return View('Cyclicte.index')->with('events', $events);
    }
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event=Event::all();
        return View('Cyclicte.create')->with('event', $event);
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'name' =>'required',
            'description' =>'required',
            'nbrpersonnes' =>'required',
            'tarif' =>'required | min:1 | numeric',
            'outilsdetest' =>'required',
            'event_id' =>'required',
            

            
               ]);

        $input = $request->all();
        Cyclicte::create($input);
        return redirect('Cyclicte')->with('flash_message', 'Cyclicte Addedd!');  
    }
       /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Cyclicte::find($id);
        return view('Cyclicte.show')->with('event', $event);
    }
      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Cyclicte::find($id);
        return view('Cyclicte.edit')->with('event', $event);
    }
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Cyclicte::find($id);
        $input = $request->all();
        $event->update($input);
        return redirect('Cyclicte')->with('flash_message', 'Cyclicte Updated!'); 
    }
       /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cyclicte::destroy($id);
        return redirect('Cyclicte')->with('flash_message', 'Cyclicte deleted!');  
    }

}
