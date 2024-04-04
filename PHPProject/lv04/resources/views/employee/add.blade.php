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
<form action="{{ route('employee.store') }}" method="POST">
    @csrf
    <div class="container">
        <h3 class="d-flex justify-content-center ">Add Employee</h3>
        <div class="row mb-3">
            <label for="ipName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ipName">
            </div>
        </div>
        <div class="row mb-3">
            <label for="ipEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ipEmail">
            </div>
        </div>
        <div class="row mb-3">
            <label for="ipAddress" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
{{--                <select name="ipAddress" class="form-select" aria-label="Default select example">--}}
{{--                    @foreach ($employees as $employee)--}}
{{--                        <option value="{{ $employee->id }}">{{ $employee->address }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
                <input type="text" class="form-control" name="ipAddress">
            </div>
        </div>
        <div class="row mb-3">
            <label for="ipPhone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ipPhone">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Add</button>
            <a href="{{ route('employee.index') }}" class="btn btn-secondary" style="margin-left: 10px">Close</a>
        </div>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
