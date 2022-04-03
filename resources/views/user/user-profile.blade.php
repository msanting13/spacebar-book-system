@extends('user.layouts.app')
@section('page-title', 'Your Account')
@section('content')
@include('templates.success')
@include('templates.errors')
<div class="card">
    <div class="card-header fs-5 text-dark">
        Sign-in Credentials
    </div>
    <div class="card-body">
        <form action="{{ route('user.update.password', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <div class="row">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label">
                            <span class="required text-dark">Email Address </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 mb-3">
                            <input type="tel" name="email" class="form-control" placeholder=""
                                value="{{ old('email', $user->email) }}">
                            <div class="fv-plugins-message-container invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label">
                            <span class="text-dark">Current password <span class='text-danger'>*</span></span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 mb-3">
                            <input type="tel" name="currentPassword" class="form-control" placeholder="" value="">
                            <div class="fv-plugins-message-container invalid-feedback">
                                {{ $errors->first('currentPassword') }}
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label">
                            <span class="text-dark">New Password <span class='text-danger'>*</span></span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 mb-3">
                            <input type="tel" name="password" class="form-control" placeholder="" value="">
                            <div class="fv-plugins-message-container invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label">
                            <span class="text-dark">Re-type new password <span class='text-danger'>*</span></span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <input type="tel" name="password_confirmation" class="form-control" placeholder="" value="">
                            <div class="fv-plugins-message-container invalid-feedback">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                </div>

                <div class="float-end">
                    <button type="submit" class="btn btn-success">Save Changes</button>
                </div>
                <div class="clearfix"></div>
                <!--end::Card body-->

            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header fs-5 text-dark">
        Basic Information
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('user.profile.update', Auth::user()->id) }}" class="form fv-plugins-bootstrap5 fv-plugins-framework">
                    @csrf
                    @method('PUT')
                            <!--begin::Card body-->
                            <div class="card-body p-9">
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label text-dark">Full Name</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <!--begin::Col-->
                                            <div class="col-lg-6 ">
                                                <input type="text" name="first_name"
                                                    class="form-control"
                                                    placeholder="First name"
                                                    value="{{ old('firstname', $user->first_name) }}">
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6 ">
                                                <input type="text" name="last_name"
                                                    class="form-control"
                                                    placeholder="Last name"
                                                    value="{{ old('last_name', $user->last_name) }}">
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label">
                                        <span class="required text-dark">Mobile No.</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 mt-3">
                                        <input type="tel" name="phone_number"
                                            class="form-control"
                                            placeholder="Phone number"
                                            value="{{ old('phone_number', $user->phone_number) }}">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card body-->
                            <div class="float-end">
                            <button type="submit" class="btn btn-success">Save
                                    Changes</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->

                </form>
    </div>
</div>
@endsection
