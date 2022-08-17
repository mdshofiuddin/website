<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Mission;

class componentController extends Controller
{
    public function about(){

        $about = Flight::first();
        return view('component.about',compact('about'));
    }

    public function mission(){

        $mission = Mission::first();
        return view('component.missionVission',compact('mission'));
    }

    public function missionPage(){

        $mission = Mission::first();
        return view('page.missionVissionPage',compact('missionPage'));
    }


}
