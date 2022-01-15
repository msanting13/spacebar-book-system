@extends('admin.layouts.app')
@section('page-title', 'List of Users')
@section('content')
@prepend('page-css')
<link href="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endprepend
@include('templates.success')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <table class='table table-bordered table-hovered' id='users-table'>
                <thead>
                    <tr>
                        <th class='fw-bold text-uppercase'>
                            Fullname
                        </th>
                        <th class='fw-bold text-uppercase'>
                            Phone #
                        </th>
                        <th class='fw-bold text-uppercase'>
                            Email
                        </th>
                        <th class='fw-bold text-uppercase'>
                            Registered At
                        </th>
                        <th class='fw-bold text-uppercase text-center'>
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                        <td>{{ $user->phone_number }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('F d, Y') }}</td>
                        <td class='text-center'>
                            <a href="{{ route('admin.user.edit', $user->id) }}" class='btn btn-success p-2 text-uppercase'>Edit</a>
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
    $('#users-table').DataTable();
</script>
@endpush
@endsection