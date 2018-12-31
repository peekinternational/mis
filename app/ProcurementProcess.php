<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcurementProcess extends Model
{
    public $fillable = ['purchaseDate', 'articleName', 'rate', 'quantity', 'totalPrice', 'issued', 'signReceivingPerson', 'Remarks', 'ddoSign'];
}
