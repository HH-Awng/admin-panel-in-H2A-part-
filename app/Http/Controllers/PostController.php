<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('feature')) {
            $title=$request->title;
            $description=$request->description;
            $short_description=$request->short_description;
            $category=$request->category; 

            $feature=$request->file('feature');
            $path=public_path('/storage/uploads/');
            $name=time().".".$feature->getClientOriginalExtension();
            $feature->move($path, $name);
        }

       
        

         $post= new Post;
         $post->title=$title;
         $post->description=$description;
         $post->short_description=$short_description;
         $post->category_id=$category;
         $post->feature=$name;
         $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
