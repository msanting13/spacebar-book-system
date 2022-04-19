@extends('admin.layouts.app')
@section('page-title', 'Generate Reports')
@prepend('page-css')
<link href="/admin-assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<style>
</style>
@endprepend
@section('content')

<!--begin::Container-->
<div class="card">
    <div class="card-body">
        <form action="{{ route('reports.create') }}" method="GET">
            <div class="form-group">
                <label for="" class='lead fw-bold mb-2 mx-2 text-dark'>Pick Date Range</label>
                <div class="input-daterange input-group" id="datepicker6" data-provide="datepicker"
                    data-date-container='#datepicker6'>
                    <input type="text" class="form-control" name="from" placeholder="Check In" value="{{ request()->query('from') }}" />
                    <input type="text" class="form-control" name="to" placeholder="Check Out" value="{{ request()->query('to') }}" />
                </div>
            </div>
            <div class="form-group float-end mt-5">
                <input type="submit" class='btn btn-primary shadow btn-lg' value="Generate">
            </div>
        </form>

        <div class="clearfix"></div>

        @isset($bookings)
        <hr>
        <h5 class='mb-3 mx-2 text-dark'>
            Generated Reports from {{ date('F d, Y', strtotime(request()->query('from'))) }} to {{ date('F d, Y', strtotime(request()->query('to'))) }}
        </h5>
        <div class="card">

            <!--begin:Card header-->
            <div class="card-header">

                <table class="table">
                    <thead class=" fw-boldest text-gray-400 text-uppercase">
                        <tr>
                            <th class="min-w-200px text-dark">TOTAL ROOMS</th>
                            <th class="min-w-150px text-dark text-center">EXTRAS TOTAL AMOUNT</th>
                            <th class="min-w-200px text-dark text-center">ROOM TOTAL AMOUNT</th>
                            <th class="min-w-100px text-dark  text-center">TOTAL DAYS CUSTOMER STAYED</th>
                        </tr>
                    </thead>
                    <tbody class=" fw-boldest">
                        <tr>
                            <td>
                                <span class='mx-4 h1 text-dark'>
                                    &nbsp;{{ $bookings->count() }}
                                </span>
                            </td>
                            <td class='text-center'>
                                <span class='mx-4 h1 text-dark'>
                                    &#8369; {{ number_format($extrasTotal, 2, ".", ",") }}
                                </span>
                            </td>
                            <td class='text-center'>
                                <span class='mx-5 h1 text-dark'>
                                    &#8369; {{ number_format($total, 2, ".", ",") }}
                                </span>
                            </td>
                            <td class='text-center'>
                                <span class='mx-5 h1 text-dark'>
                                    {{ $totalStayedDays }}
                                </span>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!--end:Card header-->
            <!--begin:Card body-->
            <div class="card-body">
                <!--begin::Table-->
                <table class="table table-bordered table-hover align-middle">
                    <thead class=" text-gray-400 text-uppercase">
                        <tr>
                            <th class="min-w-200px text-dark">Room</th>
                            <th class="min-w-150px text-dark">EXTRAS</th>
                            <th class="min-w-150px text-dark">EXTRAS AMOUNT</th>
                            <th class="min-w-100px text-dark">room Amount</th>
                            <th class="min-w-100px text-dark">stayed date</th>
                            <th class="min-w-100px text-dark text-center">stayed days</th>
                            <th class="min-w-100px text-dark text-center">sub-total</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach($bookings as $booking)
                        <tr>
                            <td class='text-dark h5'>
                        
                                        <a href="#" class="mb-1 text-gray-800 text-hover-primary">{{ $booking->room->name }}</a>
                        
                            </td>
                            <td class='text-uppercase h6 text-dark'>
                                {{ $booking->extras->implode('name', ', ') }}
                            </td>
                            <td class='text-dark h5'>&#8369; {{ number_format($booking->extras->sum('price') , 2, ".", ",") }}</td>
                            <td class='text-dark h5'>&#8369; {{ number_format($booking->room->price, 2, ".", ",") }}</td>
                            <td class='text-dark h5'>{{ $booking->start_date->format('F d ') }} - {{ $booking->end_date->format('d Y') }}
                            </td>
                            <td class='text-center text-dark h5'>{{ $booking->start_date->diffInDays($booking->end_date) + 1}}</td>
                            @php
                                $stayedDays = $booking->start_date->diffInDays($booking->end_date) + 1;
                            @endphp
                            <td class='text-center text-dark h5'>
                                &#8369; {{ number_format($stayedDays * $booking->room->price + $booking->extras->sum('price'), 2, ".", ",") }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--end::Table-->
            </div>
            <!--end:Card body-->
            

            @if($total !== 0)
                <a target="_blank" href="{{ route('reports.print', [$from, $to]) }}" class='btn btn-info btn-lg shadow rounded-0'>
                    PRINT
                </a>
            @endif

        </div>

        @endisset


    </div>
</div>
<!--end::Container-->

@endsection
@push('page-scripts')
<script src="/admin-assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script>
</script>
@endpush
