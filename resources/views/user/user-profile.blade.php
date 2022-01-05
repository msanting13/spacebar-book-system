@extends('user.layouts.app')
@section('page-title', 'User Profile')
@section('content')
@include('templates.success')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Basic Information</h4>
          <form class="forms-sample" action="{{ route('user.profile.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="first-name">First name</label>
              <input type="text" class="form-control" name="first_name" id="first-name" placeholder="First name" value="{{ old('first_name', $user->first_name) }}">
            </div>
            <div class="form-group">
                <label for="last-name">Last name</label>
                <input type="text" class="form-control" name="last_name" id="last-name" placeholder="Last name" value="{{ old('last_name', $user->last_name) }}">
            </div>
            <div class="form-group">
                <label for="last-name">Phone number</label>
                <input type="text" class="form-control" name="phone_number" id="phone-number" placeholder="Phone number" value="{{ old('phone_number', $user->phone_number) }}">
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email', $user->email) }}">
            </div>
            <button type="submit" class="btn btn-primary me-2">Save</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection