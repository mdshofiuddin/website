<?php

namespace App\Http\Controllers;

use App\Models\Management;
// use App\Http\Requests\StoreManagementRequest;
// use App\Http\Requests\UpdateManagementRequest;
use Illuminate\Http\Request;

class ManagementController extends Controller
{

    public function index()
    {
        $managements = Management::all();
        return view('backend.management.showData',compact('managements'));
    }

    public function create()
    {
        return view('backend.management.create');
    }

    public function store(Request $request)
    {
        $user = new Management();

    //     $this->validate($request,[
    //     'description'      =>  'required'
    // ]);

    $user->name        = $request->input('name');
    $user->designation = $request->input('designation');

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
        $user = Management::find($id);
        return view('backend.management.edit',compact('user'));
    }


    public function update(Request $request, $id)
    {

        $user = Management::find($id);

        $user->name        = $request->input('name');
        $user->designation = $request->input('designation');

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
        $user = Management::find($id);
        $user->delete();
        session()->flash('msg', 'Data Deleted Successfully');
        return redirect()->back();
    }
}
