<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'numofkillo',
        'advance',
        'admin_id'
    ];
}
