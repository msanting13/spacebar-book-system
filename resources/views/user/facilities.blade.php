@extends('user.layouts.app')
@section('page-title', 'Facilities')
@prepend('page-css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endprepend
@section('content')

<!--begin::Container-->
<div class="container-xxl">
    <!--begin::Tab Content-->
    <div class="tab-content">
        <!--begin::Tab pane-->
        <div id="kt_project_users_card_pane" class="tab-pane fade show active">
            @isset($rooms)
            <div class="row g-6 g-xl-9">
                @foreach($rooms as $room)
                <!--begin::Col-->
                <div class="col-md-6 col-xxl-4">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                            @if($room->image->count() != 0)
                                <img src="{{ asset('/storage/uploads/' . $room->image->first()->photo) }}" height="250px" class='mb-3' alt="">
                                @else
                                <img src="/assets/media/illustrations/sigma-1/2.png" class='img-fluid mh-250px mb-3' alt="">
                            @endif
                            <!--begin::Name-->
                            <a href="#"
                                class="fs-1 text-gray-800 text-hover-primary fw-boldest mb-1">{{ $room->name }}</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fs-4 fw-bold mb-3">{{ $room->roomType->type_name }}</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap flex-center">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-75px py-3 px-4 mx-2 mb-3 text-center">
                                    <div class="fs-2 fw-boldest">{{ $room->price }}</div>
                                    <div class="fw-medium">Price</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-75px py-3 px-4 mx-2 mb-3 text-center">
                                    <div class="fs-2 fw-boldest">{{ $room->capacity }}</div>
                                    <div class="fw-medium">Capacity</div>
                                </div>
                                <div class="border border-dashed rounded min-w-75px py-3 px-4 mx-2 mb-3 text-center">
                                    <div class="fs-2 fw-boldest text-uppercase">{{ $room->type }}</div>
                                    <div class="fw-medium">Type</div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <div class="d-grid gap-2">
                                @if($room->bookings->count() != 0)
                                    <a class="btn btn-danger fs-3 rounded-0 text-uppercase"
                                        href="#">
                                            BOOKED
                                    </a>
                                @else
                                    <a class="btn btn-primary fs-3 rounded-0 text-uppercase"
                                    href="{{ route('user.booking.bookform', [$room->id]) }}">
                                        AVAILABLE
                                    </a>
                                @endif    
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->

                @endforeach
            </div>
            @endisset
        </div>
        <!--end::Tab pane-->
    </div>
    <!--end::Tab Content-->
</div>
<!--end::Container-->

@endsection
@push('page-scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
@endpush
