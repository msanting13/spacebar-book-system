<?php

namespace App\Models;

use App\Models\RoomVideo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use SoftDeletes, HasFactory;
    protected $with = ['roomType'];
    
    protected $fillable = ['name', 'description', 'capacity', 'room_type_id', 'price', 'type'];

    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'room_id');
    }

    public function image()
    {
        return $this->hasMany(RoomImage::class, 'room_id');
    }

    public function videos()
    {
        return $this->hasMany(RoomVideo::class,'room_id');
    }
}
