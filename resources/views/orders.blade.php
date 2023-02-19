@extends("master");

@section('title', 'Orders')
@section('content')


<div class="orders__wrapper" style="margin-bottom: 50px;">
    <p class="orders__title">Orders</p>
    <hr>
    <div class="order top">
        <div class="order__item">#</div>
        <div class="order__item">Name</div>
        <div class="order__item">Phone</div>
        <div class="order__item">Time</div>
        <div class="order__item">Price</div>
        <div class="order__item">Actions</div>
    </div>
    <hr>
    @foreach ($orders  as $order )
    <div class="order">
        <div class="order__item">{{$order->id}}</div>
        <div class="order__item">{{$order->name}}</div>
        <div class="order__item">{{$order->phone}}</div>
        <div class="order__item">{{$order->created_at->format('H:i:s d/m/Y ')}}</div>
        <div class="order__item">{{$order->getFullPrice()}} $</div>
        <div class="order__item">Actions</div>
    </div>
    <hr>
    @endforeach
</div>