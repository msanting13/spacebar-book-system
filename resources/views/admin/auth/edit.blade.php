@extends('admin.layouts.app')
@section('page-title', 'User Profile')
@section('content')
@include('templates.success')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
    
      <div class="card">
        <div class="card-body">
        <div class='alert alert-info text-dark fw-bold'>
            If you don't want to change your password leave the field blank or empty.
        </div>
          <h4 class="card-title">Account Information</h4>
          <form class="forms-sample" action="{{ route('admin.profile.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="{{ old('username', $user->username) }}">
            </div>

            <div class="form-group">
              <label>Password</label>
              <input type="text" class="form-control" name="password" placeholder="Password" >
            </div>

            <div class="form-group">
              <label>Re-type password</label>
              <input type="text" class="form-control" name="password_confirmation" placeholder="Re-type password">
            </div>
            <div class="form-group">
              <label for="fullname">Fullname</label>
              <input type="text" class="form-control" name="fullname" id="fullname" placeholder="fullname" value="{{ old('fullname', $user->name) }}">
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email', $user->email) }}">
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