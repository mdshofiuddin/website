<?php

namespace App\Http\Controllers;

use App\Models\Coundown;
use App\Http\Requests\StoreCoundownRequest;
use App\Http\Requests\UpdateCoundownRequest;
use Illuminate\Http\Request;

class CoundownController extends Controller
{

    public function index()
    {
        $countdowns = Coundown::all();
        return view('backend.countdown.showData',compact('countdowns'));
    }


    public function create()
    {
        return view('backend.countdown.create');
    }


    public function store(Request $request)
    {

        $user = new Coundown();


    $user->coundownOne   = $request->input('coundownOne');
    $user->coundownTwo   = $request->input('coundownTwo');
    $user->coundownThree = $request->input('coundownThree');
    $user->coundownFour  = $request->input('coundownFour');

    $user->save();
    $request->session()->flash('msg', 'Data Successfully Created');

    return redirect()->back();
    }

    public function show($id)
    {
        $user = Coundown::find($id);
        return view('backend.countdown.edit',compact('user'));
    }


    public function update(Request $request,$id)
    {
        $user = Coundown::find($id);

        $user->coundownOne   = $request->input('coundownOne');
        $user->coundownTwo   = $request->input('coundownTwo');
        $user->coundownThree = $request->input('coundownThree');
        $user->coundownFour  = $request->input('coundownFour');

        $user->save();
        $request->session()->flash('msg', 'Data Successfully Updated');
        return redirect()->back();
    }


    public function destroy($id)
    {
        $user = Coundown::find($id);
        $user->delete();
        session()->flash('msg', 'Data Deleted Successfully');
        return redirect()->back();
    }
}
