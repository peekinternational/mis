<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmissionInquiry extends Model
{
    public $fillable = ['stdName', 'fatherName', 'address', 'phoneNo', 'AdmissionSought'];
}
