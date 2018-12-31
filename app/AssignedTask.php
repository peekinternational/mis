<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignedTask extends Model
{
    public $fillable = ['taskDate', 'assignTime', 'taskName', 'assignedTo', 'targetTime', 'remarks'];
}
