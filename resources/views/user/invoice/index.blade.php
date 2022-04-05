@extends('user.layouts.app')
@section('page-title', 'Invoice')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-dismissible bg-primary d-flex flex-column flex-sm-row">
            <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                <h5 class="mb-2 light text-white">Important Message</h4>
                    <span class='fw-bold fs-6'>Click the button with GCASH icon to pay the down payment of your picked
                        room.</span>
            </div>

        </div>
        <div class="card">
            <div class="card-body">
                <div class="invoice-title">
                    <div class="mb-4">
                        <h5 class='text-dark'>Invoice # {{ $booking->invoices->invoice_number }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <h5 class='text-dark'>BILL TO</h5>
                        <span class='text-dark fs-6'>{{ $booking->user->fullname }}</span>
                        <br>
                        <span class='text-dark fs-6'>{{ $booking->user->phone_number }}</span>
                        <br>
                        <span class='text-dark fs-6'>{{ $booking->user->email }}</span>
                    </div>
                </div>
                <div class="py-2 mt-3">
                    <h3 class="font-size-15 fw-bold">Summary</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-nowrap text-dark">
                        <thead>
                            <tr>
                                <th style="width: 70px;">No.</th>
                                <th>Description</th>
                                <th class="text-end">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>{{ $booking->room->name }}</td>
                                <td class="text-end">{{ $booking->room->price }}</td>
                            </tr>

                            @foreach($booking->extras as $extras)
                            <tr>
                                <td>{{ str_pad($loop->index + 2, 2, '0', STR_PAD_LEFT)}}</td>
                                <td>{{ $extras->name }}</td>
                                <td class="text-end">{{ $extras->price }}</td>
                            </tr>
                            @endforeach

                            <tr>
                                <td colspan="2" class="border-0 text-end">
                                    <strong>DURATION</strong>
                                </td>
                                @if($booking->end_date->diffInDays($booking->start_date) + 1 == 1)
                                <td class="border-0 text-end fw-bold">
                                    {{ $booking->end_date->diffInDays($booking->start_date) + 1 }} Day</td>
                                @else
                                <td class="border-0 text-end fw-bold">
                                    {{ $booking->end_date->diffInDays($booking->start_date) + 1}} Days</td>
                                @endif
                            </tr>

                            <tr>
                                <td colspan="2" class="text-end fw-bold">SUB TOTAL</td>
                                <td class="text-end fw-bold">
                                    {{ number_format($booking->total_price + $booking->extras->sum('price'), 2, ".", ",") }}
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2" class="border-0 fw-bold text-end">
                                    <strong>TOTAL</strong>
                                </td>
                                <td class="border-0 text-end">
                                    <h4 class="m-0" id="totalPrice"
                                        data-total="{{ number_format($booking->total_price + $booking->extras->sum('price'), 2, "", "") }}">
                                        &#8369;{{ number_format($booking->total_price + $booking->extras->sum('price'), 2, ".", ",") }}
                                    </h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-print-none">
                    <div class="float-end">
                        <a class="btn btn-lg btn-success waves-effect waves-light" href="{{ route('payment.success', $booking->id) }}">PRINT</a>
                        <a href="#" class="btn btn-lg btn-outline-primary w-md waves-effect waves-light mx-2 d-none"
                            id='btnPayUsingGCash'>
                            <img src="https://res.cloudinary.com/dyjj97kgw/image/upload/w_90/v1648986405/gcash_rjonfb.png"
                                class='img-fluid' alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="termModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myModalLabel">Spacebar Policy
                        </h5>
                    </div>
                    <div class="modal-body">
                        <p class='text-dark fs-5' style='line-height : 35px;'>
                            Please note that there will be a fine of 500 pesos for your pets litter. Also the
                            establishment
                            phohibits smoking.
                            Reminder : Upon agreed on the reservation process, there shall be no cancellation/refund for
                            anything that has been paid. The only option we offer is the rescheduling of the
                            reservation.
                            Moreover, if rescheduling is desired, the customer shall inform the management 3 days prior
                            to the date of reservation.
                            We are looking forward to your visit and hope that you will enjoy your stay. Customer's
                            satisfaction is our ultimate goal. Thank you and God Bless!
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary waves-effect waves-light" id='btnProceed'>I Agree
                            and Proceed</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>

</div>
@push('page-scripts')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>
<script>
        let total = $('#totalPrice').attr('data-total');
        const BOOK_ID = "{{ $booking->id }}";
        const SOURCE_ID = "{{ $booking->source_id }}";

        const OPTION_2 = {

        method: 'GET',

        headers: {

            Accept: 'application/json',

            Authorization: 'Basic cGtfdGVzdF9URnZQRzRQSDk1QzVBRDlvYXZ3NXg5NWI6c2tfdGVzdF9kYXA3NUhCazRGZGhadEE4ZDJOZEUyMWY='

        }

        };

        fetch(`https://api.paymongo.com/v1/sources/${SOURCE_ID}`, OPTION_2)
        .then(response => response.json())
        .then(response => {
            console.log(response.data.attributes.status);
            if(response.data.attributes.status === 'chargeable') {
                $('#btnPayUsingGCash').addClass('d-none');
            } else {
                $('#btnPayUsingGCash').removeClass('d-none');
            }
        })
        .catch(err => console.error(err));

    $('#btnPayUsingGCash').click(function () {
        $('#termModal').modal('toggle');
    });

    $('#btnProceed').click(function () {
        
        const options = {
            method: 'POST',
            headers: {
                Accept: 'application/json',
                'Content-Type': 'application/json',
                Authorization: 'Basic cGtfdGVzdF9URnZQRzRQSDk1QzVBRDlvYXZ3NXg5NWI6c2tfdGVzdF9kYXA3NUhCazRGZGhadEE4ZDJOZEUyMWY='
            },
            body: JSON.stringify({
                data: {
                    attributes: {
                        amount: parseInt(total / 2),
                        redirect: {
                            success: `http://glacial-brushlands-95714.herokuapp.com/success/${BOOK_ID}`,
                             failed: 'http://glacial-brushlands-95714.herokuapp.com/failed'
                        },
                        type: 'gcash',
                        currency: 'PHP'
                    }
                }
            })
        };

        fetch('https://api.paymongo.com/v1/sources', options)
            .then(response => response.json())
            .then(response => {
                $.ajax({
                    url: `/booking-update/${BOOK_ID}/${response.data.id}/`,
                    method: 'PUT',
                    success: function (responsee) {
                        if (responsee.success) {
                            window.open(response.data.attributes.redirect.checkout_url);
                        }
                    }
                });
            })
            .catch(err => console.error(err));
    });
</script>
@endpush
@endsection
