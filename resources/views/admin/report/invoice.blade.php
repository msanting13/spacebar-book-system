<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Invoice - {{ $booking->invoices->invoice_number }}</title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
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

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>

	<body>
		<div class="invoice-box">
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
					<td>{{ number_format($booking->total_price / 2, 2, ".", ",") }}</td>
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
                        <td>Total: {{ number_format((($booking->room->price * ( $booking->end_date->diffInDays($booking->start_date) + 1) + $booking->extras->sum('price')) - ($booking->total_price / 2)), 2, ".", ",") }}</td>
                    @else
                        <td>Total: {{ number_format(($booking->room->price * ( $booking->end_date->diffInDays($booking->start_date) + 1) + $booking->extras->sum('price')), 2, ".", ",") }}</td>
                    @endif
				</tr>
			</table>
		</div>
	</body>
</html>