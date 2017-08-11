@extends('layout.master')
{{-- Page Title--}}
@section('title')Audit Assistant @endsection
{{--End page title--}}

{{--Place metatags here--}}

{{--End of metatags--}}

{{--Place your stylesheet here--}}
<link rel="stylesheet"  href="{{url('public/frontend/css/vacancy.css')}}">
{{--End Stylesheet--}}
@section('body')
    @include('includes.navbar')
    @include('includes.login')
    @include('includes.register')

    {{------ Advertisement section starts ------}}
    <div class="section"></div>
    <div class="row">
        <div class="col s12 m4 l4">
            <a href="#"><img src="{{url('public/images/ads/advert.jpg')}}" class="responsive-img"></a>
        </div>
        <div class="col s12 m4 l4">
            <a href="#"><img src="{{url('public/images/ads/advert.jpg')}}" class="responsive-img"></a>
        </div>
        <div class="col s12 m4 l4">
            <a href="#"><img src="{{url('public/images/ads/advert.jpg')}}" class="responsive-img"></a>
        </div>
    </div>
    {{------ Advertisement ends ------------}}

    <div class="section"></div>

    <div class="row">
        {{-------- Vacancy contents starts here ----------}}
        <div class="col s12 m12 l9">
            <div class="row" id="vacancy" style="background: #fafafa;">
                <h4 >Audit Assistant</h4>
                @foreach($vacancies as $vacancy)
                <div class="row">
                    <header>{{$vacancy->companyname}}</header>
                    <small>on {{\Carbon\Carbon::parse($vacancy->created_at)->toFormattedDateString()}}</small>
                    <p>
                        {!! $vacancy->requirement !!}
                    </p>
                    <a href="/vacancydetails/{{$vacancy->id}}" class="btn left">View Full Details</a>
                </div>
                    <div class="divider"></div>
                @endforeach
                <div class="row" id="link">
                    {{$vacancies->links()}}
                </div>
            </div>
        </div>
        {{-------- Vacancy contents starts here ----------}}

        {{-- Adds starts here --}}
        <div class="col s12 m12 l3">
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


        </div>
        {{-- Adds ends here --}}
    </div>

    {{----- Footer starts ---------}}
    @include('includes.footer')
    {{------ Footer ends ----------}}
@endsection