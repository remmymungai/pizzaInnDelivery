@extends('layouts.adminApp')
@section('content')
    <div class="container">
    <div class="heading_box">
            <h1 class="heading">Edit meal</h1>
        </div>
        <div class="form">
        <form action="/updateimage/{{$data['admins']->id}}"   method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="hidden" name="id" id="id" value="{{$data['admins']->id}}">

            <div class="form-group">
                <label>Food Name</label>
                <input type="text" name="Food_Name" class="form-control" value="{{$data['admins']->Food_Name}}">
            </div>

            <div class="form-group">
                <label>Food Price</label>
                <input type="number" name="Food_Price" class="form-control" value="{{$data['admins']->Food_Price}}">
            </div>
            <div class="form-group">
                <label>Food  Description</label>
                <input type="text" name="food_description" class="form-control" value="{{$data['admins']->food_description}}">
            </div>
            <div class="form-group">
                <label>Meal  Type</label>
                <select name="meal_type">
                    @foreach($data['meals'] as $meal)
                        <option value="{{ $meal->menu_type}}">{{$meal->menu_type}}</option>
                    @endforeach

                </select>
            </div>

            <label>Image</label>
                <div class="form-group">
                <div class="custom-file">
                    <label class="custom-file-label">Choose File</label>
                    <input type="file" name="Food_Image" class="custom-file-input" value="{{$data['admins']->Food_Image}}">
                </div>
            </div>
            <br><br>
            <button type="submit" name="submit" class="btn_save">UPDATE</button>
        </form>
    </div>
</div>
@endsection