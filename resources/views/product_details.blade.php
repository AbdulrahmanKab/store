
@extends("layout._layout")
@section('css')
    <link href="/asset/css/product_details.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
@endsection
@section('content')
<div class="main">
    <div class="title">{{ucfirst($sub)}}-{{ucfirst($product)}}</div>
    <div class="word_detail"> Details</div>
</div>
<div class="conf">

    <div class="detail">
        <img src="/thumb.php?src=./{{$item_product->image}}&size=266x250" alt="product image "
        @if(Auth::user() !== null)
        width="360px"
        @endif
             width="250px" height="250px" class="img-product">

        <div class="container"><div class="product_box">
            <div class="detail_name">Marka</div>
            <div class="value"> {{$item_product->marka}}</div>


            </div>
            @foreach($uses as $u)
        <div class="product_box">
            <div class="detail_name">{{ucfirst($u->name)}}</div>
            <div class="value"> {{ucfirst($u->value)}}</div>
        </div>
            @endforeach

        </div>
    </div>
    @if(Auth::user() != null)
        <?php $style = " margin-left:1em"?>
        @else
        <?php  $style=""?>
        @endif
    <div style="display: flex;flex-direction: column;">
    <a href="#" class="btn btn-danger btn-lg shoping_card add_to_card"    style="{{$style}}">
        <span class="glyphicon glyphicon-shopping-cart" >
            <img src="/image/shopping-basket.png " width="30px" height="30px">
            <span class="shoping_inside">Add to Basket</span></span>
    </a>
        <div style="margin-top: 1.5em;margin-left: -5em !important;" >
            <span style="font-family:Roboto, sans-serif;margin-right: 1.2em;font-weight: bold;">Amount</span>
            <input type="number" name="counter" step="1" value="1" style="width:60px;" id="amount">
            <input type="text" value="{{$item_product->id}}" id="product_id" style="display: none ">
        </div>
    </div>
</div>
    <h1><div class="more_details">More Details</div></h1>
    <div class="paragraph">
   {{$item_product->description}}
    </div>
    @endsection
