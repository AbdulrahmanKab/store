<?php $productName = app('request')->input('productName') ?>
@if(!isset($productName))
    <script>

        window.location.href = '{{route("products.add")}}';

    </script>
@endif
<?php $nameProduct = \DB::table('product')->where('name','like',"$productName")->get()?>
<?php  $n = $nameProduct->first();?>
    @if(!isset($n->name))
        <script>

            window.location.href = '{{route("products.add")}}';

        </script>
    @endif
<?php //$name= $nameProduct->first()->name?>
@extends("base_layout.master_layout")
@section("content")
    <div class="alert alert-success" role="alert">
        This is a details for {{$productName}} product
    </div>

    <form action="{{route('products.store')}}" method="post" >
        @csrf
<input type="text"  value="{{$n->id}}" style="display: none;" name="id">
        <div  style="display: flex; flex-direction: row;margin-top: 2em;">
        <label style="font-family: Roboto, sans-serif" >
            <span class="alert"style="font-size: 1.1em;">Detail</span>
            <input name="detail1" placeholder="detail name" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>

        <input name="detail2" placeholder="value" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>
        </div>
        <div  style="display: flex; flex-direction: row;margin-top: 2em;">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">Other language</span>
                <input name="detail3" placeholder="detail name" style="margin-left: 2em !important; width: 20em ;height: 3em" ></label>

            <input name="detail4" placeholder="value" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>
        </div>
        <div  style="display: flex; flex-direction: row;margin-top: 2em;">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">Detail</span>
                <input name="detail5" placeholder="detail name" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>

            <input name="detail6" placeholder="value" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>
        </div>
        <div  style="display: flex; flex-direction: row;margin-top: 2em;">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">Other language</span>
                <input name="detail7" placeholder="detail name" style="margin-left: 2em !important; width: 20em ;height: 3em" ></label>

            <input name="detail8" placeholder="value" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>
        </div>
        <div  style="display: flex; flex-direction: row;margin-top: 2em;">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">Detail</span>
                <input name="detail9" placeholder="detail name" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>

            <input name="detail10" placeholder="value" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>
        </div>
        <div  style="display: flex; flex-direction: row;margin-top: 2em;">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">Other language</span>
                <input name="detail11" placeholder="detail name" style="margin-left: 2em !important; width: 20em ;height: 3em" ></label>

            <input name="detail12" placeholder="value" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>
        </div>
        <div  style="display: flex; flex-direction: row;margin-top: 2em;">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">Detail</span>
                <input name="detail13" placeholder="detail name" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>

            <input name="detail14" placeholder="value" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>
        </div>
        <div  style="display: flex; flex-direction: row;margin-top: 2em;">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">Other language</span>
                <input name="detail15" placeholder="detail name" style="margin-left: 2em !important; width: 20em ;height: 3em" ></label>

            <input name="detail16" placeholder="value" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>
        </div>
        <div  style="display: flex; flex-direction: row;margin-top: 2em;">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">Detail</span>
                <input name="detail17" placeholder="detail name" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>

            <input name="detail18" placeholder="value" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>
        </div>
        <div  style="display: flex; flex-direction: row;margin-top: 2em;">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">Other language</span>
                <input name="detail19" placeholder="detail name" style="margin-left: 2em !important; width: 20em ;height: 3em" ></label>

            <input name="detail20" placeholder="value" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>
        </div>
        <div  style="display: flex; flex-direction: row;margin-top: 2em;">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">Detail</span>
                <input name="detail21" placeholder="detail name" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>

            <input name="detail22" placeholder="value" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>
        </div>
        <div  style="display: flex; flex-direction: row;margin-top: 2em;">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">Other language</span>
                <input name="detail23" placeholder="detail name" style="margin-left: 2em !important; width: 20em ;height: 3em" ></label>

            <input name="detail24" placeholder="value" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>
        </div>
        <div  style="display: flex; flex-direction: row;margin-top: 2em;">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">Detail</span>
                <input name="detail25" placeholder="detail name" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>

            <input name="detail26" placeholder="value" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>
        </div>
        <div  style="display: flex; flex-direction: row;margin-top: 2em;">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">Other language</span>
                <input name="detail27" placeholder="detail name" style="margin-left: 2em !important; width: 20em ;height: 3em" ></label>

            <input name="detail28" placeholder="value" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>
        </div>
        <div  style="display: flex; flex-direction: row;margin-top: 2em;">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">Detail</span>
                <input name="detail29" placeholder="detail name" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>

            <input name="detail30" placeholder="value" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>
        </div>
        <div  style="display: flex; flex-direction: row;margin-top: 2em;">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">Other language</span>
                <input name="detail31" placeholder="detail name" style="margin-left: 2em !important; width: 20em ;height: 3em" ></label>

            <input name="detail32" placeholder="value" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>
        </div>
<button type="submit" class="btn btn-success " style="margin-left: 20em;margin-top: 2em ;font-size: 1.5em">Submit</button>
    </form>
    @endsection
