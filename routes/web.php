<?php

use Illuminate\Support\Facades\Route;
use App\Models\Skill;
use App\Models\User;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Project;
use App\Models\Certification;
use App\Models\Profile;
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

Route::get('/', function () {
	$details = User::all();
	$profile_pic = Profile::all();
	$projects = Project::all();
    return view('index',compact('details','projects','profile_pic'));
});

Route::get('login','AccountController@index')->name('login');
Route::post('login.custom','AccountController@customLogin')->name('login.custom');
Route::get('register','AccountController@newAccount')->name('register');

Route::post('register.custom','AccountController@store')->name('register.custom');
Route::get('dashboard','AccountController@dashboard')->name('dashboard');
Route::get('signout','AccountController@destroy')->name('signout');
Route::get('add.profile_pic','AccountController@profile_pic')->name('add.profile_pic');
Route::post('register.profile_pic/{name}','AccountController@storeprofile_pic')->name('register.profile_pic');



Route::post('register.project','ProjectController@store')->name('register.project');
Route::get('newproject','ProjectController@index')->name('newproject');
Route::get('view.projects','ProjectController@show')->name('view.projects');
Route::get('project.destroy/{id}','ProjectController@destroy')->name('project.destroy');
Route::get('project.more/{id]','ProjectController@projectMore')->name('project.more');
Route::get('certification.more/{id}','ResumeController@certMore')->name('certification.more');
Route::get('certification.destroy/{id}','ResumeController@destroyCert')->name('certification.destroy');
Route::post('cert.update/{cert}','ResumeController@updateCert')->name('cert.update');

//
Route::get('project.moredetails/{id}','ProjectController@moreDetails')->name('project.moredetails');


Route::get('view.profile/{ow}','AccountController@show')->name('view.profile');
Route::post('update.profile/{profile}','AccountController@update')->name('update.profile');
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



