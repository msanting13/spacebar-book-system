@if (Session::has('success'))
    <div class="alert alert-success text-dark fw-bold" role="alert">
      {{ Session::get('success') }}
    </div>
@endif