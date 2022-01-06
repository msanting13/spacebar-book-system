<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory, Uuids;
    protected $with = ['roomType'];
    
    protected $fillable = ['name', 'description', 'capacity', 'room_type_id', 'price'];

    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'room_id');
    }
}
