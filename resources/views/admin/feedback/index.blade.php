@extends('admin.layouts.app')
@section('page-title', 'Customer Feedbacks')
@section('content')
@prepend('page-css')
<link href="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endprepend
@include('templates.success')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="clearfix"></div>
                <div class="table-responsive">
                    <table class='table table-bordered table-hovered' id='feedbacks-table'>
                        <thead>
                            <tr>
                                <th class='fw-bold text-uppercase'>
                                    CONTENT
                                </th>
                                <th class='fw-bold text-uppercase'>
                                    RATING (HEARTS)
                                </th>
                                <th class='fw-bold text-uppercase'>
                                    SUBMITTED BY
                                </th>
                                <th class='fw-bold text-uppercase'>
                                    DATE SUBMITTED
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($feedbacks as $feedback)
                            <tr class='align-middle'>
                                <td>{{ Str::limit($feedback->content, 50, '...') }}</td>
                                <td class='text-center'>
                                        <input type="hidden" name="rating" class="rating" data-filled="mdi mdi-heart text-danger" data-empty="mdi mdi-heart-outline text-danger" value="5">
                                </td>
                                <td class='fw-bold text-uppercase'>{{ $feedback->user->first_name }} {{  $feedback->user->last_name }}</td>
                                <td class='text-center'>
                                    {{ $feedback->created_at->format('F d, Y h:i A') }}
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
    $("#feedbacks-table").DataTable({
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
