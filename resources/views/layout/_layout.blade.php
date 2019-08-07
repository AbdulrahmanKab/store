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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand  title_name" href="#">Laravel Store</a>
           <div class="title_main">
               <div class="top_title" >
                <div class="top_title_comp" ><a href="#">Home</a></div>
                <div class="top_title_comp"><a href="#">Mobile</a></div>
                <div class="top_title_comp"><a href="#">Sport</a></div>
                <div class="top_title_comp"><a href="#"> Book shop</a></div>
                   <div class="top_title_comp"><a href="#">Tools</a></div>
                   <div class="top_title_comp"><a href="#">Mother and Baby</a></div>
                <div class="top_title_comp"><a href="#"> Home Tools</a></div>
                   <div class="top_title_comp"><a href="#">Baby games</a></div>
            </div>

                <div class="below_title" style="display: flex;flex-direction: row">
                    <input type="password" class="form-control ser" id="inputPassword" placeholder="search">
                    <button class="btn btn-outline-primary">Search</button>
                </div>



           </div>
        <div class="login ">
            <a href="#" class="btn btn-outline-primary num" ><span class="btn-outline-primary num_basket">2 <img  src="/image/shopping-cart.png" width="35px" height="35px"></span></a>
            <a href="#" class="btn btn-outline-primary login_comp">Rgister</a>
        <a href="{{asset('/login')}}" class="btn btn-outline-primary login_comp">login</a>

        </div>
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
                            <img src="/image/email.png"  class="figure-img" width="35px" height="35px">
                            <a href="#!">Email</a>
                        </li>
                        <li>
                            <img src="/image/messenger.png"  class="figure-img" width="35px" height="35px">
                            <a href="#!">Messanger</a>
                        </li>
                        <li>
                            <img src="/image/twitter.png"  class="figure-img" width="35px" height="35px">
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

@yield("js")
</body>
</html>
