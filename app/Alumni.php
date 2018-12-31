<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    public $fillable = ['name', 'fatherName', 'lastClass', 'year', 'address', 'phoneNo', 'jobStatus'];
}
