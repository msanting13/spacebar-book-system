@extends('admin.layouts.app')
@section('page-title', 'Edit room type')
@section('content')
@include('templates.success')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @if($errors->any())
                    <div class='alert alert-danger p-5'>
                        @foreach($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('admin.room-types.update', $type->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-5">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control" value="{{ old('description', $type->type_name) }}" placeholder="Enter room type description">
                    </div>

                    <div class="form-group mb-5">
                        <div class="float-end">
                            <input type="submit" class='btn btn-success' value='Update room type'>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
