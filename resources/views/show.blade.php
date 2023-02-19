@extends("master");

@section('title', 'Category info')

@section('content')


<div class="orders__wrapper show" style="margin-bottom: 50px;">
    <p class="orders__title">Category {{$category->name}}</p>
    <hr>
    <div class="order top">
        <div class="order__item">Field</div>
        <div class="order__item">Value</div>
    </div>
    <hr>
    <div class="order">
        <div class="order__item">ID</div>
        <div class="order__item">{{$category->id}}</div>
    </div>
    <div class="order">
        <div class="order__item">Name</div>
        <div class="order__item">{{$category->name}}</div>
    </div>
    <div class="order">
        <div class="order__item">Code</div>
        <div class="order__item">{{$category->code}}</div>
    </div>
    <div class="order">
        <div class="order__item">Decription</div>
        <div class="order__item">{{$category->description}}</div>
    </div>
    <div class="order">
        <div class="order__item">Amount of items</div>
        <div class="order__item">{{$category->products->count()}}</div>
    </div>
</div>