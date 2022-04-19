<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">
    <title>Generated Report</title>
    <style>
        body {
            font-family: 'Inter', san-serif;
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
        <br>
        <hr style="height : 0.2px; background:black">
    </center>
    <center>
        Generated Reports from {{ date('F d, Y', strtotime($from)) }} to {{ date('F d, Y', strtotime($to)) }}
    </center>
    <br>

    <span style='font-size : 13px;'>
        TOTAL ROOMS: <strong>{{ $bookings->count() }}</strong>
    </span>
    <br>
    <span style='font-size : 13px;'>
        EXTRAS TOTAL AMOUNT: <strong>&#8369; {{ number_format($extrasTotal, 2, ".", ",") }}</strong>
    </span>
    <br>
    <span style='font-size : 13px;'>
        TOTAL DAYS CUSTOMERS STAYED : <strong>{{ $totalStayedDays }}</strong>
    </span>
    <br>
    <span style='font-size : 13px;'>
        TOTAL :  <strong>&#8369; {{ number_format($total, 2, ".", ",") }}</strong>
    </span>
    <br>
    <br>
        <table border="1" cellpadding="5" style="border-collapse : collapse;" width="100%;">
            <thead>
                <tr>
                    <th style="font-size:12px; text-transform:uppercase;" nowrap>Room</th>
                    <th style="font-size:12px; text-transform:uppercase;" nowrap>EXTRAS</th>
                    <th style="font-size:12px; text-transform:uppercase;" nowrap>EXTRAS AMOUNT</th>
                    <th style="font-size:12px; text-transform:uppercase;" nowrap>room Amount</th>
                    <th style="font-size:12px; text-transform:uppercase;" nowrap>stayed date</th>
                    <th style="font-size:12px; text-transform:uppercase;" nowrap>stayed days</th>
                    <th style="font-size:12px; text-transform:uppercase;" nowrap>sub-total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                <tr>
                    <td nowrap style="font-size :13px;">
                        <center>{{ $booking->room->name }}</center>
                    </td>
                    <td nowrap style="font-size :13px;">
                        {{ $booking->extras->implode('name', ', ') }}
                    </td>
                    <td nowrap style="font-size :13px; text-align:right;">&#8369; {{ number_format($booking->extras->sum('price') , 2, ".", ",") }} &nbsp;
                    </td>
                    <td nowrap style="font-size :13px; text-align:right;">&#8369; {{ number_format($booking->room->price, 2, ".", ",") }}&nbsp;</td>
                    <td nowrap style="font-size :13px;">
                        <center>
                            {{ $booking->start_date->format('F d ') }} - {{ $booking->end_date->format('d, Y') }}
                        </center>
                    </td>
                    <td nowrap style="font-size :13px;">
                        <center>
                            {{ $booking->start_date->diffInDays($booking->end_date) + 1}}
                        </center>
                    </td>
                    <td nowrap style="font-size :13px; text-align:right;">
                        &#8369;
                        {{ number_format(($booking->start_date->diffInDays($booking->end_date) + 1) * $booking->room->price + $booking->extras->sum('price'), 2, ".", ",") }}
                        &nbsp;
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot style="background :#F6F6F6;">
                <tr>
                    <td nowrap style="font-size :13px;">
                    </td>
                    <td nowrap style="font-size :13px;">
                    </td>
                    <td nowrap style="font-size :13px; text-align:right;">
                        <strong>
                            &#8369; {{ number_format($booking->extras->sum('price') , 2, ".", ",") }}
                        </strong>
                        &nbsp;
                    </td>
                    <td nowrap style="font-size :13px; text-align:right;">
                            <strong>
                                &#8369; {{ number_format($roomTotalAmount, 2, ".", ",") }}
                            </strong>
                    </td>
                    <td nowrap style="font-size :13px;">&nbsp;</td>
                    <td nowrap style="font-size :13px;">
                        <center>
                            <strong>
                                {{ $totalStayedDays }}
                            </strong>
                        </center>
                    </td>
                    <td nowrap style="font-size :13px; text-align:right;">
                        <strong>
                            &#8369;
                            {{ number_format($total, 2, ".", ",") }}
                            &nbsp;
                        </strong>
                    </td>
                </tr>
            </tfoot>
        </table>
</body>

</html>
