@extends("layouts.master")

@section('title', 'Categories')
@section('content')

<main class="main">
    <div class="main__wrapper">

<div class="orders__wrapper categories"  style="margin-bottom: 50px;">
<p class="nav"> <a href="{{route('index')}}">Main</a> > <a href="{{route('home')}}">Personal account</a> > <a href="{{route('orders')}}" class="active-menu__item">Orders</a> </p>

    <p class="orders__title">Categories</p>
    <hr>
    <div class="order top">
        <div class="order__item">#</div>
        <div class="order__item">Code</div>
        <div class="order__item">Title</div>
        <div class="order__item">Actions</div>
    </div>
    <hr>
    @foreach ($categories  as $category )
    <div class="order">
        <div class="order__item">{{$category->id}}</div>
        <div class="order__item">{{$category->code}}</div>
        <div class="order__item">{{$category->name}}</div>
        <div class="order__item">
            <form action="{{route('categories.destroy', $category)}}" method="post">
                @csrf
                <a href="{{Route('categories.show', $category)}}">Open</a>
                <a href="{{Route('categories.edit', $category)}}">Edit</a>
                @method('delete')
                <input class="category-delete-btn" type="submit" value="delete">
            </form>
        </div>
    </div>
    <hr>
    @endforeach
    <div class="create">
        <a href="{{route('categories.create')}}">Create category</a>
    </div>
</div>
</div>
</main>