<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use App\Teacher;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Teacher::all();
        return view('admin.teacher.index')->withData($data);
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
        $data = new Teacher;
        $data->teacher_number = $request->input('teacher_number');
        $data->name = $request->input('name');
        $data->gender = $request->input('gender');
        $data->phone = $request->input('phone');
        $data->level = $request->input('level');
        $data->username = $request->input('teacher_number');
        $data->password = Hash::make($request->input('teacher_number'));
        $data->save();

        return redirect(route('teacher.index'));
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
        $data = Teacher::where('id', $id)->firstOrFail();
        $data->teacher_number = $request->input('teacher_number');
        $data->name = $request->input('name');
        $data->gender = $request->input('gender');
        $data->phone = $request->input('phone');
        $data->level = $request->input('level');
        $data->save();

        return redirect(route('teacher.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Teacher::where('id', $id)->firstOrFail();
        $data->delete();

        return redirect(route('teacher.index'));
    }
}
