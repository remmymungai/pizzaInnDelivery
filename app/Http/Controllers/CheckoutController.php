<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'phone'=> 'required|min:8'
        ]);
        $cart = Cart::getContent();

        $name = $request->fname." ".$request->lname;
        $total=Cart::getTotal();


        //Create a new order
        $order = Order::create([
            'custName' =>  $name,
            'custAddress' => $request->address,
            'custUnit' => $request->unit,
            'custRoad' => $request->road,
            'custPhone' => $request->phone,
            'custEmail' => $request->email,
            'total' => $total,
            'status' => 'request',
        ]);

        //Create Individual OIrder Items
        foreach ($cart as $item) {
            $OrderProduct=OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->quantity,
                'price' => $item->price,
            ]);
        }

        Cart::clear();
        return view('shop.thanks')->with('order_id',$order->id);

    }
}
