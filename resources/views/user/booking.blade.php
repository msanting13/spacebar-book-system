@extends('user.layouts.app')
@section('page-title', 'Booking')
@prepend('page-css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endprepend
@section('content')

<!--begin::Container-->
<div class="container-xxl">
    <!--begin::Form-->
    <form action="#">
        <!--begin::Card-->
        <div class="card mb-7">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Compact form-->
                <div class="d-flex align-items-center">
                    <!--begin::Input group-->
                    <input type="text" class="form-control form-control-solid ps-10" name="daterange"
                        placeholder="Search">
                    <!--end::Input group-->
                    <!--begin:Action-->
                    <div class="d-flex align-items-center">
                        <button type="submit" class="btn btn-primary me-5">Search</button>

                    </div>
                    <!--end:Action-->
                </div>
                <a id="kt_horizontal_search_advanced_link" class="btn btn-link collapsed" data-bs-toggle="collapse"
                    href="#kt_advanced_search_form" aria-expanded="false">Advanced
                    Search</a>
                <!--end::Compact form-->
                <!--begin::Advance form-->
                <div class="collapse" id="kt_advanced_search_form" style="">
                    <!--begin::Separator-->
                    <div class="separator separator-dashed mt-9 mb-6"></div>

                    <daiv class="row">
                        <div class="col-lg-6">

                            <label class="fs-6 form-label fw-boldest text-dark">Min. Budget</label>
                            <!--begin::Dialer-->
                            <div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="1000"
                                data-kt-dialer-max="50000" data-kt-dialer-step="1000" data-kt-dialer-prefix="PHP"
                                data-kt-dialer-decimals="2">
                                <!--begin::Decrease control-->
                                <button type="button"
                                    class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0"
                                    data-kt-dialer-control="decrease">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black">
                                            </rect>
                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black">
                                            </rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--end::Decrease control-->
                                <!--begin::Input control-->
                                <input type="text" class="form-control form-control-solid border-0 ps-12"
                                    data-kt-dialer-control="input" placeholder="Amount" name="manageBudget"
                                    readonly="readonly" value="$50">
                                <!--end::Input control-->
                                <!--begin::Increase control-->
                                <button type="button"
                                    class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0"
                                    data-kt-dialer-control="increase">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black">
                                            </rect>
                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                                transform="rotate(-90 10.8891 17.8033)" fill="black"></rect>
                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black">
                                            </rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--end::Increase control-->
                            </div>
                            <!--end::Dialer-->

                        </div>
                        <div class="col-lg-6">
                            <label class="fs-6 form-label fw-boldest text-dark">Max. Budget</label>
                            <!--begin::Dialer-->
                            <div class="position-relative" data-kt-dialer="true" data-kt-dialer-min="100"
                                data-kt-dialer-max="50000" data-kt-dialer-step="100" data-kt-dialer-prefix="PHP"
                                data-kt-dialer-decimals="2">
                                <!--begin::Decrease control-->
                                <button type="button"
                                    class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0"
                                    data-kt-dialer-control="decrease">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black">
                                            </rect>
                                            <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black">
                                            </rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--end::Decrease control-->
                                <!--begin::Input control-->
                                <input type="text" class="form-control form-control-solid border-0 ps-12"
                                    data-kt-dialer-control="input" placeholder="Amount" name="manageBudget"
                                    readonly="readonly" value="100">
                                <!--end::Input control-->
                                <!--begin::Increase control-->
                                <button type="button"
                                    class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0"
                                    data-kt-dialer-control="increase">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black">
                                            </rect>
                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                                transform="rotate(-90 10.8891 17.8033)" fill="black"></rect>
                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black">
                                            </rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--end::Increase control-->
                            </div>
                            <!--end::Dialer-->

                        </div>


                    </daiv>

                    <div class='row'>
                        <div class="col-lg-6">
                            <label class="fs-6 form-label fw-boldest text-dark">Capacity</label>
                            <input type="text" class="form-control form-control form-control-solid" name="city">
                        </div>

                        <div class="col-lg-6">
                            <label class="fs-6 form-label fw-boldest text-dark">Room types</label>
                            <!--begin::Select-->
                            <select class="form-control form-control-solid">
                                <option value="" disabled></option>
                                @foreach($roomTypes as $type)
                                <option value="{{ $type->id }}">{{ $type->type_name }}</option>
                                @endforeach
                            </select>
                            <!--end::Select-->
                        </div>
                    </div>
                    <!--end::Separator-->
                </div>
                <!--end::Advance form-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </form>
    <!--end::Form-->
    <!--begin::Toolbar-->
    <div class="d-flex flex-wrap flex-stack pb-7">
        @isset($rooms)
        <!--begin::Title-->
        <div class="d-flex flex-wrap align-items-center my-1">
            <h2 class="fw-bold me-5 my-1">{{ $rooms->count() }} Room/s Found</h2>
        </div>
        <!--end::Title-->
        @endisset
    </div>
    <!--end::Toolbar-->
    <!--begin::Tab Content-->
    <div class="tab-content">
        <!--begin::Tab pane-->
        <div id="kt_project_users_card_pane" class="tab-pane fade show active">
            @isset($rooms)
            <div class="row g-6 g-xl-9">
                @foreach($rooms as $room)
                <!--begin::Col-->
                <div class="col-md-6 col-xxl-4">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                            @if($room->image->count() != 0)
                                <img src="{{ asset('/storage/uploads/' . $room->image->first()->photo) }}" height="250px" class='mb-3' alt="">
                                @else
                                <img src="/assets/media/illustrations/sigma-1/2.png" class='img-fluid mh-250px mb-3' alt="">
                            @endif
                            <!--begin::Name-->
                            <a href="#"
                                class="fs-1 text-gray-800 text-hover-primary fw-boldest mb-1">{{ $room->name }}</a>
                            <!--end::Name-->
                            <!--begin::Position-->
                            <div class="fs-4 fw-bold mb-3">{{ $room->roomType->type_name }}</div>
                            <!--end::Position-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap flex-center">
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-75px py-3 px-4 mx-2 mb-3 text-center">
                                    <div class="fs-2 fw-boldest">{{ $room->price }}</div>
                                    <div class="fw-bold">Price</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="border border-dashed rounded min-w-75px py-3 px-4 mx-2 mb-3 text-center">
                                    <div class="fs-2 fw-boldest">{{ $room->capacity }}</div>
                                    <div class="fw-bold">Capacity</div>
                                </div>
                                <div class="border border-dashed rounded min-w-75px py-3 px-4 mx-2 mb-3 text-center">
                                    <div class="fs-2 fw-boldest text-uppercase">{{ $room->type }}</div>
                                    <div class="fw-bold">Type</div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                {{-- <div class="border border-dashed rounded min-w-75px py-3 px-4 mx-2 mb-3">
                                    <div class="fs-6 fw-boldest text-gray-700">245</div>
                                    <div class="fw-bold text-gray-400">Hours</div>
                                </div> --}}
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <div class="d-grid gap-2">
                            <a class="btn btn-primary fs-3 rounded-0 text-uppercase"
                                href="{{ route('user.booking.bookform', [$room->id, 'selected_date' => $selected_date]) }}">GET THIS
                                {{ $room->type }}</a>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->

                @endforeach
            </div>
            @endisset
        </div>
        <!--end::Tab pane-->
    </div>
    <!--end::Tab Content-->
</div>
<!--end::Container-->

@endsection
@push('page-scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
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
