@extends('admin.layouts.app')
@section('page-title', 'Edit room')
@section('content')
@include('templates.success')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit room</h4>
                @if($errors->any())
                    <div class='alert alert-danger'>
                        @foreach($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('admin.room.update', $room->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Room name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $room->name) }}" placeholder="Enter room name">
                    </div>

                    <div class="form-group">
                        <label>Room description</label>
                        <textarea name="description" class='form-control' cols="30" rows="10" placeholder="Enter description">{{ old('description', $room->description) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Room capacity</label>
                        <input type="number" name="capacity" class="form-control" value="{{ old('capacity', $room->capacity) }}" placeholder="Enter room capacity">
                    </div>

                    <div class="form-group">
                        <label >Room type</label>
                        <select name="room_type" class='form-control'>
                            <option value="" disabled></option>
                            @foreach($types as $type)
                                @if(old('room_type'))
                                    <option value="{{ $type->id }}" {{ old('room_type') == $type->id ? 'selected' : '' }}>{{ $type->type_name }}</option>
                                    @else
                                    <option value="{{ $type->id }}" {{ $room->room_type_id == $type->id ? 'selected' : '' }}>{{ $type->type_name }}</option>
                                @endif
                            @endforeach
                        </select>                    
                    </div>

                    <div class="form-group">
                        <label>Room price</label>
                        <input type="number" name="price" class="form-control" value="{{ old('price', $room->price) }}" placeholder="Enter room price">
                    </div>

                    <div class="form-group">
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
