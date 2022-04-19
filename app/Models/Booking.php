<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public $with = ['user', 'room', 'extras'];
    public const PAYMENT_DONE = 1;
    public const FULLY_PAID = 2;
    
    protected $fillable = [
        'start_date',
        'end_date',
        'status',
        'total_price',
        'room_id',
        'user_id',
        'source_id',
        'downpayment_status'
    ];

    protected $casts = [
        'start_date'    =>  'datetime',
        'end_date'      =>  'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function extras()
    {
        return $this->belongsToMany(Extra::class, 'booking_extra', 'booking_id', 'extra_id')->withTimestamps();
    }

    public function invoices()
    {
        return $this->hasOne(Invoice::class, 'booking_id');
    }
}
