<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contractor;
use App\StudentRegistration;
use App\StudentRecord;
use DB;

class Miscellaneous extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('u_session')){
            $studentInfo = DB::table('student_registrations')->select('id', 'stdName', 'admissionNo', 'rollNo', 'stdDob', 'fatherName')->get();
        
            return view('adminView.studentRecord',compact('studentInfo'));
        }
        else{
            return redirect('/');
        }
        
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
        //
    }



    public function contractorsDetail(Request $request)
    {
      if($request->session()->has('u_session')){
        $id = $request->input('id');
          $contractorDetail = $request->all();
          if($id == ''){
            $contractorInfo = DB::table('contractors')->insert($contractorDetail);
            $request->session()->put('contractorD', 'Contrator Data Saved Successfully');
          }else{
            $updatecontractorInfo = DB::table('contractors')->where('id', $id)->update($contractorDetail);
            $request->session()->put('contractorD', 'Contrator Data updated Successfully');
          }
          $showcontrct = DB::table('contractors')->paginate(10);
          return redirect('adminView/contractorDetail');
      }
      else{
          return redirect('/');
      }
        
    }

    public function show_contractor(Request $request)
    {
      if($request->session()->has('u_session')){
          $showcontrct = DB::table('contractors')->paginate(10);
       
          // dd($showcontrct);

          return view('adminView.contractorDetail', compact('showcontrct'));
      }else{
          return redirect('/');
      }
    }

    public function delete_contractor(Request $request, $id)
    {
      if($request->session()->has('u_session')){
          $deletedoc = DB::table('contractors')->where('id', $id)->delete();

          echo $deletedoc;
      }else{
          return redirect('/');
      }
    }


    public function edit_contractor(Request $request, $id)
    {
      // dd($id);
      if($request->session()->has('u_session')){

       // dd($userinfo);
       $data=DB::table('contractors')->where('id', $id)->first();
       // dd($data);
        return view('adminView.edit-contrator',compact('data'));
      }else {
        return redirect('/accounts/login');
      }

    }

    public function assignedTask(Request $request)
    {
        if($request->session()->has('u_session')){
            $assignedTsk = $request->all();

            $assignedTaskInfo = DB::table('assigned_tasks')->insert($assignedTsk);
            $request->session()->put('AssignedTask', 'Assigned Task Data Saved Successfully');
            return view('adminView.assignedTask');
        }
        else{
            return redirect('/');
        }
        
        
    }


    public function getStudentById(Request $request)
    {
        $std = $request->all();
        // $id = $request->input('id');

        $student = StudentRegistration::where('id', $std)->first();
        return json_decode($student, true);
    }



    public function studentRecord(Request $request)
    {
        if($request->session()->has('u_session')){
            $studentRecord = $request->all();

            $studentRecrd = DB::table('student_records')->insert($studentRecord);
            $studentInfo = DB::table('student_registrations')->select('id', 'stdName', 'admissionNo', 'rollNo', 'stdDob', 'fatherName')
            ->get();
            $request->session()->put('studentR', 'Data Saved Successfully');
            return view('adminView.studentRecord',compact('studentInfo'));
        }else {
            return redirect('/');
        }
    }



    // public function mainCategories(Request $request)
    // {
    //     $mainCat = DB::table('categories')->select('cat_id', 'name')->get();

    
    //     return view('adminView.availableCoActivities',compact('mainCat'));
    // }


    public function getCategoryId(Request $request)
    {
        $caId = $request->all();
       // dd($caId);
        $mainCat = DB::table('categories')->select('cat_id', 'name')->get();

        $subCategory = DB::table('sub_categories')
        ->select('sub_categories.name','sub_categories.id','sub_categories.cat_id')
        ->join('categories', 'sub_categories.cat_id', '=', 'categories.cat_id')
        ->where('sub_categories.cat_id','=',$caId)->get();
        // $id = $request->input('id');
        return $subCategory;
    
    //     $student = StudentRegistration::where('id', $caId)->first();
    //     return json_decode($student, true);
    }


    public function getCategories(Request $request)
    {
        if($request->session()->has('u_session')){
            $mainCat = DB::table('categories')->select('cat_id', 'name')->get();

            $subCategory = DB::table('sub_categories')
            ->select('sub_categories.name','sub_categories.id')
            ->join('categories', 'sub_categories.cat_id', '=', 'categories.cat_id')
            ->where('sub_categories.cat_id','=','1')->get();

            // dd($subCategory);
            
            return view('adminView.availableCoActivities',compact('subCategory','mainCat'));
        }else{
            return redirect('/');
        }
    }


}
