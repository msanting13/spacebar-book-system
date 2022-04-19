@extends('admin.layouts.app')
@section('page-title', 'Create new administrator')
@section('content')
@include('templates.errors')
<!--begin::Container-->

<!--begin::Aside-->
<!--begin::Layout-->
<div class="flex-md-row-fluid ms-lg-12">
    @if(Session::get('success'))
    <!--begin::Alert-->
    <div class="alert alert-success">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column">
            <!--begin::Title-->
            <h4 class="mb-1 text-dark">Great !</h4>
            <!--end::Title-->
            <!--begin::Content-->
            <span>{{ Session::get('success') }}</span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Alert-->
    @endif

    <!--begin::Sign-in Method-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer">
            <div class="card-title m-0">
                <h3 class="m-0">Account Information</h3>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Content-->
        <form action="{{ route('admin.store') }}" method="POST">
            @csrf
            <div id="kt_account_signin_method" class="collapse show">
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fs-6 text-dark">
                            <span class="required">Email Address</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="tel" name="email" class="form-control mb-3 active" placeholder=""
                                value="{{ old('email') }}">
                            <div class="fv-plugins-message-container invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label text-dark fs-6">
                            <span class="">Username</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="tel" name="username" class="form-control mb-3 active"
                                value="{{ old('username') }}">
                            <div class="fv-plugins-message-container invalid-feedback">
                                {{ $errors->first('username') }}
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label text-dark fs-6">
                            <span class="">Password</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="password" name="password" class="form-control mb-3 active" placeholder=""
                                value="">
                            <div class="fv-plugins-message-container invalid-feedback fw-bold">
                                {{ $errors->first('password') }}
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label text-dark fs-6">
                            <span class="
                                    ">Confirm Password</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="password" name="password_confirmation" class="form-control mb-3 active"
                                placeholder="" value="">
                            <div class="fv-plugins-message-container invalid-feedback fw-bold">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>



                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label text-dark fs-6">
                            <span class="
                                    ">Fullname</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="tel" name="fullname" class="form-control mb-3 active"
                                value="{{ old('fullname') }}">
                            <div class="fv-plugins-message-container invalid-feedback">
                                {{ $errors->first('fullname') }}
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                </div>
                <div class="float-end mb-3 mx-3">
                    <button type="submit" class="btn btn-primary btn-lg">Create Administrator</button>
                </div>

                <!--end::Card body-->
            </div>
        </form>
        <!--end::Content-->
    </div>
    <!--end::Sign-in Method-->
</div>
<!--end::Layout-->

<!--end::Container-->

@endsection
