@extends('admin.layouts.app')
@section('page-title', 'List of Rooms')
@section('content')
@prepend('page-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endprepend
@include('templates.success')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List of Rooms</h4>
                <div class="float-end">
                    <a href="{{ route('admin.room.create') }}" class='btn btn-primary'>Add new room</a>
                </div>
                <div class="clearfix"></div>
                <div class="table-responsive">
                    <table class='table table-bordered table-hovered' id='rooms-table'>
                        <thead>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    Capacity
                                </th>
                                <th>
                                    Room Type
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rooms as $room)
                            <tr>
                                <td>{{ $room->name }}</td>
                                <td>{{ $room->description }}</td>
                                <td>{{ $room->capacity }}</td>
                                <td>{{ $room->roomType->type_name }}</td>
                                <td>{{ $room->price }}</td>
                                <td class='text-center'>
                                    <a href="{{ route('admin.room.edit', $room->id) }}" class='btn btn-success p-2
                                    text-uppercase'>Edit</a>
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
    $('#rooms-table').DataTable();

</script>
@endpush
@endsection
