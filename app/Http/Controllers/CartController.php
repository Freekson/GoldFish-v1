<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;
use App\Models\Order;

class CartController extends Controller
{
    public function cart(){
        $order = Order::find(session('orderId'));
        return view('cart', compact('order'));
    }
    public function ordering(){
        return view('ordering');
    }
    public function cartAdd($productId)
{
    $orderId = session('orderId');
    if (!is_null($orderId)) {
        $order = Order::find($orderId);
        if (is_null($order)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        }
    } else {
        $order = Order::create();
        session(['orderId' => $order->id]);
    }
    $order->products()->attach($productId);

    return view('cart', compact('order'));
}

}
