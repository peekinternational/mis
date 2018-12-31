<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacultyReward extends Model
{
    public $fillable = ['faculty_id', 'date', 'reward', 'comments'];
}
