@extends('user.layouts.app')
@section('page-title', 'Dashboard')
@section('content')
<!--begin::Card-->
<div class="card">
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
        <p>Display list of bookings</p>
        @endif
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
@endsection
