<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">
    <title>Confirmation Letter</title>
    <style>
        body {
            font-family : 'Inter', san-serif;
        }
    </style>
</head>
<body>
    <center>
        <span>Republic of the Philipppines</span>
        <br>
        <span style="font-weight :bold;">SPACEBAR BEACH RESORT</span>
        <br>
        <span>Purok 6, Poblacion, Cagwait, Surigao del Sur</span>
    </center>

    <br>
    <center>
        <h3>CONFIRMATION LETTER</h3>
    </center>
    <span>Date: <u>{{ date('F d, Y', time()) }}</u></span>
    <br>
    <br>
    <span>{{ $user->first_name }} {{ $user->last_name }}</span>
    <br>
    <br>
    <span>Dear Sir/Ma'am {{ $user->first_name }} {{ $user->last_name }},</span>
    <br>
    <br>
    <p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is to confirm your booking on {{ $booking->created_at->format('F d, Y') }} for a {{ $booking->room->roomType->type_name }} for {{ $booking->end_date->diffInDays($booking->start_date) }} nights at Spacebar Beach Resort, Purok 6, Poblacion, Cagwait, Surigao del Sur. the check-in date shall be {{ $booking->start_date->format('F d, Y') }} at 2pm and the check-out date shall be on {{ $booking->end_date->format('F d, Y') }} at 12 noon.
        <br>
        <br>
        Further details of your booking are listed below,
        <br>
        Number of occupants:{{ $booking->room->capacity }}
        <br>
        Room type: {{ $booking->room->roomType->type_name }}
        <br>
        Amenities: free Wi-Fi on one gadget only
        <br>
        Extras/ Add-ons: 
        @if($booking->extras->count() !== 0)
            @foreach($booking->extras as $extra)
                {{ $extra->name }},
            @endforeach
        @else
            __________
        @endif
        <br>
        <br>
        Please note that there will be a fine of 500 pesos for your pets litter. Also the establishment phohibits smoking.
        <br>
        <br>
        Reminder : Upon agreed on the reservation process, there shall be no cancellation/refund for anything that has been paid. The only option we offer is the rescheduling of the reservation. Moreover, if rescheduling is desired, the customer shall inform the management 3 days prior to the date of reservation.

        <br>
        <br>

        We are looking forward to your visit and hope that you will enjouy your stay. Customer's satisfaction is our ultimate goal. Thank you and God Bless!

        <br>
        <br>

        Yours sincerely,
        <br>
        Management
    </p>

</body>
</html>