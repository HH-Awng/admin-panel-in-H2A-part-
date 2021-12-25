<?php

namespace App\Http\Controllers;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('settings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $setting = new Setting;
        $setting->title = $request->title;
        $setting->email = $request->email;
        $setting->description = $request->description;

    if ($request->hasfile('coverphoto')) {
        $file = $request->file('coverphoto');
        $extension = $file->getClientOriginalExtension();
        $filename = 'coverphoto-'.time().'.'.$extension;
        $file->move('storage/settingimage', $filename);
        $setting->coverphoto = $filename;
    } else {
        $setting->coverphoto = '';
    }
    if ($request->hasfile('logo')) {
        $file = $request->file('logo');
        $extension = $file->getClientOriginalExtension();
        $filename = 'logo-'.time().'.'.$extension;
        $file->move('storage/settingimage/', $filename);
        $setting->logo = $filename;
    } else {
        $setting->logo = '';
    }
  
    $setting->save();
    
    return redirect()->back()->with('success','Seuccessfully!');
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
