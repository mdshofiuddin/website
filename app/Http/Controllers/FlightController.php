<?php

namespace App\Http\Controllers;

use App\Models\Flight;
// use App\Http\Requests\StoreFlightRequest;
// use App\Http\Requests\UpdateFlightRequest;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class FlightController extends Controller
{

    public function index()
    {
        // $abouts = Flight::orderBy('id','desc')->limit(2)->get();
        $abouts = Flight::all();
        return view('backend.about.showData',compact('abouts'));
    }


    public function create()
    {

        return view('backend.about.create');
    }

    public function store(Request $request)
    {

        $user = new Flight();

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
        $user = Flight::find($id);
        return view('backend.about.edit',compact('user'));
    }


    public function update(Request $request, $id)
    {

        $user = Flight::find($id);
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


    public function destroy($id)
    {
        $user = Flight::find($id);
        $user->delete();
       session()->flash('msg', 'Data Deleted Successfully');
        return redirect()->back();
    }
}
