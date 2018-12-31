<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NegativeBehaviour extends Model
{
    public $fillable = ['incidentDate', 'lessonPeriod', 'lessonStyle', 'seatingPlan', 'workType', 'reportingStaff', 'coveringStaff', 'location', 'studentName', 'behaviourType', 'comments', 'actionTaken'];
}
