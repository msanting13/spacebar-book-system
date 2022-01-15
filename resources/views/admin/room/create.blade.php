@extends('admin.layouts.app')
@section('page-title', 'Add new room')
@section('content')
@include('templates.success')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @if($errors->any())
                    <div class='alert alert-danger'>
                        @foreach($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('admin.room.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-5">
                        <label>Room name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Enter room name">
                    </div>

                    <div class="form-group">
                        <label>Room description</label>
                        <textarea name="description" class='form-control' cols="30" rows="10" placeholder="Enter description">{{ old('description') }}</textarea>
                    </div>

                    <div class="form-group mb-5">
                        <label>Room capacity</label>
                        <input type="number" name="capacity" class="form-control" value="{{ old('capacity') }}" placeholder="Enter room capacity">
                    </div>

                    <div class="form-group mb-5">
                        <label >Room type</label>
                        <select name="room_type" class='form-control'>
                            <option value="" disabled></option>
                            @foreach($types as $type)
                                <option value="{{ $type->id }}" {{ old('room_type') == $type->id ? 'selected' : '' }}>{{ $type->type_name }}</option>
                            @endforeach
                        </select>                    
                    </div>

                    <div class="form-group mb-5">
                        <label>Room price</label>
                        <input type="number" name="price" class="form-control" value="{{ old('price') }}" placeholder="Enter room price">
                    </div>

                    <div class="form-group mb-5">
                        <div class="float-end">
                            <input type="submit" class='btn btn-primary' value='Create new room'>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
