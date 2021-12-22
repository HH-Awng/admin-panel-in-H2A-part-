<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagsRequest;
use Illuminate\Http\Request;
use App\Models\Tags;
use RealRashid\SweetAlert\Facades\Alert;



class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $tags = Tags::orderby('id','DESC')->get();
        return view('tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagsRequest $request)
    {
        $tag =  $request->tags;

        $tags = new Tags;
        $tags->tags = $tag;
        $tags->save();
        return redirect()->back()->with('success', 'Record inserted successfully!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dewdwdw
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = Tags::findOrFail($id);
        return view('tags.edit', compact('tags'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagsRequest $request, $id)
    {
        $tags =  $request->tags;
        
        $tag = Tags::findOrFail($id);
        $tag->tags = $tags;
        $tag->save();
        return redirect('tags')->with('success', 'Record Updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Tags::findOrFail($id)->delete()) {
            return redirect()->back()->with('success', 'Record Deleted successfully!');
        }
    }
}

   //
