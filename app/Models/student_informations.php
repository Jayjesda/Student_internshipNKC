<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_informations extends Model
{
    use HasFactory;
    protected $fillable = [
        'profile_image',
        'level',
        'major',
        'faculty',
        'birthday',
        'age',
        'address',
        'telephone',
        'parent_name',
        'parent_age',
        'parent_work',
        'parent_relationship',
        'parent_address',
        'parent_telephone',
        'position_work',
        'address_work',
        'start_internship',
        'end_internship',
        'supervisor'

    ];
}
