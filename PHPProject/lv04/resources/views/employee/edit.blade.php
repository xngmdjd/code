<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Add Employee</title>
</head>
<body>
<form action="{{ route('employee.update', $employee) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="container">
        <h3 class="d-flex justify-content-center ">Edit Employee</h3>
        <div class="row mb-3">
            <label for="ipName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ipName" value="{{ $employee->name }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="ipEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ipEmail" value="{{ $employee->email }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="ipAddress" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ipAddress" value="{{ $employee->address }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="ipPhone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ipPhone" value="{{ $employee->phone }}">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editConfirmationModal">Edit</button>
            <a type="button" data-bs-toggle="modal" data-bs-target="#{{ $employee->id }}"></a>

            <!-- Modal -->
            <div class="modal fade" id="editConfirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Edit</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to edit this employee?
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('employee.index') }}" class="btn btn-secondary" style="margin-left: 10px">Close</a>
        </div>
    </div>
    <select>
        <option>1</option>
        <option>1</option>
        <option>1</option>
        <option>1</option>

    </select>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
