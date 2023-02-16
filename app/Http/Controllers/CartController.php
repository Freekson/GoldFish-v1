<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;
use App\Models\Order;
use App\Models\Product;

class CartController extends Controller
{
    public function cart(){
        $order = Order::find(session('orderId'));
        return view('cart', compact('order'));
    }
    public function ordering(){
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        return view('ordering', compact('order'));
    }
    public function cartConfirm(Request $request)
    {
        $orderId = session('orderId');
        if(is_null($orderId)){
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        $success = $order->saveOrder($request->name, $request->phone);
        if($success){
            session()->flash('success', 'Your order has been processed');
        }
        else{
            session()->flash('success', 'Something went wrong');
        }
        return redirect()->route('index');
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
        $product = Product::find($productId);
        session()->flash('success', 'Product has been added: ' . $product->name);
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
        $product = Product::find($productId);
        session()->flash('success', 'Product has been removed: ' . $product->name);
        return redirect()->route('cart');
        
    }
    public function cartDelete($productId)
    {
        $orderId = session('orderId');
        $order = Order::find($orderId);
        $order->products()->detach($productId);
        $product = Product::find($productId);
        session()->flash('success', 'Product has been deleted: ' . $product->name);
        return redirect()->route('cart');
    }

}
