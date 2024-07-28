<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\Skill;
use App\Models\User;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Project;
use App\Models\Certification;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Route::get('/', function () {
	$details = User::all();
	$profile_pic = Profile::all();
	$projects = Project::all();
    return view('index',compact('details','projects','profile_pic'));
});
*/
Route::get('/',function (){
    return view('welcome');
});


Route::controller(AccountController::class)->group(function(){
	//reset password
	Route::get('login','index')->middleware('alreadyLoggedIn')->name('login');
	Route::get('forget-password','forgetPassword')->name('forget.password.get');
	Route::post('forget-password','submitPassword')->name('forget.password.post');
	Route::get('reset-password/{token}','showResetForm')->name('reset.password.get');
	Route::post('reset-password','submitReset')->name('reset.password.post');

 //Route::get('login','index')->name('login');

	Route::get('view.profile/{ow}','show')->name('view.profile');
    Route::post('update.profile/{profile}','update')->name('update.profile');
	Route::post('login.custom','customLogin')->name('login.custom');
    Route::get('register','newAccount')->middleware('alreadyLoggedIn')->name('register');

    Route::post('register.custom','store')->name('register.custom');
    Route::get('dashboard','dashboard')->middleware('isLoggedIn')->name('dashboard');
    Route::get('signout','destroy')->name('signout');
    Route::get('add.profile_pic','profile_pic')->name('add.profile_pic');
    Route::post('register.profile_pic/{name}','storeprofile_pic')->name('register.profile_pic');
});



Route::controller(ProjectController::class)->group(function(){
Route::post('register.project','store')->name('register.project');
Route::get('newproject','index')->name('newproject');
Route::get('view.projects','show')->name('view.projects');
Route::get('project.destroy/{id}','destroy')->name('project.destroy');
Route::get('project.more/{id]','projectMore')->name('project.more');
Route::get('project.moredetails/{id}','moreDetails')->name('project.moredetails');
});
Route::controller(ResumeController::class)->group(function(){
Route::get('certification.more/{id}','certMore')->name('certification.more');
Route::get('certification.destroy/{id}','destroyCert')->name('certification.destroy');
Route::post('cert.update/{cert}','updateCert')->name('cert.update');
});
//




Route::get('view.education','ResumeController@viewEducation')->name('view.education');
Route::get('view.experience','ResumeController@viewExperience')->name('view.experience');
Route::get('view.certificate','ResumeController@viewCertificate')->name('view.certificate');


Route::get('skill.more/{id}','ResumeController@skillMore')->name('skill.more');
Route::get('view.skills','ResumeController@viewSkills')->name('view.skills');

Route::post('update.skill/{skill}','ResumeController@updateSkill')->name('update.skill');
Route::post('register.skill','ResumeController@storeSkill')->name('register.skill');
Route::post('register.education','ResumeController@storeEducation')->name('register.education');
Route::get('new.skill','ResumeController@newSkill')->name('new.skill');

Route::get('experience.destroy/{id}','ResumeController@destroyExperience')->name('experience.destroy');
Route::get('experience.more/{id}','ResumeController@moreExperience')->name('experience.more');
Route::post('update.experience/{id}','ResumeController@updateExperience')->name('update.experience');


Route::get('new.experience','ResumeController@newExperience')->name('new.experience');
Route::get('new.education','ResumeController@newEducation')->name('new.education');
Route::get('new.cerfication','ResumeController@newCertification')->name('new.cerfication');

Route::post('register.experience','ResumeController@storeExperience')->name('register.experience');
Route::post('register.certification','ResumeController@storeCertification')->name('register.certification');



Route::get('index.skills','ResumeController@showSkills')->name('index.skills');
Route::get('index.education','ResumeController@showEducation')->name('index.education');
Route::get('index.experience','ResumeController@showExperience')->name('index.experience');
Route::get('index.home','ResumeController@toHome')->name('index.home');
Route::post('mail.submit','AccountController@sendMail')->name('mail.submit');



