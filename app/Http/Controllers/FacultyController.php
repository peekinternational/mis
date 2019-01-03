<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\EmployeeLogs;
use Illuminate\Http\Request;
use DB;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('u_session')){
            $facultyR = DB::table('facultyInfo')->select('id', 'name')->get();
            $showFacultyLogs = DB::table('employee_logs')
            ->select('employee_logs.*', 'facultyInfo.name')
            ->join('facultyInfo', 'facultyInfo.id', '=', 'employee_logs.faculty_id')
            ->paginate(10);

            // dd($showFacultyLogs);
       
            return View('adminView.emplyeeLogs',compact('facultyR', 'showFacultyLogs'));
        }else{
            redirect('/');
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
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculty $faculty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculty $faculty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculty)
    {
        //
    }


    // Faculty Info
    public function facultyInfo(Request $request)
    {
        if($request->session()->has('u_session')){
            $facultyData = $request->all();

            $facltyInfo = DB::table('facultyInfo')->insert($facultyData);
            $facultyRrd = DB::table('facultyInfo')->paginate(10);
            $request->session()->put('faculty', 'Faculty Info Saved Successfully;');
            return view('adminView.employeeInfo',compact('facultyRrd'));
        }else{
            return redirect('/');
        } 

    }

    public function showFacultyInfo(Request $request)
    {
        if($request->session()->has('u_session')){
            $facultyRrd = DB::table('facultyInfo')->paginate(10);
            // dd($facultyR);
            return View('adminView.employeeInfo',compact('facultyRrd'));
        }else{
            redirect('/');
        }    
    }

    public function deleteFacultyInfo(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $facultyDelete = DB::table('facultyInfo')->where('id', $id)->delete();
            // dd($facultyDelete);
            echo $facultyDelete;
        }else{
            return redirect('/adminView/employeeInfo');
        }        
    }
    // Upadte faculty Info
    public function editfaultyRecord(Request $request, $id)
    {

       if($request->session()->has('u_session')){

         // dd($userinfo);
         // $user_get=DB::table('facultyInfo')->where('id',$id)->first();
         $staffInfo=DB::table('facultyInfo')->where('id',$id)->first();
         // dd($staffInfo);
         return view('adminView.edit-employeeInfo',compact('staffInfo'));
       }else {
         return redirect('/accounts/login');
       }

    }


    public function upadteFacultyInfo(Request $request)
    {

        $sid = $request->input('id');

        $updatemployee = $request->all();
        // dd($updatemployee);

        $user_info=DB::table('facultyInfo')->where('id',$sid)->update($updatemployee);
        return redirect('/adminView/employeeInfo');
    }

    public function fetchFaculty(Request $request)
    {
        if($request->session()->has('u_session')){
            $facultyR = DB::table('facultyInfo')->select('id', 'name')->get();

            $showReward = DB::table('faculty_rewards')
            ->select('faculty_rewards.*', 'facultyInfo.name')
            ->join('facultyInfo', 'faculty_rewards.faculty_id', '=', 'facultyInfo.id')
            ->paginate(10);

            // dd($showReward);
        
            return View('adminView.employeeReward',compact('facultyR', 'showReward'));
        }else{
            redirect('/');
        } 
    }

    public function facultyReward(Request $request)
    {
        if($request->session()->has('u_session')){
          $id = $request->input('id');
            
              $facultyRewrd = $request->all();
              $facultyR = DB::table('facultyInfo')->select('id', 'name')->get();

              if ($id == '') {
                $rewardInfo = DB::table('faculty_rewards')->insert($facultyRewrd);

                $request->session()->put('reward', 'Reward/Punishment info Saved Successfully;');
              }else{
                $user_info=DB::table('faculty_rewards')->where('id',$id)->update($facultyRewrd);

                $request->session()->put('reward', 'Record updated Successfully;');
              }

              $showReward = DB::table('faculty_rewards')
                ->select('faculty_rewards.*', 'facultyInfo.name')
                ->join('facultyInfo', 'faculty_rewards.faculty_id', '=', 'facultyInfo.id')
                ->paginate(10);
              return view('adminView.employeeReward', compact('facultyR', 'showReward'));
              
        }else{
            return redirect('/');
        } 

    }

    public function editfaultyReward(Request $request, $id)
    {
      // dd($id);
       if($request->session()->has('u_session')){

         // dd($userinfo);
         $rewardData=DB::table('faculty_rewards')
              ->leftjoin('facultyInfo', 'faculty_rewards.faculty_id', '=', 'facultyInfo.id')
              ->select('faculty_rewards.*', 'facultyInfo.name')->where('faculty_rewards.id', '=', $id)->first();
         return view('adminView.edit-employeeReward',compact('rewardData'));
       }else {
         return redirect('/accounts/login');
       }

    }

    public function deleteRewardRecord(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $rewardDelete = DB::table('faculty_rewards')->where('id', $id)->delete();
            // dd($facultyDelete);
            echo $rewardDelete;
        }else{
            return redirect('/adminView/employeeReward');
        } 
    }

    public function facultyLogs(Request $request)
    {
        if($request->session()->has('u_session')){
          $id = $request->input('id');
            $empLogs = $request->all();
            // dd($empLogs);
            if($id == ''){
              $LogData = DB::table('employee_logs')->insert($empLogs);
              $request->session()->put('logs', 'Employee Logs Saved Successfully;');
            }else{
              // dd($id);
              $logs_update=DB::table('employee_logs')->where('id',$id)->update($empLogs);
              $request->session()->put('logs', 'Employee Logs updated Successfully;');
            }
            
            $facultyR = DB::table('facultyInfo')->select('id', 'name')->get();
            $showFacultyLogs = DB::table('employee_logs')
            ->select('employee_logs.*', 'facultyInfo.name')
            ->join('facultyInfo', 'facultyInfo.id', '=', 'employee_logs.faculty_id')
            ->paginate(10);
            return redirect('adminView/emplyeeLogs'); 
        }else{
            redirect('/');
        }    
    }

    public function editEmployeeLogs(Request $request, $id)
    {
      // dd($id);
      if($request->session()->has('u_session')){

       // dd($userinfo);
       $logsData=DB::table('employee_logs')
            ->leftjoin('facultyInfo', 'employee_logs.faculty_id', '=', 'facultyInfo.id')
            ->select('employee_logs.*', 'facultyInfo.name')->where('employee_logs.id', '=', $id)->first();
        return view('adminView.edit-employeeLogs',compact('logsData'));
      }else {
        return redirect('/accounts/login');
      }

    }

    public function deleteEmployeeLogs(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $rewardDelete = DB::table('employee_logs')->where('id', $id)->delete();
            // dd($facultyDelete);
            echo $rewardDelete;
        }else{
            return redirect('/adminView/emplyeeLogs');
        } 
    }

    public function totalRatio(Request $request)
    {
        if($request->session()->has('u_session')){
          $id = $request->input('id');
          $ratioTs = $request->all();
          if($id == ''){
            $ratioInfo = DB::table('total_ratios')->insert($ratioTs);
            $request->session()->put('ratio', 'Data Saved Successfully;');
          }else{
            $update_data = DB::table('total_ratios')->where('id', $id)->update($ratioTs);
            $request->session()->put('ratio', 'Data Updated Successfully;');
          }
          
          $showRatio = DB::table('total_ratios')->paginate(10);
          return redirect('adminView/studentTratio');
        }else{
            redirect('/');
        } 

    }

    public function showtotalRatio(Request $request)
    {
        if ($request->session()->has('u_session')) {
            $showRatio = DB::table('total_ratios')->paginate(10);

            // dd($showRatio);
            return view('adminView.studentTratio',compact('showRatio'));
        }else{
            return redirect('/');
        }
    }

    public function edit_totalRatio(Request $request, $id)
    {
      // dd($id);
      if($request->session()->has('u_session')){

       // dd($userinfo);
       $data=DB::table('total_ratios')->where('id', '=', $id)->first();
        return view('adminView.edit-ratio',compact('data'));
      }else {
        return redirect('/accounts/login');
      }

    }

    public function deleteTotalRatio(Request $request,$id)
    {
        if($request->session()->has('u_session')){
            $rewardDelete = DB::table('total_ratios')->where('id', $id)->delete();
            // dd($facultyDelete);
            echo $rewardDelete;
        }else{
            return redirect('/adminView/studentTratio');
        } 
    }

    public function communicationTools(Request $request)
    {
        if($request->session()->has('u_session')){
          $id = $request->input('id');
            $commTools = $request->all();
            if($id == ''){
              $comInfo = DB::table('communication_tools')->insert($commTools);
              $request->session()->put('communication', 'Data Saved Successfully;');
            }else{
              $editInfo = DB::table('communication_tools')->where('id', $id)->update($commTools);
              $request->session()->put('communication', 'Data Updated Successfully;');
            }
            
            $showTools = DB::table('communication_tools')->paginate(10);
            return redirect('adminView/communicationTools'); 
        }else{
            redirect('/');
        }    
    }

    public function edit_communTools(Request $request, $id)
    {
      // dd($id);
      if($request->session()->has('u_session')){

       // dd($userinfo);
       $data=DB::table('communication_tools')->where('id', $id)->first();
        return view('adminView.edit-communicationTools',compact('data'));
      }else {
        return redirect('/accounts/login');
      }

    } 

    public function showCommunicationTools(Request $request)
    {
        if ($request->session()->has('u_session')) {
            $showTools = DB::table('communication_tools')->paginate(10);

            // dd($showTools);
            return view('adminView.communicationTools',compact('showTools'));
        }else{
            return redirect('/');
        }
    }


    public function deleteCommunicationTools(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $rewardDelete = DB::table('communication_tools')->where('id', $id)->delete();
            // dd($facultyDelete);
            echo $rewardDelete;
        }else{
            return redirect('/adminView/studentTratio');
        }
    }

}