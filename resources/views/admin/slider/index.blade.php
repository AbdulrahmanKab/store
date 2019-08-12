
@extends("base_layout.master_layout")
@section('content')
    <div class="col-md-6">
        <a href="{{route('slider.add')}}">
        <div class="btn-group">
            <button id="sample_editable_1_2_new" class="btn sbold green"> Add New
                <i class="fa fa-plus"></i>
            </button>
        </div>
        </a>
    </div>
    <div class="portlet-body flip-scroll" style="font-family: Roboto">
        <table class="table table-bordered table-striped table-condensed flip-content">
            <thead class="flip-content">
            <tr>
                <th width="20%"> image </th>

                <th class="numeric" style="text-align:center;"> product Name </th>
                <th class="numeric"> Status </th>
                <th class="numeric">edite</th>
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
                <td class="numeric " width="5%" style="padding: 1em;padding-top: 2em"><a class="fa fa-trash btn btn-danger"></a> </td>
            </tr>
@endforeach
            </tbody>
        </table>
    </div>
    @endsection
