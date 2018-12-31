<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public $fillable = ['name', 'fatherName', 'cnicNumber', 'designation', 'basicScale', 'dob', 'domicile', 'qualification', 'serviceEntryDate', 'firstOrderNo', 'presentJoiningDate', 'orderNo', 'districtJoiningDate', 'selectionGrade', 'jobType', 'procedure', 'personalNo', 'gpfNo', 'ntnNumber', 'bankAccNo', 'bankName', 'branchCode', 'bankContact', 'bankEmail', 'homeAddress', 'schoolName', 'schoolAddress', 'emisCode', 'ucName', 'ppNo', 'Na', 'tehsil', 'district'];
}
