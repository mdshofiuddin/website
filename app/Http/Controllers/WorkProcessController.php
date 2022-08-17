<?php

namespace App\Http\Controllers;

use App\Models\WorkProcess;
use Illuminate\Http\Request;
use App\Http\Requests\StoreWorkProcessRequest;
use App\Http\Requests\UpdateWorkProcessRequest;

class WorkProcessController extends Controller
{
    public function index()
    {
        $workProcess = WorkProcess::all();
        return view('backend.workProcess.showData',compact('workProcess'));
    }


    public function create()
    {
        return view('backend.workProcess.create');
    }


    public function store(Request $request)
    {

        $user = new WorkProcess();


    $user->process   = $request->input('process');

    $user->save();
    $request->session()->flash('msg', 'Data Successfully Created');

    return redirect()->back();

    }

    public function show($id)
    {
        $user = WorkProcess::find($id);
        return view('backend.workProcess.edit',compact('user'));
    }


    // public function update(Request $request,$id)
    // {
    //     $user = WorkProcess::find($id);

    //     $user->process   = $request->input('process');
    //     $user->save();
    //     $request->session()->flash('msg', 'Data Successfully Updated');
    //     return redirect()->route('show-process');
    // }

    public function updateAjax(Request $request)
    {
        $user = WorkProcess::find($request->up_id);
        $user->process   = $request->up_process;
        $user->save();
        // $request->session()->flash('msg', 'Data Successfully Updated');
        return response()->json([
            'status' => 'success',
            'msg' => 'Data successfully updated'
        ]);
    }

    // ------------------------------------------For Delete a Item------------------------------------------
    //     public function destroy($id)
    //     {
    //             $user = WorkProcess::find($id);
    //             $user->delete();
    //             session()->flash('msg', 'Data Deleted Successfully');
    //             return redirect()->back();
    //         }
    // ------------------------------------------For Delete a Item------------------------------------------


    public function destroy(Request $request )
    {
        $user = WorkProcess::find($request->delete_id);
        // dd($user);
        $user->delete();
        return response()->json([
            'status' => 'success',
            'msg' => 'Successfully deleted'
        ]);
    }



    public function storeModal(Request $request)
    {

        $user = new WorkProcess();

        $user->process   = $request->input('process');
        $user->save();
        // $request->session()->flash('msg', 'Data Successfully Created');
        return response()->json([
            'status' => 'success',
            'msg' => 'Successfully data added'
        ]);
        }


}
