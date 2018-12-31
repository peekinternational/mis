<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreviousResult extends Model
{
    public $fillable = ['previousClass', 'school', 'rollNo', 'year', 'subject', 'totalMarks', 'obtMarks', 'position', 'remarks'];
}
