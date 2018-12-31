<div class="header_bg">
  <div class="container">

    <div class="header">
      <div class="logo navbar-left">
        <h1><a href="{{url('/')}}"><img src="{{'../images/logo.jpeg'}}" style="height: 37px; width: 37px;"></a></h1>
      </div>
      <div class="h_search navbar-right">
        <form>
          <input type="text" class="text" value="Enter text here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter text here';}">
          <input type="submit" value="search">

        </form>

      </div>

      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top navbar-custom">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed"  data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span style="background-color:#fff" class="icon-bar"></span>
        <span style="background-color:#fff" class="icon-bar"></span>
        <span style="background-color:#fff" class="icon-bar"></span>
      </button>
      <!-- logo -->
      <!-- <a class="navbar-brand logo" href="{{url('/')}}">
        <img class="customlogo" src="{{url('images/logo.png')}}" alt="logo" style="width: 20%;" />
      </a> -->
      <!-- /logo -->
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-left">
        <li id="home"><a href="{{url('/')}}">Home</a></li>
        @if(\Session::has('u_session'))
        <script type="text/javascript">
          $('#home').hide();
        </script>
        @if(\Session::get('u_session')->userType == 'Admin')
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Admission
            <span class="caret"></span></a>

          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Student Registration <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first">
                <li><a href="#">Class wise list</a>  </li>
                <li><a href="#">Admission form</a>  </li>
                <li><a href="#">School enrolment</a>  </li>
                <li><a href="#">Student drop outs</a>  </li>
                <li><a href="{{url('/adminView/studentRegistration')}}">Registration Form</a>  </li>
                <li><a href="#">Admission test score</a>  </li>
                <li><a href="#">List of student admitted/not admitted</a>  </li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Inquiry<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last">
                <li><a href="{{url('/adminView/admissionInquiries')}}">Admission inquiries</a>  </li>
                <li><a href="#">Class wise inquiries</a>  </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Student Info
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Student Attendance <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first">
                <li><a href="#">Daily attendance</a>  </li>
                <li><a href="#">Absent/Sick/Leaves</a>  </li>
                <li><a href="#">Period attendance</a>  </li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Student Personal Data<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-second">
                <li><a href="{{url('/adminView/academicRecord')}}">Academic Record</a>  </li>
                <li><a href="#">Left During Session</a>  </li>
                <li><a href="{{url('/adminView/studentRegistration')}}">Student Personal Data</a></li>
                <li><a href="{{url('/adminView/behaviorRecord')}}">Behaviour Record</a>  </li>
                <li><a href="#">Generate Student List</a>  </li>
                <li><a href="#">Identity Card</a>  </li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Learning Support<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-third">
                <li><a href="#">Course work material</a>  </li>
                <li><a href="#">Self-learning tools</a>  </li>
                <li><a href="#">Online teaching learning material</a>  </li>
                <li><a href="#">E-content/Instructional resources</a>  </li>
                <li><a href="#">Class work/Home work</a>  </li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Examination<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-fourth">
                <li><a href="studentInfo/results.html">Annual exam record</a>  </li>
                <li><a href="#">Subject teacher</a>  </li>
                <li><a href="studentInfo/results.html">Yearly result-Student wise</a>  </li>
                <li><a href="studentInfo/results.html">Grade wise result</a>  </li>
                <li><a href="#">Terminal exam record</a>  </li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Behaviour Record<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-six">
                <li><a href="studentInfo/behaviourRecord.html">Behaviour incidents</a>  </li>
                <li><a href="#">Detention/exclusions</a>  </li>
                <li><a href="#">Action taken</a>  </li>
                <li><a href="#">Evidence(Photo/Audio/Video)</a>  </li>
                <li><a href="#">Context of incident</a>  </li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Alumni<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last">
                <li><a href="{{url('/adminView/exStudent')}}">Ex-student record</a>  </li>
                <li><a href="#">Alumni meeting record</a>  </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Student Assesment
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Exam Assesment/Schedule <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first">
                <li><a href="#">Tools for students</a>  </li>
                <li><a href="#">Assesment plan</a>  </li>
                <li><a href="#">Scheme of study</a>  </li>
                <li><a href="#">Tools for teachers</a>  </li>
                <li><a href="#">Model LND</a>  </li>
                <li><a href="#">Question bank for paper setter</a>  </li>
                <li><a href="#">Template for assesment sheets</a>  </li>
                <li><a href="#">Readymade remarks</a>  </li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Result<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-third">
                <li><a href="{{url('/adminView/academicRecord')}}">Exam result</a>  </li>
                <li><a href="#">Tools for assessment analysis</a>  </li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Repeater Data<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last">
                <li><a href="">Class repeaters</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">HRM<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Staff Attendance <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first">
                <li><a href="">Leave record</a></li>
                <li><a href="">Staff daily attendance</a></li>
                <li><a href="">Absentees</a></li>
                <li><a href="">Biometric</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Staff Record<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-second">
                <li><a href="{{url('/adminView/employeeInfo')}}">Employee personal info</a></li>
                <li><a href="{{url('/adminView/acihevementRecord')}}">Employee achievements</a></li>
                <li><a href="{{url('/adminView/employeeReward')}}">Reward and punishments</a></li>
                <li><a href="">Skill wise record</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Professional Development <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-third">
                <li><a href="{{url('/adminView/emplyeeLogs')}}">Logs of employees training</a></li>
                <li><a href="{{url('/adminView/employeePerformance')}}">Performance of employees</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Student Teacher Ratio/STR <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-six">
                <li><a href="{{url('/adminView/studentTratio')}}">Student Teacher Ratio</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Question Bank <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last">
                <li><a href="">Select question randomly</a></li>
                <li><a href="">Chapters wise index</a></li>
                <li><a href="">List of approved books</a></li>
                <li><a href="">Category wise questions</a></li>
                <li><a href="">Chapters wise questions</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Communication<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Communication Tools <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first">
                <li><a href="">School's newsletter</a></li>
                <li><a href="">Advance communication tools</a></li>
                <li><a href="{{url('/adminView/communicationTools')}}">Communication tools</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Real Time Alerting<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-second">
                <li><a href="">Communicate with school council members</a></li>
                <li><a href="{{url('/adminView/advanceCommunication')}}">Send emails/sms</a></li>
                <li><a href="{{url('/adminView/advanceCommunication')}}">Real time alerting system</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Bulletin Board <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-third">
                <li><a href="">Digital news bulletin board</a></li>
                <li><a href="">News in urdu</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Discussion Forum <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-fourth">
                <li><a href="">Discussion forum</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Email <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last">
                <li><a href="">Client interaction history</a></li>
                <li><a href="">Email IDs</a></li>
                <li><a href="">Send auto-responses</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Reporting<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Staff Statement <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first">
                <li><a href="">Vacancy position</a></li>
                <li><a href="">Staff statement</a></li>
                <li><a href="">Daily student attendance</a></li>
                <li><a href="">Daily staff attendance</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Student Enrollment/Class List<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-second">
                <li><a href="">Student enrolment</a></li>
                <li><a href="">Class wise pass outs</a></li>
                <li><a href="">Student enrolment date wise reports</a></li>
                <li><a href="">Print class list</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Circular Letter <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-third">
                <li><a href="">List circular</a></li>
                <li><a href="">Export into excel/other formats</a></li>
                <li><a href="">Circular for staff</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="admission/result.html">Result Card<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-fourth">
                <li><a href="">Genrate mark sheet</a></li>
                <li><a href="">Issued mark sheet</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Reports <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-six">
                <li><a href="">Teacher performance report</a></li>
                <li><a href="">Subject performance report</a></li>
                <li><a href="">Class performance report</a></li>
                <li><a href="">Student's performance report</a></li>
                <li><a href="">Sports/debate activities report</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Certificates <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last">
                <li><a href="reporting/certificates.html">Character certificate</a></li>
                <li><a href="reporting/certificates.html">Provisional certificate</a></li>
                <li><a href="reporting/certificates.html">School leaving certificate</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Scheduling<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Time Table <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first">
                <li><a href="{{url('/adminView/teacherTimeTable')}}">Teacher-wise time table</a></li>
                <li><a href="#">Available seats</a></li>
                <li><a href="#">Available rooms and staff</a></li>
                <li><a href="{{url('/adminView/classTimeTable')}}">Class-wise time table</a></li>
                <li><a href="#">Create online time table</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Exam Schedule<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-second">
                <li><a href="{{url('/adminView/examTimeTable')}}">Exam time table</a></li>
                <li><a href="{{url('/adminView/examSeatingPlan')}}">Exam seating plan</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">School Council <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-third">
                <li><a href="{{url('adminView/schoolCouncil')}}">School council members</a></li>
                <li><a href="{{url('/adminView/meetingMinutes')}}">Minutes of meetings</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="miscellaneous/CocurricularActivity.html">Co-curricular Activities <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-fourth">
                <li><a href="">Progress record</a></li>
                <li><a href="">Attendance in co-curricular activities</a></li>
                <li><a href="">Available co-curricular activities</a></li>
                <li><a href="">Fee collection in co-curricular activities</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Calendar of Events <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-six">
                <li><a href="#">Calendar of event-monthly</a></li>
                <li><a href="#">Calendar of event-yearly</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Event Management <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last">
                <li><a href="">Communication record</a></li>
                <li><a href="">Details of any event</a></li>
                <li><a href="">Date wise events</a></li>
                <li><a href="">Record of events</a></li>
                <li><a href="">Customize events</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Assets<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="resources/inventory.html">Inventory/General Stock <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first-left">
                <li><a href="">Finance bills</a></li>
                <li><a href="">Purchase return</a></li>
                <li><a href="">Items issued</a></li>
                <li><a href="">Requisition details</a></li>
                <li><a href="{{url('adminView/updateInventory')}}">Update inventory record</a></li>
                <li><a href="">Opening stock</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="resources/library.html">Library<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last-left">
                <li><a href="">Books purchased</a></li>
                <li><a href="{{url('adminView/booksList')}}">List of books</a></li>
                <li><a href="{{url('adminView/issuedBooks')}}">Issued books </a></li>
                <li><a href="">Book categories</a></li>
                <li><a href="">Book description </a></li>
                <li><a href="">Membership </a></li>
                <li><a href="">Book condition </a></li>
                <li><a href="">Digital content </a></li>
                <li><a href="">Soft copies of books </a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Budget<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="resources/inventory.html">Staff Salaries/Payroll <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first-budget">
                <li><a href="">Employees leave account </a></li>
                <li><a href="">Employee salaries</a></li>
                <li><a href="">Head wise monthly salary report </a></li>
                <li><a href="">Pay scales of employees</a></li>
                <li><a href="">General provident fund  </a></li>
                <li><a href="">Tax details of each employee  </a></li>
                <li><a href="">Record of loans taken by employees </a></li>
                <li><a href="">Salary advance </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="budget/studentFee.html">Student Fee/FTF<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-second-budget">
                <li><a href="{{url('adminView/ftfCollected')}}">Faroogh e Taleem Fund collected </a></li>
                <li><a href="{{url('adminView/reconsileStatement')}}">Reconcile statement </a></li>
                <li><a href="">Concession due to hardship </a></li>
                <li><a href="">Fine details</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="budget/annualBudget.html">Annual Budget/NSB<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-third-budget">
                <li><a href="{{url('adminView/budgetUtilized')}}">Budget utilized  </a></li>
                <li><a href="{{url('adminView/nSbBudget')}}">Annual budget/NSB Allocated </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="budget/accounts.html">Accounts<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-fourth-budget">
                <li><a href="">NSB Budget control contingent register </a></li>
                <li><a href="">Accounts Book </a></li>
                <li><a href="">NSB cash book  </a></li>
                <li><a href="">NSB consumable stock register</a></li>
                <li><a href="">NSB permanent stock register</a></li>
                <li><a href="">General cash book</a></li>
                <li><a href="">Income expenditure statement</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="budget/donation.html">Donation<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-six-budget">
                <li><a href="{{url('adminView/donations')}}">Donations</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="budget/procurement.html">Procurements<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last-budget">
                <li><a href="">Update of inventory </a></li>
                <li><a href="{{url('adminView/procurementDocument')}}">Procurement documents  </a></li>
                <li><a href="{{url('adminView/procurementProcess')}}">Procurement process  </a></li>
                <li><a href="">PPRA rules  </a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Miscellaneous<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-misc">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Tracking <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first-misc">
                <li><a href="">Student tracking  </a></li>
                <li><a href="">Staff tracking  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Book Shop/tuck Shop<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-second-misc">
                <li><a href="">School tuck shop/Cafeteria info  </a></li>
                <li><a href="{{url('adminView/contractorDetail')}}">Contractor details  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Photo Record<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-third-misc">
                <li><a href="{{url('adminView/photoRecord')}}">Photograhs  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Task<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-fourth-misc">
                <li><a href="{{url('adminView/assignedTask')}}">Assigned tasks</a></li>
                <li><a href="">Send reminder  </a></li>
                <li><a href="">Task completion report  </a></li>
                <li><a href="">Work status  </a></li>
                <li><a href="">Pending task details  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">School Magazine<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-fifth-misc">
                <li><a href="miscellaneous/schoolMagazine.html">Online version of school magazine  </a></li>
                <li><a href="miscellaneous/schoolMagazine.html">School magazine(Hard copy details)  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="miscellaneous/CocurricularActivity.html">Co-curricular Activities<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-six-misc">
                <li><a href="{{url('adminView/studentRecord')}}">Student participation record  </a></li>
                <li><a href="">Student performance with coach details  </a></li>
                <li><a href="">Record of utilization  </a></li>
                <li><a href="{{url('adminView/availableCoActivities')}}">List of available co-curricular activities  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="miscellaneous/seatingArrange.html">Seating Arrangement<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-seven-misc">
                <li><a href="">Seating plan with room capacity  </a></li>
                <li><a href="">Seating plan with student details  </a></li>
                <li><a href="">Vacant seats available per class  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="miscellaneous/seatingArrange.html">Employee Remarks<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-eight-misc">
                <li><a href="">Remarks area for employees  </a></li>
                <li><a href="">Remarks given to the employees  </a></li>
                <li><a href="">Summary of points govent to each employee  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="miscellaneous/lessonPlanning.html">Lesson Planning<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-nine-misc">
                <li><a href="">Curriculum planner format  </a></li>
                <li><a href="">Teachers instructional record  </a></li>
                <li><a href="">Lesson planner format  </a></li>
                <li><a href="">Teacher report of each class  </a></li>
                <li><a href="">Integrate with mark book  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Document Management<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-fiftn-misc">
                <li><a href="">Tracking key documents  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="miscellaneous/infirmary.html">First Aid/Infirmary<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-ten-misc">
                <li><a href="">First aid equipment  </a></li>
                <li><a href="">Maintenance of medical equipment </a></li>
                <li><a href="">Staff, Patient, Injuries, Blood donors </a></li>
                <li><a href="">Medical card/Health card </a></li>
                <li><a href="">Daily checkup, Free camps, Vaccination </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="miscellaneous/specialEducation.html">Special Educational Needs/SEN<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-elevn-misc">
                <li><a href="">Facilities available for special students  </a></li>
                <li><a href="">Special student record  </a></li>
                <li><a href="">SEN database  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="miscellaneous/transportation.html">Transportation<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-twlev-misc">
                <li><a href="">Schedule of arrival & departure  </a></li>
                <li><a href="">School transport system record  </a></li>
                <li><a href="">Area wise fare  </a></li>
                <li><a href="">Passenger record per vehicle  </a></li>
                <li><a href="">Route wise passenger strength  </a></li>
                <li><a href="">Expenses vehicle wise  </a></li>
                <li><a href="">Route plan  </a></li>
                <li><a href="">List of drivers/Conductor vehicle wise  </a></li>
                <li><a href="">Route wise trip details  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="miscellaneous/security.html">Physical Security<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-thrtn-misc">
                <li><a href="">Emergency phone number  </a></li>
                <li><a href="">Security alert  </a></li>
                <li><a href="">Security  staff</a></li>
                <li><a href="">Security  equipment</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="miscellaneous/security.html">Hostel Management<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last-misc">
                <li><a href="">Log book  </a></li>
                <li><a href="">Print gate pass  </a></li>
                <li><a href="">Issued items to allottees  </a></li>
                <li><a href="">Rooms  </a></li>
                <li><a href="">Room allocation guidlines  </a></li>
                <li><a href="">Hostel basic details  </a></li>
                <li><a href="">Allotments  </a></li>
              </ul>
            </li>
          </ul>
        </div>
        @elseif(\Session::get('u_session')->userType == 'Staff')
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Student Info
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Student Attendance <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first">
                <li><a href="#">Daily attendance</a>  </li>
                <li><a href="#">Absent/Sick/Leave</a>  </li>
                <li><a href="#">Period attendance</a>  </li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="studentInfo/learningSupport.html">Learning Support<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-third">
                <li><a href="#">Course work material</a>  </li>
                <li><a href="#">Self-Learning tools</a>  </li>
                <li><a href="#">Online teaching learning material</a>  </li>
                <li><a href="#">E-Content/Instructional resources</a>  </li>
                <li><a href="#">Class work/Home work</a>  </li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Behaviour Record<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last">
                <li><a href="studentInfo/behaviourRecord.html">Behaviour incidents</a>  </li>
                <li><a href="#">Detention/exclusions</a>  </li>
                <li><a href="#">Action taken</a>  </li>
                <li><a href="#">Evidence(Photo/Audio/Video)</a>  </li>
                <li><a href="#">Context of incident</a>  </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Assesment
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Exam Assesment/Schedule <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first">
                <li><a href="#">Tools for students</a>  </li>
                <li><a href="#">Assesment plan</a>  </li>
                <li><a href="#">Scheme of study</a>  </li>
                <li><a href="#">Tools for teachers</a>  </li>
                <li><a href="#">Model LND</a>  </li>
                <li><a href="#">Question bank for paper setter</a>  </li>
                <li><a href="#">Template for assesment sheets</a>  </li>
                <li><a href="#">Readymade remarks</a>  </li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Result<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-third">
                <li><a href="admission/result.html">Exam result</a>  </li>
                <li><a href="#">Tools for assessment analysis</a>  </li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Repeater Data<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last">
                <li><a href="">Class repeaters</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">HRM <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Staff Attendance <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first">
                <li><a href="">Leave record</a></li>
                <li><a href="">Staff daily attendance</a></li>
                <li><a href="">Absentees</a></li>
                <li><a href="">Biometric</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Question Bank <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last">
                <li><a href="">Select question randomly</a></li>
                <li><a href="">Chapters wise index</a></li>
                <li><a href="">List of approved books</a></li>
                <li><a href="">Category wise questions</a></li>
                <li><a href="">Chapters wise questions</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Communication<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Communication Tools <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first">
                <li><a href="">School's newsletter</a></li>
                <li><a href="">Advance communication tools</a></li>
                <li><a href="communication/communicationTools.html">Communication tools</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Real Time Alerting<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-second">
                <li><a href="">Communicate with school council members</a></li>
                <li><a href="communication/realTimeAlert.html">Send emails/sms</a></li>
                <li><a href="communication/realTimeAlert.html">Real time alerting system</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Bulletin Board <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-third">
                <li><a href="">Digital news bulletin board</a></li>
                <li><a href="communication/realTimeAlert.html">News in urdu</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Discussion Forum <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-fourth">
                <li><a href="">Discussion forum</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Email <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last">
                <li><a href="">Client interaction history</a></li>
                <li><a href="">Email IDs</a></li>
                <li><a href="">Send auto-responses</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Reporting<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="admission/result.html">Result Card/Marks Sheet<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first">
                <li><a href="">Genrate mark sheet</a></li>
                <li><a href="">Issued mark sheet</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Student Enrollment<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-six" style="">
                <li><a href="">Student enrolment</a></li>
                <li><a href="">Class wise pass outs</a></li>
                <li><a href="">Student enrolment date wise reports</a></li>
                <li><a href="">Print class list</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Scheduling<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Time Table <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first">
                <li><a href="scheduling/timeTable.html">Teacher-wise time table</a></li>
                <li><a href="#">Available seats</a></li>
                <li><a href="#">Available rooms and staff</a></li>
                <li><a href="scheduling/timeTable.html">Class-wise time table</a></li>
                <li><a href="#">Create online time table</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Exam Schedule<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-second">
                <li><a href="scheduling/dateSheet.html">Exam time table</a></li>
                <li><a href="#">Exam seating plan</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="miscellaneous/CocurricularActivity.html">Co-curricular Activities <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-third">
                <li><a href="">Progress record</a></li>
                <li><a href="">Attendance in co-curricular activities</a></li>
                <li><a href="">Available co-curricular activities</a></li>
                <li><a href="">Fee collection in co-curricular activities</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Calendar of Events <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-six">
                <li><a href="#">Calendar of event-monthly</a></li>
                <li><a href="#">Calendar of event-yearly</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Event Management <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last">
                <li><a href="">Communication record</a></li>
                <li><a href="">Details of any event</a></li>
                <li><a href="">Date wise events</a></li>
                <li><a href="">Record of events</a></li>
                <li><a href="">Customize events</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Budget<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="resources/inventory.html">Staff Salaries/Payroll <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first-budget">
                <li><a href="">Employees leave account </a></li>
                <li><a href="">Employee salaries</a></li>
                <li><a href="">Head wise monthly salary report </a></li>
                <li><a href="">Pay scales of employees</a></li>
                <li><a href="">General provident fund  </a></li>
                <li><a href="">Tax details of each employee  </a></li>
                <li><a href="">Record of loans taken by employees </a></li>
                <li><a href="">Salary advance </a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Miscellaneous<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-misc" style="left: 0;">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">School Magazine<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first-fact">
                <li><a href="miscellaneous/schoolMagazine.html">Online version of school magazine  </a></li>
                <li><a href="miscellaneous/schoolMagazine.html">School magazine(Hard copy details)  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="miscellaneous/CocurricularActivity.html">Co-curricular Activities<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-second-fact">
                <li><a href="">Student participation record  </a></li>
                <li><a href="">Student performance with coach details  </a></li>
                <li><a href="">Record of utilization  </a></li>
                <li><a href="">List of available co-curricular activities  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="miscellaneous/seatingArrange.html">Seating Arrangement<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-third-fact">
                <li><a href="">Seating plan with room capacity  </a></li>
                <li><a href="">Seating plan with student details  </a></li>
                <li><a href="">Vacant seats available per class  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="miscellaneous/seatingArrange.html">Employee Remarks<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-fourth-fact">
                <li><a href="">Remarks area for employees  </a></li>
                <li><a href="">Remarks given to the employees  </a></li>
                <li><a href="">Summary of points govent to each employee  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Document Management<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-fifth-fact">
                <li><a href="">Tracking key documents  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="miscellaneous/lessonPlanning.html">Lesson Planning<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last-fact">
                <li><a href="">Curriculum planner format  </a></li>
                <li><a href="">Teachers instructional record  </a></li>
                <li><a href="">Lesson planner format  </a></li>
                <li><a href="">Teacher report of each class  </a></li>
                <li><a href="">Integrate with mark book  </a></li>
              </ul>
            </li>
          </ul>
        </div>
        @elseif(\Session::get('u_session')->userType == 'Student')
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Student Info
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Examination<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first">
                <li><a href="studentInfo/results.html">Annual exam record</a>  </li>
                <li><a href="#">Subject teacher</a>  </li>
                <li><a href="studentInfo/results.html">Yearly result-Student wise</a>  </li>
                <li><a href="studentInfo/results.html">Grade wise result</a>  </li>
                <li><a href="#">Terminal exam record</a>  </li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Learning Support<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-third">
                <li><a href="#">Course work material</a>  </li>
                <li><a href="#">Self-learning tools</a>  </li>
                <li><a href="#">Online teaching learning material</a>  </li>
                <li><a href="#">E-content/Instructional resources</a>  </li>
                <li><a href="#">Class work/Home work</a>  </li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Behaviour Record<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last">
                <li><a href="studentInfo/behaviourRecord.html">Behaviour incidents</a>  </li>
                <li><a href="#">Detention/exclusions</a>  </li>
                <li><a href="#">Action taken</a>  </li>
                <li><a href="#">Evidence(Photo/Audio/Video)</a>  </li>
                <li><a href="#">Context of incident</a>  </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Admission
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Student Registration <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-second">
                <li><a href="#">Class wise list</a>  </li>
                <li><a href="#">Admission form</a>  </li>
                <li><a href="#">School enrolment</a>  </li>
                <li><a href="#">Student drop outs</a>  </li>
                <li><a href="admission/studentRegistration.html">Registration Form</a>  </li>
                <li><a href="#">Admission test score</a>  </li>
                <li><a href="#">List of student admitted/not admitted</a>  </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Student Assesment
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Result<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-second">
                <li><a href="admission/result.html">Exam result</a>  </li>
                <li><a href="#">Tools for assessment analysis</a>  </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Communication<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Communication Tools <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first">
                <li><a href="">School's newsletter</a></li>
                <li><a href="">Advance communication tools</a></li>
                <li><a href="communication/communicationTools.html">Communication tools</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Real Time Alerting<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-second">
                <li><a href="">Communicate with school council members</a></li>
                <li><a href="communication/realTimeAlert.html">Send emails/sms</a></li>
                <li><a href="communication/realTimeAlert.html">Real time alerting system</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Discussion Forum <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-third">
                <li><a href="">Discussion forum</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Bulletin Board <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-fourth">
                <li><a href="">Digital news bulletin board</a></li>
                <li><a href="communication/realTimeAlert.html">News in urdu</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Email <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last">
                <li><a href="">Client interaction history</a></li>
                <li><a href="">Email IDs</a></li>
                <li><a href="">Send auto-responses</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Scheduling<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Time Table <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first">
                <li><a href="scheduling/timeTable.html">Teacher-wise time table</a></li>
                <li><a href="#">Available seats</a></li>
                <li><a href="#">Available rooms and staff</a></li>
                <li><a href="scheduling/timeTable.html">Class-wise time table</a></li>
                <li><a href="#">Create online time table</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Exam Schedule<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-third">
                <li><a href="scheduling/dateSheet.html">Exam time table</a></li>
                <li><a href="#">Exam seating plan</a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Calendar of Events <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last">
                <li><a href="#">Calendar of event-monthly</a></li>
                <li><a href="#">Calendar of event-yearly</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="dropdown main-dropdown">
          <a class="dropdown-toggle menu-item-link" data-toggle="dropdown" href="#">Miscellaneous<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-misc" style="left: 0;">
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Tracking <span class="caret"></span></a>
              <ul class="dropdown-menu submenu-first">
                <li><a href="">Student tracking  </a></li>
                <li><a href="">Staff tracking  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="miscellaneous/CocurricularActivity.html">Co-curricular Activities<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-second">
                <li><a href="">Student participation record  </a></li>
                <li><a href="">Student performance with coach details  </a></li>
                <li><a href="">Record of utilization  </a></li>
                <li><a href="">List of available co-curricular activities  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="#">Book Shop/tuck Shop<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-third">
                <li><a href="miscellaneous/bookShop.html">School tuck shop/Cafeterian info  </a></li>
                <li><a href="miscellaneous/bookShop.html">Contractor details  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="miscellaneous/transportation.html">Transportation<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-fourth">
                <li><a href="">Schedule of arrival & departure  </a></li>
                <li><a href="">School transport system record  </a></li>
                <li><a href="">Area wise fare  </a></li>
                <li><a href="">Passenger record per vehicle  </a></li>
                <li><a href="">Route wise passenger strength  </a></li>
                <li><a href="">Expenses vehicle wise  </a></li>
                <li><a href="">Route plan  </a></li>
                <li><a href="">List of drivers/Conductor vehicle wise  </a></li>
                <li><a href="">Route wise trip details  </a></li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="test" tabindex="-1" href="miscellaneous/security.html">Hostel<span class="caret"></span></a>
              <ul class="dropdown-menu submenu-last">
                <li><a href="">Log book  </a></li>
                <li><a href="">Print gate pass  </a></li>
                <li><a href="">Issued items to allottees  </a></li>
                <li><a href="">Rooms  </a></li>
                <li><a href="">Room allocation guidlines  </a></li>
                <li><a href="">Hostel basic details  </a></li>
                <li><a href="">Allotments  </a></li>
              </ul>
            </li>
          </ul>
        </div>
        @endif
        @else
        <li><a href="{{url('education')}}">Education</a></li>
        <li><a href="{{url('events')}}">Events</a></li>
        <li><a href="{{url('career')}}">Career</a></li>
        <li><a href="{{url('/contact')}}">Contact Us</a></li>
        <li><a href="{{url('/about')}}">About Us</a></li>
      @endif
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(\Session::has('u_session'))
        <li style="border-left: 1px solid rgb(39, 37, 37);"><a href="{{url('logout')}}" style="text-transform: inherit;"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Logout</a></li>
        @else
        <li style="border-left: 1px solid rgb(39, 37, 37);"><a href="#login" data-toggle="modal"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Login</a></li>
        <li><a  href="#register" data-toggle="modal"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Signup</a></li>
        @endif
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
