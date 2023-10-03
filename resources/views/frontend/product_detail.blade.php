@extends('frontend.master')
@section('content')
    <!-- Start Breadcrumb
                ============================================= -->
    <div class="breadcrumb-area padding-xl text-light dark bg-fixed text-center shadow"
        style="background-image: url(/assets/frontend/img/header1.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-99 col-sm-6 text-left" id="ax11" style="top:114px;">
                    <h4><b> {{ strtoupper($data->title) }} </b></h4>
                </div>
                <div class="col-md-99 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('frontend.index') }}"> {{ __('msg.anasayfa') }} </a></li>
                        <li class="active"> {{ $data->Category->title }} /</li>
                        <li class="active"> {{ $data->title }} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->


    <!-- Product Details -->


    <div class="portfolio-details default-padding">
        <div class="container">

            <div class="row">

                <div class="col-md-3 items-center">
                    <img src="/{{ $data->image }}" alt="">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-8 conetnt">
                    <h3 style="text-align:left;"> {{ strtoupper($data->title) }} </h3>
                    <p style="text-align:left;">
                        {{ $data->description }}
                    </p>


                </div>
            </div>
        </div>
    </div>
@endsection
