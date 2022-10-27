<?php

namespace App\Http\Controllers;

use App\Models\Association;

use Illuminate\Http\Request;


class AssociationUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $associations=Association::all();
        return View('associationuser.index')->with('associations', $associations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('associationuser.create');
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
'nom' =>'required',
'description' =>'required',
'owner' =>'required',
'nbdepersonne' =>'required | min:1 | numeric',
'picture' =>'required',

'objective' =>'required'

   ]);




        $input = $request->all();
        $filename=time().$request->file('picture')->getClientOriginalName();
        $path=$request->file('picture')->storeAs('images',$filename,'public');
    $input["picture"]='storage/'.$path;
        Association::create($input);
        return redirect('associationuser')->with('flash_message', 'Association Addedd!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $associations = Association::find($id);
        return view('associationuser.show')->with('associations', $associations);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $association = Association::find($id);
        return view('associationuser.edit')->with('association', $association);
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

        $request->validate([
            'nom' =>'required',
            'description' =>'required',
            'owner' =>'required',
            'nbdepersonne' =>'required | min:1 | numeric',
            'picture' =>'required',
            
            'objective' =>'required'
            
               ]);






        $association = Association::find($id);
        $input = $request->all();
        $association->update($input);
        return redirect('associationuser')->with('flash_message', 'Association Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Association::destroy($id);
        return redirect('associationuser')->with('flash_message', 'Association deleted!');  
    }


 
}
