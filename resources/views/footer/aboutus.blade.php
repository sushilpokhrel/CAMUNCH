@extends('layout.master')
Page Title
@section('title')Advertise @endsection
End Page Title
Place metatags here

End of metatags

Place your stylesheet here
<link rel="stylesheet"  href="{{url('public/frontend/css/advertise.css')}}">
End Stylesheet

@section('body')
    @include('includes.navbar')
    @include('includes.login')
    @include('includes.register')

    @include('footer.advertise')
    @include('includes.footer')