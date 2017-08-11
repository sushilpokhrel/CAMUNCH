@extends('layout.master')
{{-- Page Title goes Here--}}
@section('title')Post Vacancy @endsection
{{--End page title--}}

{{--Place metatags here--}}

{{--End of metatags--}}

{{--Place your stylesheet here--}}
<link rel="stylesheet"  href="{{url('frontend/css/post.css')}}">
{{--End Stylesheet--}}
@section('body')
    @include('includes.navbar')
    @include('includes.login')
    @include('includes.register')
    {{------ Advertisement section starts ------}}
    <div class="section"></div>
    <div class="row">

        <div class="col s12 m6 l6">
            <a href="#"><img src="{{url('images/ads/advert5.jpg')}}" class="responsive-img"></a>
        </div>
        <div class="col s12 m6 l6">
            <a href="#"><img src="{{url('images/ads/advert5.jpg')}}" class="responsive-img"></a>
        </div>
    </div>
    {{------ Advertisement ends ------------}}

    <div class="row">

        <div class="col s12 l9">
            <div class="row" style="background: #fafafa">
                <h4><i class="material-icons left">mode_edit</i> Vacancy Post Form</h4>
                <form id="post" class="row">
                    <div class="content">
                        <div class="row">
                            <form class="col s12 m12 l12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="title" type="text" required >
                                        <label for="title">Company Name Here* </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="job-post" type="text" required >
                                        <label for="job-post">Job Post Here* </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="number" class="validate" type="number" required >
                                        <label for="number" data-error="Please enter number">Number of Candidates Required* </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="contact" class="validate" type="number" required >
                                        <label for="number" data-error="Please enter valid Contact number">Contact Number* </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="validate" required >
                                        <label for="email" data-error="Please enter a valid address">Email*</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="address" type="text" required >
                                        <label for="address">Address of Company Here* </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="requirements" class="materialize-textarea"></textarea>
                                        <label for="requirements">Candidate Qualifications Goes Here*</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="deadline">Deadline Date Here* </label><br><br>
                                        <input id="deadline" type="date" class="datepicker" required>
                                    </div>
                                </div>

                                <div class="row left">
                                    <button class="btn" type="submit" name="action">Submit
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{-- Ads goes here --}}
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
            {{--<div class="row" id="ads">
                <a href="#"><img src="{{url('images/ads/advert2.jpg')}}" class="responsive-img"></a>
            </div>--}}
            {{--<div class="row" id="ads">--}}
            {{--<a href="#"><img src="{{url('images/ads/advert3.jpg')}}" class="responsive-img"></a>--}}
            {{--</div>--}}
            {{--<div class="row" id="ads">--}}
            {{--<a href="#"><img src="{{url('images/ads/advert2.jpg')}}" class="responsive-img"></a>--}}
            {{--</div>--}}
        </div>
    </div>

    @include('includes.footer')