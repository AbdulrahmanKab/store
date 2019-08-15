
@extends("base_layout.master_layout")
@section('content')
    <form>
    <div class="row">
    <div class="col-md-6">
        <a href="{{route('slider.add')}}">
        <div class="btn-group btn sbold green">
            Add New
                <i class="fa fa-plus"></i>

        </div>
        </a>
    </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <input type="text" value="{{app('request')->input('search_name')}}" class="input-group" style="height: 2.2em !important;width: 30em !important; margin-top: 1.5em !important;margin-bottom: 1.5em !important;" name="search_name" placeholder="enter search ">

        </div>
        <div class=" col-md-2 dropdown-toggle"  style="height: 2.2em !important; margin-top: 1.6em !important;margin-bottom: 1.5em !important;">
            <select class="" name="active">
                <option value="-1" >select option</option>
                <option value="1" {{app('request')->input('active') == '1'?"selected":""}}>Active</option>
                <option value="0" {{app('request')->input('active') == '0'?"selected":""}}>Inactive</option>
            </select>
        </div>
        <div class="col-md-1" style="height: 2.2em !important; margin-top: 1.5em !important;margin-bottom: 1.5em !important;">
           <button class="btn btn-sm green dropdown-toggle " type="submit">Search</button>

        </div>
    </div>
    </form>
    <div class="portlet-body flip-scroll" style="font-family: Roboto,Sans-Serif">
        <table class="table table-bordered table-striped table-condensed flip-content">
            <thead class="flip-content">
            <tr>
                <th width="20%"> image </th>

                <th class="numeric" style="text-align:center;"> product Name </th>
                <th class="numeric"> Status </th>
                <th class="numeric">Edite</th>
                <th class="numeric"> Delete </th>
            </tr>
            </thead>
            <tbody>
         @foreach($slider as $s)
            <tr>
                <td> <img src="/thumb.php?src=./{{$s->image}}&size=250x100" width="250px" height="100px"> </td>
                <td style="padding: 2em;font-size: 1.2em ;text-align: center"> {{$s->product_name}} </td>
                <td class="numeric " width="10%" style="padding: 2em"><input type="checkbox" <?php echo $s->status==1?"checked":""?>> </td>
               <td class="numeric " width="5%"style="padding: 1em;padding-top: 2em"><a class="fa fa-pencil btn btn-success" href="/control/admin/slider/edite/{{$s->id}}"></a></td>
                <td class="numeric delete-trash" width="5%" style="padding: 1em;padding-top: 2em" data-value="{{$s->id}}"><a class="fa fa-trash btn btn-danger"></a> </td>
            </tr>
@endforeach
            </tbody>
        </table>
    </div>
    {{$slider->links()}}
    @endsection
@section('js')
    <script>
        $(".delete-trash").click(function () {
            let id = $(this).data('value');

            let loc = '/control/admin/slider/'+id+"/destroy";
           $.ajax({
               url: loc,
               method:'POST',
                data:{
                   'body':'',
                    '_token':'{{csrf_token()}}'}
           }).success(function (response) {
               swal(''+response.msg)
           })
        })
    </script>
    @endsection
