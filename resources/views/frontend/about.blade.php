@extends('frontend.master')
@section('content')
    <!-- Start Breadcrumb
                ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url(assets/frontend/img/header1.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-99 col-sm-6 text-left" id="ax11" style="top:114px;">
                    <h4><b>KURUMSAL</b></h4>
                </div>
                <div class="col-md-99 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Ana Sayfa</a></li>

                        <li class="active">Kurumsal</li>
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
                    <p style="text-align:left;">
                        {{ $about->description }}
                    </p>

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
    <!-- End About -->
	 <!-- Start Our Story
    ============================================= -->
    <div class="our-story-area default-padding bg-gray">
        <div class="container-fluid">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2> {{__('msg.tarihçe')}} </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="timeline">
                        <div class="timeline-box">
                            <div class="timeline-items">
                                @foreach ($tarihce as $item)
                                    

                                <div class="timeline-item">
                                    <div class="timeline-content">
                                        <h4> {{$item->year}} </h4>
                                        <h5> {{$item->title}} </h5>
                                        <p>
                                            {{$item->description}}
                                        </p>
                                    </div>
                                </div>
                                

                                @endforeach

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
