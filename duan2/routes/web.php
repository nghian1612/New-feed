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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','loginController@getloginClient');
Route::post('login','loginController@postloginClient');
Route::get('logout','loginController@getlogoutClient');
Route::get('register',function(){
    return view('client.register');
});
Route::post('register','loginController@register');

Route::group(['prefix'=>'client', 'middleware'=>'clientlogin'],function(){
    Route::get('profile/{id}','profileController@show')->name('profile');
    Route::get('newsfeed/{id}','newsfeedController@show')->name('newsfeed');
    Route::get('allprofile','allprofileController@show');
    Route::get('companies','companiesController@show');
    Route::get('job','jobController@show');
    Route::post('updateabout','profileController@updateabout');
    Route::get('followon/{id}','profileController@followon');
    Route::get('followoff/{id}','profileController@followoff');
    Route::get('ajax/exp/{idExp}','profileController@getexp');
    Route::post('addexp','profileController@addExp');
    Route::post('updateexp','profileController@updateExp');
    Route::get('deleteexp/{id}','profileController@deleteExp');
});




