<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicRecord extends Model
{
    public $fillable = ['student_id', 'class', 'stdName', 'rollNo', 'admissionNo', 'cnicNumber'];
}
