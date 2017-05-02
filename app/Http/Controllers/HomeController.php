<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Student;
use App\Course;
use App\Present;
use App\DetailPresent;
use App\DetailCourse;

class HomeController extends Controller
{
    public function getAdminIndex()
    {
    	$teacher = Teacher::count();
    	$student = Student::count();
    	$detailCourse = DetailCourse::count();
    	$presence = Present::count();

    	$data = array(
    				'teacher'	=> $teacher,
    				'student'	=> $student,
    				'course'	=> $detailCourse,
    				'presence'	=> $presence,
    			);

    	return view('admin.dashboard.index')->withData($data);
    }

    public function getTeacherIndex()
    {
    	$id = auth('teachers')->user()->id;
    	$teacher = Teacher::count();
    	$student = Student::count();
    	$detailCourse = DetailCourse::whereHas('teacher', function($query) use ($id){
    										$query->where('id', $id);
    									})->count();
    	$presence = Present::whereHas('detail_course.teacher', function($query) use ($id){
    										$query->where('id', $id);
    									})->count();

    	$data = array(
    				'teacher'	=> $teacher,
    				'student'	=> $student,
    				'course'	=> $detailCourse,
    				'presence'	=> $presence,
    			);

    	return view('teacher.dashboard.index')->withData($data);
    }
}

