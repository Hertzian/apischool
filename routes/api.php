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

// Route::group(['prefix' => 'client'], function(){

    
    Route::post('login', 'api\client\authController@login');
    Route::post('signup', 'api\client\authController@signup');

    Route::group(['middleware' => 'auth:api'], function(){

        Route::group(['prefix' => 'client'], function(){
            Route::get('logout', 'api\client\authController@logout');
            Route::get('profile', 'api\client\UsersController@index');
            Route::put('profile', 'api\client\UsersController@update');
            Route::get('students', 'api\client\StudentsController@index');
            Route::get('student/{studentId}', 'api\client\StudentsController@show');
            Route::get('matters/{studentId}', 'api\client\MattersController@index');
            Route::get('homeworks/{matterId}', 'api\client\HomeworksController@index');
            Route::get('exams/{matterId}', 'api\client\ExamsController@index');
        });

    });

// });
