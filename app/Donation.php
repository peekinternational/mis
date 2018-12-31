<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    public $fillable = ['donationDate', 'donorName', 'amount', 'purpose', 'depositAccNo', 'bankBranch'];
}
