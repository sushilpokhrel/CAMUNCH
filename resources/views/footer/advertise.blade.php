{{--@extends('layout.master')
--}}{{--Page Title--}}{{--
@section('title')Advertise @endsection
--}}{{--End Page Title--}}{{--
--}}{{--Place metatags here--}}{{--

--}}{{--End of metatags--}}{{--

--}}{{--Place your stylesheet here--}}{{--
<link rel="stylesheet"  href="{{url('public/frontend/css/advertise.css')}}">
--}}{{--End Stylesheet--}}{{--

@section('body')
    @include('includes.navbar')
    @include('includes.login')
    @include('includes.register')--}}
<div id="modal1" class="modal">
    <div class="modal-content">
        {{--<div class="section"></div>--}}
        <div class="row">
            {{--<div class="col s12 l8">--}}
                <form>
                    <div class="section"></div>
                    <div class="row">
                        <h4 class="center">You need To Register First</h4>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <label for="uname">Name*</label>
                            <input id="uname" name="uname" data-error=".errorTxt1" type="text" required >
                            <div class="errorTxt1"></div>
                        </div>
                        <div class="input-field col s12">
                            <label for="uname">Organisation*</label>
                            <input id="uname" name="uname" data-error=".errorTxt1" type="text" required >
                            <div class="errorTxt1"></div>
                        </div>
                        <div class="input-field col s12">
                            <label for="cemail">E-Mail *</label>
                            <input id="cemail" name="cemail" data-error=".errorTxt2" type="email" required >
                            <div class="errorTxt2"></div>
                        </div>
                        <div class="input-field col s12">
                            <label for="phonenum">Contact Number</label>
                            <input id="phonenum" type="tel" required  >
                        </div>


                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea1" class="materialize-textarea" required ></textarea>
                                <label for="textarea1">Message</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light right submit" type="submit" name="action">Submit
                                    <i class="mdi-content-send right"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            {{--</div>--}}

        </div>
    </div>
</div>

    {{--@include('includes.footer')--}}