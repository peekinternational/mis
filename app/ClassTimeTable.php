<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassTimeTable extends Model
{
    public $fillable = ['class', 'subject', 'time'];
}
