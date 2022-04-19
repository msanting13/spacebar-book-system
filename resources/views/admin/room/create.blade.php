@extends('admin.layouts.app')
@section('page-title', 'Add New Room')
@section('content')
@include('templates.success')
@if($errors->any())
<div class='alert alert-danger' style='list-style:none;'>
    @foreach($errors->all() as $error)
    <li class='p-1'>
        {{ $error }}
    </li>
    @endforeach
</div>
@endif
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.room.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                            placeholder="Enter room name">
                    </div>

                    <div class="form-group mb-3">
                        <label>Description</label>
                        <textarea name="description" class='form-control' cols="30" rows="10"
                            placeholder="Enter description">{{ old('description') }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label>Capacity</label>
                        <input type="number" name="capacity" class="form-control" value="{{ old('capacity') }}"
                            placeholder="Enter room capacity">
                    </div>

                    <div class="form-group mb-3">
                        <label>Classification</label>
                        <select name="classification" class='form-control'>
                            <option value="" disabled></option>
                            @foreach($types as $type)
                            <option value="{{ $type->id }}" {{ old('classification') == $type->id ? 'selected' : '' }}>
                                {{ $type->type_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label>Type</label>
                        <select name="type" class='form-control'>
                            <option value="" disabled></option>
                            <option value="room" {{ old('type') == 'room' ? 'selected' : '' }}>Room</option>
                            <option value="cottage" {{ old('type') == 'cottage' ? 'selected' : '' }}>
                                Cottage</option>
                            <option value="function hall" {{ old('type') == 'function_hall' ? 'selected' : '' }}>
                                Function Hall</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label>Price</label>
                        <input type="number" name="price" class="form-control" value="{{ old('price') }}"
                            placeholder="Enter room price">
                    </div>


                    <div class="form-group mb-3" id='image-field-container'>
                        <label>Image</label>
                        <div class="float-end">
                            <button class='btn btn-success btn-sm' type='button' id='btnAddImageField'>Add</button>
                        </div>
                        <input name="image[]" type="file" class='form-control '>
                    </div>

                    <br>

                    <div class="form-group mb-3">
                        <label>Video</label>
                        <input name="video" type="file" class='form-control '>
                    </div>

                    <div class="form-group mb-3">
                        <div class="float-end">
                            <input type="submit" class='btn btn-primary' value='Create new room'>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@push('page-scripts')
<script>
    $('#btnAddImageField').click(function () {
        $('#image-field-container').append(`<input name="image[]" type="file" class='form-control  mt-1'>`);
    });
</script>
@endpush
@endsection
