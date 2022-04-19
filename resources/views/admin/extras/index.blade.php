@extends('admin.layouts.app')
@section('page-title', 'Extras/Add-ons')
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
    <div class="col-md-12 grid-margin stretch-card">
        <div class="float-end">
            <a href="{{ route('extras.create') }}" class='btn btn-primary mb-3'>ADD NEW EXTRA</a>
        </div>
        <div class="clearfix"></div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class='table table-bordered table-hovered' id='extras-table'>
                        <thead>
                            <tr>
                                <th class='px-2 fw-bold text-uppercase'>
                                    NAME
                                </th>
                                <th class='px-2 fw-bold text-uppercase'>
                                    DESCRIPTION
                                </th>
                                <th class='px-2 fw-bold text-uppercase'>
                                    PRICE
                                </th>
                                <th class='px-2 fw-bold text-uppercase'>
                                    CREATED AT
                                </th>

                                <th class='px-2 fw-bold text-uppercase text-center'>
                                    ACTIONS
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($extras as $extra)
                            <tr>
                                <th class='px-2 fw-bold text-uppercase align-middle'>
                                    {{ $extra->name }}
                                </th>
                                <th class='px-2 fw-bold text-uppercase align-middle'>
                                    {{ $extra->description }}
                                </th>
                                <th class='px-2 fw-bold text-uppercase align-middle'>
                                    {{ $extra->price }}
                                </th>
                                <th class='px-2 fw-bold text-uppercase align-middle'>
                                    {{ $extra->created_at->format('F d, Y h:i A') }}
                                </th>

                                <th class='px-2 fw-bold text-uppercase text-center'>
                                    <form action="{{ route('extras.destroy', $extra->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('extras.edit', $extra->id) }}" class='btn btn-success btn-icon rounded-circle shadow-sm mx-2'>
                                                <i class='fas fa-pen'></i>
                                        </a>

                                        <button type="submit" class='btn btn-danger btn-icon rounded-circle shadow-sm'>
                                            <i class='fas fa-trash'></i>
                                        </button>

                                    </form>
                                </th>

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
    $("#extras-table").DataTable();
</script>

@endpush
@endsection
