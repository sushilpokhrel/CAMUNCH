@extends('layout.master')
{{-- Page Title--}}
@section('title')Article head @endsection
{{--End page title--}}

{{--Place metatags here--}}

{{--End of metatags--}}

{{--Place your stylesheet here--}}
<link rel="stylesheet"  href="{{url('public/frontend/css/articledetail.css')}}">
{{--End Stylesheet--}}
@section('body')
    @include('includes.navbar')
    @include('includes.login')
    @include('includes.register')

    {{------ Advertisement section starts ------}}
    <div class="section"></div>
    <div class="row">

        <div class="col s12 m6 l6">
            <a href="#"><img src="{{url('public/images/ads/advert5.jpg')}}" class="responsive-img"></a>
        </div>
        <div class="col s12 m6 l6">
            <a href="#"><img src="{{url('public/images/ads/advert5.jpg')}}" class="responsive-img"></a>
        </div>
    </div>
    {{------ Advertisement ends ------------}}

    {{-- Article Details content starts here --}}
    <div class="row">

        {{-- Content part goes here --}}
        <div class="col s12 m12 l12">

            <div class="row" id="head" style="background: #fafafa;">
                <h4 class = "center-align">{{$article->title}}</h4>
                <div class="container">
                    {!! $article->post !!}
                </div>
            </div>

            {{--<div class="row">--}}
                {{--<a href="#"><img src="{{url('public/images/ads/advert1.jpg')}}" class="responsive-img center-block"> </a>--}}
            {{--</div>--}}

            {{--<div class="row" id="comment-box" style="background: #fafafa;">--}}
                {{--<h4><i class="material-icons left">insert_comment</i>Recent Comments</h4>--}}
                {{--<div class="row">--}}
                    {{--<div class="center-btn">--}}
                        {{--<a href="#login" class="btn">login</a><small>  To Post a Comment</small>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="divider"></div>--}}
                {{--<div class="row">--}}
                    {{--<div class="row">--}}
                        {{--<header><a href="#">User Name</a><small>on 6th july, 2017</small></header>--}}
                    {{--</div>--}}
                    {{--<p>--}}
                        {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
                        {{--Lorem Ipsum has been the industry's standard dummy text ever since the.--}}
                        {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
                        {{--Lorem Ipsum has been the industry's standard dummy text ever since the .--}}
                    {{--</p>--}}
                {{--</div>--}}
                {{--<div class="divider"></div>--}}
                {{--<div class="row">--}}
                    {{--<div class="row">--}}
                        {{--<header><a href="#">User Name</a><small>on 6th july, 2017</small></header>--}}
                    {{--</div>--}}
                    {{--<p>--}}
                        {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
                        {{--Lorem Ipsum has been the industry's standard dummy text ever since the.--}}
                        {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
                        {{--Lorem Ipsum has been the industry's standard dummy text ever since the .--}}
                    {{--</p>--}}
                {{--</div>--}}
                {{--<div class="divider"></div>--}}
                {{--<div class="section"></div>--}}
                {{--<div class="row">
                        <a href="#" class="btn right">See More</a>
                </div>--}}
            </div>
            {{-- Ads goes here --}}
            {{--<div class="row">--}}
                {{--<div class="col s12 m6 l6">--}}
                    {{--<a href="#"><img src="{{url('public/images/ads/advert4.jpg')}}" class="responsive-img center-block"></a>--}}
                {{--</div>--}}

                {{--<div class="col s12 m6 l6">--}}
                    {{--<a href="#"><img src="{{url('public/images/ads/advert4.jpg')}}" class="responsive-img center-block"></a>--}}
                {{--</div>--}}
            {{--</div>--}}


            {{-- latest articles shortcut starts here --}}
            {{--<div class="row" id="head" style="background: #fafafa;">--}}
                {{--<h4>Related Articles<a href="/postarticle" class="btn right">Post</a></h4>--}}
                {{--<div class="row" id="few-details">--}}
                    {{--<header>Article Heading goes here</header>--}}
                    {{--<small><a href="#">Author</a> on 6th july, 2017</small>--}}
                    {{--<p>--}}
                        {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
                        {{--Lorem Ipsum has been the industry's standard dummy text ever since the--}}
                        {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
                        {{--Lorem Ipsum has been the industry's standard dummy text ever since the--}}
                        {{--<br><a href="/articledetails">Read More</a>--}}
                    {{--</p>--}}
                    {{--<li class="right" >--}}
                        {{--<a href="#"><i class="material-icons left">mode_comment</i>Comment</a>--}}
                    {{--</li>--}}
                {{--</div>--}}
                {{--<div class="divider"></div>--}}

                {{--<div class="row" id="few-details">--}}
                    {{--<header>Article Heading goes here</header>--}}
                    {{--<small><a href="#">Author</a> on 6th july, 2017</small>--}}
                    {{--<p>--}}
                        {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
                        {{--Lorem Ipsum has been the industry's standard dummy text ever since the--}}
                        {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
                        {{--Lorem Ipsum has been the industry's standard dummy text ever since the--}}
                        {{--<br><a href="/articledetails">Read More</a>--}}
                    {{--</p>--}}
                    {{--<li class="right" >--}}
                        {{--<a href="#"><i class="material-icons left">mode_comment</i>Comment</a>--}}
                    {{--</li>--}}
                {{--</div>--}}
                {{--<div class="divider"></div>--}}

                {{--<div class="row" id="few-details">--}}
                    {{--<header>Article Heading goes here</header>--}}
                    {{--<small><a href="#">Author</a> on 6th july, 2017</small>--}}
                    {{--<p>--}}
                        {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
                        {{--Lorem Ipsum has been the industry's standard dummy text ever since the--}}
                        {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
                        {{--Lorem Ipsum has been the industry's standard dummy text ever since the--}}
                        {{--<br><a href="/articledetails">Read More</a>--}}
                    {{--</p>--}}
                    {{--<li class="right" >--}}
                        {{--<a href="#"><i class="material-icons left">mode_comment</i>Comment</a>--}}
                    {{--</li>--}}
                {{--</div>--}}
                {{--<div class="divider"></div>--}}

                {{--<div class="row" id="few-details">--}}
                    {{--<header>Article Heading goes here</header>--}}
                    {{--<small><a href="#">Author</a> on 6th july, 2017</small>--}}
                    {{--<p>--}}
                        {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
                        {{--Lorem Ipsum has been the industry's standard dummy text ever since the--}}
                        {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
                        {{--Lorem Ipsum has been the industry's standard dummy text ever since the--}}
                        {{--<br><a href="/articledetails">Read More</a>--}}
                    {{--</p>--}}
                    {{--<li class="right" >--}}
                        {{--<a href="#"><i class="material-icons left">mode_comment</i>Comment</a>--}}
                    {{--</li>--}}
                {{--</div>--}}
                {{--<div class="divider"></div>--}}

                {{--<div class="row" id="few-details">--}}
                    {{--<header>Article Heading goes here</header>--}}
                    {{--<small><a href="#">Author</a> on 6th july, 2017</small>--}}
                    {{--<p>--}}
                        {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
                        {{--Lorem Ipsum has been the industry's standard dummy text ever since the--}}
                        {{--Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
                        {{--Lorem Ipsum has been the industry's standard dummy text ever since the--}}
                        {{--<br><a href="/articledetails">Read More</a>--}}
                    {{--</p>--}}
                    {{--<li class="right" >--}}
                        {{--<a href="#"><i class="material-icons left">mode_comment</i>Comment</a>--}}
                    {{--</li>--}}
                {{--</div>--}}
                {{--<div class="divider"></div>--}}

                {{--<div class="divider"></div>--}}
                {{--<div class="row" id="link">--}}
                    {{--<a href="#" class="right">See More<i class="material-icons right">fast_forward</i></a>--}}
                {{--</div>--}}


            {{--</div>--}}
            {{-- latest articles shortcut ends here --}}



        {{-- Content part ends here --}}

        {{-- Ads goes here --}}
        {{--<div class="col s12 m12 l3">--}}
            {{--<div class="row" id="ads">--}}
                {{--<a href="#"><img src="{{url('public/images/ads/advert2.jpg')}}" class="responsive-img"></a>--}}
            {{--</div>--}}
            {{--<div class="section"></div>--}}
            {{--<div class="row" id="ads">--}}
                {{--<a href="#"><img src="{{url('public/images/ads/advert3.jpg')}}" class="responsive-img"></a>--}}
            {{--</div>--}}
            {{--<div class="row" id="ads">--}}
                {{--<a href="#"><img src="{{url('public/images/ads/advert2.jpg')}}" class="responsive-img"></a>--}}
            {{--</div>--}}
            {{--<div class="row" id="ads">--}}
                {{--<a href="#"><img src="{{url('public/images/ads/advert3.jpg')}}" class="responsive-img"></a>--}}
            {{--</div>--}}
            {{--<div class="row" id="ads">--}}
                {{--<a href="#"><img src="{{url('public/images/ads/advert2.jpg')}}" class="responsive-img"></a>--}}
            {{--</div>--}}
            {{--<div class="row" id="ads">--}}
                {{--<a href="#"><img src="{{url('public/images/ads/advert3.jpg')}}" class="responsive-img"></a>--}}
            {{--</div>--}}
            {{--<div class="row" id="ads">--}}
                {{--<a href="#"><img src="{{url('public/images/ads/advert2.jpg')}}" class="responsive-img"></a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{-- Ads goes here --}}

    </div>
    {{-- Article Details content ends here --}}






    @include('includes.footer')
@endsection