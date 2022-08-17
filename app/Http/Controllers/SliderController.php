<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::all();
        return view('backend.slider.showData',compact('sliders'));
    }


    public function create()
    {
        return view('backend.slider.create');
    }


    public function store(Request $request)
    {
        $user = new Slider();

        if($request->hasFile('image')){
            $allowedExtension = ['pdf','jpg','png'];
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            // $check = in_array($extension,$allowedExtension);

            // if($check){
                $name = time().$file->getClientOriginalName();
                $file->move(public_path('images'),$name);
                $user->image = $name;
            // }
        }

    $user->save();
    $request->session()->flash('msg', 'Data Successfully Created');

    return redirect()->back();
    }


    public function show($id)
    {
        $user = Slider::find($id);
        return view('backend.slider.edit',compact('user'));
    }




    public function update(Request $request, $id)
    {
        $user = Slider::find($id);

        if($request->hasFile('image')){
            $destination = public_path('images/').$user->image;
            if($user->image != '' && $user->image != null)
            unlink($destination);

            $allowedExtension = ['pdf','jpg','png'];
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            // $check = in_array($extension,$allowedExtension);

            // if($check){
                $name = time().$file->getClientOriginalName();
                $file->move(public_path('images'),$name);
                $user->image = $name;
            // }
        }

        $user->save();

        $request->session()->flash('msg', 'Data Successfully Updated');
        return redirect()->back();
    }


    public function destroy($id)
    {
        $user = Slider::find($id);
        $user->delete();
        session()->flash('msg', 'Data Deleted Successfully');
        return redirect()->back();
    }
}
