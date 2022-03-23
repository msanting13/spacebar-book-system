<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['number', 'user_id', 'booking_id', 'amount', 'invoice_number'];

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function boot()
    {
        parent::boot();
        static::creating(function ($invoice) {
            if (empty($invoice->{$invoice->getKeyName()})) {
                $invoice->{$invoice->getKeyName()} = Str::uuid()->toString();
            }

            $cuurentYear = Carbon::now()->format('Y');

            $prefix = 'SPBR-' . $cuurentYear;
            $invoice->number = Invoice::max('number') + 1;
            $invoice->invoice_number = $prefix . '-' . str_pad(
                $invoice->number,
                6, // as per your requirement.
                '0',
                STR_PAD_LEFT
            );
        });
    }
}
