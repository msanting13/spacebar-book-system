@extends('user.layouts.app')
@section('page-title', 'Rooms')
@prepend('page-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css"
    integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

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


<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="text-center mb-5">
            <h4>Choose your Room</h4>
            <p class="text-muted">We all live in an age that belongs to the young at heart. Life that is becoming
                extremely fast, </p>
        </div>
    </div>
</div>
<div class="row">
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
</div>
@endsection
@push('page-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"
    integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
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
                        <img class="d-block img-fluid" src="${link}" alt="First slide">
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
