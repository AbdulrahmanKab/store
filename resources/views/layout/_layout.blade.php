<!DOCTYPE HTML>
<html>
<head>
    <title>@yield("title","Laravel Store")</title>
    @yield("css")
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/asset/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="/image/store.png">
    <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display|Open+Sans|Playfair+Display|Roboto&display=swap" rel="stylesheet">
    <link href="/asset/css/index.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Farro&display=swap" rel="stylesheet">


</head>
<body>
<header>
    <?php $main_category = \DB::table("main_category")->get()?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand  title_name" href="{{asset('/')}}">Laravel Store</a>
           <div class="title_main">
               <div class="top_title" >
                <div class="top_title_comp" ><a href="/">Home</a></div>
            @foreach($main_category as $m)
                       <div class="top_title_comp"><a href="/{{$m->name}}">{{$m->name}}</a></div>
                @endforeach
              <!--  <div class="top_title_comp"><a href="#">Mobile</a></div>
                <div class="top_title_comp"><a href="#">Sport</a></div>
                <div class="top_title_comp"><a href="#"> Book shop</a></div>
                   <div class="top_title_comp"><a href="#">Tools</a></div>
                   <div class="top_title_comp"><a href="#">Mother and Baby</a></div>
                <div class="top_title_comp"><a href="#"> Home Tools</a></div>
                   <div class="top_title_comp"><a href="#">Baby games</a></div>-->
            </div>

                <div class="below_title" style="display: flex;flex-direction: row">
                    <input type="password"  class="form-control ser" id="inputPassword" placeholder="search">
                    <button class="btn btn-outline-primary">Search</button>
                </div>



           </div>

        @if(isset(Auth::user()->name))
        <?php  $user_id = \DB::table('users')->where('name','=',Auth::user()->name)->select('id')->first()->id;
            $count = \DB::table('basket')->where('user_id','=',$user_id)->count()?>
                <a  class="btn btn-outline-primary num"  style="margin-left: 30px" href="{{route('basket')}}">
                <span class="btn-outline-primary num_basket" id="count">
                    <span id="set_count">{{$count}}</span> <img  src="/image/shopping-cart.png" width="35px" height="35px">
                </span>
            </a>

            <div class="  dropdown" style="margin-left: 110px !important;">
                <button class="bg-light  dropdown-toggle"style="font-family: Roboto, sans-serif; border-color: #f8f9fa !important; border-bottom-color: #007bff !important; font-size: 1.07em;color: #007bff"   type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="/images/user.png" width="30px" height="30px"style="margin-top: 2px;margin-bottom: 2px">

                    {{Auth::user()->name}}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/basket">Basket</a>
                    <a class="dropdown-item" href="{{route('logout')}}" style="font-family: Roboto, sans-serif">logout</a>
                </div>
            </div>
        @else
        <div class="login ">
            <a href="/basket" class="btn btn-outline-primary num" ><span class="btn-outline-primary num_basket"> 0<img  src="/image/shopping-cart.png" width="35px" height="35px"></span></a>
            <a href="{{asset('/register')}}" class="btn btn-outline-primary login_comp">Rgister</a>
        <a href="{{asset('/login')}}" class="btn btn-outline-primary login_comp">login</a>

        </div>
            @endif
    </nav>
</header>
<main>
@yield("content")
</main>
<footer class="foot">
    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4 ">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row ">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-body" style="font-family: 'Playfair Display', serif;margin-left: 1.5rem;">Laravel Store</h5>
                    <p style="font-family: Roboto, serif;margin-left: 1.5rem;">Here you find what your want</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-body" style="font-family: 'Playfair Display', serif;font-size: 1.3em">Home</h5>

                    <ul class="list-unstyled" style="margin-left: 5px !important; ">
                        <li>
                            <a href="#!">Mobile</a>
                        </li>
                        <li>
                            <a href="#!">Sport</a>
                        </li>
                        <li>
                            <a href="#!">Book shop</a>
                        </li>
                        <li>
                            <a href="#!">Tools</a>
                        </li>
                        <li>
                            <a href="#!">Mother and Baby</a>
                        </li>
                        <li>
                            <a href="#!">Home Tools</a>
                        </li>
                        <li>
                            <a href="#!">Baby games</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-body" style="font-family: 'Playfair Display', serif ;font-size: 1.3em">Contact</h5>

                    <ul class="list-unstyled" style="margin-left: 10px !important;">
                        <li>
                            <img src="/image/email.png"  class="figure-img" width="30px" height="30px">
                            <a href="#!">Email</a>
                        </li>
                        <li>
                            <img src="/image/messenger.png"  class="figure-img" width="30px" height="30px">
                            <a href="#!">Messanger</a>
                        </li>
                        <li>
                            <img src="/image/twitter.png"  class="figure-img" width="30px" height="30px">
                            <a href="#!">Messanger</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 coop">© <?php echo date("Y")?> Copyright
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="/asset/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
@if(isset(Auth::user()->name))
<?php $user_id = \DB::table('users')->where('name','=',Auth::user()->name)->select('id')->first()->id;?>

<script>
    $(".add_to_card").click(function () {

        let amount = document.getElementById("amount").value;
        let product_id =document.getElementById("product_id").value;
        let id = '{{$user_id}}';
        let i = '{{$count}}';
        i++;
        console.log(i)
        let loc ='/product/'+product_id+'/'+amount+'/'+id;
        $.ajax({
            url: loc,
            method:'GET',
            data:{
                'body':'',
                '_token':'{{csrf_token()}}'}
        }).success(function (response){
            let item = document.getElementById('set_count');
            item.parentNode.removeChild(item);
            var node = document.createElement("span");                 // Create a <li> node
            var textnode = document.createTextNode(response.count);         // Create a text node
            node.appendChild(textnode);
            node.setAttribute("id", "set_count");
            let id = document.getElementById("count");
           id.prepend(node)

        });

    });
    @endif

</script>
@yield("js")
</body>
</html>
