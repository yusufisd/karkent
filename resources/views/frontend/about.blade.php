@extends('frontend.master')
@section('content')
    <!-- Start Breadcrumb
                            ============================================= -->
    <div class="breadcrumb-area padding-xl text-light dark bg-fixed text-center shadow"
        style="background-image: url(assets/frontend/img/header1.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-99 col-sm-6 text-left" id="ax11" style="top:114px;">
                    <h4><b> {{ strtoupper(__('msg.kurumsal')) }} </b></h4>
                </div>
                <div class="col-md-99 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="{{route('frontend.index')}}"> {{ __('msg.anasayfa') }} </a></li>

                        <li class="active"> {{ strtoupper(__('msg.kurumsal')) }} </li>
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
                    <div class="timeline timeline--loaded timeline--horizontal" style="opacity: 1;">
                        <div class="timeline-box">
                            <div class="timeline-items" style="width: 6202px; height: 410px; transform: translate3d(0px, 0px, 0px);">
                                <div class="timeline-item" style="width: 443px; height: 205px;">
                                    <div class="timeline-item__inner"><div class="timeline-content__wrap"><div class="timeline-content">
                                        <h4>1980</h4>
                                        <h5>Kuruluş</h5>
                                        <p>
                                            Karkent Tekstil’in temelleri Bursa Gürsu’da atıldı.
                                        </p>
                                    </div></div></div>
                                </div>
                                <div class="timeline-item" style="width: 443px; height: 205px; transform: translateY(205px);">
                                    <div class="timeline-item__inner"><div class="timeline-content__wrap"><div class="timeline-content">
                                        <h4>1993</h4>
                                        <h5>Etiketlik</h5>
                                        <p>
                                            Etiketlik kumaş sektörünün önde gelen firmaları arasına girmeyi başardı.
                                        </p>
                                    </div></div></div>
                                </div>
                                <div class="timeline-item" style="width: 443px; height: 205px;">
                                    <div class="timeline-item__inner"><div class="timeline-content__wrap"><div class="timeline-content">
                                        <h4>2000</h4>
                                        <h5>Dokuma</h5>
                                        <p>
                                            Gömleklik kumaş alanında adından söz edilen firmaların arasında yerini aldı.
                                        </p>
                                    </div></div></div>
                                </div>
                                <div class="timeline-item" style="width: 443px; height: 205px; transform: translateY(205px);">
                                    <div class="timeline-item__inner"><div class="timeline-content__wrap"><div class="timeline-content">
                                        <h4>2005</h4>
                                        <h5>İhracat</h5>
                                        <p>
                                            Ürünlerini yurtdışı pazara taşıyarak ilk ihracatlarını yaptı.
                                        </p>
                                    </div></div></div>
                                </div>
                                <div class="timeline-item" style="width: 443px; height: 205px;">
                                    <div class="timeline-item__inner"><div class="timeline-content__wrap"><div class="timeline-content">
                                        <h4>2009 </h4>
                                        <h5>Başarı</h5>
                                        <p>
                                            Ticaret ve Sanayi odasınca belirlenen Ekonomiye değer katanlar listesine 192. sıradan giriş yaptı.
                                        </p>
                                    </div></div></div>
                                </div>
                                <div class="timeline-item" style="width: 443px; height: 205px; transform: translateY(205px);">
                                    <div class="timeline-item__inner"><div class="timeline-content__wrap"><div class="timeline-content">
                                        <h4>2011</h4>
                                        <h5>Gelişim</h5>
                                        <p>
                                            Ekonomiye değer katanlar listesinde 20 firmayı daha geride bırakarak 172. sıraya yükseldi.
                                        </p>
                                    </div></div></div>
                                </div>
                                <div class="timeline-item" style="width: 443px; height: 205px;">
                                    <div class="timeline-item__inner"><div class="timeline-content__wrap"><div class="timeline-content">
                                        <h4>2013</h4>
                                        <h5>Liderlik</h5>
                                        <p>
                                            25 farklı ülkeye ihracat yaparak, tekstil alanında liderler arasına girdi.
                                        </p>
                                    </div></div></div>
                                </div>
                                <div class="timeline-item" style="width: 443px; height: 205px; transform: translateY(205px);">
                                    <div class="timeline-item__inner"><div class="timeline-content__wrap"><div class="timeline-content">
                                        <h4>2013</h4>
                                        <h5>Yükselen Değer</h5>
                                        <p>
                                            Ekonomiye değer katanlar listesinde 162. olurken, bir önceki listeye göre 10 firmanın daha önüne geçti.
                                        </p>
                                    </div></div></div>
                                </div>
                                <div class="timeline-item" style="width: 443px; height: 205px;">
                                    <div class="timeline-item__inner"><div class="timeline-content__wrap"><div class="timeline-content">
                                        <h4>2017</h4>
                                        <h5>İstihdam</h5>
                                        <p>
                                            Çalışan sayısı 100’ün üzerine çıktı ve Bursa’nın istihdama katkı sağlayan firmalarından birisi haline geldi.
                                        </p>
                                    </div></div></div>
                                </div>
                                <div class="timeline-item" style="width: 443px; height: 205px; transform: translateY(205px);">
                                    <div class="timeline-item__inner"><div class="timeline-content__wrap"><div class="timeline-content">
                                        <h4>2018</h4>
                                        <h5>Dokuma Tezgâhı</h5>
                                        <p>
                                            Bünyesine kattığı yeni üretim ağıyla toplamda 128 dokuma tezgahına ulaştı ve yıllık kapasitesi 10 milyon mt oldu.
                                        </p>
                                    </div></div></div>
                                </div>
                                <div class="timeline-item" style="width: 443px; height: 205px;">
                                    <div class="timeline-item__inner"><div class="timeline-content__wrap"><div class="timeline-content">
                                        <h4>2018</h4>
                                        <h5>Müze &amp; Restaurant</h5>
                                        <p>
                                            Girişimcilik ve yenilikçilik anlayışıyla, Karkent bünyesinde Tekstil Müze &amp; Restaurant kuruldu ve ziyaretçilere açıldı. 
                                        </p>
                                    </div></div></div>
                                </div>
                                <div class="timeline-item" style="width: 443px; height: 205px; transform: translateY(205px);">
                                    <div class="timeline-item__inner"><div class="timeline-content__wrap"><div class="timeline-content">
                                        <h4>2019</h4>
                                        <h5>İhracat</h5>
                                        <p>
                                            Pandemiden önceki son sezonda rekor kırarak yaklaşık 50 farklı ülkeye ihracat gerçekleştirdi.
                                        </p>
                                    </div></div></div>
                                </div>
                                <div class="timeline-item" style="width: 443px; height: 205px;">
                                    <div class="timeline-item__inner"><div class="timeline-content__wrap"><div class="timeline-content">
                                        <h4>2022</h4>
                                        <h5>Konfeksiyon</h5>
                                        <p>
                                            Pandemi sonrası yatırımlara ara vermeden devam ederek bünyesine konfeksiyonu kattı ve gömlek üretimine başladı.
                                        </p>
                                    </div></div></div>
                                </div>
                                <div class="timeline-item" style="width: 443px; height: 205px; transform: translateY(205px);">
                                    <div class="timeline-item__inner"><div class="timeline-content__wrap"><div class="timeline-content">
                                        <h4>2023</h4>
                                        <h5>Boyahane</h5>
                                        <p>
                                            Boyahane işletmesini kendi bünyesine alarak yıllık 12 milyon mt gömleklik kumaş üretim kapasitesine ulaştı.
                                        </p>
                                    </div></div></div>
                                </div>
                            </div>
                        </div>
                    <button class="timeline-nav-button timeline-nav-button--prev" disabled="" style="top: 205px;">Previous</button><button class="timeline-nav-button timeline-nav-button--next" style="top: 205px;">Next</button><span class="timeline-divider" style="top: 205px;"></span></div>
                </div>
            </div>
        </div>
    </div>


    
@endsection
