@extends('user.layouts.app')
@section('page-title', 'Submit your feedback!')
@prepend('page-css')
@endprepend
@section('content')
@include('templates.success')
<!--begin::Container-->
<div class="">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body">
                <form action="{{ route('user.feedback.store') }}" method="POST">
                    @csrf
                    <div class='form-group'>
                        <label for="">Message</label>
                        <textarea name="content" id="" cols="30" rows="10" placeholder="Enter your feedback"
                            class='form-control form-control-lg'>{{ old('content') }}</textarea>
                    </div>

                    <div class="form-group mt-5">
                        <label class='fw-bold'>Tell us your rate</label>
                        <div class="rating mx-2">
                            <input class="rating-input" name="rating" value="0" checked type="radio"
                                id="kt_rating_2_input_0" />
                            <!--end::Reset rating-->

                            <!--begin::Star 1-->
                            <label class="rating-label" for="kt_rating_2_input_1">
                                <span class="svg-icon svg-icon-1"><svg><svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg></svg></span>
                            </label>
                            <input class="rating-input" name="rating" value="1" type="radio"
                                id="kt_rating_2_input_1" />
                            <!--end::Star 1-->

                            <!--begin::Star 2-->
                            <label class="rating-label" for="kt_rating_2_input_2">
                                <span class="svg-icon svg-icon-1"><svg><svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg></svg></span>
                            </label>
                            <input class="rating-input" name="rating" value="2" type="radio"
                                id="kt_rating_2_input_2" />
                            <!--end::Star 2-->

                            <!--begin::Star 3-->
                            <label class="rating-label" for="kt_rating_2_input_3">
                                <span class="svg-icon svg-icon-1"><svg><svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg></svg></span>
                            </label>
                            <input class="rating-input" name="rating" value="3" type="radio" checked="checked"
                                id="kt_rating_2_input_3" />
                            <!--end::Star 3-->

                            <!--begin::Star 4-->
                            <label class="rating-label" for="kt_rating_2_input_4">
                                <span class="svg-icon svg-icon-1"><svg><svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg></svg></span>
                            </label>
                            <input class="rating-input" name="rating" value="4" type="radio"
                                id="kt_rating_2_input_4" />
                            <!--end::Star 4-->

                            <!--begin::Star 5-->
                            <label class="rating-label" for="kt_rating_2_input_5">
                                <span class="svg-icon svg-icon-1"><svg><svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg></svg></span>
                            </label>
                            <input class="rating-input" name="rating" value="5" type="radio"
                                id="kt_rating_2_input_5" />
                            <!--end::Star 5-->
                        </div>


                    </div>

                    <div class="form-group mt-5 float-end">
                        <button type="submit" class='btn btn-primary'>Submit your feedback</button>
                    </div>
                </form>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
</div>
<!--end::Container-->

@endsection
@push('page-scripts')
@endpush
