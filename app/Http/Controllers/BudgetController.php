<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentRegistration;
use Response;
use DB;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('u_session')){
            $studentInfo = DB::table('student_registrations')->select('id', 'stdName', 'admissionNo', 'rollNo')->get();
            $showftfCollection = DB::table('ftf_collections')
            ->select('ftf_collections.*', 'student_registrations.stdName')
            ->join('student_registrations', 'student_registrations.rollNo', '=', 'ftf_collections.rollNo')
            ->paginate(10);

            // dd($showftfCollection);
            return view('adminView.ftfCollected',compact('studentInfo', 'showftfCollection'));
        // return response::json(['success'=>true, 'info'=>$studentInfo]);
        }else{
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


    public function getUserInfoById(Request $request){
        
        $std = $request->all();
       
        $student = StudentRegistration::where('id', $std)->first();
        return json_decode($student, true);
    }


    public function ftfCollected(Request $request){
        
      if($request->session()->has('u_session')){
          $fund = $request->all();

          $fundCollect = DB::table('ftf_collections')->insert($fund);
          $studentInfo = DB::table('student_registrations')->select('id', 'stdName', 'admissionNo', 'rollNo')->get();
          $showftfCollection = DB::table('ftf_collections')
          ->select('ftf_collections.*', 'student_registrations.stdName')
          ->join('student_registrations', 'student_registrations.rollNo', '=', 'ftf_collections.rollNo')
          ->paginate(10);
          $request->session()->put('fundsCollection', 'Data Saved Successfully;');
          return view('adminView.ftfCollected',compact('studentInfo', 'showftfCollection'));
      }else{
          return redirect('/');
      }
    }

    public function deleteftfCollected(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $deleteftfCollection = DB::table('ftf_collections')->where('id', $id)->delete();

            echo $deleteftfCollection;
        }else{
            return redirect('/');
        }
    }


    public function reconsileStatement(Request $request){
        
      if($request->session()->has('u_session')){
        $id = $request->input('id');
          $reconsileS= $request->all();
          if($id == ''){
            $insertStatement = DB::table('reconsile_statements')->insert($reconsileS);
            $request->session()->put('reconsileState', 'Data Saved Successfully;');
          }else{
            $updateStatement = DB::table('reconsile_statements')->where('id', $id)->update($reconsileS);
            $request->session()->put('reconsileState', 'Data updated Successfully;');
          }

          $showStatement = DB::table('reconsile_statements')->paginate(10);
          return redirect('adminView/reconsileStatement');
      }else{
          return redirect('/');
      }
    }

    public function edit_reconsileStatement(Request $request, $id)
    {
      // dd($id);
      if($request->session()->has('u_session')){

       // dd($userinfo);
       $data=DB::table('reconsile_statements')->where('id', $id)->first();
       // dd($data);
        return view('adminView.edit-statement',compact('data'));
      }else {
        return redirect('/accounts/login');
      }

    }

    public function showReconsileStatement(Request $request)
    {
        if($request->session()->has('u_session')){
            $showStatement = DB::table('reconsile_statements')->paginate(10);
            // dd($showRecord);

            return view('adminView.reconsileStatement', compact('showStatement'));
        }else{
            return redirect('/');
        }
    }

    public function deleteReconsileStatement(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $deleteStatement = DB::table('reconsile_statements')->where('id', $id)->delete();

            echo $deleteStatement;
        }else{
            return redirect('/');
        }
    }


    public function showBudgetDetails(Request $request)
    {
        if($request->session()->has('u_session')){
            $showSalaryBudget = DB::table('salary_budgets')->paginate(10);
            $showExcessBudget = DB::table('excess_budgets')->paginate(10);
            $showContingentBudget = DB::table('contingent_budgets')->paginate(10);
            // dd($showSalaryBudget);

            return view('adminView.budgetUtilized', compact('showSalaryBudget', 'showExcessBudget', 'showContingentBudget'));
        }else{
            return redirect('/');
        }
    }

    public function deleteSalaryBudget(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $deleteStatement = DB::table('salary_budgets')->where('id', $id)->delete();

            echo $deleteStatement;
        }else{
            return redirect('/');
        }
    }


    public function salaryBudget(Request $request){
        
        if($request->session()->has('u_session')){
          $id = $request->input('id');
            $salryB = $request->all();

            if($id == ''){
              $salaryBudgt = DB::table('salary_budgets')->insert($salryB);
              $request->session()->put('salary', 'Data Saved Successfully;');
            }else{
              $updateSalary = DB::table('salary_budgets')->where('id', $id)->update($salryB);
              $request->session()->put('salary', 'Data update Successfully;');
            }
            $showSalaryBudget = DB::table('salary_budgets')->paginate(10);
            return redirect('adminView/budgetUtilized');
        }else{
            return redirect('/');
        }
    }

    public function edit_salaryBuget(Request $request, $id)
    {
      // dd($id);
      if($request->session()->has('u_session')){

       // dd($userinfo);
       $data=DB::table('salary_budgets')->where('id', $id)->first();
       // dd($data);
        return view('adminView.edit-salarybudget',compact('data'));
      }else {
        return redirect('/accounts/login');
      }

    }

    public function excessBudget(Request $request){

        if($request->session()->has('u_session')){
          $id = $request->input('id');
            $excessB = $request->all();
            if($id == ''){
              $excessBudgt = DB::table('excess_budgets')->insert($excessB);
              $request->session()->put('excess', 'Data Saved Successfully;');
            }else{
              $excessBudgt = DB::table('excess_budgets')->where('id', $id)->update($excessB);
              $request->session()->put('excess', 'Data updated Successfully;');
            }
            $showExcessBudget = DB::table('excess_budgets')->paginate(10);
            return redirect('adminView/budgetUtilized');
        }else{
            return redirect('/');
        }
    }

    public function edit_excessBuget(Request $request, $id)
    {
      // dd($id);
      if($request->session()->has('u_session')){

       // dd($userinfo);
       $data=DB::table('excess_budgets')->where('id', $id)->first();
       // dd($data);
        return view('adminView.edit-excessBudget',compact('data'));
      }else {
        return redirect('/accounts/login');
      }

    }

    public function deleteExcessBudget(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $deleteStatement = DB::table('excess_budgets')->where('id', $id)->delete();

            echo $deleteStatement;
        }else{
            return redirect('/');
        }
    }


    public function contingentBudget(Request $request){

        if($request->session()->has('u_session')){
            $id = $request->input('id');
            $contingentB = $request->all();
            if($id == ''){
              $contingentBudgt = DB::table('contingent_budgets')->insert($contingentB);
              $request->session()->put('contingent', 'Data Saved Successfully;');
            }else{
              $updatecontingentBudgt = DB::table('contingent_budgets')->where('id', $id)->update($contingentB);
              $request->session()->put('contingent', 'Data updated Successfully;');
            }

            $showContingentBudget = DB::table('contingent_budgets')->paginate(10);
            return redirect('adminView/budgetUtilized');
        }else{
            return redirect('/');
        }
    }

    public function edit_contgBuget(Request $request, $id)
    {
      // dd($id);
      if($request->session()->has('u_session')){

       // dd($userinfo);
       $data=DB::table('contingent_budgets')->where('id', $id)->first();
       // dd($data);
        return view('adminView.edit-contingentBudget',compact('data'));
      }else {
        return redirect('/accounts/login');
      }

    }

    public function deleteContingentBudget(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $deleteStatement = DB::table('contingent_budgets')->where('id', $id)->delete();

            echo $deleteStatement;
        }else{
            return redirect('/');
        }
    }

    public function nsbBudget(Request $request){
        
      if($request->session()->has('u_session')){
        $id = $request->input('id'); 
        $nsbBg = $request->all();

        if($id == ''){
          $nsbBudgt = DB::table('nsb_budgets')->insert($nsbBg);
          $request->session()->put('nsb', 'Data Saved Successfully;');
        }else{
          $nsbBudgt = DB::table('nsb_budgets')->where('id', $id)->update($nsbBg);
          $request->session()->put('nsb', 'Data update Successfully;');
        }

        $showNsbBudget = DB::table('nsb_budgets')->paginate(10);
        return redirect('adminView/nSbBudget');
      }else{
          return redirect('/');
      }
    }

    public function edit_nsbBuget(Request $request, $id)
    {
      // dd($id);
      if($request->session()->has('u_session')){

       // dd($userinfo);
       $data=DB::table('nsb_budgets')->where('id', $id)->first();
       // dd($data);
        return view('adminView.edit-nsbBudget',compact('data'));
      }else {
        return redirect('/accounts/login');
      }

    }

    public function nsbBudgetDetails(Request $request)
    {
        if($request->session()->has('u_session')){
            $showNsbBudget = DB::table('nsb_budgets')->paginate(10);
         
            // dd($shownsbBudget);

            return view('adminView.nSbBudget', compact('showNsbBudget'));
        }else{
            return redirect('/');
        }
    }
     public function deleteNsbBudget(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $deleteStatement = DB::table('nsb_budgets')->where('id', $id)->delete();

            echo $deleteStatement;
        }else{
            return redirect('/');
        }
    }


    public function donationDetails(Request $request)
    {
        if($request->session()->has('u_session')){
            $showdonation = DB::table('donations')->paginate(10);
         
            // dd($showdonation);

            return view('adminView.donations', compact('showdonation'));
        }else{
            return redirect('/');
        }
    }
    public function donation(Request $request){

        if($request->session()->has('u_session')){
          $id = $request->input('id');
          $donate = $request->all();
          if($id == ''){
            $insertDonation = DB::table('donations')->insert($donate);
            $request->session()->put('donation', 'Data Saved Successfully;');
          }else{
            $updateDonation = DB::table('donations')->where('id', $id)->update($donate);
            $request->session()->put('donation', 'Data Saved Successfully;');
          }
          $showdonation = DB::table('donations')->paginate(10);
          return redirect('adminView/donations');
        }else{
            return redirect('/');
        }
    }

    public function edit_donation(Request $request, $id)
    {
      // dd($id);
      if($request->session()->has('u_session')){

       // dd($userinfo);
       $data=DB::table('donations')->where('id', $id)->first();
       // dd($data);
        return view('adminView.edit-donation',compact('data'));
      }else {
        return redirect('/accounts/login');
      }

    }
 
    public function deleteDonation(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $deleteStatement = DB::table('donations')->where('id', $id)->delete();

            echo $deleteStatement;
        }else{
            return redirect('/');
        }
    }


    public function procurementDocumnt(Request $request){
        
      if($request->session()->has('u_session')){
        $id = $request->input('id');
        $procurementDoc = $request->all();
        if($id == ''){
          $insertProcurementDo = DB::table('procurement_documnts')->insert($procurementDoc);
          $request->session()->put('procurementD', 'Data Saved Successfully;');
        }else{
          $updateProcurementDo = DB::table('procurement_documnts')->where('id', $id)->update($procurementDoc);
          $request->session()->put('procurementD', 'Data updated Successfully;');
        }

        $showprocureDocDetail = DB::table('procurement_documnts')->paginate(3);
        return redirect('adminView/procurementDocument');
      }else{
          return redirect('/');
      } 
    }

    public function show_procDetails(Request $request)
    {
      if($request->session()->has('u_session')){
          $showprocureDocDetail = DB::table('procurement_documnts')->paginate(10);
       
          // dd($showprocureDocDetail);

          return view('adminView.procurementDocument', compact('showprocureDocDetail'));
      }else{
          return redirect('/');
      }
    }

    public function delete_procurementDoc(Request $request, $id)
    {
      if($request->session()->has('u_session')){
          $deletedoc = DB::table('procurement_documnts')->where('id', $id)->delete();

          echo $deletedoc;
      }else{
          return redirect('/');
      }
    }


    public function edit_procDoc(Request $request, $id)
    {
      // dd($id);
      if($request->session()->has('u_session')){

       // dd($userinfo);
       $data=DB::table('procurement_documnts')->where('id', $id)->first();
       // dd($data);
        return view('adminView.edit-procDocumnt',compact('data'));
      }else {
        return redirect('/accounts/login');
      }

    }
// public function procurementDocumentDetail(Request $request)
//     {
//         if($request->session()->has('u_session')){
//             $showprocureDocDetail = DB::table('procurement_documnts')->paginate(10);
         
//             dd($showprocureDocDetail);

//             return view('adminView.procurementDocument', compact('showprocureDocDetail'));
//         }else{
//             return redirect('/');
//         }
//     }

    public function procurementProcess(Request $request){

      if($request->session()->has('u_session')){
        $id = $request->input('id');
        $procurementProc = $request->all();
        if($id == ''){
          $insertProcurementpro = DB::table('procurement_processes')->insert($procurementProc);
          $request->session()->put('procurementP', 'Data Saved Successfully;');
        }else{
          $updateProcurementpro = DB::table('procurement_processes')->where('id', $id)->update($procurementProc);
          $request->session()->put('procurementP', 'Data updated Successfully;');
        }

        $showprocureProces = DB::table('procurement_processes')->paginate(10);
        
        return redirect('adminView/procurementProcess');
      }else{
          return redirect('/');
      }
    }

    public function edit_procprocess(Request $request, $id)
    {
      // dd($id);
      if($request->session()->has('u_session')){

       // dd($userinfo);
       $data=DB::table('procurement_processes')->where('id', $id)->first();
       // dd($data);
        return view('adminView.edit-procProcess',compact('data'));
      }else {
        return redirect('/accounts/login');
      }

    }

    public function show_procProcess(Request $request)
    {
      if($request->session()->has('u_session')){
          $showprocureProces = DB::table('procurement_processes')->paginate(10);
          // dd($showprocureProces);

          return view('adminView.procurementProcess', compact('showprocureProces'));
      }else{
          return redirect('/');
      }
    }

    public function delete_procProcess(Request $request, $id){
      if($request->session()->has('u_session')){
        $delete_proProcess = DB::table('procurement_processes')->where('id', $id)->delete();
        echo $delete_proProcess;

      }else{
        return redirect('/accounts/login');
      }
    }

}
