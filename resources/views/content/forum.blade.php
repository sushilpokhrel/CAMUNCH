@extends('layout.master')
{{-- Page Title--}}
@section('title')Forum @endsection
{{--End page title--}}

{{--Place metatags here--}}

{{--End of metatags--}}

{{--Place your stylesheet here--}}
<link rel="stylesheet"  href="{{url('public/frontend/css/forum.css')}}">
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

    {{-------- Forum contents starts here ----------}}
    <div class="row">
        <div class="col s12 m12 l9">
            <div class="row" id="forum" style="background: #fafafa;">
                @if(Auth::user())
                    <h4>Forum
                        <a href="#askquery" class="btn right" >Ask a Question</a></h4>
                @endif
                @foreach($questions as $question)
                    <div class="row">
                        <header><a href="/forum/{{$question->id}}">{{$question->question}}</a></header>
                        <small>{{$question->user->name}} on {{Carbon\Carbon::parse($question->created_at)->toFormattedDateString()}}</small>

                        {{--<li class="right" >
                            <a href="#"><i class="material-icons left">mode_comment</i>Comment</a>
                        </li>--}}
                    </div>
                    <div class="divider"></div>
                @endforeach

                <div>
                    {{$questions->links()}}
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
                <a href="#"><img src="{{url('public/images/ads/advert3.jpg')}}" class="responsive-img"></a>
            </div>
            <div class="row" id="ads">
                <a href="#"><img src="{{url('public/images/ads/advert2.jpg')}}" class="responsive-img"></a>
            </div>
            <div class="row" id="ads">
                <a href="#"><img src="{{url('public/images/ads/advert3.jpg')}}" class="responsive-img"></a>
            </div>


        </div>
    </div>
    {{-------- forum contents ends here ----------}}
    @include('includes.askquery')
    @include('includes.footer')
@endsection
