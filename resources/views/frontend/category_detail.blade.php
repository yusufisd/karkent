@extends('frontend.master')
@section('content')
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url(/assets/frontend/img/header1.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-99 col-sm-6 text-left" id="ax11" style="top:114px;">
                    <h4><b>KOLEKSİYONLAR</b></h4>
                </div>
                <div class="col-md-99 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Ana Sayfa</a></li>

                        <li class="active">KOLEKSİYONLAR aaa</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="default1993">
        <div class="container">
            <div class="row" style="min-height: 50vh">

                @foreach ($data as $item)
                    
                <div class="service-item col-md-4">
                    <div class="info-box">
                        <img src="/{{$item->image}}" alt="Thumb">
                        <div class="info-title">
                            <h4>
                                <a href="#"> {{$item->title}} </a>
                                <i class="flaticon-board"></i>
                            </h4>
                        </div>
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <div class="overlay-content">
                                        <h4><a href="#"> {{$item->title}} </a></h4>
                                        <p>
                                           {{substr($item->description,0,50)}}
                                        </p>
                                        <a href="product-detail.html">İncele</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
        </div>
    </section>
@endsection
