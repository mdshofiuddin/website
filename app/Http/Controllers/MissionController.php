<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Http\Requests\StoreMissionRequest;
use App\Http\Requests\UpdateMissionRequest;
use Illuminate\Http\Request;

class MissionController extends Controller
{

    public function index()
    {
        $missions = Mission::all();
        return view('backend.mission.showData',compact('missions'));
    }


    public function create()
    {
        return view('backend.mission.create');
    }



    public function store(Request $request)
    {
        $user = new Mission();

        $this->validate($request,[
        'description'      =>  'required'
    ]);

    $user->description      = $request->input('description');

        if($request->hasFile('picture')){
            $allowedExtension = ['pdf','jpg','png'];
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            // $check = in_array($extension,$allowedExtension);

            // if($check){
                $name = time().$file->getClientOriginalName();
                $file->move(public_path('images'),$name);
                $user->picture = $name;
            // }
        }

    $user->save();
    $request->session()->flash('msg', 'Data Successfully Created');

    return redirect()->back();
    }


    public function show($id)
    {
        $user = Mission::find($id);
        return view('backend.mission.edit',compact('user'));
    }


    public function update(Request $request,$id)
    {
        $user = Mission::find($id);
        $user->description      = $request->input('description');

        if($request->hasFile('picture')){
            $destination = public_path('images/').$user->picture;
            if($user->picture != '' && $user->picture != null)
            unlink($destination);

            $allowedExtension = ['pdf','jpg','png'];
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            // $check = in_array($extension,$allowedExtension);

            // if($check){
                $name = time().$file->getClientOriginalName();
                $file->move(public_path('images'),$name);
                $user->picture = $name;
            // }
        }

        $user->save();

        $request->session()->flash('msg', 'Data Successfully Updated');
        return redirect()->back();
    }


    public function destroy( $id)
    {
        $user = Mission::find($id);
        $user->delete();
        session()->flash('msg', 'Data Deleted Successfully');
        return redirect()->back();
    }
}
