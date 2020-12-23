<?php

use Illuminate\Support\Facades\Route;





app()->singleton('App\Services\Twitter', function(){
        return new  App\Services\Twitter("lobnaloubna");
});

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

Route::get('/',function(){
    dd(app('App\Example'));
    return view('welcome');
});

/*
GET /projects  (index)
GET /projects/create (create)
GET /projects/1 (show)
POST /projects (store)
GET /projects/1/edit (edit)
PATCH /projects/1 (update)
DELETE /projects/1 (destroy)
*/

Route::resource('/projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::post('/completed-tasks/{task}','CompletedTasksController@store');

Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');

