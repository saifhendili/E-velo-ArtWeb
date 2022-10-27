<?php

namespace App\Http\Controllers;

use App\Models\Locale;
use App\Models\Association;


use Illuminate\Http\Request;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $associations=Locale::all();
        return View('Local.index')->with('associations', $associations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $association=Association::all();
        return View('Local.create')->with('association', $association);
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
            'libelle' =>'required',
            'emplacement' =>'required',
            'responsable' =>'required',
            'superficie' =>'required | min:1 | numeric',
            'association_id' =>'required',
            

            
               ]);




        $input = $request->all();
        Locale::create($input);
        return redirect('locale')->with('flash_message', 'Locale Addedd!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $associations = Locale::find($id);
        return view('Local.show')->with('associations', $associations);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $association = Locale::find($id);
        return view('Local.edit')->with('association', $association);
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
        $association = Locale::find($id);
        $input = $request->all();
        $association->update($input);
        return redirect('locale')->with('flash_message', 'Locale Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Locale::destroy($id);
        return redirect('locale')->with('flash_message', 'Locale deleted!');  
    }
}
