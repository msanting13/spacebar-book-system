@extends('user.layouts.app')
@section('page-title', 'Booking Form')
@prepend('page-css')
<link href="/admin-assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="/admin-assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
@endprepend
@section('content')
@include('templates.success')
<form action="{{ route('user.booking.book', [$room->id]) }}" method="POST">
    @csrf
    <div class="card shadow-none">
        <div class="card-header fs-5 text-dark">Book Information</div>
        <div class="card-body">
            <div class="card-body p-9">
                <div class="row">
                    <label class="col-lg-4 col-form-label text-dark text-dark">
                        <span class="">Room Name</span>
                    </label>

                    <div class="col-lg-8 mb-3">
                        <input type="text" id="input-room-name" disabled class="form-control"
                            value="{{ $room->name }}" />
                    </div>
                </div>

                <div class="row">
                    <label class="col-lg-4 col-form-label text-dark">
                        <span class="">Price (per day)</span>
                    </label>

                    <div class="col-lg-8 mb-3">
                        <input type="text" id="pricePerDay" disabled class="form-control" value="{{ $room->price }}" />
                    </div>
                </div>

                <div class="row">
                    <label class="col-lg-4 col-form-label text-dark">
                        <span class="">Classification</span>
                    </label>

                    <div class="col-lg-8 mb-3">
                        <input type="text" disabled class="form-control" value="{{ $room->roomType->type_name }}" />
                    </div>
                </div>

                <div class="row">
                    <label class="col-lg-4 col-form-label text-dark">
                        <span class="">Capacity</span>
                    </label>

                    <div class="col-lg-8 mb-3">
                        <input disabled type="text" class="form-control" value="{{ $room->capacity }}" />
                    </div>
                </div>

                <div class="row">
                    <label class="col-lg-4 col-form-label text-dark">
                        <span class="
                                    ">Description</span>
                    </label>

                    <div class="col-lg-8 mb-3">
                        <textarea class="form-control" id="input-room-description" style="resize:none;"
                            disabled>{{ $room->description }}</textarea>
                    </div>
                </div>

                <div class="row">
                    <label class="col-lg-4 col-form-label text-dark">
                        <span class="">Duration</span>
                    </label>

                    <div class="col-lg-8 mb-3">
                        <div class="input-daterange input-group" id="datepicker6" data-provide="datepicker"
                            data-date-container='#datepicker6'>
                            <input type="text" class="form-control" name="start" placeholder="Check In" />
                            <input type="text" class="form-control" name="end" placeholder="Check Out" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-lg-4 col-form-label text-dark">
                        <span class="">Extras</span>
                    </label>

                    <div class="col-lg-8 mb-3">
                        <select class="form-control select2" multiple name="extras[]">
                            @foreach($extras as $extra)
                            <option value="{{ $extra->id }}">{{ $extra->name }} - {{ $extra->price }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="float-end">
                    <button type="submit" class="btn btn-primary btn-lg waves-effect waves-light">Proceed to
                        billing</button>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</form>
@push('page-scripts')
<script src="/admin-assets/libs/select2/js/select2.min.js"></script>
<script src="/admin-assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="/admin-assets/js/pages/form-advanced.init.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
@endpush
@endsection
