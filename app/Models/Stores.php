<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'owner_name',
        'contact_info',
        'mall_id',
        'area',
        'type',
        'rent_price',
        'status',
        'opening_date',
    ];
}
