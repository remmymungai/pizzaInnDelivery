<?php

use Darryldecode\Cart;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = \Cart::getContent();

        return view('shop.cart')->with('cartItems', $cartItems);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Add Items To cart
        $pId = $request->pId;
        $pName = $request->pName;
        $pPrice = $request->pPrice;
        $toppings= $request->session()->get('toppings');
      
            \Cart::add(array(
                'id' => $pId,
                'name' => $pName,
                'price' => $pPrice,
                'quantity' => '1',
                'attributes' => array(),
                'associatedModel' => 'App\meals'
            ));
      
        



        return redirect()->route('menu.landing')->with('status', 'Item added to Cart!');
    }
    public function remove(Request $request)
    {
        $cId = $request->id;

        \Cart::remove($cId);

        return redirect()->route('cart.index')->with('status', 'Item Removed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        \Cart::clear();
        return redirect()->route('cart.index')->with('status', 'Cart Cleared!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $quantity=$request->cQty;
        $id=$request->cId;
        if ($quantity<1) {
            \Cart::remove($id);
            return redirect()->route('cart.index')->with('status', 'Item Removed');

        }else if($quantity>15) {
            return back()->with('error','Too many Items!');

        }else {
            \Cart::update($id, array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $quantity
                ),
              ));
              return redirect()->route('cart.index')->with('status', 'Quantity Changed!');
        }
    }
}
