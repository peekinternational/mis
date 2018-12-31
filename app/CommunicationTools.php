<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommunicationTools extends Model
{
    public $fillable = ['mobileNo', 'email', 'homeAddress'];
