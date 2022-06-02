<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joblog extends Model
{
    use HasFactory;
    protected $fillable = [
        'Date',
        'Title',
        'Details',
        'Time_start',
        'Time_end',
        'approved_status',
        'image'
    ];
}
