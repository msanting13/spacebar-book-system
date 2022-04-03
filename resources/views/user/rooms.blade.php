@extends('user.layouts.app')
@section('page-title', 'Rooms')
@prepend('page-css')
@endprepend
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="text-center mb-5">
            <h4>Choose your Room</h4>
            <p class="text-muted">We all live in an age that belongs to the young at heart. Life that is becoming
                extremely fast, </p>
        </div>
    </div>
</div>
<div class="row">
    @foreach($rooms as $room)
    <div class="col-xl-3 col-md-6">
        <div class="card plan-box">
            <div class="card-body p-4">
                <div class="d-flex align-items-start">
                    <div class="flex-1 me-3">
                        <h5>{{ $room->name }}</h5>
                        <p class="text-muted">{{ Str::limit($room->description, 15, '...') }}</p>
                    </div>
                    <div class="ms-auto">
                        <i class="bx bx-building-house h1 text-primary"></i>
                    </div>
                </div>
                <div class="py-4 mt-4 text-center bg-soft-light">
                    <h1 class="m-0"><sup><small>&#8369;</small></sup> {{ (int) $room->price }}/ <span class="font-size-13">Per
                            day</span></h1>
                </div>

                <div class="plan-features p-4 text-muted mt-2">
                    <p><i class="mdi mdi-check-bold text-primary me-4"></i>{{ $room->capacity }} Capacity</p>
                    @foreach(explode(',', $room->description) as $description)
                    <p><i class="mdi mdi-check-bold text-primary me-4"></i>{{ $description }}</p>
                    @endforeach
                </div>

                <div class="text-center">
                    <a href="#" class="btn btn-warning waves-effect waves-light">View Images</a>
                    <a href="{{ route('user.booking.bookform', [$room->id]) }}" class="btn btn-primary waves-effect waves-light">Book Now</a>
                </div>

            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
@push('page-scripts')
@endpush
