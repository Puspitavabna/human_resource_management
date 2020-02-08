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
		Route::resource('/admin_section','Admin\AdminSectionController');
		Route::resource('/admin_registers','Admin\AdminRegisterController');
		Route::resource('/admin_librarians','Admin\AdminLibrarianController');
		Route::resource('/admin_audits','Admin\AdminAuditController');
		Route::resource('/admin_medical_officers','Admin\AdminMedicalOfficerController');
		Route::resource('/admin_exam_controllers','Admin\AdminExamControllerController');
		Route::resource('/admin_student_instructors','Admin\AdminStudentInstructorController');
		Route::resource('/admin_planning_development','Admin\AdminPlanningDevelopmentOfficerController');
		Route::resource('/admin_hall_members','Admin\AdminHallMemberController');
        Route::resource('users', 'UserController', ['as' => 'admin']);
        Route::resource('/admin_faculty_members', 'Admin\FacultyMemberController');
        Route::resource('/admin_faculty_office', 'Admin\FacultyOfficeController');
        Route::resource('/admin_research_cell', 'Admin\ResearchCellController');
        Route::resource('/admin_cyber_center', 'Admin\CyberCenterController');
        Route::resource('/admin_bncc', 'Admin\BnccController');
        Route::resource('/admin_vc_office', 'Admin\VcOfficeController');
        Route::resource('/admin_traffic_section', 'Admin\TrafficSectionController');
        Route::resource('/admin_harassment', 'Admin\HarassmentController');
        Route::resource('/admin_physical_excercise', 'Admin\PhysicalExcerciseController');
        Route::resource('/admin_environment_development', 'Admin\EnvironmentDevelopmentController');
        Route::resource('/admin_officer_association', 'Admin\OfficerAssociationController');
        Route::resource('/admin_regulation', 'Admin\RegulationController');
        Route::resource('/admin_ict_cell', 'Admin\IctCellController');
        Route::resource('/admin_publication_office', 'Admin\PublicationOfficeController');
        Route::resource('/admin_pro_vc_office', 'Admin\ProVcOfficeController');

	});

