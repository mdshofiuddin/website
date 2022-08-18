<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\CoundownController;
use App\Http\Controllers\WorkProcessController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\componentController;
use App\Http\Middleware\Admin;

Route::group(['middleware'=>'auth'],function(){

// User Panel
Route::controller(userController::class)->group(function(){
    Route::get('/showData','index')->name('showData')->middleware(Admin::class);
    Route::get('/create','create')->name('create')->middleware(Admin::class);
    Route::post('/store','store')->name('store')->middleware(Admin::class);
    Route::get('/editData/{id}','show')->name('editData')->middleware(Admin::class);
    // Route::get('/changePassword','changePassword')->name('changePassword')->middleware(Admin::class);
    // Route::post('/updatePassword/{id}','updatePassword')->name('updatePassword')->middleware(Admin::class);
    Route::post('/updateData/{id}','update')->name('updateData')->middleware(Admin::class);
    Route::get('deleteData/{id}','destroy')->name('deleteData')->middleware(Admin::class);
});

    // Route::get('/showData', [UserController::class,'index'])->name('showData');
    // Route::get('/create', [UserController::class,'create'])->name('create');
    // Route::post('/store', [UserController::class,'store'])->name('store');
    // Route::get('/editData/{id}', [UserController::class,'show'])->name('editData');
    // Route::post('/updateData/{id}', [UserController::class,'update'])->name('updateData');
    // Route::get('deleteData/{id}', [UserController::class,'destroy'])->name('deleteData');

// About Panel
    Route::get('/show-about', [FlightController::class,'index'])->name('show-about');
    Route::get('/create-about', [FlightController::class,'create'])->name('create-about');
    Route::post('/store-about', [FlightController::class,'store'])->name('store-about');
    Route::get('/editAbout/{id}', [FlightController::class,'show'])->name('editAbout');
    Route::post('/updateAbout/{id}', [FlightController::class,'update'])->name('updateAbout');
    Route::get('deleteAbout/{id}', [FlightController::class,'destroy'])->name('deleteAbout');

// Certification Panel
    Route::get('/show-certification', [CertificationController::class,'index'])->name('show-certification');
    Route::get('/create-certification', [CertificationController::class,'create'])->name('create-certification');
    Route::post('/store-certification', [CertificationController::class,'store'])->name('store-certification');
    Route::get('/editCertification/{id}', [CertificationController::class,'show'])->name('editCertification');
    Route::post('/updateCertification/{id}', [CertificationController::class,'update'])->name('updateCertification');
    Route::get('deleteCertification/{id}', [CertificationController::class,'destroy'])->name('deleteCertification');

// Slider Panel
    Route::get('/show-slider', [SliderController::class,'index'])->name('show-slider');
    Route::get('/create-slider', [SliderController::class,'create'])->name('create-slider');
    Route::post('/store-slider', [SliderController::class,'store'])->name('store-slider');
    Route::get('/editSlider/{id}', [SliderController::class,'show'])->name('editSlider');
    Route::post('/updateSlider/{id}', [SliderController::class,'update'])->name('updateSlider');
    Route::get('deleteSlider/{id}', [SliderController::class,'destroy'])->name('deleteSlider');

// Mission Panel
    Route::get('/show-mission', [MissionController::class,'index'])->name('show-mission');
    Route::get('/create-mission', [MissionController::class,'create'])->name('create-mission');
    Route::post('/store-mission', [MissionController::class,'store'])->name('store-mission');
    Route::get('/editMission/{id}', [MissionController::class,'show'])->name('editMission');
    Route::post('/updateMission/{id}', [MissionController::class,'update'])->name('updateMission');
    Route::get('deleteMission/{id}', [MissionController::class,'destroy'])->name('deleteMission');


// Countdown Panel
    Route::get('/show-coundown', [CoundownController::class,'index'])->name('show-coundown');
    Route::get('/create-coundown', [CoundownController::class,'create'])->name('create-coundown');
    Route::post('/store-coundown', [CoundownController::class,'store'])->name('store-coundown');
    Route::get('/editCoundown/{id}', [CoundownController::class,'show'])->name('editCoundown');
    Route::post('/updateCoundown/{id}', [CoundownController::class,'update'])->name('updateCoundown');
    Route::get('deleteCoundown/{id}', [CoundownController::class,'destroy'])->name('deleteCoundown');

// Working Process Panel
    Route::get('/show-process', [WorkProcessController::class,'index'])->name('show-process');
    Route::get('/create-process', [WorkProcessController::class,'create'])->name('create-process');
    Route::post('/store-process', [WorkProcessController::class,'store'])->name('store-process');
    Route::post('/store-process-modal', [WorkProcessController::class,'storeModal'])->name('store-process-modal');
    Route::get('/editProcess/{id}', [WorkProcessController::class,'show'])->name('editProcess');
    // Route::post('/updateProcess/{id}', [WorkProcessController::class,'update'])->name('updateProcess');
    Route::post('/updateProcessAjax', [WorkProcessController::class,'updateAjax'])->name('updateProcessAjax');
    Route::post('deleteProcess', [WorkProcessController::class,'destroy'])->name('deleteProcess');
// Route::get('deleteProcess/{id}', [WorkProcessController::class,'destroy'])->name('deleteProcess');

// Contact Panel
    Route::get('/show-contact', [ContactController::class,'index'])->name('show-contact');
    Route::get('/create-contact', [ContactController::class,'create'])->name('create-contact');
    Route::post('/store-contact', [ContactController::class,'store'])->name('store-contact');
    Route::get('/editContact/{id}', [ContactController::class,'show'])->name('editContact');
    Route::post('/updateContact/{id}', [ContactController::class,'update'])->name('updateContact');
    Route::get('deleteContact/{id}', [ContactController::class,'destroy'])->name('deleteContact');

// Management Panel
    Route::get('show-management', [ManagementController::class,'index'])->name('show-management');
    Route::get('create-management', [ManagementController::class,'create'])->name('create-management');
    Route::post('store-management', [ManagementController::class,'store'])->name('store-management');
    Route::get('editManagement/{id}', [ManagementController::class,'show'])->name('editManagement');
    Route::post('updateManagement/{id}', [ManagementController::class,'update'])->name('updateManagement');
    Route::get('deleteManagement/{id}', [ManagementController::class,'destroy'])->name('deleteManagement');
});

// Frontend
    Route::get('/', [AboutController::class,'index'])->name('home');
    Route::get('/about', [AboutController::class,'about'])->name('about.home');
    Route::get('/mission', [AboutController::class,'mission'])->name('mission.home');
    Route::get('/working', [AboutController::class,'working'])->name('working.home');
    Route::get('/management', [AboutController::class,'management'])->name('management.home');
    Route::get('/contact', [AboutController::class,'contact'])->name('contact.home');
    Route::get('/master', [AboutController::class,'master'])->name('master.home');
    Route::get('/dashboard', [AboutController::class,'dashboard'])->name('dashboard.home');


// Frontend Dynamic Page
    // Route::get('/about-component', [componentController::class,'about'])->name('component.about');
    // Route::get('/mission-page', [componentController::class,'missionPage'])->name('page.mission');

// Route::get('/', function () {
//     return view('component.index');
// });
// Route::get('about', function () {
//     return view('page.aboutPage');
// });

// Route::get('mission', function () {
//     return view('page.missionVissionPage');
// });
// Route::get('working', function () {
//     return view('page.workingProcessPage');
// });
// Route::get('management', function () {
//     return view('page.managementPage');
// });
// Route::get('contact', function () {
//     return view('page.contactPage');
// });
// Route::get('master', function () {
//     return view('backend.master');
// });

Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
