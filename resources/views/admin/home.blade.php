@extends('admin.layouts.app')
@section('page-title', 'Dashboard')
@section('content')
@include('templates.success')
<div class="row">
    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="avatar-sm font-size-20 me-3">
                        <span class="avatar-title bg-soft-primary text-primary rounded">
                            <i class="mdi mdi-warehouse"></i>
                        </span>
                    </div>
                    <div class="flex-1">
                        <div class="font-size-16 mt-2">Rooms</div>
                    </div>
                </div>
                <h4 class="mt-4 text-center">{{ $rooms }}</h4>
            </div>
        </div>
    </div>

    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="avatar-sm font-size-20 me-3">
                        <span class="avatar-title bg-soft-primary text-primary rounded">
                            <i class="mdi mdi-table-column-plus-before"></i>
                        </span>
                    </div>
                    <div class="flex-1">
                        <div class="font-size-16 mt-2">Extras</div>
                    </div>
                </div>
                <h4 class="mt-4 text-center">{{ $extras }}</h4>
            </div>
        </div>
    </div>

    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="avatar-sm font-size-20 me-3">
                        <span class="avatar-title bg-soft-primary text-primary rounded">
                            <i class="mdi mdi-home-import-outline"></i>
                        </span>
                    </div>
                    <div class="flex-1">
                        <div class="font-size-16 mt-2">Function Halls</div>
                    </div>
                </div>
                <h4 class="mt-4 text-center">{{ $functionHalls }}</h4>
            </div>
        </div>
    </div>

    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start">
                    <div class="avatar-sm font-size-20 me-3">
                        <span class="avatar-title bg-soft-primary text-primary rounded">
                            <i class="mdi mdi-tag-plus-outline"></i>
                        </span>
                    </div>
                    <div class="flex-1">
                        <div class="font-size-16 mt-2">Visitors</div>
                    </div>
                </div>
                <h4 class="mt-4 text-center">{{ $visitors }}</h4>
            </div>
        </div>
    </div>



</div>
<!-- end row -->


<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Latest Feedbacks</h4>
                <div class="mb-3">
                    <i class="fas fa-quote-left h4 text-primary"></i>
                </div>
                <div id="reviewExampleControls" class="carousel slide review-carousel" data-ride="carousel">

                    <div class="carousel-inner">
                        @if($feedbacks->count() !== 0)
                        <div class="carousel-item active">
                            <div>
                                <p>{{ $feedbacks->first()->content }}</p>
                                <div class="d-flex align-items-start mt-4">
                                    <div class="avatar-sm me-3">
                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            {{ $feedbacks->first()->user->profile }}
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h5 class="font-size-16 mb-1">{{ $feedbacks->first()->user->first_name }} {{ $feedbacks->first()->user->last_name }}</h5>
                                        <p class="mb-2">Satisfied Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>

                    <a class="carousel-control-prev" href="#reviewExampleControls" role="button" data-bs-slide="prev">
                        <i class="mdi mdi-chevron-left carousel-control-icon"></i>
                    </a>
                    <a class="carousel-control-next" href="#reviewExampleControls" role="button" data-bs-slide="next">
                        <i class="mdi mdi-chevron-right carousel-control-icon"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                
                                        <div>
                                            <p> {{ date('1 F', strtotime("-1 month", time())) }} - {{ date('d F', time()) }}, {{ date('Y') }}</p>
                                            <p class="mb-2">Total Earning</p>
                                            <h4>&#8369; {{ number_format($thisMonthSales + $lastMonthSales, 2, ".", ",") }}</h4>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mt-3">
                                                    <p class="mb-2 text-truncate">This Month</p>
                                                    <h5 class="d-inline-block align-middle mb-0">&#8369; {{ number_format($thisMonthSales, 2, ".", ",") }}</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mt-3">
                                                    <p class="mb-2 text-truncate">Last Month</p>
                                                    <h5>&#8369; {{ number_format($lastMonthSales, 2, ".", "") }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Upcoming Check-outs <span class='text-primary'>(2 Days Advanced)</span></h4>

                <div class="">
                    <table class="table table-centered text-dark">
                        <thead>
                            <tr>
                                <th scope="col" class='text-uppercase'>Invoice #</th>
                                <th scope="col" class='text-uppercase'>Booked Date</th>
                                <th scope="col" class='text-uppercase'>Durations</th>
                                <th scope="col" class='text-uppercase'>Customer Name</th>
                                <th scope="col" class='text-uppercase'>Amount</th>
                                <th scope="col" class='text-uppercase'>Payment Status</th>
                                <th scope="col" class='text-uppercase'>Status</th>
                                <th scope="col" class='text-center text-uppercase'>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($upcomingCheckouts as $booking)
                                <tr>
                                    <td>{{ $booking->invoices->invoice_number }}</td>
                                    <td>
                                        {{ $booking->created_at->format('F d, Y h:i A') }}
                                    </td>
                                    <td>
                                        {{ $booking->start_date->format('F d') }} - {{ $booking->end_date->format('d, Y') }}
                                    </td>
                                    <td>{{ $booking->user->first_name }} {{ $booking->user->last_name }}</td>
                                    <td>&#8369; {{ $booking->total_price }}</td>
                                    @if($booking->downpayment_status === 1)
                                    <td>
                                        &nbsp; <button class='mx-4 btn btn-success rounded-circle shadow'>
                                            <i class='fas fa-check text-white'></i>
                                        </button>
                                    </td>
                                    @else
                                    <td>
                                        &nbsp;
                                    </td>
                                    @endif
                                    <td >
                                        <span class='badge bg-info text-white h6 text-uppercase'>{{ Str::replace('_', ' ', $booking->status) }}</span>
                                    </td>
                                    <td class='text-center'>
                                    <div class="dropdown">
                                        <button class="btn btn-primary btn-block dropdown-toggle dropdown-click" type="button"
                                            id="dropdown-for-{{ $booking->id }}" data-bs-toggle="dropdown"
                                            style="z-index : 9999999;" aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown-for-{{ $booking->id }}">
                                            <li><a href="{{ route('payment.success', $booking->id) }}" target="_blank" class="dropdown-item">Print Confirm. Letter&nbsp;</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a target="_blank" href="{{ route('invoice.print', $booking->id) }}" class="dropdown-item" style='cursor:pointer;'>Print Invoice</a></li>
                                        </ul>
                                    </div>
                                    </td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="8" class='text-uppercase text-danger text-center fw-bold'>No available data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Latest Transactions</h4>

                <div class="">
                    <table class="table table-centered text-dark">
                        <thead>
                            <tr>
                                <th scope="col" class='text-uppercase'>Invoice #</th>
                                <th scope="col" class='text-uppercase'>Booked Date</th>
                                <th scope="col" class='text-uppercase'>Durations</th>
                                <th scope="col" class='text-uppercase'>Customer Name</th>
                                <th scope="col" class='text-uppercase'>Amount</th>
                                <th scope="col" class='text-uppercase'>Payment Status</th>
                                <th scope="col" class='text-uppercase'>Status</th>
                                <th scope="col" class='text-center text-uppercase'>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($appliedBookings as $booking)
                                <tr>
                                    <td>{{ $booking->invoices->invoice_number }}</td>
                                    <td>
                                        {{ $booking->created_at->format('F d, Y h:i A') }}
                                    </td>
                                    <td>
                                        {{ $booking->start_date->format('F d') }} - {{ $booking->end_date->format('d, Y') }}
                                    </td>
                                    <td>{{ $booking->user->first_name }} {{ $booking->user->last_name }}</td>
                                    <td>&#8369; {{ $booking->total_price }}</td>
                                    @if($booking->downpayment_status === 1)
                                    <td>
                                        &nbsp; <button class='mx-4 btn btn-success rounded-circle shadow'>
                                            <i class='fas fa-check text-white'></i>
                                        </button>
                                    </td>
                                    @else
                                    <td>
                                        &nbsp;
                                    </td>
                                    @endif
                                    <td >
                                        <span class='badge bg-info text-white h6 text-uppercase'>{{ $booking->status }}</span>
                                    </td>
                                    <td class='text-center'>
                                    <div class="btn-group me-1 mt-2">
                                
                                        <button type="button"
                                            class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Actions
                                            <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <form action="{{ route('approve.customer.booking', $booking->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                 <button class="dropdown-item text-left"> Approve</button>
                                            </form>
                                            <a href="{{ route('payment.success', $booking->id) }}" target="_blank" class="dropdown-item">
                                                 Print Confirm. Letter
                                            </a>
                                            <a target="_blank" href="{{ route('invoice.print', $booking->id) }}" class="dropdown-item">
                                                 Print Invoice
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <button class="dropdown-item" id="btnVerifyDownPayment" data-source="{{ $booking->source_id }}">Verify Downpayment</button>
                                        </div>
                                    </div>
                                    </td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="8" class='text-uppercase text-danger text-center fw-bold'>No available data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@push('page-scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/moment@2.29.2/min/moment.min.js"></script>
<script>
    $('#btnVerifyDownPayment').click(function () {
        let sourceID = $(this).attr('data-source');
        const options = {
            method: 'GET',
            headers: {
                Accept: 'application/json',
                Authorization: 'Basic cGtfdGVzdF9URnZQRzRQSDk1QzVBRDlvYXZ3NXg5NWI6c2tfdGVzdF9kYXA3NUhCazRGZGhadEE4ZDJOZEUyMWY='
            }
        };

        fetch(`https://api.paymongo.com/v1/sources/${sourceID}`, options)
        .then(response => response.json())
        .then(response => {
            const LAST_TWO_DIGITS = 2;
            if(response.data.attributes.status === 'chargeable') {
                let amount = response.data.attributes.amount;
                let downpaymentAmount = String(amount).substring(0, String(amount).length - LAST_TWO_DIGITS);
                let messageElement = document.createElement('p');
                messageElement.classList.add('text-dark');
                messageElement.innerHTML = `<br><h4>Verified</h4>This customer already paid the downpayment <br><strong>amount : &#8369;${parseFloat(downpaymentAmount).toFixed(2)}</strong> using <strong>${response.data.attributes.type.toUpperCase()}</strong>`;
                swal({
                    content : messageElement,
                    buttons : false,
                    icon : 'success',
                });
            }
        })
        .catch(err => console.error(err));
    });
</script>
@endpush
@endsection
