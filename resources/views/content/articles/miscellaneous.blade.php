@extends('layout.master')
{{--Page title--}}
@section('title')Miscellaneous @endsection
{{--End page title--}}

{{--Place metatags here--}}

{{--End of metatags--}}

{{--Place your stylesheet here--}}
<link rel="stylesheet"  href="{{url('frontend/css/article.css')}}">
{{--End Stylesheet--}}
@section('body')
    @include('includes.navbar')
    @include('includes.login')
    @include('includes.register')

    <div class="section"></div>
    <div class="row">
        <div class="col s12 m4 l4">
            <a href="#"><img src="{{url('images/ads/advert.jpg')}}" class="responsive-img"></a>
        </div>
        <div class="col s12 m4 l4">
            <a href="#"><img src="{{url('images/ads/advert.jpg')}}" class="responsive-img"></a>
        </div>
        <div class="col s12 m4 l4">
            <a href="#"><img src="{{url('images/ads/advert.jpg')}}" class="responsive-img"></a>
        </div>
    </div>
    <div class="section"></div>

    <div class="row">
        <div class="col s12 m12 l9">
            <div class="row" id="article" style="background: #fafafa;">
                <h4>Related Articles<a href="/postarticle" class="btn right">Post</a></h4>
                <div class="row">
                    <header>Article Heading goes here</header>
                    <small><a href="#">Author</a> on 6th july, 2017</small>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the
                        <br><a href="/articledetails">Read More</a>
                    </p>
                    {{--<li class="right" >
                        <a href="#"><i class="material-icons left">mode_comment</i>Comment</a>
                    </li>--}}
                </div>
                <div class="divider"></div>

                <div class="row">
                    <header>Article Heading goes here</header>
                    <small><a href="#">Author</a> on 6th july, 2017</small>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the
                        <br><a href="/articledetails">Read More</a>
                    </p>
                    {{--<li class="right" >
                        <a href="#"><i class="material-icons left">mode_comment</i>Comment</a>
                    </li>--}}
                </div>
                <div class="divider"></div>

                <div class="row">
                    <header>Article Heading goes here</header>
                    <small><a href="#">Author</a> on 6th july, 2017</small>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the
                        <br><a href="/articledetails">Read More</a>
                    </p>
                    {{--<li class="right" >
                        <a href="#"><i class="material-icons left">mode_comment</i>Comment</a>
                    </li>--}}
                </div>
                <div class="divider"></div>

                <div class="row">
                    <header>Article Heading goes here</header>
                    <small><a href="#">Author</a> on 6th july, 2017</small>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the
                        <br><a href="/articledetails">Read More</a>
                    </p>
                    {{--<li class="right" >
                        <a href="#"><i class="material-icons left">mode_comment</i>Comment</a>
                    </li>--}}
                </div>
                <div class="divider"></div>

                <div class="row">
                    <header>Article Heading goes here</header>
                    <small><a href="#">Author</a> on 6th july, 2017</small>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the
                        <br><a href="/articledetails">Read More</a>
                    </p>
                    {{--<li class="right" >
                        <a href="#"><i class="material-icons left">mode_comment</i>Comment</a>
                    </li>--}}
                </div>
                <div class="divider"></div>
                <div class="divider"></div>
                <div class="row" id="link">
                    <a href="#" class="right">See More<i class="material-icons right">fast_forward</i></a>
                </div>



            </div>
        </div>




        {{-- <div class="divider"></div>
         <div class="section"></div>
         <div class="container center">
             <ul class="pagination">
                 <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                 <li class="waves-effect"><a href="#!" class="active" >1</a></li>
                 <li class="waves-effect"><a href="#article4" >2</a></li>
                 <li class="waves-effect"><a href="#!">3</a></li>
                 <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
             </ul>
         </div>--}}


        <div class="col s12 m12 l3">
            {{--<div class="section"></div>--}}
            <div class="row" id="ads">
                <a href="#"><img src="{{url('images/ads/advert3.jpg')}}" class="responsive-img"></a>
            </div>
            <div class="row" id="ads">
                <a href="#"><img src="{{url('images/ads/advert2.jpg')}}" class="responsive-img"></a>
            </div>
            <div class="row" id="ads">
                <a href="#"><img src="{{url('images/ads/advert3.jpg')}}" class="responsive-img"></a>
            </div>


        </div>

    </div>




    {{--article body close--}}
    @include('includes.footer')
@endsection