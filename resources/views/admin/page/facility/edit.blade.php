@extends('admin.layouts.app')
@section('page-title', 'Edit facility')
@section('content')
@include('templates.success')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @if($errors->any())
                    <div class='alert alert-danger'>
                        @foreach($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('admin.facility.update', $facility->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-5">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $facility->title) }}" placeholder="Enter title">
                    </div>

                    <div class="form-group  mb-5">
                        <label>Content</label>
                        <textarea name="content" class='form-control' cols="30" rows="10" placeholder="Enter description">{{ old('content', $facility->content) }}</textarea>
                    </div>

                    <div class="form-group mb-5">
                        <label>Image</label>
                        <input name="image" type="file" class='form-control form-control-lg'>
                    </div>

                    <div class="form-group mb-5 mt-5">
                        <div class="float-end">
                            <input type="submit" class='btn btn-success' value='Update facility'>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
