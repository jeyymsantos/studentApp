<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'studName',
        'studCourse',
        'studRegion',
        'studProvince',
        'studCity',
        'studSex',
        'studAge'
    ];
}
