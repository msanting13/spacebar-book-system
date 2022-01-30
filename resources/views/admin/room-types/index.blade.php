@extends('admin.layouts.app')
@section('page-title', 'List of Room types')
@section('content')
@prepend('page-css')
<link href="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endprepend
@include('templates.success')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="float-end">
                    <a href="{{ route('admin.room-types.create') }}" class='btn btn-primary'>Add new room type</a>
                </div>
                <div class="clearfix"></div>
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
                                    <td>{{ $type->type_name }}</td>
                                    <td class='text-center'>
                                        <a href="{{ route('admin.room-types.edit', $type->id) }}" class='btn btn-success'>EDIT</a>
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

<script src="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

<script>
    $("#room-types-table").DataTable({
        "language": {
            "lengthMenu": "Show _MENU_",
        },
        "ordering" : false,
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +
            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });
</script>

@endpush
@endsection
