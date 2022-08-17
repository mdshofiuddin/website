<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Http\Requests\StoreCertificationRequest;
use App\Http\Requests\UpdateCertificationRequest;
use Illuminate\Http\Request;

class CertificationController extends Controller
{

    public function index()
    {
        $certifications = Certification::all();
        return view('backend.certification.showData',compact('certifications'));
    }

    public function create()
    {
        return view('backend.certification.create');
    }

    // public function store(StoreCertificationRequest $request)
    public function store(Request $request)
    {
        $user = new Certification();

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
        $user = Certification::find($id);
        return view('backend.certification.edit',compact('user'));
    }

    // public function update(UpdateCertificationRequest $request, Certification $id)
    public function update(Request $request, $id)
    {
        $user = Certification::find($id);

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
        $user = Certification::find($id);
        $user->delete();
        session()->flash('msg', 'Data Deleted Successfully');
        return redirect()->back();
    }
    
}
