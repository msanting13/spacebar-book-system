@if($errors->any())
<!--begin::Alert-->
<div class="alert alert-dismissible bg-danger d-flex flex-column flex-sm-row">
    <!--begin::Wrapper-->
    <div class="d-flex flex-column text-light pe-0 pe-sm-10">
        <!--begin::Title-->
        <h5 class="mb-2 light text-white">
            @if($errors->count() !== 1)
                    Please check these fields
                @else
                    Please check this fields
            @endif
        </h4>
        <!--end::Title-->

        <!--begin::Content-->
        @foreach($errors->all() as $error)
            <li class='mx-2'>{{ $error }}</li>
        @endforeach
        <!--end::Content-->
    </div>
    <!--end::Wrapper-->

</div>
<!--end::Alert-->
@endif
