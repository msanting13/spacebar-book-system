@extends('admin.layouts.app')
@section('page-title', 'Check-ins')
@section('content')
@prepend('page-css')
<!-- DataTables -->
<link href="/admin-assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="/admin-assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
    type="text/css" />

<!-- Responsive datatable examples -->
<link href="/admin-assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
    type="text/css" />
@endprepend
@include('templates.success')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <div class='table-responsive'>
                    <table class='table table-ordered table-hover' id='rooms-table'>
                        <thead>
                            <tr class='text-dark'>
                                <th class='fw-bold text-uppercase px-2 fw-bold text-uppercase align-middle'>
                                    Invoice #
                                </th>
                                <th class='fw-bold text-uppercase px-2 fw-bold text-uppercase align-middle'>
                                    Room
                                </th>
                                <th class='fw-bold text-uppercase px-2 fw-bold text-center align-middle'>
                                    Check-ins & Out
                                </th>
                                <th class='fw-bold text-uppercase px-2 fw-bold text-center align-middle'>
                                    Booked Date
                                </th>
                                <th
                                    class='fw-bold text-uppercase text-truncate px-2 fw-bold text-uppercase align-middle'>
                                    Amount
                                </th>
                                <th class='fw-bold text-center text-truncate px-2 fw-bold text-uppercase align-middle'>
                                    Payment Status
                                </th>
                                <th class='fw-bold text-center text-truncate px-2 fw-bold text-uppercase align-middle'>
                                    Status
                                </th>
                                <th class='fw-bold text-center text-truncate px-2 fw-bold text-uppercase align-middle'>
                                    Due Date
                                </th>
                                <th class='fw-bold text-center text-truncate px-2 fw-bold text-uppercase align-middle'>
                                    Extras
                                </th>
                                <th class='fw-bold text-uppercase text-center px-2 fw-bold text-uppercase align-middle'>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $booking)
                            <tr class='align-middle font-size-17 text-dark'>
                                <td class='text-center'>
                                    <a href="#"
                                        class='text-decoration-underline text-info'>{{ $booking->invoices->invoice_number }}</a>
                                </td>
                                <td>{{ $booking->room->name }}</td>
                                <td class='text-center'>{{ $booking->start_date->format('F d') }} -
                                    {{ $booking->end_date->format('d, Y') }}</td>
                                <td class='text-center'>{{ $booking->created_at->format('F d, Y h:i A') }}</td>
                                <td class='text-center'>{{ $booking->total_price }}</td>
                                <td class='text-center'>
                                    @if($booking->downpayment_status === 0)
                                    <span class='badge bg-danger h6 text-white'>
                                        <span class='fw-bold'>NO DOWNPAYMENT</span>
                                    </span>
                                    @elseif($booking->downpayment_status === 1)
                                    <span class='badge bg-info h6 text-white'>
                                        <span class='fw-bold'>DOWNPAYMENT PAID</span>
                                    </span>
                                    @elseif($booking->downpayment_status === 2)
                                    <span class='badge bg-success h6 text-white'>
                                        <span class='fw-bold'>FULLY PAID</span>
                                    </span>
                                    @endif
                                </td>
                                <td class='text-center text-uppercase'>
                                    <span class='badge bg-primary h6 text-white'>
                                        {{ Str::replace('_', ' ', $booking->status) }}
                                    </span>
                                </td>
                                <td class='text-center'>
                                    @if($booking->end_date->lessThanOrEqualTo(date('Y-m-d 00:00:00')))
                                        <i class='fas fa-check shadow text-white btn btn-danger rounded-circle p-2 shadow'></i> 
                                    @endif
                                </td>
                                <td class='text-center'>
                                    {{ $booking->extras->count() }}
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
                                            <a href="#" class="dropdown-item mark-as-check-in" data-id='{{ $booking->id }}'>Check-In</a>
                                            <a href="#" class="dropdown-item mark-as-check-out" data-id='{{ $booking->id }}'>Check-Out</a>
                                            <a href="#" class="dropdown-item mark-as-paid" data-id='{{ $booking->id }}'>Fully Paid</a>
                                            <a target="_blank" href="{{ route('invoice.print', $booking->id) }}" class="dropdown-item">Invoice</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
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
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>
<script>
    $('#rooms-table').DataTable();

    $(document).on('click', '.mark-as-paid', function () {
        let id = $(this).attr('data-id');
        $.ajax({
            url: `/admin/mark-as/${id}/paid`,
            method: 'POST',
            success: function (response) {
                if (response.success) {
                    location.reload();
                }
            }
        });
    });

    $(document).on('click', '.mark-as-check-in', function () {
        let id = $(this).attr('data-id');
        $.ajax({
            url: `/admin/mark-as/${id}/check_in`,
            method: 'POST',
            success: function (response) {
                if (response.success) {
                    location.reload();
                }
            }
        });
    });

    $(document).on('click', '.mark-as-check-out', function () {
        let id = $(this).attr('data-id');
        $.ajax({
            url: `/admin/mark-as/${id}/check_out`,
            method: 'POST',
            success: function (response) {
                if (response.success) {
                    location.reload();
                }
            }
        });
    });

</script>
@endpush
@endsection
