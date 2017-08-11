@extends('layout.master')
{{-- Page Title goes Here--}}
@section('title')Post News @endsection
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
                <h4><i class="material-icons left">mode_edit</i> News Form</h4>
                <form id="post" class="row">
                    <div class="content">
                        <div class="row">
                            <form class="col s12 m12 l12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="title" type="text" required >
                                        <label for="title">News Title Here* </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="introduction" class="materialize-textarea" required></textarea>
                                        <label for="introduction">News Details Goes Here*</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="sub-header1" type="text">
                                        <label for="sub-header1">Give sub-header1 here</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="content1" class="materialize-textarea"></textarea>
                                        <label for="content1">Sub-header1 content goes here</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="sub-header2" type="text">
                                        <label for="sub-header2">Give sub-header2 here</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="content2" class="materialize-textarea"></textarea>
                                        <label for="content2">Sub-header2 content goes here</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="sub-header3" type="text">
                                        <label for="sub-header3">Give sub-header3 here</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="content3" class="materialize-textarea"></textarea>
                                        <label for="content3">Sub-header3 content goes here</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="sub-header4" type="text">
                                        <label for="sub-header4">Give sub-header4 here</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="content4" class="materialize-textarea"></textarea>
                                        <label for="content4">Sub-header4 content goes here</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="sub-header5" type="text">
                                        <label for="sub-header5">Give sub-header5 here</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="content5" class="materialize-textarea"></textarea>
                                        <label for="content5">Sub-header5 content goes here</label>
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