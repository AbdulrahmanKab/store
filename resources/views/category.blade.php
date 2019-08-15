@extends("layout._layout")
@section("content")
<div class="row">
        <div class="col-md-2" style="margin-left: 1em !important;margin-top: 6em !important;">

            <div class="portlet-body" >
        <ul id="sortable" class="list-group">
            <li class="list-group-item active">{{ucfirst($main)}}</li>
            @foreach($item as $i)
            <li class="list-group-item ">{{$i->sub_name}}</li>
        @endforeach
        </ul>
    </div>
    </div>
  @endsection
