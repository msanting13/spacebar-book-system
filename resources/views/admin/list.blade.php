@extends('admin.layouts.app')
@section('page-title', 'List of Adminstrators')
@section('content')

<link href="/admin-assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="/admin-assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
    type="text/css" />
@prepend('page-css')
@endprepend
@include('templates.success')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
    <a href="{{ route('admin.create') }}" class='btn btn-primary font-size-16 mb-2 float-end'>CREATE NEW ADMINISTRATOR</a>
    <div class="clearfix"></div>
      <div class="card">
        <div class="card-body">
            <table class='table table-bordered table-hovered text-dark' id='users-table'>
                <thead>
                    <tr>
                        <th class='fw-bold text-uppercase p-2'>
                            Fullname
                        </th>
                        <th class='fw-bold text-uppercase p-2'>
                            Username
                        </th>
                        <th class='fw-bold text-uppercase p-2'>
                            Email
                        </th>
                        <th class='fw-bold text-uppercase p-2'>
                            Registered At
                        </th>
                        <th class='fw-bold text-uppercase p-2 text-center'>
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class='align-middle p-2 text-center h6'>{{ $user->name }}</td>
                        <td class='align-middle p-2 text-center h6'>{{ $user->username }}</td>
                        <td class='align-middle p-2 text-center h6'>{{ $user->email }}</td>
                        <td class='align-middle p-2 text-center h6'>{{ $user->created_at->format('F d, Y') }}</td>
                        <td class='text-center'>
                            <a href="{{ route('admin.edit', $user->id) }}" class='btn btn-success btn-icon rounded-circle shadow-sm mx-2'>
                                    <i class='fas fa-pen'></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
</div>
@push('page-scripts')
<!-- Required datatable js -->
<script src="/admin-assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/admin-assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Responsive examples -->
<script src="/admin-assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/admin-assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script>
    $('#users-table').DataTable();
</script>
@endpush
@endsection