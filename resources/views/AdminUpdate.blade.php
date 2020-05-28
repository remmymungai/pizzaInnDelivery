<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make necessary changes</title>
</head>
<body>
   
    <div class="container">
        <div class="jumbotron">
        <form action="/updateimage/{{$admins->id}}"   method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="hidden" name="id" id="id" value="{{$admins->id}}">

            <div class="form-group">
                <label>Food Name</label>
                <input type="text" name="Food_Name" class="form-control" value="{{$admins->Food_Name}}">
            </div>

            <div class="form-group">
                <label>Food Price</label>
                <input type="number" name="Food_Price" class="form-control" value="{{$admins->Food_Price}}">
            </div>

            <label>Image</label>
                <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="Food_Image" class="custom-file-input" value="{{$admins->Food_Image}}">
                    <label class="custom-file-label">Choose File</label>
                </div>
            </div>
            <br><br>
            <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
        </form>
    </div>
</div>
</body>
</html>