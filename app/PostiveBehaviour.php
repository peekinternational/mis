<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostiveBehaviour extends Model
{
    public $fillable = ['stdId', 'type', 'otherType', 'date', 'level', 'position'];
}
