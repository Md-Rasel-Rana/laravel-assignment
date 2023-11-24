<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Form Example</title>
  <!-- Bootstrap CSS CDN -->

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="{{route('store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter your name">
        </div>
       
        <div class="form-group">
          <label for="inputRoll">Roll</label>
          <input type="text" class="form-control" id="inputRoll" name="roll" placeholder="Enter roll roll">
        </div>
        <div class="form-group">
            <label for="address"> Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
          </div>
        <div class="form-group">
          <label for="inputBatch">Batch</label>
          <input type="text" class="form-control" id="inputBatch" name="batch" placeholder="Enter batch">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <a class="btn btn-warning" href="/">back</a>
    </div>
  </div>
</div>

<!-- Bootstrap JS CDN (Optional, for certain Bootstrap components that require JavaScript) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
