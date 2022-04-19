@extends('user.layouts.app')
@section('page-title', 'Booking')
@prepend('page-css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endprepend
@section('content')

<div class="modal fade" tabindex="-1" id='modal-video'>
  <div class="modal-dialog modal-xl p-0 rounded-0">
    <div class="modal-content p-0 m-0 rounded-0">
      <div class="modal-body p-0 m-0 rounded-0" id='modalBody'>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" id='modal-image'>
  <div class="modal-dialog modal-xl p-0 rounded-0">
    <div class="modal-content p-0 m-0 rounded-0">
      <div class="modal-body p-0 m-0 rounded-0" id='modalImageBody'>
      </div>
    </div>
  </div>
</div>


    <!--begin::Form-->
    <form action="#">
        <!--begin::Card-->
        <div class="card mb-7">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Compact form-->
                <div class="d-flex align-items-center">
                    <!--begin::Input group-->
                    <input type="text" class="form-control form-control-solid ps-10" name="daterange"
                        placeholder="Search">
                    <!--end::Input group-->
                    <!--begin:Action-->
                    <div class="d-flex align-items-center">
                        <button type="submit" class="btn btn-primary me-5 mx-2">Search</button>

                    </div>
                    <!--end:Action-->
                </div>
                <div class='my-2'></div>
                <a id="kt_horizontal_search_advanced_link" class="font-size-15 collapsed" data-bs-toggle="collapse"
                    href="#kt_advanced_search_form" aria-expanded="false" style="outline:none;">Advanced
                    Search</a>
                <!--end::Compact form-->
                <!--begin::Advance form-->
                <div class='my-2'></div>
                <div class="collapse" id="kt_advanced_search_form" style="">
                    <!--begin::Separator-->
                    <div class="separator separator-dashed mt-9 mb-6"></div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label class="fs-6 form-label fw-boldest text-dark">Min. Budget</label>
                            <div>
                                <input type="text" class="form-control"
                                 placeholder="Amount" name="minBudget" placeholder="Minimum amount" value="500">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="fs-6 form-label fw-boldest text-dark">Max. Budget</label>
                            <div>
                                <input type="text" class="form-control"
                                 placeholder="Amount" name="maxBudget" placeholder="Maximum Amount" value="5000">
                            </div>
                        </div>
                    </div>
                    <div class='mt-2'></div>
                    <div class='row'>
                        <div class="col-lg-6">
                            <label class="fs-6 form-label fw-boldest text-dark">Capacity (More than)</label>
                            <input type="text" class="form-control form-control form-control-solid" name="capacity" value="1">
                        </div>

                        <div class="col-lg-6">
                            <label class="fs-6 form-label fw-boldest text-dark">Room types</label>
                            <select class="form-control form-control-solid" name="type">
                                <option selected value="room">Room</option>
                                <option value="function hall">Functional Hall</option>
                                <option value="cottage">Cottage</option>
                            </select>
                            <!--end::Select-->
                        </div>
                    </div>
                    <!--end::Separator-->
                </div>
                <!--end::Advance form-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </form>
    <!--end::Form-->
    @isset($rooms)
        <div class="text-center mb-4">
            <h4 class="fw-medium text-primary">{{ $rooms->count() }} Result/s Found</5>
        </div>
    @endisset
<div class="row">
   @isset($rooms)
    @foreach($rooms as $room)
    <div class="col-xl-3 col-md-6">
        <div class="card plan-box">
            <div class="card-body p-4">
                <div class="d-flex align-items-start">
                    <div class="flex-1 me-3">
                        <h5>{{ $room->name }}</h5>
                        <p class="text-muted">{{ Str::limit($room->description, 15, '...') }}</p>
                    </div>
                    <div class="ms-auto">
                        <i class="bx bx-building-house h1 text-primary"></i>
                    </div>
                </div>
                <div class="py-4 mt-4 text-center bg-soft-light">
                    <h1 class="m-0"><sup><small>&#8369;</small></sup> {{ (int) $room->price }}/ <span
                            class="font-size-13">Per
                            day</span></h1>
                </div>

                <div class="plan-features p-4 text-muted mt-2">
                    <p><i class="mdi mdi-check-bold text-primary me-4"></i>{{ $room->capacity }} Capacity</p>
                    @foreach(explode(',', $room->description) as $description)
                    <p><i class="mdi mdi-check-bold text-primary me-4"></i>{{ $description }}</p>
                    @endforeach
                </div>

                <div class="text-center">

                    <button type="button" class='btn btn-info h5 rounded-circle text-white waves-effect waves-light btn-view-image' data-url="{{ $room->image->implode('photo', '||') }}">
                        <i class='mdi mdi-image'></i> 
                    </button>
                    <button type="button" class="btn btn-info h5 rounded-circle text-white waves-effect waves-light btn-open-video" data-url="{{ $room->videos()->first()->url ?? '' }}">
                        <i class='mdi mdi-play-outline'></i>
                    </button> 
                    <div class='d-grid gap-2 mt-1'>
                    <a href="{{ route('user.booking.bookform', [$room->id]) }}"
                        class="btn btn-primary btn-block waves-effect waves-light">Book Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal -->

    @endforeach
   @endisset
</div>

    <!--end::Tab Content-->

@endsection
@push('page-scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
    $(function () {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function (start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                .format('YYYY-MM-DD'));
        });
    });

    
    $(document).on('click', '.btn-open-video', function () {
        let url = $(this).attr('data-url');
        $('#modalBody').html('').append(`<video id='video'  controls width="100%" class="embed-responsive-item" src="${url}"></video>`);
        $('#modal-video').modal('toggle');
    });

    $(document).on('click', '.btn-view-image', function () {
        let url = $(this).attr('data-url').split("||");
        let carouselItems = "";
        $('#modal-image').modal('toggle');
        url.forEach((link, index) => {
            carouselItems += `
                <div class="carousel-item ${index == 0 ? 'active' : ''}">
                    <div class='d-flex justify-content-center'>
                        <img class="d-block img-fluid" src="${link}" alt="No availabe Image">
                    </div>
                </div>
            `;
        });

        $('#modalImageBody').html('').append(`
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    ${carouselItems}
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        `);
    });

    var myModalEl = document.getElementById('modal-video')
    myModalEl.addEventListener('hidden.bs.modal', function (event) {
        let video = document.querySelector('#video')
        video.pause();
        video.currentTime = 0;
    })
</script>
@endpush
