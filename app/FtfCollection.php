<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FtfCollection extends Model
{
    public $fillable = ['stdName', 'rollNo', 'admisssionNo', 'month', 'receivedFunds', 'total'];
}
