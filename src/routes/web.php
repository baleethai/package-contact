<?php 

Route::group(['namespace' => 'Tum\Contact\Http\Controllers'], function () {
    Route::get('contact', 'ContactController@getIndex')->middleware('web');
    Route::post('contact', 'ContactController@postIndex')->name('contact'); 
});