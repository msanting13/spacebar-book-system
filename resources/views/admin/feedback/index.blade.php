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
                                    RATING (STARS)
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
                            <tr>
                                <td>{{ $feedback->content }}</td>
                                <td>
                                   @foreach(range(1, $feedback->rating) as $range)
                                   <label class="rating-label" for="kt_rating_2_input_3">
                                        <span class="svg-icon svg-icon-1"><svg><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                </svg></svg></span>
                                    </label>
                                   @endforeach
                                </td>
                                <td class='fw-bold text-uppercase'>{{ $feedback->user->first_name }} {{  $feedback->user->last_name }}</td>
                                <td>
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
