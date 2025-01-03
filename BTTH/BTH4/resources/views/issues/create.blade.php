<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-
GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
    <title>BTTH-04</title>
</head>

<body>
    <a href="{{ route('issues.index') }}" class="btn btn-secondary" style="margin: 0 50px">Back</a>
    <h1 style="margin: 0 50px">New Issue</h1>
    <form action="{{ route('issues.store') }}" method="POST" style="margin: 50px 50px">
        @csrf

        <div class="mb-3">
            <label for="computer_id" class="form-label">Computer Name</label>
            <select class="form-control" id="computer_id" name="computer_id">
                @foreach($computers as $computer)
                <option value="{{ $computer->id }}">{{ $computer->computer_name }}</option>
                @endforeach
            </select>
            @error('computer_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="reported_by" class="form-label">Reported Person</label>
            <input type="text" class="form-control" id="reported_by" name="reported_by">
        </div>

        <div class="mb-3">
            <label for="reported_date" class="form-label">Reported Date</label>
            <input type="date" class="form-control" id="reported_date" name="reported_date">
            @error('reported_date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description">
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="urgency" class="form-label">Urgency</label>
            <select class="form-control" id="urgency" name="urgency">
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>
            @error('urgency')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status">
                <option value="Open">Open</option>
                <option value="In Progress">In Progress</option>
                <option value="Resolved">Resolved</option>
            </select>
            @error('status')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>

</body>