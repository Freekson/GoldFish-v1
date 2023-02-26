@extends("layouts.master");

@isset($category)
    @section('title', 'Category edit')
@else
    @section('title', 'Category add')
@endisset

@section('content')

@extends('layouts.app')

<div class="orders__wrapper">
    @isset($category)
        <p class="orders__title">Edit category: {{$category->name}}</p>
    @else
        <p class="orders__title">Create category</p>
    @endisset
    <hr>
    <form method="post" 
    @isset($category)
        action="{{route('categories.update', $category)}}"
    @else
        action="{{route('categories.store')}}"
    @endisset
    >
        @csrf
        @isset($category)@method('PUT')@endisset
        <div class="input-group">
            <label for="code">Code</label>
            <input id="code" name="code" type="text" required value ="@isset($category){{$category->code}}@endisset">
        </div>
        <div class="input-group">
            <label for="name">Name</label>
            <input id="name" name="name" type="text" required value ="@isset($category){{$category->name}}@endisset">
        </div>
        <div class="input-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" type="text" required>@isset($category){{$category->description}}@endisset</textarea>
        </div>
        @isset($category)
            <button>Save</button>
        @else
            <button>Create</button>
        @endisset
    </form>
</div>