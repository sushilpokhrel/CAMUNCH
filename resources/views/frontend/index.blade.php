@extends('layout.master')
{{--Page title--}}
    @section('title')CA MUNCH NEPAL @endsection
{{--End page title--}}

{{--Place metatags here--}}

{{--End of metatags--}}

{{--Place your stylesheet here--}}
    <link rel="stylesheet"  href="{{url('public/frontend/css/index.css')}}">
{{--End Stylesheet--}}

    @section('body')
        @include('includes.navbar')
        @include('includes.login')
        @include('includes.register')
        @include('includes.session')


        {{--Index parallax with a welcome text--}}
        <div class="parallax-container">
            <div class="parallax"><img  src="{{url('public/images/'.$content->coverimage)}}"></div>
            <div class="welcome-text">
                <h1>{{$content->caption}}</h1>
            </div>
        </div>
        {{--End of index parallax--}}
        {{--Body content--}}


        <div class="section"></div>
        <div class="row">
            <a href="#" class="col s12 m12 l12">
                <img class="responsive-img" src="{{url('public/images/ads/bannersize.jpg')}}"></a>
        </div>
        <div class="row">
            <div class = "center-align">
                <h4 style = "color:#ff9969">Latest Articles</h4>
            </div>
            <div class="divider"></div>
            <div class="row">
                @foreach($articles as $article)
                    <a href = "/articledetails/{{$article->id}}" class="col m6 s12">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <span class="card-title center-align">{{$article->title}}</span>
                                <?php $small = substr($article->post, 0, 100); ?>
                                <p>{!! $small !!}</p>
                            </div>
                            <div class="card-action">
                                <div class = "pull-right">{{ucfirst($article->user->name)}}</div>
                                <div class = "pull-left" href="#">{{\Carbon\Carbon::parse($article->created_at)->toFormattedDateString()}}</div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <hr>
        <div class="row">
            <div class = "center-align">
                <h4 style = "color:#ff9969">Latest News</h4>
            </div>
            <div class="divider"></div>
            <div class="row">
                @foreach($news as $article)
                    <a href = "/newsdetails/{{$article->id}}" class="col m6 s12">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <span class="card-title center-align">{{$article->title}}</span>
                                <?php $small = substr($article->post, 0, 100); ?>
                                <p>{!! $small !!}</p>
                            </div>
                            <div class="card-action">
                                <div class = "left-align">Written By : {{ucfirst($article->user->name)}}</div>
                                <div class = "right-align" href="#">{{\Carbon\Carbon::parse($article->created_at)->toFormattedDateString()}}</div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l8">

                {{-------------- Links to Content Starts Here ----------------------}}

                {{-------------------------- Links to contents Ends -----------------------------------}}

          {{--      <div class="divider"></div>--}}

                {{------------Link to FAQs along with GST is placed here ----------------}}

                <div class="row">
                    {{----------------------- FAQs Starts -----------------}}

                            <h5 class = "center-align">Fourm Questions</h5>
                    <hr>
                    @foreach($forum as $f)
                    <div>
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <span class="card-title center-align">
                                     <i class="material-icons left">arrow_forward</i>
                                    <a style = "color:black" href="/forum/{{$f->id}}">
                                        {{$f->question}}
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                            <div class="divider"></div>



                        </div>
                    </div>
                    {{------------------ FAQs Ends --------------------------------}}

                    {{----------- GST is placed here ------------}}

                    {{--<div class="col s12 m6 l6">
                        <div class="row">
                            <a href="#" class="responsive-img">
                                <img src="{{url('public/images/gst/gst1.jpg')}}">
                            </a>
                        </div>


                        <div class="row">

                        </div>

                    </div>--}}

                    {{------------------- GST Ends -------------------}}

                </div>

        <div class="col s12 m12 l4">

            </div>

        <div class="section"></div>
        <div class="container-fluid">
            <a href="#"><img src="{{url('public/images/adds/ps4.jpg')}}"></a>
        </div>

        <div class="section"></div>







        @include('includes.footer')
        {{--@include('footer.advertise')--}}
    @endsection


{{--Place your scripts here--}}

{{--End of scripts--}}