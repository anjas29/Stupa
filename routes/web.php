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
    return view('welcome');
});

Route::group(array('prefix' => 'admin'), function(){
	Route::get('index', function(){
		return view('admin.dashboard.index');
	});

	Route::resource('period', 'PeriodController');
	Route::post('period/activate', 'PeriodController@activatePeriod')->name('period.activate');

	Route::resource('classes', 'ClassesController');

	Route::resource('teacher', 'TeacherController');

	Route::resource('student', 'StudentController');

	Route::resource('course', 'CourseController');

	Route::resource('detail_course', 'DetailCourseController');

	Route::resource('present', 'PresentController');
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
