<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentRecord extends Model
{
    public $fillable = ['studentName', 'fatherName', 'dob', 'admissionNo', 'rollNo', 'class', 'attendanceDuringYear', 'maxAttendance', 'homeAddress', 'stdPhoto'];
}
