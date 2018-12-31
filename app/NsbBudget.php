<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NsbBudget extends Model
{
    public $fillable = ['DdoNo', 'budgetYear', 'description', 'estimatedBudget', 'allocatedBudget', 'released', 'consumed', 'balance'];
}
