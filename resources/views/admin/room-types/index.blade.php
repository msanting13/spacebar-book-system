@extends('admin.layouts.app')
@section('page-title', 'List of Room types')
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
<div class="row">
    <div class="text-end mb-3 text-uppercase">
        <a href="{{ route('admin.room-types.create') }}" class='btn btn-primary'>Add new room type</a>
    </div>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class='table table-bordered table-hovered' id='room-types-table'>
                        <thead>
                            <tr>
                                <th class='fw-bold text-uppercase'>
                                    Name
                                </th>
                                <th class='fw-bold text-uppercase text-center'>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roomTypes as $type)
                            <tr>
                                <td class='fw-boldest align-middle'>{{ $type->type_name }}</td>
                                <td class='text-center'>
                                    <a href="{{ route('admin.room-types.edit', $type->id) }}"
                                        class='btn btn-success btn-icon rounded-circle shadow-sm mx-2'>
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
    $("#room-types-table").DataTable();

</script>

@endpush
@endsection
