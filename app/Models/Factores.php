<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factores extends Model
{
    use HasFactory;
    protected $fillable = [
        'shop_id',
        'total_amount',
        'due_date',
        'payment_date',
        'status',
        'description',
    ];
}
