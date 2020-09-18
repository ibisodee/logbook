<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    protected $table = 'logbooks';
    protected $fillable = [
        'category',
        'model',
        'date_recorded',
        'manufacturer',
        'working_pressure',
        'working_flow',
        'max_pressure',
        'pressure_testing_date',
        'first_issue_date',
        'unit_type',
        'current_configuration',
        'inspection_date',
        'inspection_comments',
        'assested_visual',
        'inspection_by',
        'maintenance_carried',
        'maintenance_completed_date',
        'current_location',
        'location_date'
    ];
}
