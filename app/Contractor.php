<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    public $fillable = ['contractorName', 'amountPerMonth', 'periodFrom', 'contractorCNIC', 'address', 'phoneNo', 'amountReceivedDate', 'finalPayment', 'issuedReceiptNo'];
}
