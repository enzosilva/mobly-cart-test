<?php

namespace App\Http\Controllers;

use App\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (session()->has('checkout.products')) {
            foreach (session()->get('checkout.products') as $key => $product) {
                if ($product['product_id'] == $request->input('product_id')) {
                    if (session()->has("checkout.products.{$key}.item_qty")) {
                        session()->put("checkout.products.{$key}.item_qty", ($product['item_qty'] + $request->input('item_qty')));

                        session()->flash("message", "Produto adicionado com sucesso!");
                        return back();
                    }

                    continue;
                }
            }
        }

        session()->push('checkout.products', $request->only(['product_id', 'name', 'price', 'item_qty']));

        session()->flash("message", "Produto adicionado com sucesso!");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        dd(session());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
