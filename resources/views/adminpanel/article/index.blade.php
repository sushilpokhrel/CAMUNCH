<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if(session()->has('message'))
        {{session()->get('message')}}
        {{session()->forget('message')}}
    @endif

</body>
</html>





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

                <div class="blank-page">
                    <form action="/articles/create">
                        <input type="submit" value = "Add new Articles">
                    </form>
                    <hr>
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>{{ session()->get('message')}}</strong>
                        </div>
                        {{session()->forget('message')}}
                    @endif
                    @if($articles)
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Approve</th>
                                <th>Posted by</th>
                                <th>Created at</th>
                                <th>Show</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($articles as $article)
                                    <td><a href="/articles/{{$article->id}}">{{$article->title}}</a></td>
                                    <td>{{$article->category}}</td>
                                    <td>@if($article->isApproved == 0)
                                            <a href="/articles/approve/{{$article->id}}">Approve</a>
                                        @else
                                            Approved
                                        @endif
                                    </td>
                                    <td>{{$article->user->name}}</td>
                                    <td>{{Carbon\Carbon::parse($article->created_at)->toFormattedDateString()}}</td>
                                    <td><a href="/articles/{{$article->id}}/edit">Edit</a></td>
                                    <td><a href="/articles/{{$article->id}}">Show</a></td>
                                    <td>
                                        <form action="/articles/{{$article->id}}" method = "post">
                                            {{csrf_field()}}
                                            <input type="hidden" name = "_method" value = "DELETE">
                                            <input type="submit" value = "delete">
                                        </form></td>
                                @endforeach
                            </tr>
                            </tbody>

                        </table>



                    @endif



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
<!--//scrolling js-->
</body>
</html>

