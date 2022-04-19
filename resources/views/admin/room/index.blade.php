@extends('admin.layouts.app')
@section('page-title', 'List of Rooms')
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
    <div class="text-end mb-2 text-uppercase">
        <a href="{{ route('admin.room.create') }}" class='btn btn-primary'>Add new room</a>
    </div>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                
                <div class="table-responsive">
                    <table class='table table-ordered table-hover' id='rooms-table'>
                        <thead>
                            <tr class='text-dark'>
                                <th class='fw-bold text-uppercase px-2 fw-bold text-uppercase align-middle'>
                                    Name
                                </th>
                                <th class='fw-bold text-uppercase px-2 fw-bold text-uppercase align-middle'>
                                    Description
                                </th>
                                <th class='fw-bold text-uppercase px-2 fw-bold text-center align-middle'>
                                    Capacity
                                </th>
                                <th class='fw-bold text-uppercase text-truncate px-2 fw-bold text-uppercase align-middle'>
                                    Classification
                                </th>
                                <th class='fw-bold text-uppercase text-truncate px-2 fw-bold text-uppercase align-middle'>
                                    Type
                                </th>
                                <th class='fw-bold text-uppercase px-2 fw-bold text-uppercase align-middle'>
                                    Price
                                </th>
                                <th class='fw-bold text-uppercase text-center px-2 fw-bold text-uppercase align-middle'>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rooms as $room)
                            <tr>
                                <td class='align-middle px-2 fw-bold text-uppercase align-middle'>{{ $room->name }}</td>
                                <td class='align-middle px-2 fw-bold text-uppercase align-middle'>{{ Str::limit($room->description, 50, '...') }}</td>
                                <td class='align-middle px-2 fw-bold text-uppercase align-middle text-center' class='text-center fw-bold'>{{ $room->capacity }}</td>
                                <td class='align-middle px-2 fw-bold text-uppercase align-middle'>{{ $room->roomType->type_name }}</td>
                                <td class='align-middle px-2 fw-bold text-uppercase align-middle' class='text-center fw-bold'>{{ $room->type }}</td>
                                <td class='align-middle px-2 fw-bold text-uppercase align-middle'>{{ $room->price }}</td>
                                <td class='text-center'>
                                    <form action="{{ route('admin.room.delete', $room->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('admin.room.edit', $room->id) }}" class='btn btn-success btn-icon rounded-circle shadow-sm
                                        text-uppercase'>
                                            <i class='fas fa-pen'></i>
                                        </a>
                                        <button type="submit" href="{{ route('admin.room.delete', $room->id) }}" class='btn btn-danger btn-icon rounded-circle shadow-sm
                                        text-uppercase'>
                                            <i class='fas fa-trash'></i>
                                        </button>
                                    </form>
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
