@extends('user.layouts.app')
@section('page-title', 'Dashboard')
@prepend('page-css')
<!-- DataTables -->
<link href="/admin-assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="/admin-assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
    type="text/css" />

<!-- Responsive datatable examples -->
<link href="/admin-assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
    type="text/css" />
@endprepend
@section('content')
@include('templates.success')
<div class="card shadow-none">
    <div class="card-body">
        <table id="bookings_table" class="table table-bordered text-dark">
            <thead>
                <tr class="fw-boldest fs-6 text-uppercase px-7">
                    <th>Invoice #</th>
                    <th class='text-center'>Name</th>
                    <th>Type</th>
                    <th>Capacity</th>
                    <th>Price</th>
                    <th class='text-center'>Status</th>
                    <th class='text-center'>Duration/s</th>
                    <th class='text-center' nowrap>Paid Down Payment</th>
                    <th class='text-center'>Booked At</th>
                    <th class='text-center'>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                <tr class='align-middle'>
                    <td class='fs-5 text-center'>
                        <a target="_blank" href="{{ route('user.view.invoice', $booking->id) }}" class='text-info text-decoration-underline'>{{ $booking->invoices->invoice_number }}</a>
                    </td>
                    <td class='fs-5 text-center'>{{ $booking->room->name }}</td>
                    <td class='fs-5 text-center'>{{ $booking->room->roomType->type_name }}</td>
                    <td class='fs-5 text-center'>{{ $booking->room->capacity }}</td>
                    <td class='fs-5 text-center'>{{ $booking->total_price }}</td>
                    <td class='text-center'>
                        <span class='badge bg-primary text-uppercase fs-6'>
                            {{ $booking->status }}
                        </span>
                    </td>
                    <td class='fs-5 text-center'>
                        @if(($booking->end_date->diffInDays($booking->start_date) + 1) == 1)
                            {{ $booking->end_date->diffInDays($booking->start_date) + 1 }} Day
                        @else 
                            {{ $booking->end_date->diffInDays($booking->start_date)  + 1 }} Days
                        @endif 
                    </td>
                    <td class='text-center fs-5'>
                        @if($booking->downpayment_status === $downPaymentPaid)
                            <button class='btn btn-success rounded-circle shadow'>
                                <i class='fas fa-check text-white'></i>
                            </button>
                        @endif
                    </td>
                    <td nowrap class='text-center fs-5'>
                        {{ $booking->created_at->format('F d, Y h:i A') }}
                    </td>
                    <td class='text-center fs-5'>
                        <a href="{{ route('payment.success', $booking->id) }}" class='btn btn-info btn-lg'>PRINT</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


</div>
@push('page-scripts')
<!-- Required datatable js -->
<script src="/admin-assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/admin-assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Responsive examples -->
<script src="/admin-assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/admin-assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script>
    $("#bookings_table").DataTable();

</script>
@endpush
@endsection
