@extends('layout.parent')

@section('tittle','Add Room')
@section('main')
    <h3 class="d-flex justify-content-center">Add</h3>
    <form action="{{ route('room.store') }}" method="POST">
        @csrf
        <div class="container">
            <div class="row mb-3">
                <label for="roomNumber" class="col-sm-2 col-form-label">Room Number</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="roomNumber" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ipEmail" class="col-sm-2 col-form-label">Room Type</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="roomType">
                        <option value="standard">standard</option>
                        <option value="deluxe">deluxe</option>
                        <option value="suite">suite</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ipEmail" class="col-sm-2 col-form-label">Availability</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="roomAva">
                        <option value="availability">availability</option>
                        <option value="occupied">occupied</option>
                        <option value="under maintenance">under maintenance</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Add</button>
                <a href="{{ route('room.index') }}" class="btn btn-secondary" style="margin-left: 10px">Close</a>
            </div>
        </div>
    </form>
@endsection
