@extends('user.layouts.app')
@section('page-title', 'Booking')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Bookings</h4>
        <form action="{{ route('user.booking.index') }}" method="GET">
          <div class="row">
            <div class="col-md-8">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-calendar"></i></span>
                </div>
                <input type="text" class="form-control" name="daterange" placeholder="Select Date" aria-label="Date" aria-describedby="basic-addon1">
              </div>  
            </div>   
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary btn-sm float-left">Search</button>
            </div>   
          </div>
        </form>

        @isset($rooms)
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Room</th>
                <th>Room Type</th>
                <th>Capacity</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($rooms as $room)
              <tr>
                <td>{{ $room->name }}</td>
                <td>{{ $room->roomType->type_name }}</td>
                <td>{{ $room->capacity }}</td>
                <td>{{ $room->price }}</td>
                <td>
                  <a href="{{ route('user.booking.bookform', [$room->id, 'selected_date' => $selected_date]) }}" class="btn btn-primary btn-sm">Book</a>
                  {{-- <form action="{{ route('user.booking.book', [Auth::id(), 'room_id' => $room->id]) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-sm">Book</button>
                  </form> --}}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        @endisset
      </div>
    </div>
  </div>
@endsection
@push('page-js-scripts')
<script>
  $(function() {
    $('input[name="daterange"]').daterangepicker({
      opens: 'left'
    }, function(start, end, label) {
      console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
  });
  </script>
@endpush
