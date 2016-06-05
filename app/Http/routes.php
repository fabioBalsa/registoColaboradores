<?php

Route::group(['middleware' => 'web'], function () {
    
    Route::auth();
    
    Route::get('/home', 'HomeController@index');
    
    Route::get('/', [
       'as' => 'employees', 
       'uses' => 'employeeController@index']);
    
    
    Route::group(['prefix' => 'employees'], function () {

        Route::get('/details/{id}', [
            'as' => 'details', 
            'uses' => 'employeeController@show'])
            ->where('id', '[0-9]+');
        
        Route::get('/change/{id}', [ 
            'as'=> 'change', 
            'uses' => 'employeeController@edit']);

        Route::get('/new', [ 
            'as'=> 'new', 
            'uses' => 'employeeController@create']);

        Route::post('/adds', [
            'as'=>'adds', 
            'uses'=> 'employeeController@store']);

        Route::delete('/remove/{id}', [ 
            'as'=> 'remove', 
            'uses' => 'employeeController@destroy'])
            ->where('id', '[0-9]+');

        Route::put('/update/{id}', [
            'as'=>'update', 
            'uses'=> 'employeeController@update'])
            ->where('id', '[0-9]+');
    });
    
});
