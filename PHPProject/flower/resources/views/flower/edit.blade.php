@extends('layout.parent')
@section('tittle','Edit')

@section('main')
    <h3 class="d-flex justify-content-center">Edit</h3>
    <form action="{{ route('flower.update', $flower->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row mb-3">
                <label for="flowerNumber" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value=" {{ $flower->name }}"  required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ipEmail" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" name="description" id="content" required>{{ $flower->description }}</textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="flowerNumber" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="location" value="{{$region}} "  required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="ipEmail" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="file" class="form-control" id="inputGroupFile04" name="image" value=" {{ $flower->image_url }}" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Edit</button>
                <a href="{{ route('flower.index') }}" class="btn btn-secondary" style="margin-left: 10px">Close</a>
            </div>
        </div>
    </div>
    </form>
@endsection
