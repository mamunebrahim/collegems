<?php

// Model binding
Route::model('admissions', 'App\Models\Admission');

Route::bind('admissions', function($value, $route){
	return App\Models\Admission::whereId($value)->first();
});
// Model binding
Route::model('exams', 'App\Models\Exam');

Route::bind('exmas', function($value, $route){
	return App\Models\Exam::whereId($value)->first();
});
// Model binding
Route::model('results', 'App\Models\Result');

Route::bind('results', function($value, $route){
	return App\Models\Result::whereId($value)->first();
});


// Auth
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::controllers([
    'password' => 'Auth\PasswordController',
]);
 Route::get('admin', [
 	'as' => 'admin',
 	'uses' => 'AdminController@index',
 	'middleware' => 'admin'
 ]);

// Admin APIs
// Route::group(['prefix' => 'api', 'middleware' => 'admin'], function(){
	
// 	//Admission Resource Route
// 	Route::resource("admissions", "AdmissionsController", ['except' => ['create', 'edit']]);

//     //Academic_info Resource Routes
// 	Route::resource('academic_infos_temp', 'AcademicinfostempController', ['except' => ['create', 'edit']]);
	

	
// 	//Admin Routes
// 	Route::post("admin/update", "AdminController@update");
// 	Route::get("admin/changefilepassword/{pass?}", "AdminController@changeFilePassword");
// 	Route::get("admin/getinfo", "AdminController@getInfo");
// 	Route::get("admin/cleartemp", "AdminController@clearTemp");
// });

// Guest Page Routes
Route::get('/', 'PageController@index');
Route::get('gallery', 'PageController@gallery');
Route::get('admission', 'PageController@admission');
Route::post('admissions', 'AdmissionController@store');
Route::get('results', 'PageController@results');
Route::get('contact', 'PageController@contact');
Route::get('developers', 'PageController@developers');
Route::get('login', 'PageController@login');




// Admin Routes
Route::group(['prefix'=>'admin'], function(){
	Route::get('/'		 , 'AdminController@overviews');
	Route::get('settings', 'AdminController@settings');
	Route::post('passwordchange', 'AdminController@changePassword');
	
	Route::resource('exams' 	   , 'ExamController');
	Route::resource('exams.results', 'ResultController');
	Route::resource('admissions'   , 'AdmissionController');
});

// Student Routes
Route::group(['prefix'=>'student'], function(){
    Route::get('/' , 'StudentController@student_info');
    Route::get('exams'  , 'StudentController@exams');
    Route::get('results'  , 'StudentController@results');
    Route::get('settings'  , 'StudentController@settings');

    

});

// Admision
//Route::post('admissions', 'AdmissionsController@store');

