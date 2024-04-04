@extends('layout.parent')
@section('tittle','Add')

@section('main')
    <h3 class="d-flex justify-content-center">Add</h3>
    <form action="{{ route('flower.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row mb-3">
                <label for="flowerNumber" class="col-sm-2 col-form-label">Tên</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="firstname" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="flowerNumber" class="col-sm-2 col-form-label">Họ</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="lastname" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ipEmail" class="col-sm-2 col-form-label">Ngày sinh</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="date" id="content" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="flowerNumber" class="col-sm-2 col-form-label">Số địện thoại phụ huynh</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone" required>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Thêm</button>
                <a href="{{ route('flower.index') }}" class="btn btn-secondary" style="margin-left: 10px">Đóng</a>
            </div>
        </div>
    </form>
@endsection
