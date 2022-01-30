@extends('admin.layouts.app')
@section('page-title', 'Extras/Add-ons')
@section('content')
@prepend('page-css')
<link href="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
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
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </span>
                                        </a>

                                        <button type="submit" class='btn btn-danger btn-icon rounded-circle shadow-sm'>
                                            <span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg></span>
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

<script src="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

<script>
    $("#extras-table").DataTable({
        "language": {
            "lengthMenu": "Show _MENU_",
        },
        "ordering": false,
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
