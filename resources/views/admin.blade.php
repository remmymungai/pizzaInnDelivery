@extends('layouts.adminApp')
@section('content')
    <div class="container">
        <div class="heading_box">
            <h1 class="heading">Create a new Meal</h1>
        </div>
        <div class="form">
        <form action="{{route('addimage')}}"   method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
                <label>Food Name</label>
                <input type="text" name="Food_Name" class="form-control" placeholder="Enter Food Name">
            </div>

            <div class="form-group">
                <label>Food Price</label>
                <input type="text" name="Food_Price" class="form-control" placeholder="Enter Food Price in Kenyan Shillings">
            </div>
            <div class="form-group">
                <label>Food Description</label>
                <input type="text" name="food_description" class="form-control" placeholder="Enter the ingredients of the food">
            </div>
            <div class="form-group">
                <label>Meal  Type</label>
                <select name="meal_type">
                    @foreach($data['meals'] as $meal)
                        <option value="{{ $meal->menu_type}}">{{$meal->menu_type}}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <div class="custom-file">
                    <label >Choose File</label>
                    <input type="file" name="Food_Image" class="custom">
                </div>
            </div>
            <button type="submit" name="submit" class="btn_save">Save Data</button>
        </form>
    </div>
</div>
@endsection