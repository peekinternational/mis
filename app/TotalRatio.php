<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TotalRatio extends Model
{
    public $fillable = ['totalStudents', 'totalTeachers', 'ratio']; 
}
