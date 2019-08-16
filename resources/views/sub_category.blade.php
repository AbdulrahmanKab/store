@extends("layout._layout")
@section("content")

    <div class="row">
        <div class="col-md-2" style="margin-left: 1em !important;margin-top: 6em !important;">

            <div class="portlet-body" >
                <ul id="sortable" class="list-group">
                    <li class="list-group-item ">{{ucfirst($main)}}</li>
                    @foreach($item as $i)
                        <li class="list-group-item <?php echo $i->sub_name == $sub?'active':'' ?> ">{{$i->sub_name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @if($product->isEmpty())
            <div class="col-md-8">
            <div class="d-flex justify-content-center align-items-center" id="main" style="margin-top: 8em !important;margin-bottom: 7.2em !important;">
                <h1 class="mr-3 pr-3 align-top border-right inline-block align-content-center">category didn't contain any items</h1>
                <div class="inline-block align-middle">
                    <h2 class="font-weight-normal lead" id="desc">not item available</h2>
                </div>
            </div>
            </div>
        @endif
        @foreach($product as $p)
            <div class=" col-md-3 mb-4" style="margin-top: 2em !important;">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="{{asset($p->image)}}" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">{{$p->name}}</a>
                        </h4>
                        <h5>{{$p->price}}$</h5>
                        <p class="card-text">{{substr($p->description,0,110)}}</p>
                    </div>
                    <div class="card-footer">
                        <input type="text" name="id" value="{{$p->id}}" style="display: none">
                        <button  class="btn btn-success btn-sm">Add to cart</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div style="margin-left: 40em !important;">{{$product->links()}}</div>
@endsection
