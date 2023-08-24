@extends('backend.master')
@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-10">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-primary fw-bold fs-3 flex-column justify-content-center my-0">{{__('msg.tarihçe')}} {{__('msg.düzenle')}}
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

    <form action="{{ route('admin.history.update',$data_tr->id) }}" method="POST">
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
                            <div class="card-body py-5">
                                <!--begin::Form-->
                                <!--begin::Card body-->
                                <div class="card-body px-0 py-9">
                                    <!--begin::Input group-->
                                  

                                    <div class="row mb-6">
                                        <!--begin::Tab-->
                                        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#tab_add_slider_tr">
                                                    <span>
                                                        <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/turkey.svg"
                                                            width="28" height="28" alt="TR" title="TR">
                                                    </span>

                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab_add_slider_en">
                                                    <span>
                                                        <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/england.svg"
                                                            width="28" height="28" alt="EN" title="EN">
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="TabContent_1">
                                            <div class="tab-pane fade show active" id="tab_add_slider_tr" role="tabpanel">
                                                <!--begin::Form-->
                                                <!--begin::Card body-->
                                                <div class="card-body px-0 py-9">
                                                    <div class="row mb-6">

                                                        <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                            <div class="row">
                                                                <!--begin::Label-->
                                                                <label class="col-lg-4 col-form-label fw-bold fs-6">{{__('msg.başlık')}}</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-8">
                                                                    <!--begin::Row-->
                                                                    <div class="row">
                                                                        <!--begin::Col-->
                                                                        <div class="col-lg-12 fv-row">
                                                                            <input type="text"
                                                                                name="title_tr"
                                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                value="{{$data_tr->title}}" />
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>
                                                                    <!--end::Row-->
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                            <div class="row ms-10">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="col-lg-4 col-form-label fw-bold fs-6 text-left">{{__('msg.yıl')}}</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-8">
                                                                    <!--begin::Row-->
                                                                    <div class="row">
                                                                        <!--begin::Col-->
                                                                        <div class="col-lg-12 fv-row">
                                                                            <input type="number"
                                                                                name="year_tr"
                                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                value="{{$data_tr->year}}" />
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>
                                                                    <!--end::Row-->
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="col-lg-2 col-form-label ps-5 fw-bold fs-6">{{__('msg.açıklama')}}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" name="description_tr"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$data_tr->description}}" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>
                                                        <!--end::Col-->

                                                    </div>
                                                    <!--end::Input group-->


                                                   

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab_add_slider_en" role="tabpanel">
                                                <!--begin::Form-->
                                                <!--begin::Card body-->
                                                <div class="card-body px-0 py-9">
                                                    <div class="row mb-6">

                                                        <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                            <div class="row">
                                                                <!--begin::Label-->
                                                                <label class="col-lg-4 col-form-label fw-bold fs-6">{{__('msg.başlık')}}</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-8">
                                                                    <!--begin::Row-->
                                                                    <div class="row">
                                                                        <!--begin::Col-->
                                                                        <div class="col-lg-12 fv-row">
                                                                            <input type="text"
                                                                                name="title_en"
                                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                value="{{$data_en->title}}" />
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>
                                                                    <!--end::Row-->
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                            <div class="row ms-10">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="col-lg-4 col-form-label fw-bold fs-6 text-left">{{__('msg.yıl')}}</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-8">
                                                                    <!--begin::Row-->
                                                                    <div class="row">
                                                                        <!--begin::Col-->
                                                                        <div class="col-lg-12 fv-row">
                                                                            <input type="number"
                                                                                name="year_en"
                                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                value="{{$data_en->year}}" />
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>
                                                                    <!--end::Row-->
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="col-lg-2 col-form-label ps-5 fw-bold fs-6">{{__('msg.açıklama')}}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" name="description_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$data_en->description}}" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Card body-->
                                <!--end::Form-->

                            </div>
                            <!--begin::Body-->
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <div class="right" style="text-align: right">
                    <button type="submit" class="btn btn-outline btn-outline-success" id="btn_submit_add_slider_en"><i
                            class="fa-solid fa-check ps-1"></i> {{__('msg.kaydet')}}</button>
                </div>

            </div>
            <!--end::Content container-->
        </div>

    </form>

    <!--end::Content-->
@endsection
