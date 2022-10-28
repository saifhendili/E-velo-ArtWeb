<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comments;
class CommentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Comments::all();
        return View('comment.index')->with('blogs', $blogs);
    }
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $Blog=Blog::all();
        return View('comment.create')->with('Blog', $Blog);
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
            'cmnt' =>'required',
            'blog_id' =>'required', 
               ]);
        $input = $request->all();
        Comments::create($input);
        return redirect('blogs')->with('flash_message', 'Comments Addedd!');  
    }
       /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Blog = Comments::find($id);
        return view('comment.show')->with('Blog', $Blog);
    }
      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Blog = Comments::find($id);
        return view('comment.edit')->with('Blog', $Blog);
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
        $Blog = Comments::find($id);
        $input = $request->all();
        $Blog->update($input);
        return redirect('admin/comment')->with('flash_message', 'Comments Updated!'); 
    }
       /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comments::destroy($id);
        return redirect('admin/comment')->with('flash_message', 'Comments deleted!');  
    }

}
