<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservations';

    protected $fillable = [
        'date',
        'time',
        'user_id',
        'end_time',
        'no_of_seats',
        'name',
        'email',
        'mobile',
        'special_note',
        'table',

    ];
}
