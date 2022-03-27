<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Extra extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'description', 'price'];
    
    public function booking()
    {
        return $this->belongsToMany(Booking::class, 'booking_extra', 'extra_id', 'booking_id');
    }
}
