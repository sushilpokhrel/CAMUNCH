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
                    <form action="/articles/{{$article->id}}" method="post">

                        <input type="hidden" name = "_method" value="PATCH">

                        {{csrf_field()}}
                        Title: <br>
                        <input type="text" name = "title" value = "{{$article->title}}" required><br>
                        Post :  <br>
                        <textarea name="post" class="form-control my-editor" rows = 10>{{$article->post}}</textarea><br>
                        <select name="category">
                            <option value="Income Tax" @if($article->category == 'Income Tax') selected @endif>Income Tax</option>
                            <option value="Finance" @if($article->category == 'Finance') selected @endif>Finance</option>
                            <option value="VAT" @if($article->category == 'VAT') selected @endif>VAT</option>
                            <option value="Law" @if($article->category == 'Law') selected @endif>LAW</option>
                            <option value="Miscellaneous" @if($article->category == 'Miscellaneous') selected @endif>Miscellaneous</option>
                        </select>
                        <br>
                        <div class = "text-center">
                            <input class = "btn btn-primary"type="submit" value = "Edit article">
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


