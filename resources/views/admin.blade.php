<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Items to Menu</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
        <form action="{{route('addimage')}}"   method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
                <label>Food Name</label>
                <input type="text" name="Food_Name" class="form-control" placeholder="Enter Food Name">
            </div>

            <div class="form-group">
                <label>Food Price</label>
                <input type="text" name="Food_Price" class="form-control" placeholder="Enter Price in Kenyan Shillings">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="Food_Image" class="custom-file-input">
                    <label class="custom-file-label">Choose File</label>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Save Data</button>
        </form>
    </div>
</div>
</body>
</html>