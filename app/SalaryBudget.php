<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalaryBudget extends Model
{
    public $fillable = ['DdoNo', 'budgetYear', 'description', 'estimatedBudget', 'allocatedBudget', 'released', 'consumed', 'balance'];
}
