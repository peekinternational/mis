<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReconsileStatement extends Model
{
    public $fillable = ['month', 'class', 'noOfStudent', 'fundCollection', 'totalFund', 'inchargeName', 'preparedBy', 'verifiedBy', 'principalName'];
}
