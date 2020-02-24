@extends('layouts.horizontal-master')
@section('main-content')
<div class="breadcrumb">
    <h1>Products</h1>
    <ul>
        <li><a href="/">Home</a></li>
        <li>{{$category->name}}</li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>
<section class="product-cart">
    <div class="row list-grid">
        @foreach ($products as $product)
        <div class="list-item col-md-4 d-flex align-items-stretch">
            @include('includes.product_card', ["product" => $product])
        </div>
        @endforeach
    </div>
</section>
{{ $products->links() }}
@endsection