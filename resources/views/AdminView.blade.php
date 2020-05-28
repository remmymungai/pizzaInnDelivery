<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Menu</title>
</head>
<body>
<div class="container">
<div class="jumbotron">
    <h1>UPDATE PIZZA MENU</h1>
    <a href="/admin" class="btn btn-primary">Add Pizza Type</a>

    <table class="table table-stripped table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">FOOD NAME</th>
            <th scope="col">FOOD PRICE</th>
            <th scope="col">FOOD IMAGE</th>
            <th scope="col">EDIT</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
          
          <tr>
            <th >{{$admin->id}}</th>
            <td>{{$admin->Food_Name}}</td>
            <td>{{$admin->Food_Price}}</td>
          <td><img src="{{ asset('uploads/foods/'.$admin->Food_Image)}} " width="100px;" height="100px;" alt="Image"></td>
            <td> <a href="/editimage/{{$admin->id}} " class="btn btn-success">EDIT</a></th>
          </tr>
          <tr>
            @endforeach
        </tbody>
      </table>
</div>
</div>


</div>
</body>
</html>