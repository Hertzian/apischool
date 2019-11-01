<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


    
Route::post('login', 'api\authController@login');
Route::post('signup', 'api\authController@signup');

Route::group(['middleware' => 'auth:api'], function(){

    Route::group(['prefix' => 'client'], function(){
        Route::get('logout', 'api\authController@logout');
        Route::get('profile', 'api\client\UsersController@index');
        Route::put('profile', 'api\client\UsersController@update');
        Route::get('students', 'api\client\StudentsController@index');
        Route::get('student/{studentId}', 'api\client\StudentsController@show');
        Route::get('matters/{studentId}', 'api\client\MattersController@index');
        Route::get('homeworks/{matterId}', 'api\client\HomeworksController@index');
        Route::get('exams/{matterId}', 'api\client\ExamsController@index');
    });

    Route::group(['prefix' => 'admin'], function(){
        Route::get('logout', 'api\authController@logout');

        // Users
        Route::get('users', 'api\admin\UsersController@index');
        Route::post('users', 'api\admin\UsersController@store');
        Route::put('user/{userId}', 'api\admin\UsersController@update');
        Route::delete('user/{userId}', 'api\admin\UsersController@destroy');
        
        // Students
        Route::get('students', 'api\admin\StudentsController@index');
        Route::post('students', 'api\admin\StudentsController@store');
        Route::put('student/{studentId}', 'api\admin\StudentsController@update');
        Route::delete('student/{studentId}', 'api\admin\StudentsController@destroy');

        // Groups
        Route::get('groups', 'api\admin\GroupsController@index');
        Route::post('groups', 'api\admin\GroupsController@store');
        Route::put('group/{groupId}', 'api\admin\GroupsController@update');
        Route::delete('group/{groupId}', 'api\admin\GroupsController@destroy');

        // Matters
        Route::get('matters', 'api\admin\MattersController@index');
        Route::post('matters', 'api\admin\MattersController@store');
        Route::put('matter/{matterId}', 'api\admin\MattersController@update');
        Route::delete('matter/{matterId}', 'api\admin\MattersController@destroy');

        // Exams
        Route::get('exams', 'api\admin\ExamsController@index');
        Route::post('exams', 'api\admin\ExamsController@store');
        Route::put('exam/{examId}', 'api\admin\ExamsController@update');
        Route::delete('exam/{examId}', 'api\admin\ExamsController@destroy');

        // Homeworks
        Route::get('homeworks', 'api\admin\HomeworksController@index');
        Route::post('homeworks', 'api\admin\HomeworksController@store');
        Route::put('homework/{homeworkId}', 'api\admin\HomeworksController@update');
        Route::delete('homework/{homeworkId}', 'api\admin\HomeworksController@destroy');

    });

});
