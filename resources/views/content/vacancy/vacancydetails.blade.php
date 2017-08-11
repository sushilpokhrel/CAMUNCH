@extends('layout.master')
{{-- Page Title--}}
@section('title')Company Name @endsection
{{--End page title--}}

{{--Place metatags here--}}

{{--End of metatags--}}

{{--Place your stylesheet here--}}
<link rel="stylesheet"  href="{{url('public/frontend/css/vacancydetails.css')}}">
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

    <div class="row">
        {{-------- Vacancy Details starts here ----------}}
        <div class="col s12 m12 l9">
            <div class="row" id="vacancy-details"  style=" background: #fafafa;  ">
                <h4 >{{$vacancy->companyname}} Vacancy Details <a href="/apply/{{$vacancy->id}}" class="btn right">Apply</a></h4>
                <div class="row">
                    <div class="col s12 l4">
                        <header>Name</header>
                    </div>
                    <div class="col s12 l8">
                        <div class="section">
                            <content>{{$vacancy->companyname}}</content>
                        </div>

                    </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <div class="col s12 l4">
                        <header>Job Title </header>
                    </div>
                    <div class="col s12 l8">
                        <div class="section">
                            <content>@if ($vacancy->title == 0) Article/Audit Assitant @else Qualified/Semi-Qualified CA @endif</content>
                        </div>

                    </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <div class="col s12 l4">
                        <header>Number of seats</header>
                    </div>
                    <div class="col s12 l8">
                        <div class="section">
                            <content>{{$vacancy->number}}</content>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <div class="col s12 l4">
                        <header>Email</header>
                    </div>
                    <div class="col s12 l8">
                        <div class="section">
                            <content>{{$vacancy->email}}</content>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <div class="col s12 l4">
                        <header>Address</header>
                    </div>
                    <div class="col s12 l8">
                        <div class="section">
                            <content>{{$vacancy->address}}</content>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <div class="col s12 l4">
                        <header>Requirements</header>
                    </div>
                    <div class="col s12 l8">
                        <div class="section">
                            <content>{!! $vacancy->requirements !!}</content>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <div class="col s12 l4">
                        <header>Last Date To Apply</header>
                    </div>
                    <div class="col s12 l8">
                        <div class="section">
                            <content>{{\Carbon\Carbon::parse($vacancy->created_at)->toFormattedDateString()}}</content>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
            {{-- Ads goes here --}}
        </div>

        <div class="col s12 m12 l3">
            <div class="row" id="ads">
                <a href="#"><img src="{{url('public/images/ads/advert2.jpg')}}" class="responsive-img"></a>
            </div>
            {{--<div class="section"></div>--}}
            <div class="row" id="ads">
                <a href="#"><img src="{{url('public/images/ads/advert3.jpg')}}" class="responsive-img"></a>
            </div>
            <div class="row" id="ads">
                <a href="#"><img src="{{url('public/images/ads/advert2.jpg')}}" class="responsive-img"></a>
            </div>
            <div class="row" id="ads">
                <a href="#"><img src="{{url('public/images/ads/advert3.jpg')}}" class="responsive-img"></a>
            </div>
            {{--<div class="row" id="ads">
                <a href="#"><img src="{{url('public/images/ads/advert2.jpg')}}" class="responsive-img"></a>
            </div>--}}
            {{--<div class="row" id="ads">--}}
            {{--<a href="#"><img src="{{url('public/images/ads/advert3.jpg')}}" class="responsive-img"></a>--}}
            {{--</div>--}}
            {{--<div class="row" id="ads">--}}
            {{--<a href="#"><img src="{{url('public/images/ads/advert2.jpg')}}" class="responsive-img"></a>--}}
            {{--</div>--}}
        </div>

    </div>





    @include('includes.footer')
@endsection