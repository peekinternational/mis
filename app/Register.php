<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public $fillable = ['userType', 'fullname', 'uname', 'mblNumbr', 'password'];
}
