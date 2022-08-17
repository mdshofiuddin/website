<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Redirect;






class userController extends Controller
{


    public function index()
    {
        $users = User::all();
        return view('backend.showData.showData',compact('users'));
    }

    public function create()
    {
        $users = User::all();
        return view('backend.create.createUser');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      =>  'required',
            'email'     =>  'required | unique:users',
            'phone'     =>  'required',
            'role'     =>  'required',
        ]);
        $user = new User();



        $user->name      = $request->input('name');
        $user->email     = $request->input('email');
        $user->phone     = $request->input('phone');
        $user->role      = $request->input('role');
        $user->password  = Hash::make($request->input('password'));


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

        $user = User::find($id);
        return view('backend.editData.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name'  => 'required',
            'email' => 'required',
            'phone' => 'required',
            'role'  => 'required',
        ]);

        $user = User::find($id);
        $user->name      = $request->input('name');
        $user->email     = $request->input('email');
        $user->phone     = $request->input('phone');
        $user->role      = $request->input('role');
        $user->password  = Hash::make($request->input('password'));


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
        $user = User::find($id);
        $user->delete();
        session()->flash('msg', 'Data Deleted Successfully');
        return redirect('/showData');

    }



}
