@extends('user.layouts.app')
@section('page-title', 'Home')
@prepend('page-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endprepend
@section('content')
@include('templates.success')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Booked</h4>
        <div class="table-responsive">
          <table class="table table-striped" id="booked-datatables">
            <thead>
              <tr>
                <th>Room</th>
                <th>Room Type</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $booking->room->name }}</td>
                        <td>{{ $booking->room->roomType->type_name }}</td>
                        <td>{{ $booking->start_date->format('F d, Y') }}</td>
                        <td>{{ $booking->end_date->format('F d, Y') }}</td>
                        <td>{{ $booking->room->price }}</td>
                        <td>{{ $booking->status }}</td>
                        <td><button type="button" class="btn btn-danger btn-sm">Cancel</button></td>
                    </tr> 
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection
@push('page-js-scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
    $('#booked-datatables').DataTable();
</script>
@endpush