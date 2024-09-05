<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Malls extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'description',
        'number_of_shops',
        'total_area',
        'contact_info',
    ];
}
