@extends('layouts.adminApp')
@section('content')
<div class="container">

    <div class="heading_box">
      <h1 class=heading>Manage pizza menu</h1>
    </div>
    <table class="pizza_table">
        <thead class="pizza_table-head">
          <tr class="pizza_table-row">
            <th scope="col">ID</th>
            <th scope="col">FOOD NAME</th>
            <th scope="col">FOOD PRICE</th>
            <th scope="col">FOOD DESCRIPTION</th>
            <th scope="col">MEAL TYPE</th>
            <th scope="col">FOOD IMAGE</th>
            <th scope="col">EDIT</th>
          </tr>
        </thead>
        <tbody class="pizza_table-body">
            @foreach ($data['admins'] as $admin)
          
          <tr class="pizza_table-row">
            <td class="pizza_table-data">{{$admin->id}}</td>
            <td class="pizza_table-data">{{$admin->Food_Name}}</td>
            <td class="pizza_table-data">{{$admin->Food_Price}}</td>
            <td class="pizza_table-data">{{$admin->food_description}}</td>
            <td class="pizza_table-data">{{$admin->meal_type}}</td>
          <td class="pizza_table-data"><img src="{{ asset('uploads/foods/'.$admin->Food_Image)}} " class="pizza_table-data-image" width="100px;" height="100px;" alt="Image"></td>
            <td class="pizza_table-data"> <a href="/editimage/{{$admin->id}} " class="btn btn_modify">modify pizza</a></th>
          </tr>
          <tr>
            @endforeach
        </tbody>
      </table>

   
</div>

<div class="container">
  <div class="heading_box">
    <h1 class="heading">Meal Types</h1>
  </div>
  <table class="pizza_table">
        <thead class="pizza_table-head">
          <tr class="pizza_table-row">
            <th scope="col">ID</th>
            <th scope="col">MEAL TYPE</th>
        </thead>
        <tbody class="pizza_table-body">
        @foreach ($data['meal'] as $meal)
          
          <tr class="pizza_table-row">
            <td class="pizza_table-data">{{ $meal->id}}</td>
            <td class="pizza_table-data">{{ $meal->menu_type}}</td>
            
          <tr>
            @endforeach
        </tbody>
</table>
</div>      
@endsection