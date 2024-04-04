@extends('layout.parent')

@section('tittle', 'Flower')

@section('main')
    <h3>List of flower
        <a href="{{ route('flower.create')}}" class="btn btn-success float-end" role="button" aria-disabled="true">
            <i class="bi bi-plus-circle-fill"></i>
            Add New Flower
        </a>
    </h3>
    <table class="table table-striped">
        <thead {{--class="table-dark"--}}>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col" colspan="3" class="text-center">Action</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($flowers as $flower)
            <tr>
                <th scope="row">{{$flower->name}}</th>
                <td><img src="{{asset('uploads/image/'.$flower->image_url)}}"
                         width="100px" height="100px">
                </td>
                <td>{{$flower->description}}</td>
                <td>
                    <a type="button" href="{{ route('flower.show',  $flower->id )}}" {{--data-bs-toggle="modal" data-bs-target="#show{{ $flowerId }}"--}}>
                        <i class="bi bi-eye-fill"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ route('flower.edit',  $flower->id )}}">
                        <i class="bi bi-pencil-fill" style="color: gold"></i>
                    </a>
                </td>
                <td>
                    <a type="button" data-bs-toggle="modal" data-bs-target="#delete">
                        <i class="bi bi-trash-fill" style="color: #ef4444"></i>
                    </a>
                    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Deleted</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this flower?
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('flower.destroy', $flower->id) }}" method="POST">
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
    {{$flowers->links()}}
@endsection
