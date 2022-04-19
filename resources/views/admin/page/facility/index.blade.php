@extends('admin.layouts.app')
@section('page-title', 'List of Facilities')
@section('content')
@prepend('page-css')
<!-- DataTables -->
<link href="/admin-assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="/admin-assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
    type="text/css" />

<!-- Responsive datatable examples -->
<link href="/admin-assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
    type="text/css" />
@endprepend
@include('templates.success')
<div class="text-end text-uppercase mb-3">
    <a href="{{ route('admin.facility.create') }}" class='btn btn-primary'>Add new facility</a>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class='table table-row-bordered table-hover' id='rooms-table'>
                        <thead>
                            <tr>
                                <th class='fw-bold text-uppercase'>
                                    Name
                                </th>
                                <th class='fw-bold text-uppercase'>
                                    Description
                                </th>
                                <th class='fw-bold text-uppercase text-center'>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($facilities as $facility)
                            <tr>
                                <td class='align-middle fw-bold'>{{ $facility->title }}</td>
                                <td class='align-middle fw-bold'>{!! $facility->content !!}</td>
                                <td class='text-center align-middle'>
                                <a href="{{ route('admin.facility.edit', $facility->id) }}" class='btn btn-success btn-icon rounded-circle shadow-sm mx-2'>
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
</div>
@push('page-scripts')
<!-- Required datatable js -->
<script src="/admin-assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/admin-assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Responsive examples -->
<script src="/admin-assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/admin-assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script>
    $('#rooms-table').DataTable();
</script>
@endpush
@endsection
