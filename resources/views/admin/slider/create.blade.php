
@extends("base_layout.master_layout")
@section('content')
    <form method="post" action="{{route('slider.store')}}" enctype="multipart/form-data">

        @csrf
        <div class="row">
            <div class="form-group ">
                <div class="col-md-9 pull-right ">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Select image </span>
                                                                <span class="fileinput-exists"> Change </span>
                                                                <input type="file" name="image"> </span>
                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                        </div>
                    </div>
                    @if($errors->has('image'))
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first('image')}}
                        </div>
                    @endif
                </div>

            </div>
            <div >

            </div>
        </div>
        <div  style="display: flex; flex-direction: row;margin-top: 2em">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">Name of Product</span>
                <input name="name" placeholder="enter name of product" style="margin-left: 20px !important; width: 30em ;height: 3em" ></label>
        </div>
        @if($errors->has('image'))
            <div class="alert alert-danger" role="alert">
                {{$errors->first('name')}}
            </div>
        @endif

        <div  style="display: flex; flex-direction: row;margin-top: 2em;">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">acive?</span>
                <input name="status"  type="checkbox" placeholder="name of marka"  value="1" style="margin-left: -2.5em !important; width: 20em ;height: 1.2em" ></label>
        </div>
        <div  style="display: flex; flex-direction: row;margin-top: 2em">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">Main Title</span>
                <input name="main" placeholder="enter main title" style="margin-left: 5em !important; width: 30em ;height: 3em" ></label>
        </div>
        <div  style="display: flex; flex-direction: row;margin-top: 2em">
            <label style="font-family: Roboto, sans-serif" >
                <span class="alert"style="font-size: 1.1em;">small desription</span>
                <input name="description" placeholder="enter desctiption" style="margin-left: 2em !important; width: 30em ;height: 3em" ></label>
        </div>
        <button type="submit" class="btn btn-success " style="margin-left: 15em;margin-top: 2em ;font-size: 1.5em">Submit</button>
    </form>
@endsection
