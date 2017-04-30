<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Present;
use App\DetailCourse;
use App\DetailPresent;
use App\Student;

class TeacherPresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $userId = auth('teachers')->user()->id;

        $course = DetailCourse::where('teacher_id', $userId)
                                ->with('classes')
                                ->with('course')
                                ->get();

        $data = Present::with('detail_course.course')
                        ->with('detail_course.classes')
                        ->with('detail_course.teacher')
                        ->whereHas('detail_course.teacher', function($query) use ($userId)
                        {
                            $query->where('id', $userId);
                        })->get();

        return view('teacher.present.index')->withData($data)->withCourse($course);
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

    public function postCreate(Request $request){
        $id = $request->input('detail_course_id');
        $data = DetailCourse::where('id', $id)
                            ->with('classes')
                            ->with('course')
                            ->first();

        $class_id = $data->classes->id;
        $students = Student::where('class_id', $class_id)->get();
        return view('teacher.present.create')->withForm($request->input())->withData($data)->withStudent($students);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Present;
        $data->detail_course_id = $request->input('detail_course_id');
        $data->note = $request->input('note');
        $data->save();

        $presentId = $data->id;
        $notes = $request->input('notes');
        $presents = $request->input('present');

        foreach ($request->input('student_id') as $i => $student) {
            $dataStudent = new DetailPresent;
            $dataStudent->student_id = $student;
            $dataStudent->present_id = $presentId;
            $dataStudent->present = $presents[$i];
            $dataStudent->note = $notes[$i];
            $dataStudent->save();
        }
        
        return redirect(route('user_teacher.presence.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $data = Present::where('id', $id)
                        ->with('detail_course.course')
                        ->with('detail_course.classes')
                        ->with('detail_course.teacher')
                        ->with('detail_present')
                        ->firstOrFail();
        return view('teacher.present.show')->withData($data);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Present::where('id', $id)->firstOrFail();
        $dataStudent = DetailPresent::where('present_id', $data->id)->delete();
        $data->delete();

        return redirect(route('user_teacher.presence.index'));
    }
}
