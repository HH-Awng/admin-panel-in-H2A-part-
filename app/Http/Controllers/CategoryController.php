<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderby('order', 'ASC')->paginate(10);
        return view('category.index', compact('categories'));
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
    public function store(CategoryRequest $request)
    {
        $name = $request->name;
        $slug = $request->slug;
        $order = $request->order;


        $category = new Category;
        $category->name = $name;
        $category->slug = $slug;
        $category->order = $order;
        $category->save();
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
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $name = $request->name;
        $slug = $request->slug;
        $order = $request->order;

        $category = Category::findOrFail($id);
        $category->name = $name;
        $category->slug = $slug;
        $category->order = $order;
        $category->save();
        return redirect('/category')->with('success', 'Record updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('success', 'Record deleted successfully!');
    }

    public function deleteCheckCategory(Request $request)
    {
        $ids = $request->ids;
        Category::whereIn('id',$ids)->delete();
        return response()->json(['success'=>"Record deleted successfully!"]);
    }
}
