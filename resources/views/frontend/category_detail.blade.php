@extends('frontend.master')
@section('content')
    <div class="breadcrumb-area padding-xl text-light dark bg-fixed text-center shadow"
        style="background-image: url(/assets/frontend/img/header1.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-99 col-sm-6 text-left" id="ax11" style="top:114px;">
                    <h4 class="soldan"><b>{{$baslik->title}}</b></h4>
                </div>
                <div class="col-md-99 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="index.html"> {{__('msg.anasayfa')}} </a></li>

                        <li class="active soldan"> {{$baslik->title}} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="default1993">
        <div class="container">
            <div class="row" style="min-height: 50vh;margin-bottom:30px">

                @foreach ($data as $item)
                    <div class="service-item col-md-4" style="margin-bottom:50px">
                        <div class="info-box">
                            <img src="/{{ $item->image }}" alt="Thumb">
                            <div class="info-title">
                                <h4 style="text-color:white!important">
                                    <a href="#" style="color:white"> {{ $item->title }} </a>
                                    <i class="flaticon-board"></i>
                                </h4>
                            </div>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <div class="overlay-content">
                                            <h4 ><a href="{{ $item->link != null ? $item->link : route('frontend.product.detail', $item->id) }}"> {{ $item->title }} </a></h4>
                                            <p style="color:white">
                                                {{ substr($item->description, 0, 50) }}
                                            </p>
                                            <a {{ $item->link != null ? 'target="_blank"' : '' }}
                                                href="{{ $item->link != null ? $item->link : route('frontend.product.detail', $item->id) }}">
                                                İncele</a>

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
