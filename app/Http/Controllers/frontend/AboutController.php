<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use App\Models\Contact;
// use Illuminate\Http\Request;
use App\Models\Flight;  //Flight for About
use App\Models\Management;
use App\Models\Mission;
use App\Models\WorkProcess;
use App\Models\Slider;

class AboutController extends Controller
{
    // For Home Page
    public function index(){
        // $about = Flight::first();   //Flight Model used for About Section
        $about = Flight::latest()->first();
        $mission = Mission::latest()->first();
        $process = WorkProcess::all();
        $contact = Contact::all();
        $certifications = Certification::all();
        $managements = Management::all();
        $sliders = Slider::all();
        return view('component.index', compact('about','mission','process','contact','certifications','managements','sliders'));
    }

    public function about(){
        $abouts = Flight::all();
        $sliders = Slider::all();
        $certifications = Certification::all();
        return view('page.aboutPage',compact('abouts','certifications','sliders'));
    }

    public function mission(){
        $missions = Mission::all();
        // $missions = Mission::latest()->first();
        $sliders = Slider::all();
        return view('page.missionVissionPage', compact('missions','sliders'));
    }

    public function working(){
        $process = WorkProcess::all();
        $sliders = Slider::all();
        return view('page.workingProcessPage',compact('process','sliders'));
    }

    public function certification(){
        $certifications = Certification::all();
        $sliders = Slider::all();
        return view('component.certification',compact('certifications','sliders'));
    }

    public function management(){
        $managements = Management::all();
        $sliders = Slider::all();
        return view('page.managementPage',compact('managements','sliders'));
    }

    public function contact(){
        $contact = Contact::all();
        $sliders = Slider::all();
        return view('page.contactPage',compact('contact','sliders'));
    }

    public function master(){
        return view('backend.master');
    }

}
