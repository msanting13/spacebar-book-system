@extends('user.layouts.app')
@section('page-title', 'User Profile')
@section('content')
@include('templates.success')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Change Password</h4>
          <form class="forms-sample" action="{{ route('user.update.password') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control @error('currentPassword') is-invalid @enderror" id="currentPassword" name="currentPassword" placeholder="Current Password">
              @error('currentPassword')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
                <label>New password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Confirm new password</label>
                <input type="password" class="form-control" id="confirmPassword" name="password_confirmation" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-primary me-2">Save</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection