@extends("base_layout.master_layout")
@section('content')
   <form>
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
                                                                <input type="file" name="..."> </span>
                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                    </div>
                </div>


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

       <div  style="display: flex; flex-direction: row;margin-top: 2em">
           <label style="font-family: Roboto, sans-serif" >
               <span class="alert"style="font-size: 1.1em;">Price</span>
               <input name="price" placeholder="price" style="margin-left: 7.2em !important; width: 10em ;height: 3em" ><span style="font-size: 1.1em; font-weight: bold;">$$</span></label>
       </div>

   </form>
@endsection
