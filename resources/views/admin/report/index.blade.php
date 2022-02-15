@extends('admin.layouts.app')
@section('page-title', 'Generate Reports')
@prepend('page-css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<style>
</style>
@endprepend
@section('content')

<!--begin::Container-->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('reports.create') }}" method="GET">
                <div class="form-group">
                    <label for="" class='lead fw-bold mb-2 mx-2'>Pick Date Range</label>
                    <input type="text" name='daterange' class='form-control form-control-lg form-control-solid'>
                </div>
                <div class="form-group float-end mt-5">
                    <input type="submit" class='btn btn-primary shadow' value="Generate">
                </div>
            </form>

            <div class="clearfix"></div>

            @isset($bookings)
            <hr>
                <div class="card">
                    <!--begin:Card header-->
                    <div class="card-header">
                        <table id="kt_orders_classic" class="table table-row-bordered table-row-dashed align-middle">
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
                                        <span class='mx-5 display-5'>
                                            {{ $bookings->count() }}
                                        </span>
                                    </td>
                                    <td class='text-center'>
                                        <span class='mx-5 display-5'>
                                        &#8369; {{ number_format($extrasTotal, 2, ".", ",") }}
                                        </span>
                                    </td>
                                    <td class='text-center'>
                                        <span class='mx-5 display-5'>
                                        &#8369; {{ number_format($total, 2, ".", ",") }}
                                        </span>
                                    </td>
                                    <td class='text-center'>
                                        <span class='mx-5 display-5'>
                                        {{ $totalStayedDays }}
                                        </span>
                                    </td>
                                    {{-- <td>{{ $booking->created_at->format('F d, Y') }}</td> --}}
                                    {{-- <td>&#8369;{{ number_format($booking->room->price, 2, ".", ",") }}</td> --}}
                                    <td>
                                        {{-- <span class="badge badge-light-danger fw-boldest text-capitalize">{{ $booking->status }}</span> --}}
                                    </td>
                                </tr>
                         
                            </tbody>
                        </table>
                    </div>
                    <!--end:Card header-->
                    <!--begin:Card body-->
                    <div class="card-body">
                        <!--begin::Table-->
                        <table id="kt_orders_classic" class="table table-row-bordered table-row-dashed g-3 gs-0 align-middle">
                            <thead class="fw-boldest text-gray-400 text-uppercase">
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
                            <tbody class=" fw-boldest">
                                @foreach($bookings as $booking)
                                <tr>
                                    <td>
                                        <!--begin::Wrapper-->
                                        <div class="d-flex">
                                            <!--begin::Image-->
                                            <div class="symbol symbol-75px me-6 bg-light">
                                                @if($booking->room->image->count() != 0)
                                                    <img src="{{ asset('/storage/uploads/' . $booking->room->image->first()->photo) }}" height="275px"
                                                        alt="">
                                                    @else
                                                    <img src="{{ asset('/theme/royal/image/xroom1.jpg.pagespeed.ic.GE_Jw5sZi4.jpg') }}" alt="">
                                                @endif
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-column justify-content-center">
                                                <a href="#" class="mb-1 text-gray-800 text-hover-primary">{{ $booking->room->name }}</a>
                                                <div class="fw-bold text-gray-400 text-uppercase">{{ Str::limit($booking->id, 8 , '') }}</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </td>
                                     <td class='text-uppercase'>
                                        {{ $booking->extras->implode('name', ', ') }}
                                    </td>
                                    <td>&#8369;{{ number_format($booking->extras->sum('price') , 2, ".", ",") }}</td>
                                    <td>&#8369;{{ number_format($booking->room->price, 2, ".", ",") }}</td>
                                    <td>{{ $booking->start_date->format('F d ') }} - {{ $booking->end_date->format('d Y') }}</td>
                                    @if($booking->start_date->diffInDays($booking->end_date) == 0)
                                        <td class='text-center'>1</td>
                                    @else
                                        <td class='text-center'>{{ $booking->start_date->diffInDays($booking->end_date) }}</td>
                                    @endif
                                    @php
                                        $stayedDays = $booking->start_date->diffInDays($booking->end_date) == 0 ? 1 : $booking->start_date->diffInDays($booking->end_date)
                                    @endphp
                                    <td class='text-center'>
                                       {{ number_format($stayedDays * $booking->room->price + $booking->extras->sum('price'), 2, ".", ",") }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end:Card body-->
                    <a href="#" class='btn btn-info shadow'>
                        PRINT
                    </a>

                </div>
                
            @endisset

            {{-- <table class='table table-row-bordered table-hover mt-3' id='rooms-table'>
                        <thead>
                            <tr>
                                <th class='fw-bold text-uppercase px-2 fw-bold text-uppercase align-middle'>
                                    Room
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
                        <tbody></tbody>
                    </table> --}}
        </div>
    </div>
<!--end::Container-->

@endsection
@push('page-scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
    $(function () {
        $('#minimixe-sidebar').trigger('click');
        
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function (start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                .format('YYYY-MM-DD'));
        });
    });

</script>
@endpush
