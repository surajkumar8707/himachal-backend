<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PefectTourPackages extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'images',
        'persons',
        'price',
        'duration',
        'itinerary',
        'accommodations',
        'meals',
        'transportation',
        'tour_guides',
        'status',
    ];

}
