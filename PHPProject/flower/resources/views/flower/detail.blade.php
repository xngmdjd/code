@extends('layout.parent')
@section('tittle','Add')

@section('main')
    <h3 class="d-flex justify-content-center">Detail</h3>
        <div class="container">
            <div class="d-flex justify-content-center mb-lg-3">
                <img src="{{asset('uploads/image/'.$flower->image_url)}}"
                     width="500px" height="500px" alt="'{{ $flower->name }}'">
            </div>
            <div class="row mb-3">
                <label for="flowerNumber" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{ $flower->name }}" disabled>
                </div>
            </div>
            <div class="row mb-3">
                <label for="flowerNumber" class="col-sm-2 col-form-label">Location</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{ $region }}" disabled>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ipEmail" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="description" id="content" value="{{ $flower->description }}" disabled>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('flower.index') }}" class="btn btn-secondary" style="margin-left: 10px">Close</a>
            </div>
        </div>
@endsection
