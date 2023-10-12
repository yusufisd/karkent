@extends('frontend.master')
@section('content')
    <div class="breadcrumb-area padding-xl text-light dark bg-fixed text-center shadow "
        style="background-image: url(/assets/frontend/img/header1.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-99 col-sm-6 text-left" id="ax11" style="top:114px;">
                    <h4 class="soldan"><b> {{ __('msg.kvkk aydınlatma metni') }} </b></h4>
                </div>
                <div class="col-md-99 col-sm-6 text-right">
                    <ul class="breadcrumb">
                        <li class="soldan"><a href="{{ route('frontend.index') }}"> {{ __('msg.anasayfa') }} </a></li>

                        <li class="active soldan"> {{ __('msg.kvkk aydınlatma metni') }} </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-form-area default-padding container bg-gray" >
        <div class="container" style="text-align: justify;width:800px;padding:5%">
            {!! $data !!}
        </div>

    </div>
@endsection
