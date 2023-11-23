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
      <form action="{{ route('store.form') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="inputname">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputname" name="name" value="{{ old('name') }}" placeholder="Enter Name">
          @error('name')
        <div class="alert alert-danger">{{ $message  }}</div>
        @enderror
        </div>
        <div class="form-group">
          <label for="inputEmail">Email address</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" name="email" value="{{ old('email') }}" placeholder="Enter email">
          @error('email')
        <div class="alert alert-danger">{{ $message  }}</div>
        @enderror
        </div>
        <div class="form-group">
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword" name="password" value="{{ old('password') }}" placeholder="Password">
          @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS CDN (Optional, for certain Bootstrap components that require JavaScript) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
