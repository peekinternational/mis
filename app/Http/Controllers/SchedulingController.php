<?php

namespace App\Http\Controllers;

use App\Scheduling;
use Illuminate\Http\Request;
use App\SchoolCouncil;
use DB;

class SchedulingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scheduling  $scheduling
     * @return \Illuminate\Http\Response
     */
    public function show(Scheduling $scheduling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Scheduling  $scheduling
     * @return \Illuminate\Http\Response
     */
    public function edit(Scheduling $scheduling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Scheduling  $scheduling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scheduling $scheduling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scheduling  $scheduling
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scheduling $scheduling)
    {
        //
    }


    public function schoolCouncil(Request $request)
    {
        if($request->session()->has('u_session')){
            $schlCouncil = $request->all();

            $councilMembr = DB::table('school_councils')->insert($schlCouncil);
            $showRecord = DB::table('school_councils')->paginate(10);
            $request->session()->put('scholCouncil', 'Data saved Successfully');
            return view('adminView.schoolCouncil', compact('showRecord'));
        }else{
            redirect('/');
        }
    }


    public function showSchoolCouncil(Request $request)
    {
        if ($request->session()->has('u_session')) {
            $showRecord = DB::table('school_councils')->paginate(10);
            // dd($showRecord);

            return view('adminView.schoolCouncil', compact('showRecord'));
        }else{
            return redirect('/');
        }
    }


    public function deleteSchoolCouncil(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $deleteschoolConcil = DB::table('school_councils')->where('id', $id)->delete();

            echo $deleteschoolConcil;
        }else{
            return redirect('/');
        }
    }



    public function teacherTimeTable(Request $request)
    {

        if($request->session()->has('u_session')){
            $teacherTime = $request->all();

            $insertTeacherTime = DB::table('teacher_timeTable')->insert($teacherTime);
            $showRecord = DB::table('teacher_timeTable')->paginate(10);
            $request->session()->put('Teachertable', 'Data Inserted Successfully');
            return view('adminView.teacherTimeTable', compact('showRecord'));
        }else{
            redirect('/');
        }
    }


    public function showTeacherTimeTable(Request $request)
    {
        if ($request->session()->has('u_session')) {
            $showRecord = DB::table('teacher_timeTable')->paginate(10);
            // dd($showRecord);

            return view('adminView.teacherTimeTable', compact('showRecord'));
        }else{
            return redirect('/');
        }
    }


    public function deleteTeacherTimeTable(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $deleteTecherTable = DB::table('teacher_timeTable')->where('id', $id)->delete();

            echo $deleteTecherTable;
        }else{
            return redirect('/');
        }
    }


    public function classTimeTable(Request $request)
    {

        if($request->session()->has('u_session')){
            $classTime = $request->all();

            $insertClassTime = DB::table('class_timeTables')->insert($classTime);
            $showRecord = DB::table('class_timeTables')->paginate(10);
            $request->session()->put('classTable', 'Data Inserted Successfully');
            return view('adminView.classTimeTable', compact('showRecord'));
        }else{
            redirect('/');
        }
    }

    public function showClassTimeTable(Request $request)
    {
        if ($request->session()->has('u_session')) {
            $showRecord = DB::table('class_timeTables')->paginate(10);
            // dd($showRecord);

            return view('adminView.classTimeTable', compact('showRecord'));
        }else{
            return redirect('/');
        }
    }


    public function deleteClassTimeTable(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $deleteclsTable = DB::table('class_timeTables')->where('id', $id)->delete();

            echo $deleteclsTable;
        }else{
            return redirect('/');
        }
    }

    public function meetingMinute(Request $request)
    {
        if($request->session()->has('u_session')){
            $schlCouncil = $request->all();

            $councilMembr = DB::table('meeting_minutes')->insert($schlCouncil);
             $showRecord = DB::table('meeting_minutes')->paginate(10);
            $request->session()->put('meetingMinute', 'Data saved Successfully');
            return view('adminView.meetingMinutes', compact('showRecord'));
        }else{
            redirect('/');
        }
    }

    public function showMeetingMinutes(Request $request)
    {
        if ($request->session()->has('u_session')) {
            $showRecord = DB::table('meeting_minutes')->paginate(10);
            // dd($showRecord);

            return view('adminView.meetingMinutes', compact('showRecord'));
        }else{
            return redirect('/');
        }
    }


    public function deleteMeetingMinutes(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $deleteMeetingMinutes = DB::table('meeting_minutes')->where('id', $id)->delete();

            echo $deleteMeetingMinutes;
        }else{
            return redirect('/');
        }
    }

}
