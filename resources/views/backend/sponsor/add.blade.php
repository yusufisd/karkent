@extends('backend.master')
@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-10">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-primary fw-bold fs-3 flex-column justify-content-center my-0">Sponsor {{__('msg.ekle')}}
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

    <form action="{{ route('admin.sponsor.store') }}" method="POST" enctype="multipart/form-data">
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
                <!--begin::Row-->
                <div class="row g-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-xl-12 mb-5 mb-xl-8">
                        <div class="card card-flush h-xl-100 mb-5 mb-xl-8">
                            <!--begin::Header-->
                            <!--<div class="ps-12 pt-12"></div>-->
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body p-20">

                                <div class="row mb-6">
                                    <label
                                        class="col-lg-2 col-form-label ps-5 fw-bold fs-6"> {{ __('msg.logo') }}</label>
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
                                        class="col-lg-2 col-form-label ps-5 fw-bold fs-6"> {{__('msg.sıralama')}} </label>
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-lg-12 fv-row">
                                                <input type="number" name="queue" value="{{$no}}"
                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                    />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="card-footer d-flex justify-content-between py-6 px-0">

                                    <!--begin::Input group-->
                                    <div class="row mb-0">
                                        <label
                                            class="col-lg-8 col-form-label fw-bold fs-6 ps-5">Durum</label>
                                        <div class="col-lg-4 d-flex align-items-center">
                                            <div
                                                class="form-check form-check-solid form-switch form-check-custom fv-row">
                                                <input class="form-check-input w-50px h-25px"
                                                    type="checkbox" id="allowadd_slider_en"
                                                    checked="checked" name="allowadd_slider_en" />
                                                <label class="form-check-label"
                                                    for="allowadd_slider_en"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->


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
