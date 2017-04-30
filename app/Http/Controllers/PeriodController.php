<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Period;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Period::all();
        return view('admin.period.index')->withData($data);
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
        $data = new Period;
        $data->year = $request->input('year');
        $data->semester = $request->input('semester');
        $data->status = 0;
        $data->save();

        return redirect(route('period.index'));
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
        $data = Period::where('id', $id)->firstOrFail();
        $data->year = $request->input('year');
        $data->semester = $request->input('semester');
        $data->save();

        return redirect(route('period.index'));
    }

    public function activatePeriod(Request $request){
        $id = $request->input('id');

        Period::where('status', 1)->update(array('status'=> 0));

        $activeData = Period::where('id', $id)->firstOrFail();
        $activeData->status = 1;
        $activeData->save();

        return redirect(route('period.index'));   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Period::where('id', $id)->firstOrFail();
        $data->delete();

        return redirect(route('period.index'));  
    }
}
