@extends('layout.parent')

@section('tittle', 'Detail')
@section('name','Detail')
@section('main')
    <h3 class="d-flex justify-content-center">Detail</h3>
    <div class="modal-body">
        <div class="row mb-3">
            <label for="ipName" class="col-sm-2 col-form-label">Room Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="roomNumber" value="{{ $room->RoomNumber }}" disabled >
            </div>
        </div>
        <div class="row mb-3">
            <label for="ipEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="roomType" value="{{ $room->RoomType }}" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ipAddress" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="roomAva" value="{{ $room->Availability }}" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <a href="{{ route('room.index')}}" style="text-decoration: none">
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-lg text-bg-danger p-3">
                        Back
                    </button>
                </div>
            </a>
        </div>
    </div>
@endsection
