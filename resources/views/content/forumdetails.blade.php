@extends('layout.master')
{{-- Page Title--}}
@section('title')Forum head @endsection
{{--End page title--}}

{{--Place metatags here--}}

{{--End of metatags--}}

{{--Place your stylesheet here--}}
<link rel="stylesheet"  href="{{url('public/frontend/css/forumdetails.css')}}">
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

    {{-- Forum Details content starts here --}}
    <div class="row container">

        {{-- Content part goes here --}}
        <div class="col s12 m12 l12">

            <div class="row" id="forum-details" style="background: #fafafa;">
                <h4>{{$question->question}}</h4>
                @if(Auth::user())
                <div class="row">
                    <div class="center-align">
                        <a href="#answer" class="btn">Answer</a>
                    </div>
                </div>
                @endif

                <h4>Answers</h4>
                @foreach($question->answers as $answer)
                    <div class="row">
                        <div class="row center-align">
                            <header>By : {{ucfirst($answer->user->name)}}<small> on {{Carbon\Carbon::parse($answer->created_at)->toFormattedDateString()}}</small></header>
                        </div>
                        <p class = "container" style = "background: #ccc">
                            {!! $answer->answer !!}
                        </p>
                    </div>
                    <div class="divider"></div>
                @endforeach
                </div>
            </div>

            <div class="row">
                <a href="#"><img src="{{url('public/images/ads/advert1.jpg')}}" class="responsive-img center-block"> </a>
            </div>
    </div>
    @include('includes.answer')
    @include('includes.footer')
@endsection