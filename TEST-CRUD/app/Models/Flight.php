<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = ['flight_number', 'airline', 'origin', 'destination','departure_time','arrival_time'];
    protected $table = 'flights';
    public $timestamps = false;
}
