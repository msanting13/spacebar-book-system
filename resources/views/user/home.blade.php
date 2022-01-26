@extends('user.layouts.app')
@section('page-title', 'Dashboard')
@prepend('page-css')
<link href="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endprepend
@section('content')
<!--begin::Card-->
<div class="card">
    @if(Session::has('success'))
    <div class="alert alert-success rounded-0">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column">
            <!--begin::Title-->
            <h4 class="mb-1 text-dark">Good Job!</h4>
            <!--end::Title-->
            <!--begin::Content-->
            <span>{{ Session::get('success') }}</span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
    </div>
    @endif
    <!--begin::Card body-->
    <div class="card-body p-0">
        @if($bookings->count() === 0)
        <!--begin::Wrapper-->
        <div class="card-px text-center py-20 my-10">
            <!--begin::Title-->
            <h2 class="fs-2x fw-bolder mb-10">Welcome!</h2>
            <!--end::Title-->
            <!--begin::Description-->
            <p class="text-gray-400 fs-4 fw-bold mb-10">There are no book added yet.</p>
            <!--end::Description-->
            <!--begin::Action-->
            <a href="{{ route('user.booking.index') }}" class="btn btn-primary">Book Now!</a>
            <!--end::Action-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Illustration-->
        <div class="text-center px-4">
            <img class="mw-100 mh-300px" alt="" src="/assets/media/illustrations/sigma-1/2.png" />
        </div>
        <!--end::Illustration-->
        @else
        <div class='d-grip gap-2'>
            <a href="{{ route('user.booking.index') }}" class="rounded-0 btn btn-primary w-100 fs-5 text-uppercase">Book Now!</a>
        </div>


        {{-- DISPLAY BOOKINGS --}}
        <div class="card">
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                data-bs-target="#kt_account_signin_method">
                <div class="card-title m-0">
                </div>
            </div>
            <div class="card-body">
                <table id="bookings_table" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                    <thead>
                        <tr class="fw-boldest fs-6 text-uppercase px-7">
                            <th>Name</th>
                            <th>Type</th>
                            <th>Capacity</th>
                            <th>Price</th>
                            <th class='text-center'>Status</th>
                            <th class='text-center'>Check In / Check Out.</th>
                            <th class='text-center'>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                        <tr>
                            <td class='fs-5 fw-bolder'>{{ $booking->room->name }}</td>
                            <td class='fs-5'>{{ $booking->room->roomType->type_name }}</td>
                            <td class='fs-5'>{{ $booking->room->capacity }}</td>
                            <td class='fs-5 fw-bolder'>{{ $booking->room->price }}</td>
                            <td class='text-center'>
                                <span class='badge bg-primary text-uppercase fs-6'>
                                    {{ $booking->status }}
                                </span>
                            </td>
                            <td class='fs-5 text-center'>{{ $booking->start_date->format('F d') }} - {{ $booking->end_date->format('d, Y') }}
                            </td>
                            <td class='text-center fs-5'>
                                &nbsp;
                                {{-- @if( !Carbon\Carbon::parse($booking->created_at)->diffInMinutes(Carbon\Carbon::now()) >= 21 )
                                <button class='btn btn-danger btn-sm'>CANCEL</button>
                                @else
                                @endif --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>


        @endif
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
@push('page-scripts')
<script src="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script>
    $("#bookings_table").DataTable({
        "language": {
            "lengthMenu": "Show _MENU_",
        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +
            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });
</script>
@endpush
@endsection
