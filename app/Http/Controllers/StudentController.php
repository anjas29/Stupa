<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Student;
use App\Classes;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classes::all();
        $data = Student::with('classes')->get();
        return view('admin.student.index')->withData($data)->withClasses($classes);
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
        $data = new Student;
        $data->student_number = $request->input('student_number');
        $data->name = $request->input('name');
        $data->class_id = $request->input('class_id');
        $data->address = $request->input('address');
        $data->gender = $request->input('gender');
        $data->username = $request->input('student_number');
        $data->password = Hash::make($request->input('student_number'));
        $data->save();

        return redirect(route('student.index'));

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
        $data = Student::where('id', $id)->firstOrFail();
        $data->student_number = $request->input('student_number');
        $data->name = $request->input('name');
        $data->class_id = $request->input('class_id');
        $data->address = $request->input('address');
        $data->gender = $request->input('gender');
        $data->save();

        return redirect(route('student.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Student::where('id', $id)->firstOrFail();
        $data->delete();

        return redirect(route('student.index'));
    }
}
