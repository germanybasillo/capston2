<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{
    use HasFactory;
    protected $fillable = [
        'tname',
        'room_no',
        'bed_no',
        'date_start',
        'due_date',
    ];
}
