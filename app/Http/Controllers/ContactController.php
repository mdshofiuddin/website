<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('backend.contact.showData',compact('contacts'));
    }


    public function create()
    {
        return view('backend.contact.create');
    }


    public function store(Request $request)
    {

        $user = new Contact();


    $user->address   = $request->input('address');
    $user->contacts   = $request->input('contacts');
    $user->usefullink = $request->input('usefullink');
    $user->otherslink  = $request->input('otherslink');

    $user->save();
    $request->session()->flash('msg', 'Data Successfully Created');

    return redirect()->back();
    }

    public function show($id)
    {
        $user = Contact::find($id);
        return view('backend.contact.edit',compact('user'));
    }


    public function update(Request $request,$id)
    {
        $user = Contact::find($id);

        $user->address   = $request->input('address');
        $user->contacts   = $request->input('contacts');
        $user->usefullink = $request->input('usefullink');
        $user->otherslink  = $request->input('otherslink');

        $user->save();
        $request->session()->flash('msg', 'Data Successfully Updated');
        return redirect()->back();
    }


    public function destroy($id)
    {
        $user = Contact::find($id);
        $user->delete();
        session()->flash('msg', 'Data Deleted Successfully');
        return redirect()->back();
    }
}
