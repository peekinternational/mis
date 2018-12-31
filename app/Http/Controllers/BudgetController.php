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
            $reconsileS= $request->all();

            $insertStatement = DB::table('reconsile_statements')->insert($reconsileS);
            $showStatement = DB::table('reconsile_statements')->paginate(10);
            $request->session()->put('reconsileState', 'Data Saved Successfully;');
            return view('adminView.reconsileStatement', compact('showStatement'));
        }else{
            return redirect('/');
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
            $salryB = $request->all();

            $salaryBudgt = DB::table('salary_budgets')->insert($salryB);
            $request->session()->put('salary', 'Data Saved Successfully;');
            return view('adminView.budgetUtilized');
        }else{
            return redirect('/');
        }
    }

    public function excessBudget(Request $request){

        if($request->session()->has('u_session')){
            $excessB = $request->all();

            $excessBudgt = DB::table('excess_budgets')->insert($excessB);
            $request->session()->put('excess', 'Data Saved Successfully;');
            return view('adminView.budgetUtilized');
        }else{
            return redirect('/');
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
    
            $contingentB = $request->all();

            $contingentBudgt = DB::table('contingent_budgets')->insert($contingentB);
            $request->session()->put('contingent', 'Data Saved Successfully;');
            return view('adminView.budgetUtilized');
        }else{
            return redirect('/');
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
            $nsbBg = $request->all();

            $nsbBudgt = DB::table('nsb_budgets')->insert($nsbBg);
            $request->session()->put('nsb', 'Data Saved Successfully;');
            return view('adminView.nSbBudget');
        }else{
            return redirect('/');
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
        
            $donate = $request->all();

            $insertDonation = DB::table('donations')->insert($donate);

            $request->session()->put('donation', 'Data Saved Successfully;');
            return view('adminView.donations');
        }else{
            return redirect('/');
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
            $procurementDoc = $request->all();

            $insertProcurementDo = DB::table('procurement_documnts')->insert($procurementDoc);

            $request->session()->put('procurementD', 'Data Saved Successfully;');
            return view('adminView.procurementDocument');

            $showprocureDocDetail = DB::table('procurement_documnts')->paginate(3);
            $request->session()->put('procurementD', 'Data Saved Successfully;');
            return view('adminView.procurementDocument', compact('showprocureDocDetail'));
        }else{
            return redirect('/');
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
            $procurementProc = $request->all();

            $insertProcurementpro = DB::table('procurement_processes')->insert($procurementProc);
            $request->session()->put('procurementP', 'Data Saved Successfully;');
            return view('adminView.procurementProcess');
        }else{
            return redirect('/');
        }
    }
}
