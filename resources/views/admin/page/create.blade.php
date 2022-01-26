@extends('admin.layouts.app')
@section('page-title', 'Add new content')
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
                <form action="{{ route('admin.page.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-5">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Enter title">
                    </div>

                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class='form-control' cols="30" rows="10" placeholder="Enter content">{{ old('content') }}</textarea>
                    </div>

                    <div class="form-group mt-3">
                        <div class="float-end">
                            <input type="submit" class='btn btn-primary' value='Submit new content'>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
