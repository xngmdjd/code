@extends('layout.parent')

@section('tittle','Edit Room')
@section('main')
    <form action="{{ route('room.update',$room) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
            <h3 class="d-flex justify-content-center ">Add room</h3>
            <div class="row mb-3">
                <label for="roomNumber" class="col-sm-2 col-form-label">Room Number</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="roomNumber" value=" {{ $room->RoomNumber }} ">
                </div>
            </div>
            <div class="row mb-3">
                <label for="ipEmail" class="col-sm-2 col-form-label">Room Type</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="roomType">
                        <option value="standard" {{($room->RoomType=="standard")?'selected':''}}>standard</option>
                        <option value="deluxe" {{($room->RoomType=="deluxe")?'selected':''}}>deluxe</option>
                        <option value="suite" {{($room->RoomType=="suite")?'selected':''}}>suite</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ipEmail" class="col-sm-2 col-form-label">Availability</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="roomAva" {{ $room->Availability}}>
                        <option value="availability" {{($room->Availability=="availability")?'selected':''}}>availability</option>
                        <option value="occupied" {{($room->Availability=="occupied")?'selected':''}}>occupied</option>
                        <option value="under maintenance" {{($room->Availability=="under maintenance")?'selected':''}}>under maintenance</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Edit</button>
                <a href="{{ route('room.index') }}" class="btn btn-secondary" style="margin-left: 10px">Close</a>
            </div>
        </div>
    </form>
@endsection
