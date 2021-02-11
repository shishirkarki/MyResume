<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//Personal Information Route
Route::get('/basic/create','BasicController@create');
Route::get('/basic/index','BasicController@index');
Route::post('/basic_store', 'BasicController@store')->name('store');
Route::get('/Basic-edit/{id}','BasicController@edit')->name('edit');
Route::post('/Basic-update/{id}','BasicController@update')->name('update');
Route::get('/Basic-delete/{id}','BasicController@destroy')->name('delete');



//Work Route
Route::get('/work/create','WorkController@create');
Route::get('/work/index','WorkController@index');
Route::post('/work', 'WorkController@store')->name('work_store');
Route::get('/work-edit/{id}','WorkController@edit')->name('edit');
Route::post('/work-update/{id}','WorkController@update')->name('update');
Route::get('/work-delete/{id}','WorkController@destroy')->name('delete');

//Volunteer Route
Route::get('/volunteer/create','VolunteerController@create');
Route::get('/volunteer/index','VolunteerController@index');
Route::post('/volunteer', 'VolunteerController@store')->name('volunteer_store');
Route::get('/volunteer-edit/{id}','VolunteerController@edit')->name('edit');
Route::post('/volunteer-update/{id}','VolunteerController@update')->name('update');
Route::get('/volunteer-delete/{id}','VolunteerController@destroy')->name('delete');

//Education Route
Route::get('/education/create','EducationController@create');
Route::get('/education/index','EducationController@index');
Route::post('/education', 'EducationController@store')->name('education_store');
Route::get('/education-edit/{id}','EducationController@edit')->name('edit');
Route::post('/education-update/{id}','EducationController@update')->name('update');
Route::get('/education-delete/{id}','EducationController@destroy')->name('delete');


//Skill Route
Route::get('/skill/create','SkillController@create');
Route::get('/skill/index','SkillController@index');
Route::post('/skill', 'SkillController@store')->name('skill_store');
Route::get('/skill-edit/{id}','SkillController@edit')->name('edit');
Route::post('/skill-update/{id}','SkillController@update')->name('update');
Route::get('/skill-delete/{id}','SkillController@destroy')->name('delete');


//PDF
Route::get('resume','ResumeController@index')->name('Resume_index');
Route::get('Resume_download','ResumeController@download')->name('download');



// Google Login
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
