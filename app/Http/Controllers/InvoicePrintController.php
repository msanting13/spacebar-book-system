<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class InvoicePrintController extends Controller
{
    public function print(int $bookID)
    {
        $booking = Booking::find($bookID);
        $downPaymentPaid = Booking::PAYMENT_DONE;
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadView('admin.report.invoice', compact('booking', 'downPaymentPaid'));
        return $pdf->stream();
    }
}
