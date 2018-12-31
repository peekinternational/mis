<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeetingMinutes extends Model
{
    public $fillable = ['meetingDate', 'agenda', 'approvel', 'participatedMember'];
}
