@extends('user.layouts.app')
@section('page-title', 'Book Form')
@prepend('page-css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endprepend
@section('content')
@include('templates.success')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-header">Room Information</h4>
                <p class='fs-4'>
                  Room Name : 
                  <strong>{{ $room->name }}</strong>
                </p>
                <p class='fs-4'>
                  Room Type : <strong>{{ $room->roomType->type_name }}</strong>
                  </p>
                <p class='fs-4'>
                    Capacity : 
                    <strong>{{ $room->capacity }}</strong>
                </p>
                <p class='fs-4'>
                  Price : PHP
                   <strong>{{ $room->price }}</strong>
                </p>
                <p class='fs-4'>
                  Room Description: 
                  <strong>{{ $room->description }}</strong>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-header">Book Form</h4>
                <form class="forms-sample" action="{{ route('user.booking.book', $room->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class='fs-4 fw-bold'>Check-in - Check-out</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="daterange" placeholder="Select Date"
                                value="{{ $selected_date }}" aria-label="Date" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary me-2 fs-3">BOOK THIS ROOM</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@push('page-scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
    $(function () {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function (start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                .format('YYYY-MM-DD'));
        });
    });

</script>
@endpush
@endsection
