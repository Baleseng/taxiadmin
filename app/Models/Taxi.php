<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxi extends Model
{
    use HasFactory;

    protected $fillable = [
    'admin_id',
    'chair_id',
    'owner_id',
    'driver_id',
    'marshall_id',
    'model',
    'registration',
    'seater',
    'owner',
    'driver',
    'routes',
    'status',
    'association',
    'dailyRevenue',
    'weeklyRevenue',
    'monthlyRevenue',
    'annuallyRevenue',
    'firstload',
    'lastload',
    ];
}
