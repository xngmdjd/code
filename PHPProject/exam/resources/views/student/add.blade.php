@extends('layout.parent')
@section('tittle','Thêm')

@section('main')
<h3 class="d-flex justify-content-center">Thêm</h3>
<form action="{{ route('student.store') }}" method="POST">
    @csrf
    <div class="container">
        <div class="row mb-3">
            <label for="studentNumber" class="col-sm-2 col-form-label">Tên học sinh</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="firstname" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="studentNumber" class="col-sm-2 col-form-label">Họ học sinh</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="lastname" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="studentNumber" class="col-sm-2 col-form-label">Ngày sinh</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="date" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="studentNumber" class="col-sm-2 col-form-label">Số điện thoại phụ huynh</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="phone" required>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a href="{{ route('student.index') }}" class="btn btn-secondary" style="margin-left: 10px">Đóng</a>
        </div>
    </div>
</form>
@endsection
