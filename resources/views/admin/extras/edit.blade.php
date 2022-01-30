@extends('admin.layouts.app')
@section('page-title', 'Edit Extra')
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
            @if($errors->any())
            <div class='alert alert-danger' style='list-style:none;'>
                @foreach($errors->all() as $error)
                <li class='px-3'>
                    {{ $error }}
                </li>
                @endforeach
            </div>
            @endif
            <form action="{{ route('extras.update', $extra->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label>Name</label>
                    <input type="text" class='form-control' name='name' value="{{ old('name', $extra->name) }}">
                </div>

                <div class="form-group mb-3">
                    <label>Description</label>
                    <input type="text" class='form-control' name='description' value="{{ old('description', $extra->description) }}">
                </div>

                <div class="form-group mb-3">
                    <label>Price</label>
                    <input type="number" class='form-control' name='price' value="{{ old('price', $extra->price) }}">
                </div>

                <div class="form-group mt-5 float-end">
                    <button type="submit" class='btn btn-success'>Update Extra</button>
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
