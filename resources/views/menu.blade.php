@extends('layouts.main')
@section('content')
        <!-- <div class="navbar">
            <div class="navbar_logo_box">
                <img src="{{ asset('images/pizzainn_logo.jpg') }}" alt="" class="navbar_logo">
            </div>
        </div>
        <div class="navbar_navigation">
            <ul class="navbar_list">
                <li class="navbar_list_item"><a href="#" class="navbar_links">Home</a></li>
                <li class="navbar_list_item"><a href="#" class="navbar_links">Menu</a></li>
                <li class="navbar_list_item"><a href="#" class="navbar_links">About Us</a></li>
                <li class="navbar_list_item"><a href="#" class="navbar_links">Contact Us</a></li>
                <li class="navbar_list_item"><a href="#" class="btn btn_order">Order Now</a></li>

            </ul>
           
        </div> -->

        <div class="menu">
            <div class="menu_heading">
                <h1 class="menu_title">Menu</h1>
            </div>
            <ul class="menu_options">
                <li class="menu_meals"><button class="btn_option" id="classic")">Classic</button></li>
                <li class="menu_meals"><button class="btn_option" id="deluxe">Deluxe Pizzas</button></li>
                <li class="menu_meals"><button class="btn_option" id="supreme"> Supreme Pizzas</button></li>
                <li class="menu_meals"><button class="btn_option" id="extras">Extras</button></li>
                <li class="menu_meals"><button class="btn_option" id="drinks">Drinks</button></li>
            </ul>
            <ul class="menu_list">
                @foreach ($data['menu'] as $menu)
                <li class="menu_list_item {{ $menu->meal_type}}">
                    <div class="menu_item row">
                            <div class="col-1-of-2 ">
                                    <div class="menu_item_image">
                                            <img src="{{ asset('uploads/foods/'.$menu->Food_Image) }} " alt="" class="menu_item_image">
                                    </div>
                            </div>
                            <div class="col-1-of-2">
                                   <h2 class="menu_item_name">{{ $menu -> Food_Name}}</h2>
                                   <h2 class="menu_item_price">{{ $menu -> Food_Price}} Kshs</h2>
                                   <p class=" menu_item_description">
                                        {{ $menu -> food_description}}
                                   </p>
                                    <form action="{{ route('cart.store') }}" class="menu_order-form">
                                        {{csrf_field()}}
                                        <input type="text" hidden name="pId" value="{{ $menu->id}}">
                                        <input type="text" hidden name="pName" value="{{ $menu->Food_Name}}">
                                        <input type="text" hidden name="pPrice" value="{{ $menu->Food_Price}}">
                                        <div class="menu_order-toppings">
                                        <span class="menu_item_heading">toppings</span> 
                                            @foreach ($data['toppings'] as $topping)
                                            <div class="menu_topping">
                                                <input type="checkbox" class="menu_topping-input" name="{{$topping -> topping_name}}" value="{{$topping->topping_price}}">
                                                <label for="{{$topping->topping_name}}" class="menu_topping-label">{{$topping->topping_name}} - {{$topping->topping_price}}Ksh</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    <button href="#" type="submit" class="btn_customize_order"> order</button>
                                    </form>
                                   
                                   
                            </div>
                     </div>
                </li>
                @endforeach
            </ul>
            <a href="#" class="btn_customize_order"> proceed to checkout</a>
        </div>
@endsection