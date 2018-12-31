<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExcessBudget extends Model
{
    public $fillable = ['DdoNo', 'budgetYear', 'description', 'allocatedBudget', 'released', 'consumed', 'excess', 'surrender', 'reallocation'];
}
