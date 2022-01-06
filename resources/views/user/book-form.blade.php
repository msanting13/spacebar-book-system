@extends('user.layouts.app')
@section('page-title', 'Book Form')
@section('content')
@include('templates.success')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
              <h4 class="card-title">Room Information</h4>
              <p><strong>Room Name:</strong> {{ $room->name }}</p>
              <p><strong>Room Type:</strong> {{ $room->roomType->type_name }}</p>
              <p><strong>Capacity:</strong> {{ $room->capacity }}</p>
              <p><strong>Price: P {{ $room->price }}</strong></p>
              <p><strong>Room Description:</strong> {{ $room->description }}</p>
            </div>
          </div>   
    </div>
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Book Form</h4>
          <form class="forms-sample" action="{{ route('user.booking.book', $room->id) }}" method="POST">
            @csrf
            <div class="form-group">
              <label>Check-in - Check-out</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-calendar"></i></span>
                </div>
                <input type="text" class="form-control" name="daterange" placeholder="Select Date" value="{{ $selected_date }}" aria-label="Date" aria-describedby="basic-addon1">
              </div>  
            </div>
            <button type="submit" class="btn btn-primary me-2">Book</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection