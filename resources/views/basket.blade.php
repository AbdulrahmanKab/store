
@extends("layout._layout")
@section("content")

<div class="row">
    @if($item !=null)
    @foreach($item as $i)
    <div class="col-lg-3 col-md-5 mb-4"style="margin-left:4em !important;
    margin-top: 2em !important; ">
        <div class="card h-100" >
            <a ><img class="card-img-top" src="{{$i->image}}" alt=""></a>
            <div class="card-body" style="font-family: Roboto, sans-serif !important; font-size: 0.4em !important;">
                <h5 class="card-title">
                    <span  style="font-size: 0.9em !important;" href="#">Name: {{$i->name}}</span>
                </h5>
                <h5><span style="font-size: 0.9em !important;">Quantity: {{$i->amount}} </span></h5>
                <h5><span style="font-size: 0.9em !important;">price: </span>{{($i->amount * $i->price)."$"}}</h5>
            </div>
            <div class="card-footer">
                <button  class="btn btn-danger btn-sm del_button" data-value="{{$i->id_basket}}" id="{{$i->id_basket}}">Delete</button>
            </div>
        </div>
    </div>
        @endforeach
@endif
</div>
    @endsection
@section("js")
    <script>
        $(".del_button").click(function () {
        let val = $(this).data("value");
        let button = document.getElementById(val);
        let par = button.parentNode;
        let pare = par.parentNode;
        let parOne = pare.parentNode;
        parOne.removeChild(pare);
        $.ajax({
            url:'/basket/'+val+'/destroy',
            method:"POST",
            data:{body:"","_token":'{{csrf_token()}}'}
        })
        })
    </script>
    @endsection
