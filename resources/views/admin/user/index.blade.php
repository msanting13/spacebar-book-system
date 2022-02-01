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
                        <th class='fw-bold text-uppercase p-2'>
                            Fullname
                        </th>
                        <th class='fw-bold text-uppercase p-2'>
                            Phone #
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
                        <td class='align-middle p-2'>{{ $user->first_name }} {{ $user->last_name }}</td>
                        <td class='align-middle p-2'>{{ $user->phone_number }}</td>
                        <td class='align-middle p-2'>{{ $user->email }}</td>
                        <td class='align-middle p-2'>{{ $user->created_at->format('F d, Y') }}</td>
                        <td class='text-center'>
                            <a href="{{ route('admin.user.edit', $user->id) }}" class='btn btn-success btn-icon rounded-circle shadow-sm mx-2'>
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </span>
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