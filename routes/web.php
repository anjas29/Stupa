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
    return view('login');
});

Route::get('login', 'AuthController@getLogin')->name('login');
Route::post('login', 'AuthController@postLogin')->name('login.post');
Route::get('logout', 'AuthController@getLogout')->name('logout');

Route::group(array('prefix' => 'admin', 'middleware'=>'auth:users'), function(){
	Route::get('/', 'HomeController@getAdminIndex');

	Route::get('index', 'HomeController@getAdminIndex')->name('admin.index');

	Route::resource('period', 'PeriodController');
	Route::post('period/activate', 'PeriodController@activatePeriod')->name('period.activate');

	Route::resource('classes', 'ClassesController');

	Route::resource('teacher', 'TeacherController');

	Route::resource('student', 'StudentController');

	Route::resource('course', 'CourseController');

	Route::resource('detail_course', 'DetailCourseController');

	Route::resource('presence', 'PresentController');
});

Route::group(array('prefix'=>'teacher', 'as'=>'user_teacher.', 'middleware'=>'auth:teachers'), function(){
	Route::get('/', 'HomeController@getTeacherIndex');

	Route::get('index', 'HomeController@getTeacherIndex')->name('index');

	Route::resource('course', 'TeacherCourseController');
	Route::resource('presence', 'TeacherPresenceController');
	Route::post('presence/create', 'TeacherPresenceController@postCreate');
});

Route::get('/images/{filename}', function ($filename)
{
    $path = storage_path() . '/app/public/' . $filename;

    if(!File::exists($path)) return abort('404');

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});