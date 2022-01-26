@extends('admin.layouts.app')
@section('page-title', 'Content Management')
@section('content')
@include('templates.success')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <a href="{{ route('admin.page.create') }}" class='btn btn-primary float-end shadow-sm mb-2'>ADD NEW CONTENT</a>
        <div class="clearfix"></div>
      <div class="card">
        <div class="card-body">
            <table class='table table-bordered table-hovered' id='users-table'>
                <thead>
                    <tr>
                        <th class='fw-bold text-uppercase'>
                            TITLE
                        </th>
                        <th class='fw-bold text-uppercase'>
                            CONTENT
                        </th>
                        <th class='fw-bold text-uppercase text-center'>
                            CREATED at
                        </th>
                        <th class='fw-bold text-uppercase text-center'>
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                    @foreach($contents as $content)
                    <tr>
                        <td>{{ $content->title }}</td>
                        <td>{{ $content->content }}</td>
                        <td class='text-center'>{{ $content->created_at->format('F d, Y h:i A') }}</td>
                        <td class='text-center'>
                            <a href="{{ route('admin.page.edit', $content->id) }}" class='btn btn-success p-2 text-uppercase'>Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </tbody>
            </table>
        </div>
      </div>
    </div>
    
</div>
@endsection