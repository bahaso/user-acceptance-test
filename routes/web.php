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

Route::get('/dashboard','PagesController@dashboard');
Route::get('/userlist','PagesController@userlist');
Route::get('/projects','ProjectController@projectList');
Route::get('/profile','PagesController@profile');
Route::get('/login', array('uses' => 'PagesController@showLogin'));
Route::post('/doLogin', array('uses' => 'PagesController@doLogin'));
Route::get('/logout','PagesController@logout');
Route::get('/registration','RegisterController@registration');
Route::post('/doRegistration','RegisterController@doRegistration');
Route::group(['middleware' => 'PreventBack'],function(){
	
	Route::get('/dashboard', 'PagesController@dashboard');
});
Route::get('delete/{id}','PagesController@delete');
Route::get('/update/{id}','UpdateController@index');
Route::post('/do_update','UpdateController@do_update');
Route::post('/createProject','ProjectController@createProject');
Route::get('/createProjectForm','ProjectController@createProjectForm');
Route::get('/testcases','ProjectController@displayTestCase');
Route::get('deleteProject/{id}','ProjectController@deleteProject');
Route::get('TestCase','ProjectController@displayTestCase');
Route::get('/projects/{project_id}/createFeatureForm','ProjectController@createFeatureForm');
Route::post('/projects/{project_id}/createFeatureForm','ProjectController@createFeature');
Route::get('projects/{project_id}/featureList','ProjectController@featureList');
Route::get('projects/{project_id}/deleteFeature/{id}','ProjectController@deleteFeature');
Route::get('featureList/{feature_id}/actionList','ProjectController@actionList');
Route::get('actionList/{action_id}/createCaseForm','ProjectController@createCaseForm');
Route::post('actionList/{action_id}/createCaseForm','ProjectController@createCase');



