<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContingentBudget extends Model
{
    public $fillable = ['conDdoNo', 'conBudgetYear', 'conDescription', 'conEstimatedBudget', 'conAllocatedBudget', 'conReleased', 'conConsumed', 'conBalance'];
}
