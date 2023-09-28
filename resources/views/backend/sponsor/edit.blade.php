@extends('backend.master')
@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-10">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-primary fw-bold fs-3 flex-column justify-content-center my-0"> {{__('msg.sponsor')}} {{__('msg.ekle')}}
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Back-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <a href="javascript:history.back()"
                    class="page-heading d-flex text-dark fw-bold fs-3 justify-content-center my-0 text-hover-success">
                    <i class="fa fa-arrow-left my-auto mx-2"></i>
                    {{__('msg.geri dön')}}
                </a>
                <!--end::Title-->
            </div>
            <!--end::Back-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->

    <form action="{{ route('admin.sponsor.update',$data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf


        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">

                @if ($errors->any())
                    @foreach ($errors->all() as $e)
                        <div class="alert alert-danger">
                            {{ $e }}
                        </div>
                    @endforeach
                @endif
                <div class="row g-5 g-xl-8">
                    <div class="col-xl-12 mb-5 mb-xl-8">
                        <div class="card card-flush h-xl-100 mb-5 mb-xl-8">
                            <div class="card-body py-5">

                                <div style="text-align: center; padding:3%">
                                    <img src="/{{$data->logo}}" style="width: 300px; border-radius:15px;" style="margin: auto" alt="">
                                </div>

                                <div class="row mb-6">
                                    <label
                                        class="col-lg-2 col-form-label ps-5 fw-bold fs-6">{{ __('msg.kategori') }} {{ __('msg.ad') }}</label>
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-lg-12 fv-row">
                                                <input type="file" name="image"
                                                    class="form-control form-control-lg"
                                                    value="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label
                                        class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Sıralama</label>
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-lg-12 fv-row">
                                                <input type="number" name="queue"
                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                    value="{{$data->queue}}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               

                            </div>
                            <!--begin::Body-->
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <div class="right" style="text-align: right">
                    <button type="submit" class="btn btn-outline btn-outline-success" id="btn_submit_add_slider_en"><i
                            class="fa-solid fa-check ps-1"></i> KAYDET</button>
                </div>

            </div>
            <!--end::Content container-->
        </div>

    </form>

    <!--end::Content-->
@endsection
