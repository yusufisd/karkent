@extends('frontend.master')
@section('content')
    <!-- Start Breadcrumb
                                ============================================= -->
    <div class="breadcrumb-area padding-xl text-light dark bg-fixed text-center shadow"
        style="background-image: url(assets/frontend/img/header1.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-99 col-sm-6 text-left" id="ax11" style="top:114px;">
                    <h4 class="soldan"><b> {{ __('msg.kurumsal') }} </b></h4>
                </div>
                <div class="col-md-99 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('frontend.index') }}"> {{ __('msg.anasayfa') }} </a></li>

                        <li class="active soldan"> {{ __('msg.kurumsal') }} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About
                                ============================================= -->
    <div class="about-area bg-gray services-include default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 default info">
                    <h2> {{ $about->title }} </h2>
                    <div style="text-align:justify;">
                        {!! $about->description !!}
                    </div>

                </div>
                <div class="col-md-6 services text-center">
                    <div class="col-md-6 equal-height">
                        <a href="{{ $about->url1 }}">
                            {!! $about->icon1 !!}
                            <h4> {{ $about->title1 }} </h4>
                        </a>
                    </div>
                    <div class="col-md-6 equal-height">
                        <a href="{{ $about->url2 }}">
                            {!! $about->icon2 !!}
                            <h4>{{ $about->title2 }}</h4>
                        </a>
                    </div>
                    <div class="col-md-6 equal-height">
                        <a href="{{ $about->url3 }}">
                            {!! $about->icon3 !!}
                            <h4> {{ $about->title3 }} </h4>
                        </a>
                    </div>
                    <div class="col-md-6 equal-height">
                        <a href="{{ $about->url4 }}">
                            {!! $about->icon4 !!}
                            <h4>{{ $about->title4 }}</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection
