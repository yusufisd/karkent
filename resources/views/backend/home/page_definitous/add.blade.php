@extends('backend.master')
@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-10">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-primary fw-bold fs-3 flex-column justify-content-center my-0">Sayfa
                    Tanımları</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->

    <form action="{{route('admin.page-definitous.store')}}" method="POST">
        @csrf
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
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
                            <!--begin::Tab-->
                            <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">

                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#tab_page_home">Sayfa Tanımı 1</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " data-bs-toggle="tab" href="#tab_page_header">Sayfa Tanımı 2</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tab_page_footer">Sayfa Tanımı 3</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tab_page_four">Sayfa Tanımı 4</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="TabContent_add_1">
                                <div class="tab-pane fade " id="tab_page_header" role="tabpanel">
                                    <!--begin::Tab-->
                                    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab_header_page_tr">
                                                <span>
                                                    <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/turkey.svg"
                                                        width="28" height="28" alt="TR" title="TR">
                                                </span>

                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab_header_page_en">
                                                <span>
                                                    <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/england.svg"
                                                        width="28" height="28" alt="EN" title="EN">
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="TabContent_add_3">
                                        <div class="tab-pane fade show active" id="tab_header_page_tr" role="tabpanel">
                                            <!--begin::Form-->
                                                <!--begin::Card body-->
                                                <div class="card-body p-5">
                                                    <!--begin::Input group-->

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <label
                                                                    class="col-md-2 col-form-label fw-bold fs-6">Başlık</label>
                                                                <div class="col-md-10 fv-row">
                                                                    <input type="text" name="page_def_title"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def2_tr->title ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <label class="col-md-2 col-form-label fw-bold fs-6">Video
                                                                    URL</label>
                                                                <div class="col-md-10 fv-row">
                                                                    <input type="text" name="page_def_video_url"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def2_tr->video_url ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>


                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <label class="col-md-2 col-form-label fw-bold fs-6">Buton
                                                                    Başlık</label>
                                                                <div class="col-md-10 fv-row">
                                                                    <input type="text" name="page_def_button_text"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def2_tr->button_title ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <label class="col-md-2 col-form-label fw-bold fs-6">Buton
                                                                    URL</label>
                                                                <div class="col-md-10 fv-row">
                                                                    <input type="text" name="page_def_button_url"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def2_tr->button_url ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>


                                                    <div class="row">
                                                        <label class="col-md-1 col-form-label fw-bold fs-6">Açıklama</label>
                                                        <div class="col-md-11">
                                                            <textarea name="page_def_description" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" id=""
                                                                cols="30" rows="5"> {{$def2_tr->description}} </textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--end::Card body-->
                                                <!--begin::Actions-->
                                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                                    
                                                </div>
                                                <!--end::Actions-->
                                            <!--end::Form-->
                                        </div>

                                        <div class="tab-pane fade" id="tab_header_page_en" role="tabpanel">
                                            <!--begin::Form-->
                                                <!--begin::Card body-->
                                                <div class="card-body p-5">
                                                    <!--begin::Input group-->

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <label
                                                                    class="col-md-2 col-form-label fw-bold fs-6">Başlık</label>
                                                                <div class="col-md-10 fv-row">
                                                                    <input type="text" name="page_def_title_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def2_en->title ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <label class="col-md-2 col-form-label fw-bold fs-6">Video
                                                                    URL</label>
                                                                <div class="col-md-10 fv-row">
                                                                    <input type="text" name="page_def_video_url_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def2_en->video_url ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>


                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <label class="col-md-2 col-form-label fw-bold fs-6">Buton
                                                                    Başlık</label>
                                                                <div class="col-md-10 fv-row">
                                                                    <input type="text" name="page_def_button_text_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def2_en->button_title ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <label class="col-md-2 col-form-label fw-bold fs-6">Buton
                                                                    URL</label>
                                                                <div class="col-md-10 fv-row">
                                                                    <input type="text" name="page_def_button_url_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def2_en->button_url ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>


                                                    <div class="row">
                                                        <label
                                                            class="col-md-2 col-form-label fw-bold fs-6">Açıklama</label>
                                                        <div class="col-md-10">
                                                            <textarea name="page_def_description_en" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" id=""
                                                                cols="30" rows="5"> {{$def2_en->description}} </textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--end::Card body-->
                                                <!--begin::Actions-->
                                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                                    
                                                    
                                                </div>
                                                <!--end::Actions-->
                                            <!--end::Form-->
                                        </div>
                                    </div>
                                    <!--end::Tab-->
                                </div>
                                <div class="tab-pane fade" id="tab_page_footer" role="tabpanel">
                                    <!--begin::Tab-->
                                    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab_footer_page_tr">
                                                <span>
                                                    <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/turkey.svg"
                                                        width="28" height="28" alt="TR" title="TR">
                                                </span>

                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab_footer_page_en">
                                                <span>
                                                    <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/england.svg"
                                                        width="28" height="28" alt="EN" title="EN">
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="TabContent_add_3">
                                        <div class="tab-pane fade show active" id="tab_footer_page_tr" role="tabpanel">
                                            <!--begin::Form-->
                                                <!--begin::Card body-->
                                                <div class="card-body p-5">
                                                    <h6 class="mb-5">Bölüm 1</h6>
                                                    <div class="separator mb-10"></div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        1</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_title_a"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_tr->title1_1 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        2</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_title_a1"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_tr->title1_2 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label
                                                                        class=" col-form-label fw-bold fs-6">İkon</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_icon1"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_tr->icon1 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br><br>


                                                    <h6 class="mb-5">Bölüm 2</h6>
                                                    <div class="separator mb-10"></div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        1</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_title_b"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_tr->title2_1 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        2</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_title_b1"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_tr->title2_2 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label
                                                                        class=" col-form-label fw-bold fs-6">İkon</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_icon2"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_tr->icon2 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br><br>



                                                    <h6 class="mb-5">Bölüm 3</h6>
                                                    <div class="separator mb-10"></div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        1</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_title_c"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_tr->title3_1 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        2</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_title_c1"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_tr->title3_2 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label
                                                                        class=" col-form-label fw-bold fs-6">İkon</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_icon3"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_tr->icon3 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br><br>

                                                    <h6 class="mb-5">Bölüm 4</h6>
                                                    <div class="separator mb-10"></div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        1</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_title_d"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_tr->title4_1 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        2</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_title_d1"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_tr->title4_2 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label
                                                                        class=" col-form-label fw-bold fs-6">İkon</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_icon4"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_tr->icon4 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br><br>
                                                </div>
                                                <!--end::Card body-->
                                                <!--begin::Actions-->
                                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                                    
                                                </div>
                                                <!--end::Actions-->
                                            <!--end::Form-->
                                        </div>

                                        <div class="tab-pane fade" id="tab_footer_page_en" role="tabpanel">
                                            <!--begin::Form-->
                                                <!--begin::Card body-->
                                                <div class="card-body p-5">
                                                    <h6 class="mb-5">Bölüm 1</h6>
                                                    <div class="separator mb-10"></div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        1</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_title_a_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_en->title1_1 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        2</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_title_a1_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_en->title1_2 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label
                                                                        class=" col-form-label fw-bold fs-6">İkon</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_icon1_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_en->icon1 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br><br>


                                                    <h6 class="mb-5">Bölüm 2</h6>
                                                    <div class="separator mb-10"></div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        1</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_title_b_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_en->title2_1 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        2</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_title_b1_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_en->title2_2 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label
                                                                        class=" col-form-label fw-bold fs-6">İkon</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_icon2_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_en->icon2 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br><br>



                                                    <h6 class="mb-5">Bölüm 3</h6>
                                                    <div class="separator mb-10"></div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        1</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_title_c_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_en->title3_1 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        2</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_title_c1_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_en->title3_2 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label
                                                                        class=" col-form-label fw-bold fs-6">İkon</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_icon3_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_en->icon3 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br><br>

                                                    <h6 class="mb-5">Bölüm 4</h6>
                                                    <div class="separator mb-10"></div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        1</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_title_d_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_en->title4_1 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        2</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_title_d1_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_en->title4_2 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label
                                                                        class=" col-form-label fw-bold fs-6">İkon</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="page_def3_icon4_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def3_en->icon4 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br><br>
                                                </div>
                                                <!--end::Card body-->
                                                <!--begin::Actions-->
                                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                                    
                                                </div>
                                                <!--end::Actions-->
                                            <!--end::Form-->
                                        </div>


                                    </div>
                                    <!--end::Tab-->
                                </div>
                                <div class="tab-pane fade show active" id="tab_page_home" role="tabpanel">
                                    <!--begin::Tab-->
                                    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab_home_page_tr">
                                                <span>
                                                    <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/turkey.svg"
                                                        width="28" height="28" alt="TR" title="TR">
                                                </span>

                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab_home_page_en">
                                                <span>
                                                    <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/england.svg"
                                                        width="28" height="28" alt="EN" title="EN">
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="TabContent_add_3">
                                        <div class="tab-pane fade show active" id="tab_home_page_tr" role="tabpanel">
                                            <!--begin::Form-->
                                                <!--begin::Card body-->
                                                <div class="card-body p-5">
                                                    <h6 class="mb-5">Bölüm 1</h6>
                                                    <div class="separator mb-10"></div>

                                                    <!--begin::Input group-->

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row fv-row fv-plugins-icon-container ps-5">
                                                                <div class="row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-md-2 col-form-label fw-bold fs-6">Başlık
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-md-10">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-12 fv-row">
                                                                                <input type="text"
                                                                                    name="def1_title_tr"
                                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                    value="{{$def1_tr->title1 ?? ''}}" />
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row fv-row fv-plugins-icon-container ps-5">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="col-md-2 col-form-label fw-bold fs-6">Açıklama</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-md-10">
                                                                    <!--begin::Row-->
                                                                    <div class="row">
                                                                        <!--begin::Col-->
                                                                        <div class="col-lg-12 fv-row">
                                                                            <input type="text"
                                                                                name="def1_description_tr"
                                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                value="{{$def1_tr->description1 ?? ''}}" />
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>
                                                                    <!--end::Row-->
                                                                    <!--end::Col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class=" fv-row fv-plugins-icon-container ps-5">
                                                                <div class="row mb-9">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-md-2 col-form-label fw-bold fs-6">İkon</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-md-10">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-12 fv-row">
                                                                                <!--begin::Options-->
                                                                                <div
                                                                                    class="d-flex align-items-center mt-3">
                                                                                    <input value="{{$def1_tr->icon1 ?? ''}}"
                                                                                        type="text" name="def1_icon_tr"
                                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                        id="home_definition_section_1_3_tr">
                                                                                </div>
                                                                                <!--end::Options-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h6 class="mb-5">Bölüm 2</h6>
                                                    <div class="separator mb-10"></div>

                                                    <!--begin::Input group-->

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row fv-row fv-plugins-icon-container ps-5">
                                                                <div class="row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-md-2 col-form-label fw-bold fs-6">Başlık
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-md-10">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-12 fv-row">
                                                                                <input type="text"
                                                                                    name="def2_title_tr"
                                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                    value="{{$def1_tr->title2 ?? ''}}" />
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row fv-row fv-plugins-icon-container ps-5">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="col-md-2 col-form-label fw-bold fs-6">Açıklama</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-md-10">
                                                                    <!--begin::Row-->
                                                                    <div class="row">
                                                                        <!--begin::Col-->
                                                                        <div class="col-lg-12 fv-row">
                                                                            <input type="text"
                                                                                name="def2_description_tr"
                                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                value="{{$def1_tr->description2 ?? ''}}" />
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>
                                                                    <!--end::Row-->
                                                                    <!--end::Col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class=" fv-row fv-plugins-icon-container ps-5">
                                                                <div class="row mb-9">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-md-2 col-form-label fw-bold fs-6">İkon</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-md-10">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-12 fv-row">
                                                                                <!--begin::Options-->
                                                                                <div
                                                                                    class="d-flex align-items-center mt-3">
                                                                                    <input value="{{$def1_tr->icon2 ?? ''}}"
                                                                                        type="text" name="def2_icon_tr"
                                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                        id="home_definition_section_1_3_tr">
                                                                                </div>
                                                                                <!--end::Options-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <h6 class="mb-5">Bölüm 3</h6>
                                                    <div class="separator mb-10"></div>

                                                    <!--begin::Input group-->

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row fv-row fv-plugins-icon-container ps-5">
                                                                <div class="row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-md-2 col-form-label fw-bold fs-6">Başlık
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-md-10">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-12 fv-row">
                                                                                <input type="text" 
                                                                                    name="def3_title_tr"
                                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                    value="{{$def1_tr->title3 ?? ''}}" />
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row fv-row fv-plugins-icon-container ps-5">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="col-md-2 col-form-label fw-bold fs-6">Açıklama</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-md-10">
                                                                    <!--begin::Row-->
                                                                    <div class="row">
                                                                        <!--begin::Col-->
                                                                        <div class="col-lg-12 fv-row">
                                                                            <input type="text"
                                                                                name="def3_description_tr"
                                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                value="{{$def1_tr->description3 ?? ''}}" />
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>
                                                                    <!--end::Row-->
                                                                    <!--end::Col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class=" fv-row fv-plugins-icon-container ps-5">
                                                                <div class="row mb-9">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-md-2 col-form-label fw-bold fs-6">İkon</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-md-10">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-12 fv-row">
                                                                                <!--begin::Options-->
                                                                                <div
                                                                                    class="d-flex align-items-center mt-3">
                                                                                    <input name="def3_icon_tr"
                                                                                        type="text" value="{{$def1_tr->icon3 ?? ''}}"
                                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                        id="home_definition_section_1_3_tr">
                                                                                </div>
                                                                                <!--end::Options-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--end::Card body-->
                                                <!--begin::Actions-->
                                                
                                                <!--end::Actions-->
                                            <!--end::Form-->
                                        </div>

                                        <div class="tab-pane fade" id="tab_home_page_en" role="tabpanel">
                                            <!--begin::Form-->
                                                <!--begin::Card body-->
                                                <div class="card-body p-5">
                                                    <h6 class="mb-5">Bölüm 1</h6>
                                                    <div class="separator mb-10"></div>

                                                    <!--begin::Input group-->

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row fv-row fv-plugins-icon-container ps-5">
                                                                <div class="row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-md-2 col-form-label fw-bold fs-6">Başlık
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-md-10">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-12 fv-row">
                                                                                <input type="text"
                                                                                    name="def1_title_en"
                                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                    value="{{$def1_en->title1 ?? ''}}" />
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row fv-row fv-plugins-icon-container ps-5">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="col-md-2 col-form-label fw-bold fs-6">Açıklama</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-md-10">
                                                                    <!--begin::Row-->
                                                                    <div class="row">
                                                                        <!--begin::Col-->
                                                                        <div class="col-lg-12 fv-row">
                                                                            <input type="text"
                                                                                name="def1_description_en"
                                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                value="{{$def1_en->description1 ?? ''}}" />
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>
                                                                    <!--end::Row-->
                                                                    <!--end::Col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class=" fv-row fv-plugins-icon-container ps-5">
                                                                <div class="row mb-9">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-md-2 col-form-label fw-bold fs-6">İkon</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-md-10">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-12 fv-row">
                                                                                <!--begin::Options-->
                                                                                <div
                                                                                    class="d-flex align-items-center mt-3">
                                                                                    <input value="{{$def1_en->icon1 ?? ''}}"
                                                                                        type="text" name="def1_icon_en"
                                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                        id="home_definition_section_1_3_tr">
                                                                                </div>
                                                                                <!--end::Options-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h6 class="mb-5">Bölüm 2</h6>
                                                    <div class="separator mb-10"></div>

                                                    <!--begin::Input group-->

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row fv-row fv-plugins-icon-container ps-5">
                                                                <div class="row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-md-2 col-form-label fw-bold fs-6">Başlık
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-md-10">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-12 fv-row">
                                                                                <input type="text"
                                                                                    name="def2_title_en"
                                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                    value="{{$def1_en->title2 ?? ''}}" />
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row fv-row fv-plugins-icon-container ps-5">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="col-md-2 col-form-label fw-bold fs-6">Açıklama</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-md-10">
                                                                    <!--begin::Row-->
                                                                    <div class="row">
                                                                        <!--begin::Col-->
                                                                        <div class="col-lg-12 fv-row">
                                                                            <input type="text"
                                                                                name="def2_description_en"
                                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                value="{{$def1_en->description2 ?? ''}}" />
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>
                                                                    <!--end::Row-->
                                                                    <!--end::Col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class=" fv-row fv-plugins-icon-container ps-5">
                                                                <div class="row mb-9">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-md-2 col-form-label fw-bold fs-6">İkon</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-md-10">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-12 fv-row">
                                                                                <!--begin::Options-->
                                                                                <div
                                                                                    class="d-flex align-items-center mt-3">
                                                                                    <input value="{{$def1_en->icon2 ?? ''}}"
                                                                                        type="text" name="def2_icon_en"
                                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                        id="home_definition_section_1_3_tr">
                                                                                </div>
                                                                                <!--end::Options-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <h6 class="mb-5">Bölüm 3</h6>
                                                    <div class="separator mb-10"></div>

                                                    <!--begin::Input group-->

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row fv-row fv-plugins-icon-container ps-5">
                                                                <div class="row">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-md-2 col-form-label fw-bold fs-6">Başlık
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-md-10">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-12 fv-row">
                                                                                <input type="text"
                                                                                    name="def3_title_en"
                                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                    value="{{$def1_en->title3 ?? ''}}" />
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="row fv-row fv-plugins-icon-container ps-5">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="col-md-2 col-form-label fw-bold fs-6">Açıklama</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-md-10">
                                                                    <!--begin::Row-->
                                                                    <div class="row">
                                                                        <!--begin::Col-->
                                                                        <div class="col-lg-12 fv-row">
                                                                            <input type="text"
                                                                                name="def3_description_en"
                                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                value="{{$def1_en->description3 ?? ''}}" />
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>
                                                                    <!--end::Row-->
                                                                    <!--end::Col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class=" fv-row fv-plugins-icon-container ps-5">
                                                                <div class="row mb-9">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-md-2 col-form-label fw-bold fs-6">İkon</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-md-10">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-12 fv-row">
                                                                                <!--begin::Options-->
                                                                                <div
                                                                                    class="d-flex align-items-center mt-3">
                                                                                    <input name="def3_icon_en"
                                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                        type="text" value="{{$def1_en->icon3 ?? ''}}"
                                                                                        id="home_definition_section_1_3_tr">
                                                                                </div>
                                                                                <!--end::Options-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--end::Card body-->
                                                <!--begin::Actions-->
                                                
                                                <!--end::Actions-->
                                            <!--end::Form-->
                                        </div>


                                    </div>
                                    <!--end::Tab-->
                                </div>
                                <div class="tab-pane fade" id="tab_page_four" role="tabpanel">
                                    <!--begin::Tab-->
                                    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab_page_four_tr">
                                                <span>
                                                    <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/turkey.svg"
                                                        width="28" height="28" alt="TR" title="TR">
                                                </span>

                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab_page_four_en">
                                                <span>
                                                    <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/england.svg"
                                                        width="28" height="28" alt="EN" title="EN">
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="TabContent_add_3">
                                        <div class="tab-pane fade show active" id="tab_page_four_tr" role="tabpanel">
                                                <div class="card-body p-5">

                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <h4>Genel Başlık</h4>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <input type="text" value="{{$def4_tr->title ?? ''}}"
                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                name="def_4_title" id="">
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <h4>Genel Açıklama</h4>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <textarea name="def_4_description" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" id=""
                                                                cols="30" rows="5">{{$def4_tr->description}}</textarea>
                                                        </div>
                                                    </div><br><br>


                                                    <div class="separator mb-10"></div>
                                                    <h6 class="mb-5">Bölüm 1</h6>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        1</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="def_4_title_1"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def4_tr->title1 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label
                                                                        class=" col-form-label fw-bold fs-6">İkon</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="def_4_icon1"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def4_tr->icon1 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label class=" col-form-label fw-bold fs-6">Açıklama</label>
                                                        </div>
                                                        <div class="col-md-11">
                                                            <input type="text" name="def_4_description_1"
                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                value="{{$def4_tr->description1 ?? ''}}" />
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="separator mb-10"></div>
                                                    <h6 class="mb-5">Bölüm 2</h6>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        1</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="def_4_title_2"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def4_tr->title2 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label
                                                                        class=" col-form-label fw-bold fs-6">İkon</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="def_4_icon2"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def4_tr->icon2 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label class=" col-form-label fw-bold fs-6">Açıklama</label>
                                                        </div>
                                                        <div class="col-md-11">
                                                            <input type="text" name="def_4_description_2"
                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                value="{{$def4_tr->description2 ?? ''}}" />
                                                        </div>
                                                    </div>
                                                    <br>



                                                    <h6 class="mb-5">Bölüm 3</h6>
                                                    <div class="separator mb-10"></div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        1</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="def_4_title_3"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def4_tr->title3 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label
                                                                        class=" col-form-label fw-bold fs-6">İkon</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="def_4_icon3"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def4_tr->icon3 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label class=" col-form-label fw-bold fs-6">Açıklama</label>
                                                        </div>
                                                        <div class="col-md-11">
                                                            <input type="text" name="def_4_description_3"
                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                value="{{$def4_tr->description3 ?? ''}}" />
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <h6 class="mb-5">Bölüm 4</h6>
                                                    <div class="separator mb-10"></div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        1</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="def_4_title_4"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def4_tr->title4 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label
                                                                        class=" col-form-label fw-bold fs-6">İkon</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="def_4_icon4"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def4_tr->icon4 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label class=" col-form-label fw-bold fs-6">Açıklama</label>
                                                        </div>
                                                        <div class="col-md-11">
                                                            <input type="text" name="def_4_description_4"
                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                value="{{$def4_tr->description4 ?? ''}}" />
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <!--end::Card body-->
                                                <!--begin::Actions-->
                                                
                                                <!--end::Actions-->
                                            <!--end::Form-->
                                        </div>

                                        <div class="tab-pane fade" id="tab_page_four_en" role="tabpanel">
                                            <!--begin::Form-->
                                                <!--begin::Card body-->
                                                <div class="card-body p-5">


                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <h4>Genel Başlık</h4>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <input type="text" value="{{$def4_en->title ?? ''}}"
                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                name="def_4_title_en" id="">
                                                        </div>
                                                    </div><br>

                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <h4>Genel Açıklama</h4>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <textarea name="def_4_description_en" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" id=""
                                                                cols="30" rows="5">{{$def4_en->description}}</textarea>
                                                        </div>
                                                    </div><br><br>


                                                    <div class="separator mb-10"></div>
                                                    <h6 class="mb-5">Bölüm 1</h6>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        1</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="def_4_title_1_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def4_en->title1 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label
                                                                        class=" col-form-label fw-bold fs-6">İkon</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="def_4_icon1_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def4_en->icon1 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label class=" col-form-label fw-bold fs-6">Açıklama</label>
                                                        </div>
                                                        <div class="col-md-11">
                                                            <input type="text" name="def_4_description_1_en"
                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                value="{{$def4_en->description1 ?? ''}}" />
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="separator mb-10"></div>
                                                    <h6 class="mb-5">Bölüm 2</h6>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        1</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="def_4_title_2_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def4_en->title2 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label
                                                                        class=" col-form-label fw-bold fs-6">İkon</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="def_4_icon2_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def4_en->icon2 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label class=" col-form-label fw-bold fs-6">Açıklama</label>
                                                        </div>
                                                        <div class="col-md-11">
                                                            <input type="text" name="def_4_description_2_en"
                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                value="{{$def4_en->description2 ?? ''}}" />
                                                        </div>
                                                    </div>
                                                    <br>



                                                    <h6 class="mb-5">Bölüm 3</h6>
                                                    <div class="separator mb-10"></div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        1</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="def_4_title_3_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def4_en->title3 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label
                                                                        class=" col-form-label fw-bold fs-6">İkon</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="def_4_icon3_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def4_en->icon4 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label class=" col-form-label fw-bold fs-6">Açıklama2</label>
                                                        </div>
                                                        <div class="col-md-11">
                                                            <input type="text" name="def_4_description_3_en"
                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                value="{{$def4_en->description3 ?? ''}}" />
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <h6 class="mb-5">Bölüm 4</h6>
                                                    <div class="separator mb-10"></div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label class=" col-form-label fw-bold fs-6">Başlık
                                                                        1</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="def_4_title_4_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def4_en->title4 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label
                                                                        class=" col-form-label fw-bold fs-6">İkon</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text"
                                                                        name="def_4_icon4_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$def4_en->icon4 ?? ''}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <label class=" col-form-label fw-bold fs-6">Açıklama</label>
                                                        </div>
                                                        <div class="col-md-11">
                                                            <input type="text" name="def_4_description_4_en"
                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                value="{{$def4_en->description4 ?? ''}}" />
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <!--end::Card body-->
                                                <!--begin::Actions-->
                                               
                                                <!--end::Actions-->
                                            <!--end::Form-->
                                        </div>


                                    </div>
                                    <!--end::Tab-->
                                </div>
                            </div>
                            <!--end::Tab-->
                        </div>
                        <!--begin::Body-->
                    </div>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

            <div class="right" style="text-align: right">
                <button type="submit" class="btn btn-primary">KAYDET</button>
            </div>

        </div>
        <!--end::Content container-->
    </div>
</form>

    <!--end::Content-->
@endsection
