@extends('layout.parent')
@section('tittle','Thông tin')

@section('main')
    <h3 class="d-flex justify-content-center">Danh sách học sinh</h3>
    <div class="d-flex justify-content-end">
        <a href="{{ route('student.create') }}">
            <button type="button" class="btn btn-lg text-bg-success p-3">
                <i class="bi bi-plus-circle-fill"></i>
                Thêm học sinh
            </button>
        </a>
    </div>
    <table class="table table-striped">
        <thead {{--class="table-dark"--}}>
        <tr>
            <th scope="col">Mã học sinh</th>
            <th scope="col" colspan="2">Họ và Tên</th>
            <th scope="col">Ngày sinh</th>
            <th scope="col">Số điện thoại phụ huynh</th>
            <th scope="col">Cấp lớp</th>
            <th scope="col">Phòng học</th>
            <th scope="col" colspan="2" class="text-center">Hành động</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($students as $student)
            <tr>
                <th scope="row">{{$student->id}}</th>
                <th scope="row">{{$student->first_name}}</th>
                <th scope="row">{{$student->last_name}}</th>
                <th scope="row">{{$student->date_of_birth}}</th>
                <th scope="row">{{$student->parent_phone}}</th>
                <th scope="row">{{$student->grade_level}}</th>
                <td>{{$student->room_number}}</td>
                <td>
                    <a href="{{ route('student.edit',  $student->id )}}">
                        <i class="bi bi-pencil-fill" style="color: gold"></i>
                    </a>
                </td>
                <td>
                    <a type="button" data-bs-toggle="modal" data-bs-target="#delete{{ $student->id }}">
                        <i class="bi bi-trash-fill" style="color: #ef4444"></i>
                    </a>
                    <div class="modal fade" id="delete{{ $student->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Deleted</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this student?
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('student.destroy', $student->id) }}" method="POST">
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
    {{$students->links()}}
@endsection
