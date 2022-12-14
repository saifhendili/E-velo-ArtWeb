<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use DB;
use App\Models\Blog;
class BlogUserController extends Controller
{   public function index()
    {
       
        $blog = Blog::all();
        return view ('bloguser.index')->with('blog', $blog);
    }
    
    public function create()
    {
        return view('bloguser.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Blog::create($input);
        return redirect('blogs')->with('flash_message', 'Blog Addedd!');  
    }
    
    
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('bloguser.CommentsBloc')->with('blog', $blog);
    }
    
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('bloguser.edit')->with('blog', $blog);
    }
    public function update(Request $request, $id)
    {  
        $request->validate([
            'description' =>'required',
        
            
               ]);
        $blog = Blog::find($id);
        $input = $request->all();
        $blog->update($input);
        return redirect('blogs')->with('flash_message', 'blog Updated!');  
    }
  
    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect('blogs')->with('flash_message', 'Blog deleted!');  
    }
    public function getComment($blog_id)
    {
        $eventscyclicte = Blog::find($blog_id);
        return view('bloguser.CommentsBloc')->with('eventscyclicte', $eventscyclicte);
    }
    }

