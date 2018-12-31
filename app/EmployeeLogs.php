<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeLogs extends Model
{
    public $fillable = ['faculty_id', 'professionalQualification', 'courseName', 'courseVenu', 'courseDate', 'courseDuration', 'conductedBy', 'taskDate', 'task', 'duration', 'taskStatus', 'comments'];
}
