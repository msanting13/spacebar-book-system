@extends('user.layouts.app')
@section('page-title', 'Booking')
@prepend('page-css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endprepend
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="carda">
        <div class="">
            <form action="{{ route('user.booking.index') }}" method="GET">
                <div class="row">
                    <div class="col-md-11">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            </div>
                            <input type="text" class="form-control" name="daterange" placeholder="Select Date"
                                aria-label="Date" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md-auto my-1">
                        <button type="submit" class="btn btn-primary btn-sm float-left">Search</button>
                    </div>
                </div>
            </form>

            @isset($rooms)
            <div class="row">
                @foreach ($rooms as $room)
                <div class="col-lg-4">
                    <div class="card shadow-sm my-3 ">
                        <div class="card-header">
                            <h3 class="card-title">{{ $room->name }}</h3>
                            <div class="card-toolbar">
                                <a type="button" class="btn btn-sm btn-light"
                                    href="{{ route('user.booking.bookform', [$room->id, 'selected_date' => $selected_date]) }}">
                                    Book
                                </a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="card-p mb-10">
                                <p class="fs-3 fw-boldest mb-2 text-gray-900 text-hover-primary">Description</p>
                                <p class='mx-5 fs-4 my-5'>{{ $room->description }}</p>
                                <p class="fs-3 fw-boldest mb-2 text-gray-900 text-hover-primary">Capacity</p>
                                <p class='mx-5 fs-4 my-5'>{{ $room->capacity }}</p>
                                <p class="fs-3 fw-boldest mb-2 text-gray-900 text-hover-primary">Type</p>
                                <p class='mx-5 fs-4 my-5'>{{ $room->roomType->type_name }}</p>
                                <p class="fs-3 fw-boldest mb-2 text-gray-900 text-hover-primary">Price</p>
                                <p class='mx-5 fs-4 my-5'>{{ $room->price }}</p>
                            </div>

                            <div class="text-center px-4">
                                <img class="mw-300 mh-300px card-rounded-bottom" alt=""
                                    src="/assets/media/illustrations/sigma-1/2.png" />
                            </div>

                            <div class="d-grid gap-2">
                              <a class="btn btn-primary rounded-0" href="{{ route('user.booking.bookform', [$room->id, 'selected_date' => $selected_date]) }}">Try this room</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endisset
        </div>
    </div>
</div>
@endsection
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
