<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>header here</h1>
    <div>
        <a class="btn btn-info " href="{{ route("create") }}">Add data</a>
    </div>
  


<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Roll</th>
        <th>Address</th>
        <th>Batch</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($user as $row )
      <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->roll }}</td>
        <td>{{ $row->address }}</td>
        <td>{{ $row->batch }}</td>
        <td> <a class="btn btn-warning" href="{{ route('delete',$row->id) }}">delete</a></td>
        <td> <a class="btn btn-danger" href="{{ route('edit',$row->id) }}">edit</a></td>
       
      </tr>
      @endforeach
     
    </tbody>
  </table>
</body>
</html>