
@extends("base_layout.master_layout")
@section('content')
   <form method="post" action="/control/admin/product/add/" enctype="multipart/form-data">
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
               <span class="alert"style="font-size: 1.1em;"> Other language</span>
               <input name="name_local" placeholder="اسمه باللغة العربية" style="margin-left:2.2em !important; width: 30em ;height: 3em" ></label>
       </div>

       <div  style="display: flex; flex-direction: row;margin-top: 2em">
           <label style="font-family: Roboto, sans-serif" >
               <span class="alert"style="font-size: 1.1em;">Price</span>
               <input name="price" placeholder="price" style="margin-left: 7.2em !important; width: 10em ;height: 3em" ><span style="font-size: 1.1em; font-weight: bold;">$$</span></label>
       </div>
       <div  style="display: flex; flex-direction: row;margin-top: 2em">
           <label style="font-family: Roboto, sans-serif" >
               <span class="alert"style="font-size: 1.1em;">Marka</span>
               <input name="marka" placeholder="name of marka" style="margin-left: 6.6em !important; width: 20em ;height: 3em" ></label>
       </div>
       <div  style="display: flex !important; flex-direction: row;margin-top: 2em">
           <label style="font-family: Roboto, sans-serif" >
               <span class="alert"style="font-size: 1.1em;"> Choose category</span>
               <select name="category" id="" class="dropdown bg-primary" style="width: 20em;margin-left: 1em;height: 2em ; font-size: 1.2em;">
                   <option > Choose Category</option>
                   <?php $categories =\DB::table('sub_category')->get()?>
                   @foreach($categories as $category)
                       <option value="{{$category->id}}">{{ucwords($category->name)}}</option>
                   @endforeach
               </select>
           </label>
       </div>
       <div  style="display: flex; flex-direction: row;margin-top: 2em">
           <label style="font-family: Roboto, sans-serif" >
               <span class="alert"style="font-size: 1.1em;">Description</span>
               <textarea name="description" aria-placeholder="" style="margin-left: 4em !important ;height: 5em" cols="100" ></textarea></label>
       </div>
       <div  style="display: flex; flex-direction: row;margin-top: 2em;">
           <label style="font-family: Roboto, sans-serif" >
               <span class="alert"style="font-size: 1.1em;">available?</span>
               <input name="empty"  type="checkbox" placeholder="name of marka"  value="1" style="margin-left: -4.7em !important; width: 20em ;height: 1.2em" ></label>
       </div>

       <button type="submit" class="btn btn-success " style="margin-left: 20em;margin-top: 2em ;font-size: 1.5em">Go to Detail</button>
   </form>
@endsection
