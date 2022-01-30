@extends('admin.layouts.app')
@section('page-title', 'Add new room type')
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
                <form action="{{ route('admin.room-types.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-5">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control" value="{{ old('description') }}" placeholder="Enter room type description">
                    </div>

                    <div class="form-group mb-5">
                        <div class="float-end">
                            <input type="submit" class='btn btn-primary' value='Create new room type'>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
