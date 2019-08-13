
@extends("base_layout.master_layout")
@section('content')
    <div class="row">
    <div class="col-md-6">
        <a href="{{route('slider.add')}}">
        <div class="btn-group">
            <button id="sample_editable_1_2_new" class="btn sbold green"> Add New
                <i class="fa fa-plus"></i>
            </button>
        </div>
        </a>
    </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <input type="text" class="input-group" style="width: 30em !important; margin-top: 1.5em !important;margin-bottom: 1.5em !important;" name="search_name" placeholder="enter search ">
            <div class="dropdown-toggle">
            <select class="dropdown-menu">
                <option></option>
            </select>
            </div>
        </div>
        <div class="col-md-1" style="width: 30em !important; margin-top: 1.5em !important;margin-bottom: 1.5em !important;">
           <button class="btn btn-sm green dropdown-toggle "type="submit">Search</button>

        </div>
    </div>
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
