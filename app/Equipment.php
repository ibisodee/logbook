<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class Equipment extends Model
{
    protected $table = 'equipments';
    protected $fillable = [
        'category',
        'model',
        'engine_no',
        'reg_no'
    ];
}
