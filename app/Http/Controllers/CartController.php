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
    public function cartAdd($productId){
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

        if($order->products->contains($productId)){
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        }
        else{
            $order->products()->attach($productId);
        }

        return redirect()->route('cart');
    }
    public function cartRemove($productId){
        $orderId = session('orderId');
        if (is_null($orderId)){
            return redirect()->route('cart');
        }
        $order = Order::find($orderId);
        if($order->products->contains($productId)){
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if($pivotRow->count < 2){
                $order->products()->detach($productId);
            }
            else{
                $pivotRow->count--;
                $pivotRow->update();
            }
        }
        return redirect()->route('cart');
        
    }
    public function cartDelete($productId)
    {
        $orderId = session('orderId');
        $order = Order::find($orderId);
        $order->products()->detach($productId);
        return redirect()->route('cart');
    }

}
