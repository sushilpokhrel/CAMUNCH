@extends('layout.master')
{{--Page title--}}
@section('title')Income Tax @endsection
{{--End page title--}}

{{--Place metatags here--}}

{{--End of metatags--}}

{{--Place your stylesheet here--}}
<link rel="stylesheet"  href="{{url('public/frontend/css/article.css')}}">
{{--End Stylesheet--}}
@section('body')
    @include('includes.navbar')
    @include('includes.login')
    @include('includes.register')
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

    <div class="row">
        <div class="col s12 m12 l9">
            {{-- latest articles shortcut starts here --}}
            <div class="row" id="article" style="background: #fafafa;">
                <h4>Articles</h4>
                @foreach($articles as $article)
                <div class="row">
                    <header>{{$article->title}}</header>
                    <small><a href="#">{{ucfirst($article->user->name)}}</a> on {{\Carbon\Carbon::parse($article->created_at)->toFormattedDateString()}}</small>
                    <p>
                    <?php $small = substr($article->post, 0, 100); ?>
                    <p>{!! $small !!}</p>
                        <br><a href="/articledetails/{{$article->id}}">Read More</a>
                    </p>
                    {{--<li class="right" >
                        <a href="#"><i class="material-icons left">mode_comment</i>Comment</a>
                    </li>--}}
                </div>
                <div class="divider"></div>
                @endforeach
                <div class="divider"></div>
                <div class="row" id="link">
                    {{--links--}}
                    {{$articles->links()}}
                </div>


            </div>
            {{-- latest articles shortcut ends here --}}

        </div>

        <div class="col s12 m12 l3">
            <div class="row" id="ads">
                <a href="#"><img src="{{url('public/images/ads/advert2.jpg')}}" class="responsive-img"></a>
            </div>
            {{--<div class="section"></div>--}}
            <div class="row" id="ads">
                <a href="#"><img src="{{url('public/images/ads/advert3.jpg')}}" class="responsive-img"></a>
            </div>


        </div>

    </div>





    {{--article body close--}}
    @include('includes.footer')
    @endsection