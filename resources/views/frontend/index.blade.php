@extends('frontend.master')
@section('content')

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area">
        <div id="bootcarousel" class="carousel slide transparent-nav animate_text carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
           <div class="banner-area">
        <div id="bootcarousel" class="carousel slide transparent-nav animate_text carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner text-light carousel-zoom">
                
                <div class="item active">
                    <div class="slider-thumb bg-fixed" style="background-image: url(assets/frontend/img/slider1.png);"></div>
                    <div class="box-table shadow theme">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="content">
                                            <h1 data-animation="animated slideInLeft">Karkent Tekstil</h1>
                                            <p data-animation="animated slideInUp">
                                                Gömleklik Kumaşta 41 Yıllık Tecrübe
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-light effect btn-sm" href="about.html">Kurumsal</a>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-sm" href="contact.html">İletİşİm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="slider-thumb bg-fixed" style="background-image: url(assets/frontend/img/slider2.jpg);"></div>
                    <div class="box-table shadow theme">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="content">
                                            <h1 data-animation="animated slideInLeft">Kardrop</h1>
                                            <p data-animation="animated slideInUp">
                                                Online Etiketlik Kumaş Satışı
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-light effect btn-sm" href="https://www.kardrop.com.tr/etiketlik-kumas">Web Sİtesİ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="slider-thumb bg-fixed" style="background-image: url(assets/frontend/img/slider3.jpg);"></div>
                    <div class="box-table shadow theme">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="content">
                                            <h1 data-animation="animated slideInLeft">Karkent Tekstil</h1>
                                            <p data-animation="animated slideInUp">
                                                Sertifikalandırılmış Üretim Süreçleri
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="slider-thumb bg-fixed" style="background-image: url(assets/frontend/img/slider4.jpg);"></div>
                    <div class="box-table shadow theme">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="content">
                                            <h1 data-animation="animated slideInLeft">Bilgisayar Destekli Üretim</h1>
                                            <p data-animation="animated slideInUp">
                                                Son teknoloji donanımlar ile bilgisayar destekli üretim.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="slider-thumb bg-fixed" style="background-image: url(assets/frontend/img/slider5.jpg);"></div>
                    <div class="box-table shadow theme">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="content">
                                            <h1 data-animation="animated slideInLeft">Tek Depoda</h1>
                                            <p data-animation="animated slideInUp">
                                                Binlerce Desen ve Yüz Binlerce Stok Depoda
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- End Wrapper for slides -->


            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->

     <!-- Start Features 
    ============================================= -->
    <div class="features-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="features-items">
                        <div class="col-md-4">
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-presentation"></i>
                                </div>
                                <div class="info">
                                    <h4> {{$page_def1->title1}} </h4>
                                    <p>
                                        {{$page_def1->description1}}
                                    </p>
                                    <!-- <a href="#">Devamı<i class="fas fa-long-arrow-alt-right"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-collaboration"></i>
                                </div>
                                <div class="info">
                                    <h4> {{$page_def1->title2}} </h4>
                                    <p>
                                        {{$page_def1->description2}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="icon">
                                    <i class="flaticon-id"></i>
                                </div>
                                <div class="info">
                                    <h4> {{$page_def1->title3}} </h4>
                                    <p>
                                        {{$page_def1->description3}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features -->
<!-- Start Welcome 
    ============================================= -->
    <div class="about-area video-info default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 video-info thumb">
                    <img src="assets/frontend/img/kare.jpg" alt="Thumb">
                    <div class="overlay-video">
                        <a href="https://www.youtube.com/watch?v=vQqZIFCab9o" class="popup-youtube video-play-button">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 default info">
                    <h2> {{$page_def2->title}} </h2>
                    <p style="text-align: left;"> 
                        {{$page_def2->description}}
                    </p>
                    <div class="bottom-info" style="    margin-left: 199px;">
                        <ul>
                            <li>
                                <a class="btn btn-theme effect btn-sm " href="{{$page_def2->button_url}}"> {{$page_def2->button_title}} </a>
                            </li>
                            <li><i class=""></i> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Welcome -->
	 <!-- Start Fun Factor 
    ============================================= -->
    <div class="fun-factor-area default-padding text-center bg-fixed shadow theme-hard parallax parralax-shadow" data-parallax="scroll" style="background-image: url(assets/frontend/img/client.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3 col-sm-6 item">
                        <div class="fun-fact">
                            {!!$page_def3->icon1!!}
                            <div class="timer" data-to="{{$page_def3->title1_1}}" data-speed="5000">{{$page_def3->title1_1}}</div>
                            <span class="medium"> {{$page_def3->title1_2}} </span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 item">
                        <div class="fun-fact">
                            {!!$page_def3->icon2!!}
                            <div class="timer" data-to="{{$page_def3->title2_1}}" data-speed="5000"></div>
                            <span class="medium">{{$page_def3->title2_2}}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 item">
                        <div class="fun-fact">
                            {!!$page_def3->icon3!!}
                            <div class="timer" data-to="{{$page_def3->title3_1}}" data-speed="5000"></div>
                            <span class="medium">{{$page_def3->title3_2}}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 item">
                        <div class="fun-fact">
                            {!!$page_def3->icon4!!}
                            <div class="timer" data-to="{{$page_def3->title4_1}}" data-speed="5000"></div>
                            <span class="medium">{{$page_def3->title4_2}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor -->
	
    <!-- Start How it Work
    ============================================= -->
    <div class="works-rules-area default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2> {{$page_def4->title}} </h2>
                        <p>
                            {{$page_def4->description}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="works-rules-items">
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                {!!$page_def4->icon1!!}
                            </div>
                            <div class="vertical-line">
                                <span>1</span>
                            </div>
                            <div class="info">
                                <h4> {{$page_def4->title1}} </h4>
                                <p>
                                    {{$page_def4->description1}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="info">
                                <h4>{{$page_def4->title2}}</h4>
                                <p>
                                    {{$page_def4->description1}}
                                </p>
                            </div>
                            <div class="vertical-line bottom">
                                <span>2</span>
                            </div>
                            <div class="icon icon-down"><br><br><br><br>
                                {!!$page_def4->icon2!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon">
                                {!!$page_def4->icon3!!}
                            </div>
                            <div class="vertical-line">
                                <span>3</span>
                            </div>
                            <div class="info">
                                <h4>{{$page_def4->title3}}</h4>
                                <p>
                                    {{$page_def4->description1}}
                                </p>
                            </div>
                        </div>
                    </div>
               <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="info">
                                <h4>{{$page_def4->title4}}</h4>
                                <p>
                                    {{$page_def4->description1}}
                                </p>
                            </div>
                            <div class="vertical-line bottom">
                                <span>4</span>
                            </div>
                            <div class="icon icon-down"><br><br><br><br>
                                {!!$page_def4->icon4!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End How it Work -->
	<!-- Clients
    ============================================= -->
    <div class="clients-area bg-theme default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-items owl-carousel owl-theme text-center">

                        @foreach ($sponsors as $item)
                            
                        <div class="single-item">
                            <a href="#"><img style="width: 100%" src="/{{$item->logo}}" alt="Clients"></a>
                        </div>

                        @endforeach

                        {{-- <div class="single-item">
                            <a href="#"><img src="assets/frontend/img/2.jpg" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/frontend/img/3.jpg" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/frontend/img/4.jpg" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/frontend/img/5.jpg" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/frontend/img/6.jpg" alt="Clients"></a>
                        </div>
                        <div class="single-item">
                            <a href="#"><img src="assets/frontend/img/7.jpg" alt="Clients"></a>
                        </div>
                        --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients -->
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

                                {{-- 
                                    <div class="timeline-item">
                                    <div class="timeline-content">
                                        <h4>1993</h4>
                                        <h5>Etiketlik</h5>
                                        <p>
                                            Etiketlik kumaş sektörünün önde gelen firmaları arasına girmeyi başardı.
                                        </p>
                                    </div>
                                </div>
                                    <div class="timeline-item">
                                    <div class="timeline-content">
                                        <h4>2000</h4>
                                        <h5>Dokuma</h5>
                                        <p>
                                            Gömleklik kumaş alanında adından söz edilen firmaların arasında yerini aldı.
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-content">
                                        <h4>2005</h4>
                                        <h5>İhracat</h5>
                                        <p>
                                            Ürünlerini yurtdışı pazara taşıyarak ilk ihracatlarını yaptı.
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-content">
                                        <h4>2009 </h4>
                                        <h5>Başarı</h5>
                                        <p>
                                            Ticaret ve Sanayi odasınca belirlenen Ekonomiye değer katanlar listesine 192. sıradan giriş yaptı.
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-content">
                                        <h4>2011</h4>
                                        <h5>Gelişim</h5>
                                        <p>
                                            Ekonomiye değer katanlar listesinde 20 firmayı daha geride bırakarak 172. sıraya yükseldi.
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-content">
                                        <h4>2013</h4>
                                        <h5>Liderlik</h5>
                                        <p>
                                            25 farklı ülkeye ihracat yaparak, tekstil alanında liderler arasına girdi.
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-content">
                                        <h4>2013</h4>
                                        <h5>Yükselen Değer</h5>
                                        <p>
                                            Ekonomiye değer katanlar listesinde 162. olurken, bir önceki listeye göre 10 firmanın daha önüne geçti.
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-content">
                                        <h4>2017</h4>
                                        <h5>İstihdam</h5>
                                        <p>
                                            Çalışan sayısı 100’ün üzerine çıktı ve Bursa’nın istihdama katkı sağlayan firmalarından birisi haline geldi.
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-content">
                                        <h4>2018</h4>
                                        <h5>Dokuma Tezgâhı</h5>
                                        <p>
                                            Bünyesine kattığı yeni üretim ağıyla toplamda 128 dokuma tezgahına ulaştı ve yıllık kapasitesi 10 milyon mt oldu.
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-content">
                                        <h4>2018</h4>
                                        <h5>Müze & Restaurant</h5>
                                        <p>
                                            Girişimcilik ve yenilikçilik anlayışıyla, Karkent bünyesinde Tekstil Müze & Restaurant kuruldu ve ziyaretçilere açıldı. 
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-content">
                                        <h4>2019</h4>
                                        <h5>İhracat</h5>
                                        <p>
                                            Pandemiden önceki son sezonda rekor kırarak yaklaşık 50 farklı ülkeye ihracat gerçekleştirdi.
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-content">
                                        <h4>2022</h4>
                                        <h5>Konfeksiyon</h5>
                                        <p>
                                            Pandemi sonrası yatırımlara ara vermeden devam ederek bünyesine konfeksiyonu kattı ve gömlek üretimine başladı.
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-content">
                                        <h4>2023</h4>
                                        <h5>Boyahane</h5>
                                        <p>
                                            Boyahane işletmesini kendi bünyesine alarak yıllık 12 milyon mt gömleklik kumaş üretim kapasitesine ulaştı.
                                        </p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Story -->
   

   

    

    <!-- Start Business Growth
    ============================================= -->
    <div class="business-groth-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 default info">
                    <h2>Annual Report <br>from starting to now</h2>
                    <p>
                        Both rest of know draw fond post as. It agreement defective to excellent. Feebly do engage of narrow. Extensive repulsive belonging depending if promotion be zealously as. Preference inquietude ask now are dispatched led appearance. Small meant in so doubt hopes. Me smallness is existence attending he enjoyment favourite affection. Delivered is to ye belonging enjoyment preferred. <br> Drawings me opinions returned absolute in. Otherwise therefore sex did are unfeeling something. Certain be ye amiable by exposed so. To celebrated estimating excellence do.
                    </p>
                    <a class="btn btn-theme effect btn-sm" href="#">View details</a>
                </div>
                <div class="col-md-6">
                    <div class="lineChart">
                        <canvas id="lineChart" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Business Growth -->
	
	 <!-- Start WhatsApp ============================================= -->


			<div class="tooltip1">
					<span class="tooltiptext1">Merhaba Size Nasıl Yardımcı Olabilirim ?<a  href="https://wa.me/+905541295778?text=Merhaba,%20sipariş%20vermek%20istiyorum." class="float1" target="_blank" ></span>
							<i class="fa fa-whatsapp my-float1"></i>
					</a>
				</div>
    
@endsection