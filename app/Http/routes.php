<?php


*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('auth/login');
    })->middleware('guest');

    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');

    Route::auth();

});
