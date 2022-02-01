@extends('admin.layouts.app')
@section('page-title', 'List of Rooms')
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
                    <a href="{{ route('admin.room.create') }}" class='btn btn-primary'>Add new room</a>
                </div>
                <div class="clearfix"></div>
                <div class="table-responsive">
                    <table class='table table-row-bordered table-hover' id='rooms-table'>
                        <thead>
                            <tr>
                                <th class='fw-bold text-uppercase px-2 fw-bold text-uppercase align-middle'>
                                    Name
                                </th>
                                <th class='fw-bold text-uppercase px-2 fw-bold text-uppercase align-middle'>
                                    Description
                                </th>
                                <th class='fw-bold text-uppercase px-2 fw-bold text-uppercase align-middle'>
                                    Capacity
                                </th>
                                <th class='fw-bold text-uppercase text-truncate px-2 fw-bold text-uppercase align-middle'>
                                    Room Type
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
                                <td class='align-middle px-2 fw-bold text-uppercase align-middle' class='text-center fw-bold'>{{ $room->capacity }}</td>
                                <td class='align-middle px-2 fw-bold text-uppercase align-middle'>{{ $room->roomType->type_name }}</td>
                                <td class='align-middle px-2 fw-bold text-uppercase align-middle'>{{ $room->price }}</td>
                                <td class='text-center'>
                                    <form action="{{ route('admin.room.delete', $room->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('admin.room.edit', $room->id) }}" class='btn btn-success btn-icon rounded-circle shadow-sm
                                        text-uppercase'>
                                        <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </span>
                                        </a>
                                        <button type="submit" href="{{ route('admin.room.delete', $room->id) }}" class='btn btn-danger btn-icon rounded-circle shadow-sm
                                        text-uppercase'>
                                        <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg></span>
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

<script src="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

<script>
    $("#bookings_table").DataTable({
        "language": {
            "lengthMenu": "Show _MENU_",
        },
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

<script>
    $('#rooms-table').DataTable();
</script>
@endpush
@endsection
