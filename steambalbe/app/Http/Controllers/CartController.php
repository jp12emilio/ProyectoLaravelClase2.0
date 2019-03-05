<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \Cart;
use Validator;
use App\Games;
use App\Orders;
use App\Register;


class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart');
    }
    public function paypal()
    {
        return view('paypal');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('cart')->withSuccessMessage('El producto ya esta en la cesta');
        }

        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Games');
        return redirect('cart')->withSuccessMessage('Producto añadido');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    /*public function update(Request $request, $id)
    {
        // Validation on max quantity
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

         if ($validator->fails()) {
            session()->flash('error_message', 'Quantity must be between 1 and 5.');
            return response()->json(['success' => false]);
         }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');

        return response()->json(['success' => true]);

    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect('cart')->withSuccessMessage('Producto eliminado');
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function emptyCart()
    {
        Cart::destroy();
        return redirect('cart')->withSuccessMessage('Cesta sin productos');
    }

    /**
     * Switch item from shopping cart to wishlist.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function proceedToCheckout($id)
    {
        $item = Cart::get($id);
        $total = Cart::total();
        $cantidad = $item->qty;
        $usuario = 1;
        $now = new \DateTime();

        $Orden = new Orders();
        $Orden->id_user = $usuario;
        $Orden->totalprice = $total;
        $Orden->date = $now;
        $Orden->save();

        $Registro = new Register();
        $Registro->id_order = $Orden->id;
        $Registro->id_game = $item->id;
        $Registro->id = $usuario;
        $Registro->quantity = $cantidad;
        $Registro->save();
        return redirect('paypal');
    }
}
