<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bloc;

class BlogUserController extends Controller
{
    public function index()
    {
        $bloc = Bloc::all();
        return view ('bloguser.index')->with('bloc', $bloc);
    }
    
    public function create()
    {
        return view('blog.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Bloc::create($input);
        return redirect('blog')->with('flash_message', 'Blog Addedd!');  
    }
    
    public function show($id)
    {
        $bloc = Bloc::find($id);
        return view('bloguser.show')->with('bloc', $bloc);
    }
    
    public function edit($id)
    {
        $bloc = Bloc::find($id);
        return view('blog.edit')->with('bloc', $bloc);
    }
  
    public function update(Request $request, $id)
    {
        $bloc = Bloc::find($id);
        $input = $request->all();
        $bloc->update($input);
        return redirect('blog')->with('flash_message', 'Blog Updated!');  
    }
  
    public function destroy($id)
    {
        Bloc::destroy($id);
        return redirect('blog')->with('flash_message', 'Blog deleted!');  
    }
}