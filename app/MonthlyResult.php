<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonthlyResult extends Model
{
    public $fillable = ['month', 'subject', 'totalMarks', 'obtMarks', 'classPosition', 'remarks'];
}
