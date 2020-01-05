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

Route::get('/', function () {
    return redirect(route('user.sign_in'));
});

Route::get('/user/forgot_password', [
    'uses' => 'UserController@forgotPassword',
    'as' => 'user.forgot_password'
]);

Route::get('/user/sign_in', [
    'uses' => 'UserController@getLogin',
    'as' => 'user.sign_in'
]);

Route::post('/user/sign_in', [
    'uses' => 'UserController@postLogin',
    'as' => 'user.post.sign_in'
]);

Route::get('/user/sign_up', [
    'uses' => 'UserController@beforeGetRegister',
    'as' => 'user.sign_up'
]);
Route::post('/user/sign_up/', [
    'uses' => 'UserController@postRegister',
    'as' => 'user.post.register'
]);

//Route::get('/', [
//    'uses' => 'HomeController@index',
//    'as' => 'home.index'
//]);

Route::get('/designation/{category}/{slug}', [
    'uses' => 'TutorialController@show',
    'as' => 'designation.show'
]);

Route::resource('/quiz_question','QuizQuestionController');
Route::resource('/quiz_result','QuizResultController');
Route::resource('/quiz_topic','QuizTopicController');

Route::group(['middleware' => 'auth' , 'prefix' => 'admin'] , function() {
		Route::get('/', [
		    'uses' => 'Admin\AdminController@index',
		    'as' => 'admin.index'
		]);
    Route::get('/', [
        'uses' => 'Admin\AdminController@index',
        'as' => 'admin.index'
    ]);

    Route::post('/logout' , [
        'uses' => 'Admin\AdminController@getLogout',
        'as' => 'admin.logout'
    ]);

		Route::post('/admin_login', [
		    'uses' => 'Admin\AdminController@login',
		    'as' => 'admin_post_login'
		]);
		Route::resource('/admin_designation','Admin\AdminDesignationController');
		Route::resource('/admin_faculty','Admin\AdminFacultyController');
		Route::resource('/admin_department','Admin\AdminDepartmentController');
		Route::resource('/admin_hall','Admin\AdminHallController');
		Route::resource('/admin_quiz_topic','Admin\AdminQuizTopicController');

	});
