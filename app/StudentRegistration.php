<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentRegistration extends Model
{
    public $fillable = ['stdName', 'stdCnic', 'stdPhone', 'stdDob', 'stdPhoto', 'stdNationality', 'stdCaste', 'stdReligion', 'stdFatherProfession', 'admissionNo', 'admissionDate','admittedInClass', 'rollNo', 'regsNumber1', 'regsNumber2', 'leavingDate', 'reasonOfLeaving', 'lastAttendedClass', 'fatherName', 'fatherCnic', 'fatherPhone', 'fatherAddress', 'motherName', 'motherCnic', 'motherPhone', 'motherAddress', 'guardianName', 'guardianCnic', 'guardianPhone', 'guardianAddress'];
}
