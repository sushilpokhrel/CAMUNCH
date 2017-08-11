<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--Space for metatags--}}
    @yield('metatags')
    {{--End Metatags--}}
    <title>@yield('title')</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"  href="{{url('public/frontend/css/master.css')}}">
    <!-- custom css -->
        @yield('style')
    {{--End Custom css--}}
</head>
<body>
@yield('body')

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script type="text/javascript" src="{{url('public/frontend/js/master.js')}}" ></script>
{{--Custom Scripts--}}
@yield('script')
{{--End of custom scripts--}}

</body>
</html>