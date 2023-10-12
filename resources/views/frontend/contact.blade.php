@extends('frontend.master')
@section('content')
    <!-- Start Breadcrumb
        ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url(/assets/frontend/img/header1.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-99 col-sm-6 text-left" id="ax11" style="top:114px;">
                    <h4 class="soldan"><b> {{__('msg.iletişim')}} </b></h4>
                </div>
                <div class="col-md-99 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li class="soldan"><a href="{{route('frontend.index')}}"> {{(__('msg.anasayfa'))}} </a></li>

                        <li class="active soldan"> {{(__('msg.iletişim'))}} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact
        ============================================= -->
    <div class="contact-form-area default-padding">
        <div class="container">
            <div class="row">
                <!-- Start Contact Form -->
                <div class="col-md-7 contact-form">
                    <div class="content">
                        <div class="heading">
                            <h3> {{__('msg.bize ulaşın')}} </h3>
                        </div>
                        <form action="assets/frontend/mail/contact.php" method="POST" class="contact-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="{{__('msg.isim')}}"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email"
                                            placeholder="Email" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="{{__('msg.telefon')}}"
                                            type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="{{__('msg.Mesajınızı buraya yazabilirsiniz.')}}"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-checkbox">
                                <input class="checkbox" type="checkbox" id="checkbox">
                                <label class="custom-checkbox-label" for="checkbox"></label>
                                <a href="file:///C:/Users/RugzT/Desktop/karkent/source/assets/frontend/img/kvkk.pdf"
                                    target="_blank"><b> {{__('msg.KVKK Aydınlatma Metnini okudum kabul ediyorum.')}} </b></a>
                            </div>
                            <div class="col-md-12">

                                <div class="row">

                                    <button type="submit" name="submit" id="submit">
                                        {{__('msg.kaydet')}} <i class="fa fa-paper-plane"></i>
                                    </button>


                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Contact Form -->
                <div class="col-md-5 office-info">
                    <!-- Start Tab Contact Info -->
                    <div class="tab-nvas">
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a data-toggle="tab" href="#id1" aria-expanded="true">
                                    {{__('msg.merkez')}}
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#id2" aria-expanded="false">
                                    {{__('msg.fabrika')}}
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#id3" aria-expanded="false">
                                    {{__('msg.müze')}}
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content pad-all-20p txt-center-mobile">
                        <div id="id1" class="tab-pane active">
                            <ul>
                                <li>
                                    <img src="{{$data->center_photo != null ? url('/'.$data->center_photo) : url('/',$data->AllImage()->center_photo)}}" alt="Thumb">
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            {{__('msg.adres')}}
                                            <span> {{$data->center_address}} </span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Email
                                            <span style="text-transform:lowercase"> {{strtolower($data->center_email)}} </span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            {{__('msg.telefon')}}
                                            <span> {{$data->center_phone}} </span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="id2" class="tab-pane">
                            <ul>
                                <li>
                                    <img src="{{$data->factory_photo != null ? url('/'.$data->factory_photo) : url('/',$data->AllImage()->factory_photo)}}" alt="Thumb">
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            {{__('msg.adres')}}
                                            <span> {{$data->factory_address}} </span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Email
                                            <span style="text-transform:lowercase"> {{strtolower($data->factory_email)}} </span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            {{__('msg.telefon')}}
                                            <span> {{$data->factory_phone}} </span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="id3" class="tab-pane">
                            <ul>
                                <li>
                                    <img src="{{$data->museum_photo != null ? url('/'.$data->museum_photo) : url('/',$data->AllImage()->museum_photo)}}" alt="Thumb">
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            {{__('msg.adres')}}
                                            <span> {{$data->museum_address}} </span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="info" >
                                        <p >
                                            Email
                                            <span style="text-transform:lowercase"> {{strtolower($data->museum_email)}} </span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            {{__('msg.telefon')}}
                                            <span> {{$data->museum_phone}} </span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Tab Contact Info -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Maps Area
        ============================================= -->
    <div class="maps-area-items">
        <div class="maps-box oh">
            <div class="google-maps">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1791.8374033358423!2d29.19581269838475!3d40.20288561054309!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca385c940dbb07%3A0xd2c4ffdf54aa035d!2sKarkent%20Tekstil!5e0!3m2!1str!2str!4v1679308528583!5m2!1str!2str"></iframe>
            </div>
        </div>
    </div>
    <!-- End Maps Area -->
@endsection
