<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\StudentRegistration;
use App\AdmissionInquiry;
use App\PositiveBehaviour;
use App\NegativeBehaviour;
use App\AcademicRecord;
use DB;

class Student extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('u_session')){
            $studentInfo = DB::table('student_registrations')->select('id', 'stdName')->get();
            $ngtvBehaviour = DB::table('negative_behaviours')->get();

            // $pstvBehaviour = DB::table('postive_behaviours')
            // ->join('student_registrations', 'student_registrations.id', '=', 'postive_behaviours.poStudentName')
            // ->select('postive_behaviours.*', 'student_registrations.stdName')
            // ->get();

            $pstvBehaviour = DB::table('postive_behaviours')->get();
            // ->join('student_registrations', 'student_registrations.id', '=', 'postive_behaviours.poStudentName')
            
            // ->get();
            
            
            // dd($pstvBehaviour);
            return view('adminView.behaviorRecord',compact('studentInfo', 'ngtvBehaviour', 'pstvBehaviour'));
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
        // dd($request->all());
        $student = new   StudentRegistration;
        // $student->stdId = $request->input('stdId');
        $student->stdName = $request->input('stdName');
        $student->stdCnic = $request->input('stdCnic');
        $student->stdPhone = $request->input('stdPhone');
        $student->stdDob = $request->input('stdDob');
        // $student->stdPhoto = $request->input('stdPhoto');
        $image = $request->file('stdntPhoto');
        // dd($image);
        if ($image !="") {
          $profilePicture = 'student-'.time().'-'.rand(000000,999999).'.'.$image->getClientOriginalExtension();
          $destinationPath = public_path('images/student_Imgs');
          $image->move($destinationPath, $profilePicture);
        //  dd($profilePicture);
          $student->stdPhoto=$profilePicture;
        }
        $student->stdNationality = $request->input('stdNationality');
        $student->stdCaste = $request->input('stdCaste');
        $student->stdReligion = $request->input('stdReligion');
        $student->stdFatherProfession = $request->input('stdFatherProfession');
        $student->admissionNo = $request->input('admissionNo');
        $student->admissionDate = $request->input('admissionDate');
        $student->admittedInClass = $request->input('admittedInClass');
        $student->rollNo = $request->input('rollNo');
        $student->regsNumber1 = $request->input('regsNumber1');
        $student->regsNumber2 = $request->input('regsNumber2');
        $student->leavingDate = $request->input('leavingDate');
        $student->reasonOfLeaving = $request->input('reasonOfLeaving');
        $student->lastAttendedClass = $request->input('lastAttendedClass');
        $student->fatherName = $request->input('fatherName');
        $student->fatherCnic = $request->input('fatherCnic');
        $student->fatherPhone = $request->input('fatherPhone');
        $student->fatherAddress = $request->input('fatherAddress');
        $student->motherName = $request->input('motherName');
        $student->motherCnic = $request->input('motherCnic');
        $student->motherPhone = $request->input('motherPhone');
        $student->motherAddress = $request->input('motherAddress');
        $student->guardianName = $request->input('guardianName');
        $student->guardianCnic = $request->input('guardianCnic');
        $student->guardianPhone = $request->input('guardianPhone');
        $student->guardianAddress = $request->input('guardianAddress');

        
        $student->save();
        $studentRecord = DB::table('student_registrations')->get();
        $request->session()->put("register", "Student data inserted successfully");
        return view('adminView.studentRegistration',compact('studentRecord'));
    }


    public function showStudentRecord(Request $request){
        if($request->session()->has('u_session')){
            $studentRecord = DB::table('student_registrations')->get();
            
            return View('adminView.studentRegistration',compact('studentRecord'));
        }else{
            redirect('/');
        }    
    }

    public function editStudentRecord(Request $request, $id)
    {

       if($request->session()->has('u_session')){

         // dd($userinfo);
         // $user_get=DB::table('student_registrations')->where('id',$id)->first();
         $studentInfo=DB::table('student_registrations')->where('id',$id)->first();
         // dd($studentInfo->stdName);
         return view('adminView.editStudentRegistration',compact('user_get', 'studentInfo'));
       }else {
         return redirect('/accounts/login');
       }

    }


    public function editStudentInfo(Request $request)
    {

        $sid = $request->input('id');

        $updateStudent = $request->all();

        $user_info=DB::table('student_registrations')->where('id',$sid)->update($updateStudent);
        $studentRecord = DB::table('student_registrations')->get();
        return view('adminView.studentRegistration', compact('studentRecord'));
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
        
    }


    public function deleteStudent(Request $request, $id)
    {
        if($request->session()->has('u_session')){
           // dd($id);
           $user_get=DB::table('student_registrations')->where('id',$id)->delete();
          // dd($user_get);
          echo $user_get;
        }else {

            return redirect('/adminView/studentRegistration');
        }
    }
    public function admissionInquiry(Request $request){
        if($request->session()->has('u_session')){

            $adId = $request->input('inquiryId');

            if($adId){
                $updateInquiry = $request->all();

                $user_info=DB::table('admission_inquiries')->where('inquiryId',$adId)->update($updateInquiry);
                $inquiryRecord = DB::table('admission_inquiries')->get();
                return view('adminView.admissionInquiries', compact('inquiryRecord'));
            }
            else{


            $admissionInqury = new AdmissionInquiry;
            $admissionInqury->stdName = $request->input('stdName');
            $admissionInqury->fatherName = $request->input('fatherName');
            $admissionInqury->address = $request->input('address');
            $admissionInqury->phoneNo = $request->input('phoneNo');
            $admissionInqury->AdmissionSought = $request->input('AdmissionSought');

            $admission = $admissionInqury->save();
            // dd( $admission);
            $inquiryRecord = DB::table('admission_inquiries')->get();
            $request->session()->put("admission", "Data Saved successfully");
            return view('adminView.admissionInquiries',compact('inquiryRecord'));
        }
        }else{
            redirect('/');
        }
        
    } 

    public function showAdmissionIquiry(Request $request)
    {
        if($request->session()->has('u_session')){
            $inquiryRecord = DB::table('admission_inquiries')->get();
            
            return View('adminView.admissionInquiries',compact('inquiryRecord'));
        }else{
            redirect('/');
        }  
    }


    public function editAdmissionIquiry(Request $request, $id)
    {

       if($request->session()->has('u_session')){
         // dd($userinfo);
         $admissionIquiry_get=DB::table('admission_inquiries')->where('inquiryId',$id)->first();
         $inquiryRecord=DB::table('admission_inquiries')->where('inquiryId',$id)->get();
         // dd($studentInfo);
         return view('adminView.editAdmissionInquiries',compact('admissionIquiry_get', 'inquiryRecord'));
       }else {
         return redirect('/accounts/login');
       }

    }


    public function deleteAdmissionInquiry(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $inqueryTable=DB::table('admission_inquiries')->where('inquiryId', $id)->delete();
            echo $inqueryTable;
        }else{
            return redirect('/adminView/admissionInquiries');
        }
    }
    // Student Behaviour
    public function positiveBehaviour(Request $request){
        $postBehaviour = $request->all();

        // $postBehaviour = new PositiveBehaviour;
        // $postBehaviour->stdName = $request->input('stdntName');
        // $postBehaviour->behaviourType = $request->input('behaviourType');
        // $postBehaviour->otherType = $request->input('otherType');
        // $postBehaviour->dateOfBahave = $request->input('dateOfBahave');
        // $postBehaviour->level = $request->input('level');
        // $postBehaviour->position = $request->input('position');

        // $studentRecord = DB::table('student_registrations')->get();
        // dd($studentRecord);
        $studentInfo = DB::table('student_registrations')->select('id', 'stdName')->get();

        $pstBehvr = DB::table('postive_behaviours')->insert($postBehaviour);
        // $pResult = DB::table('postive_behaviours')->insert($postBehaviour);
        $pstvBehaviour = DB::table('postive_behaviours')
            ->select('postive_behaviours.*', 'student_registrations.stdName')
            ->join('student_registrations', 'student_registrations.id', '=', 'postive_behaviours.poStudentName')
            ->get();
        $ngtvBehaviour = DB::table('negative_behaviours')->get();
        // dd( $studentInfo);
        $request->session()->put("PosBehaviour", "Data Saved successfully");
        return view('adminView.behaviorRecord', compact('studentInfo', 'pstvBehaviour', 'ngtvBehaviour'));
        
    }


    public function deletePositiveBehaviour(Request $request, $id)
    {   
        // dd($id);
        if ($request->session()->has('u_session')) {
            $pstvBehaviourtable = DB::table('postive_behaviours')->where('id', $id)->delete();
            echo $pstvBehaviourtable;
        }else{
            return redirect('adminView/behaviorRecord');
        }
    }

    public function editPositiveBehaviour(Request $request, $id)
    {

       if($request->session()->has('u_session')){
         // dd($userinfo);
        $studentInfo = DB::table('student_registrations')->select('id', 'stdName')->get();
         $positiveBehaviour_Edit=DB::table('postive_behaviours')->where('id',$id)->first();
         // $PositiveBehaviour_rec=DB::table('postive_behaviours')->where('id',$id)->get();
         // $PositiveBehaviour_rec = DB::table('postive_behaviours')->first();
            // ->select('postive_behaviours.*', 'student_registrations.stdName')
            // ->join('student_registrations', 'student_registrations.id', '=', 'postive_behaviours.poStudentName')
            // ->first();
           // dd($PositiveBehaviour_rec);
         return view('adminView.editBehaviourRecord',compact('studentInfo','positiveBehaviour_Edit', 'PositiveBehaviour_rec'));
       }else {
         return redirect('/accounts/login');
       }

    }
     public function updateStudentBehaviour(Request $request)
    {

        // dd($request->all());
        $sid = $request->input('id');
        $updateStudent = $request->all();
        $user_info=DB::table('postive_behaviours')->where('id',$sid)->update($updateStudent);
        $studentBehaviour = DB::table('postive_behaviours')->get();
         // dd($user_info);

        return redirect('adminView/behaviorRecord/');
        // return view('adminView.editBehaviourRecord', compact('studentBehaviour'));
    }

    public function editNegativeBehaviour(Request $request, $id)
    {

       if($request->session()->has('u_session')){
         // dd($userinfo);
        $studentInfo = DB::table('student_registrations')->select('id', 'stdName')->get();
         $negativeBehaviour_Edit=DB::table('negative_behaviours')->where('id',$id)->first();
         // $PositiveBehaviour_rec=DB::table('postive_behaviours')->where('id',$id)->get();
         // $PositiveBehaviour_rec = DB::table('postive_behaviours')->first();
            // ->select('postive_behaviours.*', 'student_registrations.stdName')
            // ->join('student_registrations', 'student_registrations.id', '=', 'postive_behaviours.poStudentName')
            // ->first();
           // dd($PositiveBehaviour_rec);
         return view('adminView.editNegativeBehv',compact('studentInfo','negativeBehaviour_Edit', 'PositiveBehaviour_rec'));
       }else {
         return redirect('/accounts/login');
       }

    }
     public function updateNegatvBehaviour(Request $request)
    {

        // dd($request->all());
        $sid = $request->input('id');
        $updateStudent = $request->all();
        $user_info=DB::table('negative_behaviours')->where('id',$sid)->update($updateStudent);
      
         // dd($user_info);

        return redirect('adminView/behaviorRecord/');
        // return view('adminView.editBehaviourRecord', compact('studentBehaviour'));
    }
    // public function showNegativeBehaviour(Request $request)
    // {
    //     if ($request->session()->has('u_session')) {
    //         $ngtvBehaviour = DB::table('negative_behaviours')->get();
    //         // dd($ngtvBehaviour);
    //         return view('adminView.behaviorRecord',compact('ngtvBehaviour'));
    //     }
    // }

    public function deleteNegativeBehaviour(Request $request, $id)
    {   
        // dd($id);
        if ($request->session()->has('u_session')) {
            $ngtvBehaviourtable = DB::table('negative_behaviours')->where('id', $id)->delete();
            echo $ngtvBehaviourtable;
        }else{
            return redirect('adminView/behaviorRecord');
        }
    }



    public function negativeBehaviour(Request $request){

        $negatvBehaviour = new NegativeBehaviour;

        $negatvBehaviour->stdName = $request->input('studentName');
        $negatvBehaviour->incidentDate = $request->input('incidentDate');
        $negatvBehaviour->lessonPeriod = $request->input('lessonPeriod');
        $negatvBehaviour->lessonStyle = $request->input('lessonStyle');
        $negatvBehaviour->seatingPlan = $request->input('seatingPlan');
        $negatvBehaviour->workType = $request->input('workType');
        $negatvBehaviour->reportingStaff = $request->input('reportingStaff');
        $negatvBehaviour->coveringStaff = $request->input('coveringStaff');
        $negatvBehaviour->location = $request->input('location');
        $negatvBehaviour->studentName = $request->input('studentName');
        $negatvBehaviour->behaviourType = $request->input('behaviourType');
        $negatvBehaviour->comments = $request->input('comments');
        $negatvBehaviour->actionTaken = $request->input('actionTaken');


        $studentInfo = DB::table('student_registrations')->select('id', 'stdName')->get();
        $negative = $negatvBehaviour->save();
        $ngtvBehaviour = DB::table('negative_behaviours')->get();
        $pstvBehaviour = DB::table('postive_behaviours')->get();

        // dd( $positive);
        $request->session()->put("NegBehaviour", "Data Saved successfully");
        return view('adminView.behaviorRecord', compact('studentInfo', 'ngtvBehaviour', 'pstvBehaviour'));
        
    } 


    // Academic Record
    public function showAcademicRecord(Request $request){
        if ($request->session()->has('u_session')) {
            $studentInfo = DB::table('student_registrations')->select('id', 'stdName', 'admissionNo', 'rollNo','stdCnic')->get();
            $showAcadmcRcrd = DB::table('academic_records')
            ->select('academic_records.*', 'student_registrations.stdName')
            ->join('student_registrations', 'academic_records.stdName', '=', 'student_registrations.id')
            ->paginate(10);
            // dd($showAcadmcRcrd);
            $showpreviusResult = DB::table('previous_results')
            ->select('previous_results.*', 'student_registrations.stdName')
            ->join('student_registrations', 'previous_results.stdName', '=', 'student_registrations.id')
            ->paginate(10);

            // dd($showpreviusResult);

            $showMonthResult = DB::table('monthly_results')
            ->select('monthly_results.*', 'student_registrations.stdName')
            ->join('student_registrations', 'monthly_results.stdName', '=', 'student_registrations.id')
            ->paginate(10);
            // dd($showAcadmcRcrd);
            return view('adminView.academicRecord',compact('studentInfo', 'showAcadmcRcrd', 'showpreviusResult', 'showMonthResult'));
        }
        else{
            return redirect ('/');
        }
    }

    public function getUserInfoById(Request $request){
        
        $std = $request->all();
       
        $student = StudentRegistration::where('id', $std)->first();
        return json_decode($student, true);
    }


    public function delteAcademicRecord(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $academicTable=DB::table('academic_records')->where('id', $id)->delete();
            echo $academicTable;
        }else{
            return redirect('/adminView/academicRecord');
        }
    }


    public function academicsRecord(Request $request){
        $acadmRecord = $request->all();

        // dd($acadmRecord);
        $academic = DB::table('academic_records')->insert($acadmRecord);
       
        $studentInfo = DB::table('student_registrations')->select('id', 'stdName', 'admissionNo', 'rollNo','stdCnic')->get();
        $showAcadmcRcrd = DB::table('academic_records')
        ->select('academic_records.*', 'student_registrations.stdName')
        ->join('student_registrations', 'academic_records.stdName', '=', 'student_registrations.id')
        ->get();

        $request->session()->put("Acadmic", "Data Saved successfully");
        return view('adminView.academicRecord',compact('studentInfo', 'showAcadmcRcrd'));
        
    } 
     public function editacademicRecord(Request $request, $id)
    {

       if($request->session()->has('u_session')){
          
         $academic_records=DB::table('academic_records')->where('id',$id)->first();

         // $PositiveBehaviour_rec=DB::table('postive_behaviours')->where('id',$id)->get();
         // $PositiveBehaviour_rec = DB::table('postive_behaviours')->first();
            // ->select('postive_behaviours.*', 'student_registrations.stdName')
            // ->join('student_registrations', 'student_registrations.id', '=', 'postive_behaviours.poStudentName')
            // ->first();
            // dd($academic_records);
         return view('adminView/edit_academic_rec',compact('academic_records'));
       }else {
         return redirect('/accounts/login');
       }

    }

     public function updateacademicRecord(Request $request)
    {
        $acdemic_id=$request->input('academic_id');
        $monthly=$request->input('monthly_id');
        // dd($monthly);

        // dd($request->all());
        $sid = $request->input('id');
        $updateAlu_Student = $request->all();
        // dd($updateAlu_Student);
        $user_info=DB::table('academic_records')->where('id',$sid)->update($updateAlu_Student);
        // $studentBehaviour = DB::table('alumni')->get();
         // dd($updateAlu_Student);

        return redirect('adminView/academicRecord/');
        // return view('adminView.editBehaviourRecord', compact('studentBehaviour'));
    }
    // public function showNegativeBehaviour(Request $request)
    // {
    //     if ($request->session()->has('u_session')) {
    //         $ngtvBehaviour = DB::table('negative_behaviours')->get();
    //         // dd($ngtvBehaviour);
    //         return view('adminView.behaviorRecord',compact('ngtvBehaviour'));
    //     }
    // }
   
     public function editacademicmonthlyRecord(Request $request, $id)
    {

       if($request->session()->has('u_session')){
         // dd($userinfo);
         $academic_records=DB::table('monthly_results')->where('id',$id)->first();
          // dd($academic_records);
         // $PositiveBehaviour_rec=DB::table('postive_behaviours')->where('id',$id)->get();
         // $PositiveBehaviour_rec = DB::table('postive_behaviours')->first();
            // ->select('postive_behaviours.*', 'student_registrations.stdName')
            // ->join('student_registrations', 'student_registrations.id', '=', 'postive_behaviours.poStudentName')
            // ->first();
            // dd($academic_records);
         return view('adminView/edit_monthly_res',compact('academic_records'));
       }else {
         return redirect('/accounts/login');
       }

    }

     public function updateacademicmonthlyRecord(Request $request)
    {
        
        // dd($monthly);

        // dd($request->all());
        $sid = $request->input('id');
        $updateAlu_Student = $request->all();
        // dd($updateAlu_Student);
        $user_info=DB::table('monthly_results')->where('id',$sid)->update($updateAlu_Student);
        // $studentBehaviour = DB::table('alumni')->get();
         // dd($updateAlu_Student);

        return redirect('adminView/academicRecord/');
        // return view('adminView.editBehaviourRecord', compact('studentBehaviour'));
    }
    // public function showNegativeBehaviour(Request $request)
    // {
    //     if ($request->session()->has('u_session')) {
    //         $ngtvBehaviour = DB::table('negative_behaviours')->get();
    //         // dd($ngtvBehaviour);
    //         return view('adminView.behaviorRecord',compact('ngtvBehaviour'));
    //     }
    // }

     public function editacademicpreRecord(Request $request, $id)
    {

       if($request->session()->has('u_session')){
         // dd($userinfo);
         $academic_records=DB::table('previous_results')->where('id',$id)->first();
         
          // dd($academic_records);
         // $PositiveBehaviour_rec=DB::table('postive_behaviours')->where('id',$id)->get();
         // $PositiveBehaviour_rec = DB::table('postive_behaviours')->first();
            // ->select('postive_behaviours.*', 'student_registrations.stdName')
            // ->join('student_registrations', 'student_registrations.id', '=', 'postive_behaviours.poStudentName')
            // ->first();
            // dd($academic_records);
         return view('adminView/previous_academic_rec',compact('academic_records'));
       }else {
         return redirect('/accounts/login');
       }

    }

     public function updateacademicpreRecord(Request $request)
    {
        
        // dd($monthly);

        // dd($request->all());
        $sid = $request->input('id');
        $updateAlu_Student = $request->all();
        // dd($updateAlu_Student);
        $user_info=DB::table('previous_results')->where('id',$sid)->update($updateAlu_Student);
        // $studentBehaviour = DB::table('alumni')->get();
         // dd($updateAlu_Student);

        return redirect('adminView/academicRecord/');
        // return view('adminView.editBehaviourRecord', compact('studentBehaviour'));
    }
    // public function showNegativeBehaviour(Request $request)
    // {
    //     if ($request->session()->has('u_session')) {
    //         $ngtvBehaviour = DB::table('negative_behaviours')->get();
    //         // dd($ngtvBehaviour);
    //         return view('adminView.behaviorRecord',compact('ngtvBehaviour'));
    //     }
    // }

    public function previousResult(Request $request){
        if ($request->session()->has('u_session')) {
            $previusResult = $request->all();
            // dd($previusResult);
            // $showpreviusResult = DB::table('previous_results')->get();
            $pResult = DB::table('previous_results')->insert($previusResult);
            $request->session()->put("prevResult", "Data Saved successfully");

        
            echo $pResult;
            // echo $pResult;
            // if(Request::ajax()) {
            //     $data = $request->all();
            // }

            // dd($data);
        }else{
            return redirect('/');
        }
        
    }

    public function showPreviousResult(Request $request)
    {   
        // dd("heelooo");
        if ($request->session()->has('u_session')) {
            $showpreviusResult = DB::table('previous_results')->orderBy('id', 'desc')->first();

            // $showpreviusResult = PreviousResult::paginate(15);
             // dd($showpreviusResult);
            return response()->json($showpreviusResult);
            
        }else{
            return redirect('/');
        }
    }

    public function deletePreviousResult(Request $request, $id)
    {
        if($request->session()->has('u_session')){
            $previousTable = DB::table('previous_results')->where('id', $id)->delete();
            echo $previousTable;
        }else{
            return redirect('adminView/academicRecord');
        }
    }


    public function showMonthlyResult(Request $request)
    {
        if ($request->session()->has('u_session')) {
            $showMonthlyResult = DB::table('monthly_results')->orderBy('id')->first();

            return response()->json($showMonthlyResult);

        }else{
            return redirect('/');
        }
    }


    public function deleteMonthlyResult(Request $request, $id)
    {
        if ($request->session()->has('u_session')) {
            $monthTable = DB::table('monthly_results')->where('id', $id)->delete();
            echo $monthTable;
        }else{
            return redirect('adminView/academicRecord');
        }
    }

    public function monthlyResult(Request $request){
        if($request->session()->has('u_session')){
            $monthResult = $request->all();

            $mResult = DB::table('monthly_results')->insert($monthResult);
            $request->session()->put("monthResult", "Data Saved successfully");
            // return view('adminView.academicRecord');  
            echo $mResult;
        }else{
            return redirect('/');
        }
    }
    public function alumniStudent(Request $request){
        if ($request->session()->has('u_session')) {
            $alumniRecord = $request->all();

            $pResult = DB::table('alumni')->insert($alumniRecord);
            $showAlumni = DB::table('alumni')->paginate(10);
            $request->session()->put("alumni", "Data Saved successfully");
            return view('adminView.exStudent', compact('showAlumni')); 
        }else{
            return redirect('/');
        } 
    }


    public function showAlumniRecord(Request $request)
    {
        if ($request->session()->has('u_session')) {
            $showAlumni = DB::table('alumni')->paginate(10);

            return view('adminView.exStudent', compact('showAlumni'));
        }else{
            return redirect('/');
        }

    }


    public function deleteAlumniRecord(Request $request, $id)
    {
        // dd($id);
        if($request->session()->has('u_session')){
            $almuniTable = DB::table('alumni')->where('id', $id)->delete();
            echo $almuniTable;
        }
        else{
            return redirect('/');
        }
    } 
    public function editAlumniRecord(Request $request, $id)
    {

       if($request->session()->has('u_session')){
         // dd($userinfo);
         $alumni_Edit=DB::table('alumni')->where('id',$id)->first();
         // $PositiveBehaviour_rec=DB::table('postive_behaviours')->where('id',$id)->get();
         // $PositiveBehaviour_rec = DB::table('postive_behaviours')->first();
            // ->select('postive_behaviours.*', 'student_registrations.stdName')
            // ->join('student_registrations', 'student_registrations.id', '=', 'postive_behaviours.poStudentName')
            // ->first();
           // dd($alumni_Edit);
         return view('adminView.edit_ex_student',compact('alumni_Edit'));
       }else {
         return redirect('/accounts/login');
       }

    }

     public function updatealumniRecord(Request $request)
    {

        // dd($request->all());
        $sid = $request->input('id');
        $updateAlu_Student = $request->all();
        $user_info=DB::table('alumni')->where('id',$sid)->update($updateAlu_Student);
        // $studentBehaviour = DB::table('alumni')->get();
         // dd($user_info);

        return redirect('adminView/exStudent/');
        // return view('adminView.editBehaviourRecord', compact('studentBehaviour'));
    }
    // public function showNegativeBehaviour(Request $request)
    // {
    //     if ($request->session()->has('u_session')) {
    //         $ngtvBehaviour = DB::table('negative_behaviours')->get();
    //         // dd($ngtvBehaviour);
    //         return view('adminView.behaviorRecord',compact('ngtvBehaviour'));
    //     }
    // }
}
