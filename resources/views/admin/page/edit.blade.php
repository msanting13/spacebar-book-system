@extends('admin.layouts.app')
@section('page-title', 'Update content')
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
                <form action="{{ route('admin.page.update', $page->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-5">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $page->title) }}" placeholder="Enter title">
                    </div>

                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class='form-control' cols="30" rows="10" placeholder="Enter content">{{ old('content', $page->content) }}</textarea>
                    </div>

                    <div class="form-group mt-3">
                        <div class="float-end">
                            <input type="submit" class='btn btn-success shadow-sm' value='Update content'>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
