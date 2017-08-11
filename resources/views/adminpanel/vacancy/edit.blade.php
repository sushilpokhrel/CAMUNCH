<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>CA MUNCH NEPAL | ADMIN PANEL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{url('public/admin/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="{{url('public/admin/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{url('public/admin/css/font-awesome.css')}}" rel="stylesheet">
    <script src="{{url('public/admin/js/jquery.min.js')}}"> </script>
    <script src="{{url('public/admin/js/bootstrap.min.js')}}"> </script>

    <!-- Mainly scripts -->
    <script src="{{url('public/admin/js/jquery.metisMenu.js')}}"></script>
    <script src="{{url('public/js/jquery.slimscroll.min.js')}}"></script>
    <!-- Custom and plugin javascript -->
    <link href="{{url('public/admin/css/custom.css')}}" rel="stylesheet">
    <script src="{{url('public/admin/js/custom.js')}}"></script>
    <script src="{{url('public/admin/js/screenfull.js')}}"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>


    <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }



            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            });



        });
    </script>



</head>
<body>
<div id="wrapper">
    <!----->
    @include('adminpanel.include.adminnav')

    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="content-main">

            <!--banner-->
            <div class="banner">
                <h2>
                    <a href="home.blade.php">Home</a>
                    <i class="fa fa-angle-right"></i>
                    <span>Admin</span>
                </h2>
            </div>
            <!--//banner-->
            <!--faq-->
            <div class="blank">

                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{ session()->get('message')}}</strong>
                    </div>
                    {{session()->forget('message')}}
                @endif
                <div class="blank-page">
                    <form action="/vacancy/{{$vacancy->id}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name = "user_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name = "_method" value="PATCH">
                        Company Name: <br>
                        <input type="text" name = "companyname" value = "{{$vacancy->companyname}}" required><br>
                        Job Title: <br>
                        <input type="text" name = "title" value = "{{$vacancy->title}}" required><br>
                        Contact Number: <br>
                        <input type="text" name = "number" value = "{{$vacancy->number}}" required><br>
                        Email address: <br>
                        <input type="email" name = "email" value = "{{$vacancy->email}}" required><br>
                        Address: <br>
                        <input type="text" name = "address" value = "{{$vacancy->address}}" required><br>
                        Requirements: <br>
                        <textarea name="requirements" class="form-control my-editor" rows = 10>{{$vacancy->requirements}}</textarea><br>
                        Last Date: <br>
                        <input type="date" name = "lastdate"><br>
                        <div class="text-center">
                            <input class = "btn btn-primary" type="submit" value = "Edit Vacancy">
                        </div>

                    </form>

                </div>
            </div>

            <!--//faq-->
            <!---->
            <div class="copy">
                <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>

<!---->
<!--scrolling js-->
<script src="{{url('public/admin/js/jquery.nicescroll.js')}}"></script>
<script src="{{url('public/admin/js/scripts.js')}}"></script>
<script src = "{{url('public/frontend/js/admin/master.js')}}"></script>

<!--//scrolling js-->
</body>
</html>




