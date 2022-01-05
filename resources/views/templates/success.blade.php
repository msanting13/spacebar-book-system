@if (Session::has('success'))
    <div class="alert alert-success text-dark" role="alert">
      {{ Session::get('success') }}
    </div>
@endif