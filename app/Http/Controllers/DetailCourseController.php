<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classes;
use App\Course;
use App\DetailCourse;
use App\Period;
use App\Teacher;

class DetailCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classes::all();
        $course = Course::all();
        $teacher = Teacher::all();

        $data = DetailCourse::with('classes')
                            ->with('course')
                            ->with('teacher')
                            ->with('period')
                            ->get();

        return view('admin.detail_course.index')
                    ->withClasses($classes)
                    ->withCourse($course)
                    ->withTeacher($teacher)
                    ->withData($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $period = Period::where('status', 1)->first();

        $data = new DetailCourse;
        $data->class_id = $request->input('class_id');
        $data->course_id = $request->input('course_id');
        $data->period_id = $period->id;
        $data->teacher_id = $request->input('teacher_id');

        $data->save();

        return redirect(route('detail_course.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = DetailCourse::where('id', $id)->firstOrFail();
        $data->class_id = $request->input('class_id');
        $data->course_id = $request->input('course_id');
        $data->teacher_id = $request->input('teacher_id');
        $data->save();

        return redirect(route('detail_course.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DetailCourse::where('id', $id)->firstOrFail();
        $data->delete();

        return redirect(route('detail_course.index'));
    }
}
