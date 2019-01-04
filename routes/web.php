<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/education', function () {
    return view('education');
});
Route::get('/career', function () {
    return view('career');
});

Route::post('store', 'RegisterController@store');

Route::post('login', 'RegisterController@login');
Route::get('logout', 'RegisterController@Logout');



Route::group(['prefix' => '/adminView'], function(){

	Route::post('/student_register', 'frontend\Student@store');
	Route::match(['Post', 'get'],'/studentRegistration', 'frontend\Student@showStudentRecord');
	Route::get('deleteStudentRe/{id}','frontend\Student@deleteStudent');
	Route::get('/editStudentRegistration/{id}', 'frontend\Student@editStudentRecord');
	Route::post('/studentRegistration', 'frontend\Student@editStudentInfo');
	// Route::get('/student_register', function () {
	//     return view('adminView.studentRegistration');
	// });
	Route::post('/acadmic_Record', 'frontend\Student@academicsRecord');
	Route::post('/prev_Result', 'frontend\Student@previousResult');
	Route::post('/monthly_Result', 'frontend\Student@monthlyResult');
	Route::match(['Post', 'get'], '/academicRecord' ,'frontend\Student@showAcademicRecord');
	Route::get('/showPrev_result', 'frontend\Student@showPreviousResult');
	Route::get('/acadmc_record', 'frontend\Student@getUserInfoById');
	Route::get('deleteAcademicRecrd/{id}', 'frontend\Student@delteAcademicRecord');
	Route::get('deletePreviousResult/{id}', 'frontend\Student@deletePreviousResult');
	Route::get('deleteMonthlyResult/{id}', 'frontend\Student@deleteMonthlyResult');
	Route::get('/showMonth_result', 'frontend\Student@showMonthlyResult');
	Route::get('/edit_academic_rec/{id}','frontend\Student@editacademicRecord');
	Route::get('/edit_monthly_res/{id}','frontend\Student@editacademicmonthlyRecord');
	Route::get('/previous_academic_rec/{id}','frontend\Student@editacademicpreRecord');
	Route::post('/academicRecord', 'frontend\Student@updateacademicRecord');
	Route::post('/academicRecord', 'frontend\Student@updateacademicmonthlyRecord');
	Route::post('/academicRecord', 'frontend\Student@updateacademicpreRecord');

	// Route::get('/academicRecord', function () {
	//     return view('adminView.academicRecord');
	// });
	Route::match(['Post', 'get'],'/behaviorRecord', 'frontend\Student@index');
	Route::post('/postivBehaviours', 'frontend\Student@positiveBehaviour');
	Route::post('/negatvBehaviour', 'frontend\Student@negativeBehaviour');
	Route::get('deleteNegativeBhv/{id}', 'frontend\Student@deleteNegativeBehaviour');

	Route::get('/editBehaviourRecord/{id}', 'frontend\Student@editPositiveBehaviour');
	Route::post('/behaviorRecord' , 'frontend\Student@updateStudentBehaviour');

	Route::post('/negatvBehaviour', 'frontend\Student@negativeBehaviour');
	Route::get('deleteNegativeBhv/{id}', 'frontend\Student@deleteNegativeBehaviour');
	Route::get('editNegativeBehv/{id}', 'frontend\Student@editNegativeBehaviour');

	Route::post('/behaviorRecord' , 'frontend\Student@updateNegatvBehaviour');


	Route::get('deletePositiveBhv/{id}', 'frontend\Student@deletePositiveBehaviour');

	// Route::get('/behaviorRecord', function () {
	//     return view('adminView.behaviorRecord');
	// });
	Route::post('/faculty_info', 'FacultyController@facultyInfo');
	Route::match(['Post', 'get'], '/employeeInfo', 'FacultyController@showFacultyInfo');
	Route::get('delete_employeeInfo/{id}', 'FacultyController@deleteFacultyInfo');
	Route::get('edit-employeeInfo/{id}', 'FacultyController@editfaultyRecord');
	Route::post('/employeeInfo', 'FacultyController@upadteFacultyInfo');
	// Route::get('/employeeInfo', function () {
	//     return view('adminView.employeeInfo');
	// });
	Route::get('/acihevementRecord', function () {
	    return view('adminView.acihevementRecord');
	});
	Route::post('/faculty_reward', 'FacultyController@facultyReward');
	Route::get('/employeeReward', 'FacultyController@fetchFaculty');
	Route::get('/delete_reward/{id}', 'FacultyController@deleteRewardRecord');
	Route::get('edit-employeeReward/{id}', 'FacultyController@editfaultyReward');
	// Route::get('/employeeReward', function () {
	//     return view('adminView.employeeReward');
	// });
	Route::get('/employeePerformance', function () {
	    return view('adminView.employeePerformance');
	});
	Route::post('/employee_log', 'FacultyController@facultyLogs');
	Route::get('/delete_employeeLogs/{id}', 'FacultyController@deleteEmployeeLogs');
	Route::match(['Post', 'get'],'/emplyeeLogs', 'FacultyController@index');
	Route::get('edit-employeeLogs/{id}', 'FacultyController@editEmployeeLogs');
	// Route::get('/emplyeeLogs', function () {
	//     return view('adminView.emplyeeLogs');
	// });
	
	Route::post('/ratio', 'FacultyController@totalRatio');
	Route::get('/studentTratio', 'FacultyController@showtotalRatio');
	Route::get('/delete_Ratio/{id}', 'FacultyController@deleteTotalRatio');
	Route::get('edit-ratio/{id}', 'FacultyController@edit_totalRatio');
	// Route::get('/studentTratio', function () {
	//     return view('adminView.studentTratio');
	// });
	Route::post('/exStudent_record', 'frontend\Student@alumniStudent');
	Route::get('/exStudent', 'frontend\Student@showAlumniRecord');
	Route::get('/deleteAlmniRecrd/{id}', 'frontend\Student@deleteAlumniRecord');
	Route::get('/edit_ex_student/{id}','frontend\Student@editAlumniRecord');
	Route::post('/exStudent' , 'frontend\Student@updatealumniRecord');

	// Route::get('/exStudent', function () {
	//     return view('adminView.exStudent');
	// });
	Route::match(['Post', 'get'],'/admissionInquiries', 'frontend\Student@showAdmissionIquiry');
	Route::post('/admissionInqry', 'frontend\Student@admissionInquiry');
	Route::get('deleteAdmissionInqury/{inquiryId}', 'frontend\Student@deleteAdmissionInquiry');
	Route::get('/editAdmissionInquiries/{id}', 'frontend\Student@editAdmissionIquiry');
	// Route::get('/admissionInquiries', function () {
	//     return view('adminView.admissionInquiries');
	// });
	Route::post('/communication_tools', 'FacultyController@communicationTools');
	Route::get('/communicationTools', 'FacultyController@showCommunicationTools');
	Route::get('/delete_communicationTools/{id}', 'FacultyController@deleteCommunicationTools');
	Route::get('edit-communicationTools/{id}', 'FacultyController@edit_communTools');
	// Route::get('/communicationTools', function () {
	//     return view('adminView.communicationTools');
	// });
	Route::get('/advanceCommunication', function () {
	    return view('adminView.advanceCommunication');
	});
	Route::post('/teacher_timeTable', 'SchedulingController@teacherTimeTable');
	Route::get('/teacherTimeTable', 'SchedulingController@showTeacherTimeTable');
	Route::get('/delete_teacherTimeTable/{id}', 'SchedulingController@deleteTeacherTimeTable');	
	Route::get('/edit-teacherTime-table/{id}', 'SchedulingController@edit_teacherTimeTable');
	// Route::get('/teacherTimeTable', function () {
	//     return view('adminView.teacherTimeTable');
	// });
	Route::post('/class_TimeTable', 'SchedulingController@classTimeTable');
	Route::get('/classTimeTable', 'SchedulingController@showClassTimeTable');
	Route::get('/delete_classTimeTable/{id}', 'SchedulingController@deleteClassTimeTable');	
	Route::get('/edit-classTime-table/{id}', 'SchedulingController@edit_classTimeTable');
	// Route::get('/classTimeTable', function () {
	//     return view('adminView.classTimeTable');
	// });
	Route::get('/examTimeTable', function () {
	    return view('adminView.examTimeTable');
	});
	Route::get('/examSeatingPlan', function () {
	    return view('adminView.examSeatingPlan');
	});
	Route::post('/school_council', 'SchedulingController@schoolCouncil');
	Route::get('/schoolCouncil', 'SchedulingController@showSchoolCouncil');
	Route::get('/delete_schoolCouncil/{id}', 'SchedulingController@deleteSchoolCouncil');
	Route::get('/edit-schoolCouncil/{id}', 'SchedulingController@edit_schoolCouncil');
	// Route::get('/schoolCouncil', function () {
	//     return view('adminView.schoolCouncil');
	// });
	Route::post('/meeting_minutes', 'SchedulingController@meetingMinute');
	Route::get('/meetingMinutes', 'SchedulingController@showMeetingMinutes');
	Route::get('/delete_meetingMinutes/{id}', 'SchedulingController@deleteMeetingMinutes');	
	Route::get('/edit-meetingMinutes/{id}', 'SchedulingController@edit_meetingMinute');
	// Route::get('/meetingMinutes', function () {
	//     return view('adminView.meetingMinutes');
	// });

	Route::post('/update_inventory', 'Assests@saveUpdateInventory');
	Route::get('/updateInventory', 'Assests@showUpdateInventory');

	Route::match(['post', 'get'],'/updateInventory', 'Assests@saveUpdateInventory');
	Route::get('/delete_inventryRecrd/{id}', 'Assests@deleteUpdateInventory');
	Route::get('/editUpdateInventory/{id}', 'Assests@editInventryRecord');
	Route::post('updateInventory', 'Assests@editUpdateInventry');
	// Route::get('/updateInventory', function () {
	//     return view('adminView.updateInventory');
	// });
	Route::post('/book_list', 'Assests@booksList');
	Route::get('/booksList', 'Assests@showBooksList');
	Route::get('/delete_booklist/{id}', 'Assests@deleteBooksList');	
	Route::get('/edit-booklist/{id}', 'Assests@edit_booklist');
	// Route::get('/booksList', function () {
	//     return view('adminView.booksList');
	// });
	Route::post('/issued_book', 'Assests@booksIssued');
	Route::get('/issuedBooks', 'Assests@showBooksIssued');
	Route::get('/delete_issuedBooks/{id}', 'Assests@deleteBooksIssued');
	Route::get('/edit-issuedbooks/{id}', 'Assests@edit_booksIssued');
	// Route::get('/issuedBooks', function () {
	//     return view('adminView.issuedBooks');
	// });
	Route::match(['Post', 'get'],'/ftfCollected', 'BudgetController@index');
	Route::get('/Ftf_collection', 'BudgetController@getUserInfoById');
	Route::post('/Ftf_collection', 'BudgetController@ftfCollected');
	Route::get('/deleteftfCollection/{id}', 'BudgetController@deleteftfCollected');

	// Route::get('/ftfCollected', function () {
	//     return view('adminView.ftfCollected');
	// });
	Route::post('/reconsile_statement', 'BudgetController@reconsileStatement');
	Route::get('/reconsileStatement', 'BudgetController@showReconsileStatement');
	Route::get('/delete_reconcileStatement/{id}', 'BudgetController@deleteReconsileStatement');
	Route::get('/edit-statement/{id}', 'BudgetController@edit_reconsileStatement');
	// Route::get('/reconsileStatement', function () {
	//     return view('adminView.reconsileStatement');
	// });
	Route::get('/budgetUtilized', 'BudgetController@showBudgetDetails');
	Route::post('/salary_budget', 'BudgetController@salaryBudget');

	Route::get('/delete_salaryBudget/{id}', 'BudgetController@deleteSalaryBudget');
	Route::get('/edit-salarybudget/{id}', 'BudgetController@edit_salaryBuget');

	Route::post('/excess_budget', 'BudgetController@excessBudget');
	Route::post('/contingent_budget', 'BudgetController@contingentBudget');
 	Route::get('/delete_salarybudget/{id}','BudgetController@deleteSalaryBudget');
	Route::get('/delete_ExcessBudget/{id}','BudgetController@deleteExcessBudget');
	Route::get('/edit-excessBudget/{id}', 'BudgetController@edit_excessBuget');
	Route::get('/delete_Contingentbudget/{id}', 'BudgetController@deleteContingentBudget');
	Route::get('/edit-contingentBudget/{id}', 'BudgetController@edit_contgBuget');


	// Route::get('/budgetUtilized', function () {
	//     return view('adminView.budgetUtilized');
	// });

	// Route::get('/nSbBudget', function () {
	//     return view('adminView.nSbBudget');
	// });
	// Route::get('/donations', function () {
	//     return view('adminView.donations');
	// });
	Route::post('/procurement_Document', 'BudgetController@procurementDocumnt');
	Route::get('/procurementDocument', 'BudgetController@show_procDetails');
	Route::get('/delete_proDoc/{id}', 'BudgetController@delete_procurementDoc');
	Route::get('/edit-procDocumnt/{id}', 'BudgetController@edit_procDoc');
	// Route::get('/procurementDocument', function () {
	//     return view('adminView.procurementDocument');
	// });

	Route::post('/nsb_budget', 'BudgetController@nsbBudget');
	Route::get('/nSbBudget', 'BudgetController@nsbBudgetDetails');
	Route::get('/Dlete_nSbBudget/{id}','BudgetController@deleteNsbBudget');
	Route::get('/edit-nsbBudget/{id}','BudgetController@edit_nsbBuget');
	// Route::get('/nSbBudget', function () {
	//     return view('adminView.nSbBudget');
	// });
	Route::post('/donation_page', 'BudgetController@donation');
	Route::get('/donations', 'BudgetController@donationDetails');
	Route::get('/Dlete_Donation/{id}','BudgetController@deleteDonation');
	Route::get('/edit-donation/{id}','BudgetController@edit_donation');
	// Route::get('/donations', function () {
	    // return view('adminView.donations');
	// });
	// Route::match(['post','get'], '/procurementDocument', 'BudgetController@procurementDocumnt');
	// Route::get('/procurementDocument', 'BudgetController@procurementDocumentDetail');
	// Route::get('/procurementDocument', function () {
	//     return view('adminView.procurementDocument');
	// });
	Route::post('/procurement_process', 'BudgetController@procurementProcess');
	Route::get('/procurementProcess', 'BudgetController@show_procProcess');
	Route::get('/delete-procProcess/{id}', 'BudgetController@delete_procProcess');
	Route::get('/edit-procProcess/{id}', 'BudgetController@edit_procprocess');
	// Route::get('/procurementProcess', function () {
	//     return view('adminView.procurementProcess');
	// });
	Route::post('/contractor_detail', 'Miscellaneous@contractorsDetail');
	Route::get('/contractorDetail', 'Miscellaneous@show_contractor');
	Route::get('/delete-contractor/{id}', 'Miscellaneous@delete_contractor');
	Route::get('/edit-contractor/{id}', 'Miscellaneous@edit_contractor');
	// Route::get('/contractorDetail', function () {
	//     return view('adminView.contractorDetail');
	// });
	Route::get('/photoRecord', function () {
	    return view('adminView.photoRecord');
	});
	Route::post('/assigned_task', 'Miscellaneous@assignedTask');
	Route::get('/assignedTask', function () {
	    return view('adminView.assignedTask');
	});
	// Route::match(['Post', 'get'],'/availableCoActivities', 'Miscellaneous@mainCategories');
	Route::match(['Post', 'get'],'/availableCoActivities', 'Miscellaneous@getCategories');
	Route::get('/sports_cat', 'Miscellaneous@getCategoryId');
	// Route::get('/availableCoActivities', function () {
	//     return view('adminView.availableCoActivities');
	// });
	Route::match(['Post', 'get'],'/studentRecord', 'Miscellaneous@index');
	Route::get('/student_record', 'Miscellaneous@getStudentById');
	Route::post('/student_record', 'Miscellaneous@studentRecord');
	// Route::get('/studentRecord', function () {
	//     return view('adminView.studentRecord');
	// });
});