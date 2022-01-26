@extends('user.layouts.app')
@section('page-title', 'Your Account')
@section('content')

<!--begin::Container-->
<div class="container-xxl">
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Aside-->
        <div class="flex-column flex-md-row-auto w-100 w-lg-250px w-xxl-275px">
            <!--begin::Nav-->
            <div class="card mb-6 mb-xl-9" data-kt-sticky="true" data-kt-sticky-name="account-settings"
                data-kt-sticky-offset="{default: false, lg: 300}" data-kt-sticky-width="{lg: '250px', xxl: '275px'}"
                data-kt-sticky-left="auto" data-kt-sticky-top="100px" data-kt-sticky-zindex="95"
                style="animation-duration: 0.3s;">
                <!--begin::Card body-->
                <div class="card-body py-10 px-6">
                    <!--begin::Menu-->
                    <ul id="kt_account_settings"
                        class="nav nav-flush menu menu-column menu-rounded menu-title-gray-600 menu-bullet-gray-300 menu-state-bg menu-state-bullet-primary fw-bold fs-6 mb-2">
                        <li class="menu-item px-3 pt-0 pb-1">
                            <a href="#kt_account_settings_signin_method" data-kt-scroll-toggle="true"
                                class="menu-link px-3 nav-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-vertical"></span>
                                </span>
                                <span class="menu-title">Sign-in Method</span>
                            </a>
                        </li>
                        <li class="menu-item px-3 pt-0 pb-1">
                            <a href="#kt_account_settings_info" data-kt-scroll-toggle="true"
                                class="menu-link px-3 nav-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-vertical"></span>
                                </span>
                                <span class="menu-title">Basic Information</span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Menu-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Nav-->
        </div>
        <!--end::Aside-->
        <!--begin::Layout-->
        <div class="flex-md-row-fluid ms-lg-12">
            @if(Session::get('success'))
            <!--begin::Alert-->
            <div class="alert alert-success">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column">
                    <!--begin::Title-->
                    <h4 class="mb-1 text-dark">Good Job!</h4>
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
            <div class="card mb-5 mb-xl-10" id="kt_account_settings_signin_method"
                data-kt-scroll-offset="{default: 100, md: 125}">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                    data-bs-target="#kt_account_signin_method">
                    <div class="card-title m-0">
                        <h3 class="fw-boldest m-0">Sign-in Method</h3>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Content-->
                <form action="{{ route('user.update.password', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div id="kt_account_signin_method" class="collapse show">
                        <!--begin::Card body-->
                        <div class="card-body border-top p-9">
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="required">Email Address</span>
                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Email must be active"
                                        aria-label="Email must be active"></i>
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="tel" name="email"
                                        class="form-control form-control-lg form-control-solid" placeholder=""
                                        value="{{ old('email', $user->email) }}">
                                    <div class="fv-plugins-message-container invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="">Current password</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="tel" name="currentPassword"
                                        class="form-control form-control-lg form-control-solid" placeholder="" value="">
                                    <div class="fv-plugins-message-container invalid-feedback">
                                        {{ $errors->first('currentPassword') }}
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="">New Password</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="tel" name="password"
                                        class="form-control form-control-lg form-control-solid" placeholder="" value="">
                                    <div class="fv-plugins-message-container invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="
                                    ">Re-type new password</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="tel" name="password_confirmation"
                                        class="form-control form-control-lg form-control-solid" placeholder="" value="">
                                    <div class="fv-plugins-message-container invalid-feedback">
                                        {{ $errors->first('password_confirmation') }}
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>


                        <!--end::Card body-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="submit" class="btn btn-primary" id="kt_account_basic_info_submit">Save
                                Changes</button>
                        </div>
                    </div>
                </form>
                <!--end::Content-->
            </div>
            <!--end::Sign-in Method-->
            <!--begin::Basic info-->
            <div class="card mb-5 mb-xl-10" id="kt_account_settings_info"
                data-kt-scroll-offset="{default: 100, md: 125}">
                <form action="{{ route('user.profile.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <!--begin::Card header-->
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                        data-bs-target="#kt_account_basic_info" aria-expanded="true"
                        aria-controls="kt_account_basic_info">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-boldest m-0">Basic Info</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->
                    <!--begin::Content-->
                    <div id="kt_account_basic_info" class="collapse show">
                        <!--begin::Form-->
                        <form id="kt_account_basic_info_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                            novalidate="novalidate">
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <!--begin::Col-->
                                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                <input type="text" name="first_name"
                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                    placeholder="First name"
                                                    value="{{ old('firstname', $user->first_name) }}">
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                <input type="text" name="last_name"
                                                    class="form-control form-control-lg form-control-solid"
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
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                        <span class="required">Contact Phone</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title=""
                                            data-bs-original-title="Phone number must be active"
                                            aria-label="Phone number must be active"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                        <input type="tel" name="phone_number"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Phone number"
                                            value="{{ old('phone_number', $user->phone_number) }}">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card body-->
                            <!--begin::Actions-->
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button type="submit" class="btn btn-primary" id="kt_account_basic_info_submit">Save
                                    Changes</button>
                            </div>
                            <!--end::Actions-->
                            <input type="hidden">
                            <div></div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->

                </form>
            </div>
            <!--end::Basic info-->
        </div>
        <!--end::Layout-->
    </div>
</div>
<!--end::Container-->

@endsection
