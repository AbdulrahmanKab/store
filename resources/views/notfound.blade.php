@extends("layout._layout")
@section("content")
    <div class="d-flex justify-content-center align-items-center" id="main" style="margin-top: 8em !important;margin-bottom: 7.2em !important;">
        <h1 class="mr-3 pr-3 align-top border-right inline-block align-content-center">404</h1>
        <div class="inline-block align-middle">
            <h2 class="font-weight-normal lead" id="desc">The page you requested was not found.</h2>
        </div>
    </div>

    @endsection
@section("js")
    <script > setTimeout("location.href ='/'     ",10000);</script>
    @endsection
