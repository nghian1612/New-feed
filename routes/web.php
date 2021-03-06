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
Route::get('/back','adminLoginController@getloginAdmin');
Route::post('back/login','adminLoginController@postloginAdmin');
Route::get('back/logout','adminLoginController@getlogoutAdmin');
Route::group(['prefix'=>'admin', 'middleware'=>'clientlogin'],function(){
    Route::get('usermanager','adminUserController@getUserManager')->name('usermanager');
    Route::get('companymanager','adminUserController@getCompanyManager')->name('companymanager');
    Route::get('jobmanager','adminPostController@getJobManager');
    Route::get('normalmanager','adminPostController@getNormalManager');

    Route::get('jobmanager/hide/{id}','adminPostController@getJobManagerHide');
    Route::get('jobmanager/show/{id}','adminPostController@getJobManagerShow');
    Route::get('jobmanager/delete/{id}','adminPostController@getJobManagerDelete');

    Route::get('normalmanager/hide/{id}','adminPostController@getNormalManagerHide');
    Route::get('normalmanager/show/{id}','adminPostController@getNormalManagerShow');
    Route::get('normalmanager/delete/{id}','adminPostController@getNormalManagerDelete');

    Route::get('skillmanager','adminSkillController@getSkillManager');
    Route::post('skillmanager/add','adminSkillController@getSkillManagerAdd');
    Route::get('skillmanager/delete/{id}','adminSkillController@getSkillManagerDelete');
    Route::get('skillmanager/edit/{id}','adminSkillController@getSkillManagerEdit');
    Route::post('skillmanager/update','adminSkillController@getSkillManagerUpdate');
});

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
    Route::post('profile/{id}','profileController@showpost');
    Route::get('newsfeed/{id}','newsfeedController@show')->name('newsfeed');
    Route::get('allprofile','allprofileController@show');
    Route::get('companies','companiesController@show');
    
    Route::get('test/{id}','profileController@getTest');

    Route::get('postAbout/{idUser}','profileController@postAbout');
    Route::post('updateabout','profileController@updateAbout');
    
    Route::post('updatelocation','profileController@updatelocation');
    Route::post('updatestalish','profileController@updatestalish');

    Route::get('followon/{id}','profileController@followon');
    Route::get('followoff/{id}','profileController@followoff');

    Route::get('ajax/exp/{idExp}','profileController@getexp');
    Route::post('addexp','profileController@addExp');
    Route::post('updateexp','profileController@updateExp');
    Route::get('deleteexp/{id}','profileController@deleteExp');

    Route::get('ajax/edu/{idEdu}','profileController@getedu');
    Route::post('addedu','profileController@addEdu');
    Route::post('updateedu','profileController@updateEdu');
    Route::get('deleteedu/{id}','profileController@deleteEdu');

    Route::post('addski','profileController@addSki');
    Route::get('deleteski/{id}','profileController@deleteSki');


    Route::post('search/name','profileController@searchskillAjax')->name('search');
    
    Route::post('addjob','profileController@addFeed');
    Route::get('deletefeed/{id}','profileController@deleteFeed');


    Route::post('addcomment','profileController@addComment');

    Route::get('job','jobController@show');
    Route::get('detailjob/{id}','jobController@showjob');
    Route::get('detailpost/{id}','jobController@showpost');

    Route::get('job/searchjob','jobController@searchJob');
});




