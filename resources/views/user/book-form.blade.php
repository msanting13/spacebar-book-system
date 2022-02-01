@extends('user.layouts.app')
@section('page-title', 'Booking Form')
@prepend('page-css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endprepend
@section('content')
@include('templates.success')
<div class="row">
    <div class="card mb-5 mb-xl-10" id="kt_account_settings_signin_method"
        data-kt-scroll-offset="{default: 100, md: 125}">
        <!--begin::Card header-->

        <!--end::Card header-->
        <!--begin::Content-->
        {{-- <form class="forms-sample" action="{{ route('user.booking.book', $room->id) }}" method="POST">
        @csrf
        <div id="kt_account_signin_method" class="collapse show">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="">Name</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="text" disabled class="form-control form-control-lg form-control-solid"
                            placeholder="" value="{{ $room->name }}">

                    </div>
                    <!--end::Col-->
                </div>

                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="">Price (per day)</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="text" disabled class="form-control form-control-lg form-control-solid"
                            placeholder="" value="{{ $room->price }}">

                    </div>
                    <!--end::Col-->
                </div>

                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="">Type</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="text" disabled class="form-control form-control-lg form-control-solid"
                            placeholder="" value="{{ $room->roomType->type_name }}">

                    </div>
                    <!--end::Col-->
                </div>

                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="">Capacity</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input disabled type="text" class="form-control form-control-lg form-control-solid"
                            placeholder="" value="{{ $room->capacity }}">

                    </div>
                    <!--end::Col-->
                </div>

                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="
                                    ">Description</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <textarea class="form-control form-control-lg form-control-solid"
                            disabled>{{ $room->description }}</textarea>

                    </div>
                    <!--end::Col-->
                </div>

                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="
                                    ">CHECK IN - CHECK OUT</span>
                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="text" class="form-control form-control-lg form-control-solid" name="daterange"
                            placeholder="Select Date" value="{{ $selected_date }}" aria-label="Date"
                            aria-describedby="basic-addon1">

                    </div>
                    <!--end::Col-->
                </div>

            </div>
            <!--end::Card body-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="submit" class="btn btn-primary" id="kt_account_basic_info_submit">Proceed</button>
            </div>
        </div>
        </form> --}}
        <div class="stepper stepper-links d-flex flex-column first m-5" id="kt_create_account_stepper"
            data-kt-stepper="true">
            <!--begin::Nav-->
            <div class="stepper-nav">
                <!--begin::Step 1-->
                <div class="stepper-item current" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Book Information</h3>
                </div>
                <!--end::Step 1-->
                <!--begin::Step 2-->
                <div class="stepper-item pending" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Extras & Additional</h3>
                </div>
                <!--end::Step 2-->
                <!--begin::Step 4-->
                <div class="stepper-item pending" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Billing Details</h3>
                </div>
                <!--end::Step 4-->
                <!--begin::Step 5-->
                <div class="stepper-item pending" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Final Touch</h3>
                </div>
                <!--end::Step 5-->
            </div>
            <div class="separator separator-dashed my-4"></div>
            <!--end::Nav-->
            <!--begin::Form-->
            <form action="{{ route('user.booking.book', $room->id) }}" method="POST" class="mx-auto  w-100 px-5 pb-5 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"
                id="kt_create_account_form">
                <!--begin::Step 1-->
                <div class="current" data-kt-stepper-element="content">
                    <!--begin::Wrapper-->
                    <div class="w-100">
                        <!--begin::Heading-->
                        <div class="">
                            <!--begin::Title-->
                            <h1 class="fw-boldest text-dark"></h1>
                            <!--end::Title-->

                        </div>
                        <!--end::Heading-->

                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="">Name</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" id="input-room-name" disabled class="form-control form-control-lg form-control-solid"
                                        placeholder="" value="{{ $room->name }}">

                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="">Price (per day)</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" id="pricePerDay" disabled
                                        class="form-control form-control-lg form-control-solid" placeholder=""
                                        value="{{ $room->price }}">

                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="">Type</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" disabled class="form-control form-control-lg form-control-solid"
                                        placeholder="" value="{{ $room->roomType->type_name }}">

                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="">Capacity</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input disabled type="text" class="form-control form-control-lg form-control-solid"
                                        placeholder="" value="{{ $room->capacity }}">

                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="
                                    ">Description</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <textarea class="form-control form-control-lg form-control-solid" id="input-room-description"
                                        disabled>{{ $room->description }}</textarea>

                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                    <span class="
                                    ">CHECK IN - CHECK OUT</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" id="dateRange"
                                        class="form-control form-control-lg form-control-solid" name="daterange"
                                        placeholder="Select Date" value="{{ $selected_date }}" aria-label="Date"
                                        aria-describedby="basic-addon1">

                                </div>
                                <!--end::Col-->
                            </div>

                        </div>
                        <!--end::Card body-->

                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Step 1-->
                <!--begin::Step 2-->
                <div data-kt-stepper-element="content" class="pending">
                    <!--begin::Wrapper-->
                    <div class="w-100">
                        <!--begin::Heading-->
                        <div class="">
                            <!--begin::Title-->
                            <h1 class="fw-boldest text-dark"></h1>
                            <!--end::Title-->

                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->

                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-5">Choose your extras
                            </label>
                            <!--end::Label-->
                            <!--begin::Options-->
                            <div class="">
                                <!--begin:Option-->
                                @foreach($extras as $extra)
                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                    <!--begin:Label-->
                                    <span class="d-flex align-items-center me-2">
                                        <!--begin::Icon-->
                                        <span class="symbol symbol-50px me-6">
                                            <span class="symbol-label">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-gray-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5" height="5" rx="1"
                                                                fill="#000000"></rect>
                                                            <rect x="14" y="5" width="5" height="5" rx="1"
                                                                fill="#000000" opacity="0.3"></rect>
                                                            <rect x="5" y="14" width="5" height="5" rx="1"
                                                                fill="#000000" opacity="0.3"></rect>
                                                            <rect x="14" y="14" width="5" height="5" rx="1"
                                                                fill="#000000" opacity="0.3"></rect>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <!--end::Icon-->
                                        <!--begin::Description-->
                                        <span class="d-flex flex-column">
                                            <span
                                                class="fw-boldest text-gray-800 text-hover-primary fs-4">{{ $extra->name }}</span>
                                            <span class="fs-6 fw-bold text-gray-700">&#8369; {{ $extra->price }}</span>
                                        </span>
                                        <!--end:Description-->
                                    </span>
                                    <!--end:Label-->
                                    <!--begin:Input-->
                                    <span class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input extras-field" type="checkbox"
                                            data-name="{{ $extra->name }}" name="extras[]" data-price="{{ $extra->price }}" value="{{ $extra->id }}">
                                    </span>
                                    <!--end:Input-->
                                </label>
                                @endforeach
                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Step 2-->
                <!--begin::Step 4-->
                <div data-kt-stepper-element="content" class="pending">
                    <!--begin::Wrapper-->
                    <div class="w-100">
                        <div class="card">
									<!--begin::Card body-->
									<div class="card-body p-0">
										<!--begin::Info-->
										<div class="d-flex align-items-start">
											<!--begin::Wrapper-->
											<div class="flex-grow-1 d-flex align-items-start justify-content-between flex-wrap py-24">
												<!--begin::Details-->
												<div class="d-flex flex-column align-items-start py-1 me-">
													<a href="#" class="fs-3 text-dark text-hover-primary fw-boldest mb-2" id='roomName'>(ROOM NAME)</a>
													<div class="text-gray-400 fw-bold fs-6 mb-4" id='roomDescription'>(DESCRIPTION)</div>
													<a href="#" class="fs-3 text-dark text-hover-primary fw-boldest mb-2" id='roomPrice'>(ROOM NAME)</a>
												</div>
												<!--end::Dtails-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Info-->
										<!--begin:: summary-->
                                        <div class="separator separator-dashed border-dark my-5"></div>
										<div class="row">
                                            <div class="col-lg-12">
                                                <h2 class="fw-boldest fs-3 mb-3">Billing Statement</h2>
                                                <div class="table-responsive mb-10">
													<table class="table g-2 gs-0 align-middle fw-bold" id='billing-table'>
														<tbody><tr>
															<th class="min-w-250px fw-bold fs-4 text-start" id='no-of-days'></th>
															<th class="min-w-150px fw-bold fs-4 text-start" id='days'>Extended License, Unlimited End Products</th>
															<th class="min-w-90px fw-boldest text-end fs-4" id='total'></th>
														</tr>
														<tr>
															<th></th>
															<th class="text-end fs-4">EXTRAS</th>
															<th class="text-end fw-boldest">&nbsp;</th>
														</tr>
													</tbody>
                                                    </table>
												</div>
                                            </div>
										</div>
										<!--end:: summary-->
									</div>
									<!--end::Card body-->
								
                        </div>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Step 4-->
                <!--begin::Step 5-->
                <div data-kt-stepper-element="content" class="pending">
                    <!--begin::Wrapper-->
                    <div class="w-100">
                        <!--begin::Body-->
                        <div class="pt-1 pb-5">
                            <!--begin::Alert-->
                            <!--begin::Notice-->
                            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black">
                                        </rect>
                                        <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)"
                                            fill="black"></rect>
                                        <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)"
                                            fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1">
                                    <!--begin::Content-->
                                    <div class="fw-bold">
                                        <h4 class="text-gray-900 fw-bolder">We need your attention!</h4>
                                        <div class="fs-6 text-gray-700">After you pay your bills our staff will review your transaction you will be notify by <strong>Text Message</strong> and an <strong>Email</strong></div>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <a class="btn btn-primary">Pay my bills</a>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Notice-->
                            <!--end::Alert-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Step 5-->
                <!--begin::Actions-->
                <div class="d-flex flex-stack ">
                    <!--begin::Wrapper-->
                    <div class="mr-2">
                        <button type="button" class="btn btn-lg btn-light-primary me-3"
                            data-kt-stepper-action="previous">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                            <span class="svg-icon svg-icon-4 me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black"></rect>
                                    <path
                                        d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                        fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Back</button>
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Wrapper-->
                    <div>
                        @csrf
                        <button type="type" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
                            <span class="indicator-label">Submit
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                            transform="rotate(-180 18 13)" fill="black"></rect>
                                        <path
                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon--></span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-4 ms-1 me-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                        transform="rotate(-180 18 13)" fill="black"></rect>
                                    <path
                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                        fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon--></button>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Actions-->
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
</div>
@push('page-scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="/assets/js/custom/modals/create-account.js"></script>
<!--end::Page Custom Javascript-->
<script>
    $(function () {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function (start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                .format('YYYY-MM-DD'));
        });
    });

</script>
@endpush
@endsection
