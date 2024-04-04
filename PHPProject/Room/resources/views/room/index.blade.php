@extends('layout.parent')
@section('tittle','Information')

@section('main')
    <h3 class="d-flex justify-content-center">List of Room</h3>
    <div class="d-flex justify-content-end">
        <a href="{{ route('room.create') }}">
            <button type="button" class="btn btn-lg text-bg-success p-3">
                <i class="bi bi-plus-circle-fill"></i>
                Add New Room
            </button>
        </a>
    </div>
    <table class="table table-striped">
        <thead {{--class="table-dark"--}}>
        <tr>
            <th scope="col">Room Number</th>
            <th scope="col">Room Type</th>
            <th scope="col">Availability</th>
            <th scope="col" colspan="3" class="text-center">Action</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($rooms as $room)
            <tr>
                <th scope="row">{{$room->RoomNumber}}</th>
                <td>{{$room->RoomType}}</td>
                <td>{{$room->Availability}}</td>
                <td>
                    @php
                        $roomId = $room->id;
                    @endphp

                    <a type="button" href="{{ route('room.show',  $room->id )}}" {{--data-bs-toggle="modal" data-bs-target="#show{{ $roomId }}"--}}>
                        <i class="bi bi-eye-fill"></i>
                    </a>
{{--                    <div class="modal fade" id="show{{ $roomId }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}

{{--                        <div class="modal-dialog">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-header">--}}
{{--                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Display information</h1>--}}
{{--                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <label for="ipName" class="col-sm-2 col-form-label">Name</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <input type="text" class="form-control" name="ipName" value="{{ $room->name }}" disabled >--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <label for="ipEmail" class="col-sm-2 col-form-label">Email</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <input type="text" class="form-control" name="ipEmail" value="{{ $room->email }}" disabled>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <label for="ipAddress" class="col-sm-2 col-form-label">Address</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <input type="text" class="form-control" name="ipAddress" value="{{ $room->address }}" disabled>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row mb-3">--}}
{{--                                        <label for="ipPhone" class="col-sm-2 col-form-label">Phone</label>--}}
{{--                                        <div class="col-sm-10">--}}
{{--                                            <input type="text" class="form-control" name="ipPhone" value="{{ $room->phone }}" disabled>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </td>
                <td>
                    <a href="{{ route('room.edit',  $room->id )}}">
                        <i class="bi bi-pencil-fill" style="color: gold"></i>
                    </a>
                </td>
                <td>
                    <a type="button" data-bs-toggle="modal" data-bs-target="#delete{{ $roomId }}">
                        <i class="bi bi-trash-fill" style="color: #ef4444"></i>
                    </a>
                    <div class="modal fade" id="delete{{ $roomId }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Deleted</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this room?
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('room.destroy', $room->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$rooms->links()}}
@endsection
