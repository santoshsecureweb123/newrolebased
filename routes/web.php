<?php

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


/* Manager Route */

/*Route::get('/', function () {
    return view('manager.manager.dashboard');
});*/

Route::group(['namespace' => 'manager','middleware' => ['isManager']], function () {

	Route::get('dashboard', function () {
    return view('manager.manager.dashboard'); });
	Route::get('allskill','SkillController@addSkillView')->name('allskill');
	Route::post('allskill','SkillController@addNewskill')->name('allskill');
	Route::post('getskill','SkillController@getSkill')->name('getskill');
	Route::post('deleteskill','SkillController@deleteSkill')->name('deleteskill');
	Route::post('skillStatus','SkillController@skillStatus')->name('skillStatus');
	Route::get('addnew','UserController@showUserForm')->name('addnew');
	Route::post('addnew','UserController@addNewUser')->name('addnew');
	Route::get('allUser','UserController@getAllUser')->name('allUser');
	Route::get('deleteUser','UserController@deleteUser')->name('deleteUser');
	Route::get('editUser','UserController@editUser')->name('editUser');
});


/* End Manager Route */

Route::group(['namespace' => 'superAdmin','middleware' => ['isSuperAdmin']], function () {	
	Route::get('superAdmin','UserController@dashboard')->name('superAdmin');
});

Route::group(['namespace' => 'user','middleware' => ['isUser']], function () {
	Route::get('userdashboard','UserController@dashboard')->name('userdashboard');
});

Route::get('/home', 'HomeController@index')->name('home');
