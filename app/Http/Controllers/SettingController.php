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
        $settings=Setting::all();
        return view('settings.view',compact('settings'));
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
        $filename = 'cover-'.time().'.'.$extension;
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
    
    return redirect('/viewsetting')->with('success','Seuccessfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $settings=Setting::orderBy('title','DESC')->paginate(3);
        return view('settings.show', compact('settings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $settings = Setting::findOrFail($id);
        return view('settings.edit', compact('settings'));
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
        $settings = Setting::findOrFail($id);
        $setting->title = $request->input('title');
        $setting->email = $request->input('email');
        $setting->descripton = $request->input('description');

        if($request->hasfile('logo')){
            $file = $request->file('logo');
                $extension = $request->logo->getClientOriginalExtension();
                $fileName = uniqid().'.'.$extension;
                $file->move('/storage/settingimage', $fileName);
                $logo = $fileName;
                $setting-> logo = $logo;
            }else {
                $setting->logo = '';
            }
            if($request->hasfile('coverphoto')){
                $file = $request->file('coverphoto');
                    $extension = $request->coverphoto->getClientOriginalExtension();
                    $fileName = uniqid().'.'.$extension;
                    $file->move('/storage/settingimage', $fileName);
                    $coverphoto = $fileName;
                    $setting->coverphoto = $coverphoto;
            } else {
                $setting->coverphoto = '';
            }

            $setting->save();
            return redirect('/viewsetting')->with('success', 'Your info are updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Setting::findOrFail($id)->delete()) {
            return redirect()->back()->with('success', 'Delete Successfully!');
        }
    }
}
