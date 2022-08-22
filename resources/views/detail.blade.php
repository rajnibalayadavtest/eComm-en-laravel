@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="" src="{{$product['gallary']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2 class="product-title">{{$product['title']}}</h2>
            <h4 class="product-price">Price : {{$product['price']}}</h4>
            <h2 class="product-description">Description :{{$product['description']}}</h2><br><br>
        </div>
    </div>
  
</div>

@endsection