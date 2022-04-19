@extends('admin.layouts.app')
@section('page-title', 'User Profile')
@section('content')
@include('templates.success')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
    
      <div class="card">
        <div class="card-body">
        @if($errors->any())
            <div class='alert alert-danger text-dark'>
                @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </div>
        @endif
          <h4 class="card-title">Account Information</h4>
          <form class="forms-sample" action="{{ route('admin.user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
              <label for="firstname">Firstname</label>
              <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname" value="{{ old('firstname', $user->first_name) }}">
            </div>
            <div class="form-group mb-3">
              <label for="lastname">Lastname</label>
              <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname" value="{{ old('lastname', $user->last_name) }}">
            </div>

            <div class="form-group mb-3">
              <label for="email">Email address</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email', $user->email) }}">
            </div>

            <div class="form-group mb-3">
              <label for="phone_number">Phone Number</label>
              <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number" value="{{ old('phone_number', $user->phone_number) }}">
            </div>

            <div class="form-group mb-3">
              <label for="address">Address</label>
              <textarea name="address" class='form-control' id="" cols="30" rows="10">{{ $user->address }}</textarea>
            </div>
            
            <div class="float-end">
                <button type="submit" class="btn btn-success me-2">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    
</div>
@endsection