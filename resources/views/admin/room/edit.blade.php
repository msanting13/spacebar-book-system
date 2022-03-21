@extends('admin.layouts.app')
@section('page-title', 'Edit room')
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
                <form action="{{ route('admin.room.update', $room->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-5">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $room->name) }}"
                            placeholder="Enter room name">
                    </div>

                    <div class="form-group mb-5">
                        <label>Description</label>
                        <textarea name="description" class='form-control' cols="30" rows="10"
                            placeholder="Enter description">{{ old('description', $room->description) }}</textarea>
                    </div>

                    <div class="form-group mb-5">
                        <label>Capacity</label>
                        <input type="number" name="capacity" class="form-control"
                            value="{{ old('capacity', $room->capacity) }}" placeholder="Enter room capacity">
                    </div>

                    <div class="form-group mb-5">
                        <label>Classification</label>
                        <select name="classification" class='form-control'>
                            <option value="" disabled></option>
                            @foreach($types as $type)
                            @if(old('classification'))
                            <option value="{{ $type->id }}" {{ old('classification') == $type->id ? 'selected' : '' }}>
                                {{ $type->type_name }}</option>
                            @else
                            <option value="{{ $type->id }}" {{ $room->room_type_id == $type->id ? 'selected' : '' }}>
                                {{ $type->type_name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-5">
                        <label>Type</label>
                        <select name="type" class='form-control'>
                            <option value="" disabled></option>
                            @if(old('type'))
                            <option value="room" {{ old('type') == $type->id ? 'selected' : '' }}>Room
                            </option>
                            <option value="cottage" {{ old('type') == $type->id ? 'selected' : '' }}>Cottage
                            </option>
                            <option value="function hall" {{ old('type') == $type->id ? 'selected' : '' }}>Function
                                Hall</option>
                            @else
                            <option value="room" {{ $room->type === 'room' ? 'selected' : '' }}>Room
                            </option>
                            <option value="cottage" {{ $room->type === 'cottage' ? 'selected' : '' }}>Cottage
                            </option>
                            <option value="function hall" {{ $room->type === 'function hall' ? 'selected' : '' }}>
                                Function Hall</option>
                            @endif
                        </select>
                    </div>

                    <div class="form-group mb-5">
                        <label>Price</label>
                        <input type="number" name="price" class="form-control" value="{{ old('price', $room->price) }}"
                            placeholder="Enter room price">
                    </div>

                    <div class="form-group mb-5">
                        <label>Image</label>
                        <input name="image" type="file" class='form-control form-control-lg'>
                    </div>

                    <div class="form-group mb-5">
                        <div class="float-end">
                            <input type="submit" class='btn btn-success' value='Update room'>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
