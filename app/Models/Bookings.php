<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'date', 'rooms', 'visitors', 'room_type_id'];

    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }
}
