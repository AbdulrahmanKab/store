@extends("layout._layout")
@section("content")

<div class="row">
    @foreach($item as $i)
    <div class="col-lg-3 col-md-5 mb-4"style="margin-left:4em !important;margin-top: 2em !important; ">
        <div class="card h-100" >
            <a href="#"><img class="card-img-top" src="{{$i->image}}" alt=""></a>
            <div class="card-body" style="font-family: Roboto, sans-serif !important; font-size: 0.4em !important;">
                <h5 class="card-title">
                    <a href="#">Name: {{$i->name}}</a>
                </h5>
                <h5><span>Quantity: {{$i->amount}} </span></h5>
                <h5><span>price: </span>{{($i->amount * $i->price)."$"}}</h5>
            </div>
            <div class="card-footer">
                <button  class="btn btn-danger btn-sm">Delete</button>
            </div>
        </div>
    </div>
        @endforeach

</div>
    @endsection
