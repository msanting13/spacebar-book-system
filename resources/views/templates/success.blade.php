@if(Session::has('success'))
<!--begin::Alert-->
<div class="alert alert-dismissible bg-success d-flex flex-column flex-sm-row">
    <!--begin::Wrapper-->
    <div class="d-flex flex-column text-light pe-0 pe-sm-10">
        <!--begin::Title-->
        <h5 class="mb-2 light text-white">Good Job!</h4>
        <!--end::Title-->

        <!--begin::Content-->
        <span>{{ Session::get('success') }}</span>
        <!--end::Content-->
    </div>
    <!--end::Wrapper-->

</div>
<!--end::Alert-->
@endif
