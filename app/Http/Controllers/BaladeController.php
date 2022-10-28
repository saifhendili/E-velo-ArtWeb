<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Balade;
use App\Models\Subscription;
class BaladeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //On récupère tous les Post
    //$balade = Balade::latest()->get();
    $balade = Balade::latest()->paginate(2);
    // On transmet les Post à la vue
    //return view("balade.index", compact("balades"));
    return view ('balade.index')->with('balade', $balade);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('balade.create');
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
            'adresse' =>'required',
            'nombalade' =>'required',
            'dateajout' =>'required ',
            'datefin' =>'required',
            'numero' =>'required',
            'picture' =>'required'
    
               ]);
               $file_name = time() . '.' . request()->picture->getClientOriginalExtension();
               request()->picture->move(public_path('images'), $file_name);
               
               $velo = new Balade;

               $velo->adresse = $request->adresse;
               $velo->nombalade = $request->nombalade;
               $velo->dateajout = $request->dateajout;
               $velo->datefin = $request->datefin;
               $velo->numero = $request->numero;
               $velo->picture = $file_name;
       
               $velo->save();
      //  $input = $request->all();
        
        
        //$filename=time().$request->file('picture')->getClientOriginalName();
       // $path=$request->file('picture')->storeAs('images',$filename,'public');
  //  $input["picture"]='storage/'.$path;
      //  Balade::create($input);
        return redirect('admin/balades')->with('flash_message', 'balade Addedd!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $balade = Balade::find($id);
        return view('balade.show')->with('balade', $balade);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $balade = Balade::find($id);
        return view('balade.edit')->with('balade', $balade);
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
            'adresse' =>'required',
            'nombalade' =>'required',
            'dateajout' =>'required ',
            'datefin' =>'required',
            'picture' =>'required'
            
               ]);
        $balade = Balade::find($id);
        $input = $request->all();
        $balade->update($input);
        return redirect('admin/balades')->with('flash_message', 'Balade Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Balade::destroy($id);
        return redirect('admin/balades')->with('flash_message', 'Balade deleted!');
    }

   
   
    public function getSubscription($balade_id)
    {
       // $baladesubscribs = Subscription::find($balade_id);
       // return view('balade.SubscriptionBalade')->with('baladesubscribs', $baladesubscribs);
        $baladesubscriptions = Balade::find($balade_id);

      
        return view('balade.SubscriptionBalade')->with('baladesubscriptions', $baladesubscriptions);
   
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexFilter(Request $request)
    {
        $balade  = Balade::where('adresse', 'LIKE', '%' . $request->search . '%')
            ->orWhere('nombalade', 'LIKE', '%' . $request->search . '%')
            ->orWhere('numero', 'LIKE', '%' . $request->search . '%')
            ->orWhere('dateajout', 'LIKE', '%' . $request->search . '%')
            ->orWhere('datefin', 'LIKE', '%' . $request->search . '%')
            ->paginate(2);

        if (count($balade) > 0)
            return view('balade.index', compact('balade'))->withDetails($balade)->withQuery($request->search);
        else
            return view('balade.index', compact('balade'))->withMessage('No Event Details found. Try to search again !');
    }
}
