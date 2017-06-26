<?php
namespace App\Facade\Handle;

use Session;
use App\Models\Product;

class StoreCart
{

    public function add($id)
    {
        $cart = Session::has('cart') ? Session::get('cart') : array();
        $product = Product::find($id);
        if (!empty($cart)) {
            if (isset($cart[$id])) {
                $cart[$id]['qty']++;
            } else {
                $cart[$id]['qty'] = 1;
                $cart[$id]['price'] = $product->price;
                $cart[$id]['name'] = $product->name;
                $cart[$id]['image'] = $product->image;
            }
        } else {
                $cart[$id]['qty'] = 1;
                $cart[$id]['price'] = $product->price;
                $cart[$id]['name'] = $product->name;
                $cart[$id]['image'] = $product->image;
        };

        Session::forget('cart');
        Session::put('cart', $cart);
    }

    public function removeAllProduct()
    {
        if (Session::exists('cart')) {
            Session::forget('cart');
        }
    }

    public function removeProduct($id)
    {
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            if (isset($cart[$id])) {
                unset($cart[$id]);
            }
            Session::forget('cart');
            Session::put('cart', $cart);
        }
    }

    public function subtotal()
    {
        $total = 0;
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            foreach ($cart as $item) {
                $total += $item['qty'] * $item['price'];
            }
        }

        return $total;
    }
}
