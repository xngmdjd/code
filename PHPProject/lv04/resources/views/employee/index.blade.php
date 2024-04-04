<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body style="margin: 50px">
<header>
    <div class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" style="background: midnightblue; padding: 10px">
            <div class="navbar-brand" style="color: white">Manage Employee</div>
            <a href="{{ route('employee.create') }}">
                <button type="button" class="btn btn-lg text-bg-success p-3">
                    <i class="bi bi-plus-circle-fill"></i>
                    Add New Employees
                </button>
            </a>

        </div>
    </div>
</header>

<main>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col" colspan="3" class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <th scope="row">{{$employee->name}}</th>
                <td>{{$employee->email}}</td>
                <td>{{$employee->address}}</td>
                <td>{{$employee->phone}}</td>
                <td>
                    @php
                        $employeeId = $employee->id;
                    @endphp

                    <a type="button" data-bs-toggle="modal" data-bs-target="#show{{ $employeeId }}">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                    <div class="modal fade" id="show{{ $employeeId }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
{{--                    <a type="button" data-bs-toggle="modal" data-bs-target="#show {{ $employee->id }}">--}}
{{--                        <i class="bi bi-eye-fill"></i>--}}
{{--                    </a>--}}
{{--                    <div class="modal fade" id="show {{ $employee->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Display information</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row mb-3">
                                        <label for="ipName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="ipName" value="{{ $employee->name }}" disabled >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="ipEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="ipEmail" value="{{ $employee->email }}" disabled>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="ipAddress" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="ipAddress" value="{{ $employee->address }}" disabled>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="ipPhone" class="col-sm-2 col-form-label">Phone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="ipPhone" value="{{ $employee->phone }}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <a href="{{ route('employee.edit',  $employee->id )}}">
                        <i class="bi bi-pencil-fill" style="color: gold"></i>
                    </a>
                </td>
                <td>
                    <a type="button" data-bs-toggle="modal" data-bs-target="#delete{{ $employeeId }}">
                        <i class="bi bi-trash-fill" style="color: #ef4444"></i>
                    </a>
                    <div class="modal fade" id="delete{{ $employeeId }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Deleted</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this employee?
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('employee.destroy', $employee->id) }}" method="POST">
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
    {{$employees->links()}}
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
