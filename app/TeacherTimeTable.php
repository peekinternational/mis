<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherTimeTable extends Model
{
    public $fillable = ['teacherName', 'class', 'subject', 'time'];
}
