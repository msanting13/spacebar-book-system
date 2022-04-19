@extends('user.layouts.app')
@section('page-title', 'Invoice')
@prepend('page-css')
<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}


			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
@endprepend
@section('content')
<div class="row">
    <div class="col-lg-12">
        @if($booking->downpayment_status !== $downPaymentPaid && $booking->status !== 'check_out')
        <div class="alert alert-dismissible bg-primary d-flex flex-column flex-sm-row">
            <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                <h5 class="mb-2 light text-white">Important Message</h4>
                    <span class='fw-bold fs-6'>Click the button with GCASH icon to pay the down payment of your picked
                        room.</span>
            </div>

        </div>
        @endif
        
		<div class="invoice-box card shadow-none">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="https://res.cloudinary.com/dyjj97kgw/image/upload/v1649434490/space-bar-logo_zup4pc.jpg" style="width: 20%;" />
								</td>

								<td nowrap>
									Invoice #: {{ $booking->invoices->invoice_number }}<br />
									{{ $booking->invoices->created_at->format('F d, Y') }}<br />
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									Spacebar Beach Resort.<br />
									Purok 6, Poblacion<br />
									Cagwait, Surigao del Sur
								</td>

								<td>
									{{ ucfirst($booking->user->first_name . ' ' . $booking->user->last_name) }}<br />
									{{ $booking->user->phone_number }}<br />
									{{ $booking->user->email }}
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Downpayment</td>

					<td>Amount</td>
				</tr>

				<tr class="details">
					<td>GCASH</td>
					<td>
                        {{ number_format($booking->total_price / 2, 2, ".", ",") }}
                    </td>
				</tr>

				<tr class="heading">
					<td>Description</td>
					<td>Price</td>
				</tr>

				<tr class="item">
					<td>{{ $booking->room->name }}</td>
					<td>{{ number_format($booking->room->price, 2, ".", ",") }}</td>
				</tr>

				<tr class="item">
					<td>{{ $booking->start_date->format('F d') }} - {{ $booking->end_date->format('d, Y') }} (<strong>{{ $booking->end_date->diffInDays($booking->start_date) + 1 }} day/s</strong>) </td>
					<td>{{ number_format($booking->room->price * ( $booking->end_date->diffInDays($booking->start_date) + 1), 2, ".", ",") }}</td>
				</tr>

				@foreach($booking->extras as $extra)
                <tr class="item last">
					<td>{{ $extra->name }}</td>
					<td>{{ $extra->price }}</td>
				</tr>
                @endforeach

                @if($booking->downpayment_status === $downPaymentPaid)
                <tr class="item">
					<td>Downpayment</td>
					<td> <strong>-</strong> {{ number_format($booking->total_price / 2, 2, ".", ",") }}</td>
				</tr>
                @endif

				<tr class="total">
					<td></td>
                    @if($booking->downpayment_status === $downPaymentPaid)
                        <td id='totalPrice' data-total="{{ number_format((($booking->room->price * ( $booking->end_date->diffInDays($booking->start_date) + 1) + $booking->extras->sum('price')) - ($booking->total_price / 2)), 2, "", "") }}">Total: {{ number_format((($booking->room->price * ( $booking->end_date->diffInDays($booking->start_date) + 1) + $booking->extras->sum('price')) - ($booking->total_price / 2)), 2, ".", ",") }}</td>
                    @else
                        <td id='totalPrice' data-total="{{ number_format($booking->total_price, 2, "", "") }}">Total: {{ number_format(($booking->room->price * ( $booking->end_date->diffInDays($booking->start_date) + 1) + $booking->extras->sum('price')), 2, ".", ",") }}</td>
                    @endif
				</tr>
                
                <tr>
                    <td></td>
                    <td>
                        @if($booking->downpayment_status !== $downPaymentPaid && $booking->status !== 'check_out')
                                <a href="#" class="btn btn-block btn-outline-primary w-md waves-effect waves-light"
                                    id='btnPayUsingGCash'>
                                    <img src="https://res.cloudinary.com/dyjj97kgw/image/upload/w_90/v1649433799/gcash_go2dmj.png"
                                        class='img-fluid' alt="">
                                </a>
                        @endif
                    </td>
                </tr>
			</table>
		</div>
	<div class="d-print-none">
                    <div class="text-center mt-2">
                        <a class="btn btn-info waves-effect waves-light" href="{{ route('payment.success', $booking->id) }}">PRINT CONFIRMATION LETTER</a>
                        <a class="btn btn-primary waves-effect waves-light" href="{{ route('invoice.print', $booking->id) }}">PRINT INVOICE</a>
                        
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
