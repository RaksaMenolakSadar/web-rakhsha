<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Login</title>
  </head>
  <body>

<form method="post" action="{{route('simpanuser.store')}}">
    @csrf

<div class="container-md">
  <div class="mb-4">
  <label for="formGroupExampleInput"  class="form-label">Username</label>
  <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Masukkan username anda">
</div>

<div class="mb-4">
  <label for="formGroupExampleInput"  class="form-label">Email</label>
  <input type="text" class="form-control" name="email" id="formGroupExampleInput" placeholder="Masukkan email anda">
</div>

<div class="mb-4">
  <label for="formGroupExampleInput2" class="form-label">Password</label>
  <input type="password" class="form-control" name="password" id="formGroupExampleInput2" placeholder="Masukkan password anda" width="300px">
</div>

<div>
  <button type="submit" class="btn btn-danger"><a href="CRUDUser">Submit</a></button> 
</div>
<div class="mb-3">
  <a href="{{ url('/CRUDUser')}}"></a>
</div>

</form>
<small class="d-block text-align-center mt-3"><a href="/signIn" class="signIn">Belum punya akun?</a></small>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>