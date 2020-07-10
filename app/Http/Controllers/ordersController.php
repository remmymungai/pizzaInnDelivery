<?php

  namespace App\Http\Controllers;
 use App\Order;
 use App\OrderProduct;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;

 
  class ordersController extends Controller
 {
     public function show(){
         $orders= DB::table('order_product')
         ->join('menus','menus.id','=','order_product.product_id')
         ->join('orders','orders.id','=', 'order_product.order_id')

          ->get()->toArray();
            //dd($orders);
          //print_r($orders);
         return view('orders')->with('orders',$orders);

      }
     public function start($id){
         //updates status in orderProduct to 1 which means the meal has been accepted
     $OrderProduct = OrderProduct::find($id);

      $OrderProduct->stat = 1;//started

      $OrderProduct->save();
     return redirect('order');
     }   
     public function complete($id){
         $OrderProduct = OrderProduct::find($id);

          $OrderProduct->stat = 2;//complete

          $OrderProduct->save();
         return redirect('order');
     }
 } 