<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolCouncil extends Model
{
    public $fillable = ['name', 'designation', 'cnic', 'phoneNo', 'address'];
}
