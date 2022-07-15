<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
<form method="GET" action="/test">
<div class="container-md">
  <div class="row align-content-center">

    <div class="row mb-3">
      <label for="inputUsername3" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
      <input type="text" name="username" class="form-control" id="inputUsername3">
      </div>
    </div>

    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
      </div>
    </div>

    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
      </div>
    </div>

    
    <button type="submit" class="btn btn-primary">Sign Up</button>
    <small class="d-block text-align-center mt-3"><a href="/test" class="signIn">Belum punya akun?</a></small>
  </div>
</div>
</form>
</body>
</html>