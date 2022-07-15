<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset ('css/CRUD.css')}}">
    <title>CRUD</title>
  </head>
  <body>
<div class="card-body">
    <table class="table table-bordered">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
        </tr>

        @foreach($data as $info)
        <tr>
            <td>
                {{$info -> name}}
            </td>
            <td>
                {{$info -> email}}
            </td>
            <td>
                {{$info -> password}}
            </td>
        </tr>
        @endforeach
    </table>
    <a class="tambah">
    <ion-icon name="add-circle-outline"></ion-icon>
    </a>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>