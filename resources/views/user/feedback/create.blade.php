@extends('user.layouts.app')
@section('page-title', 'Feedback')
@prepend('page-css')
@endprepend
@section('content')
@include('templates.success')

        <!--begin::Card-->
        <div class="card shadow-none">
            <!--begin::Card body-->
            <div class="card-body">
                <form action="{{ route('user.feedback.store') }}" method="POST">
                    @csrf
                    <div class='form-group'>
                        <label class='text-dark'>Feedback</label>
                        <textarea name="content" id="" cols="30" rows="5" class='form-control'>{{ old('content') }}</textarea>
                    </div>

                    <div class="form-group">
                        <h5 class="font-size-15 mt-3">Tell us your rate</h5>
                        <div class="rating-star">
                            <input type="hidden" name="rating" class="rating" data-filled="mdi mdi-heart text-danger" data-empty="mdi mdi-heart-outline text-danger" value="5">
                        </div>
                        <button type="submit" class='btn btn-primary float-end'>Submit Feedback</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->

@endsection
@push('page-scripts')
@endpush
