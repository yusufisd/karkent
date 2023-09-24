@extends('backend.master')
@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-10">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-primary fw-bold fs-3 flex-column justify-content-center my-0">
                    {{ __('msg.kurumsal') }} {{ __('msg.yönetim') }} </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <form action="{{ route('admin.about.store') }}" method="POST">
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
                                <div class="tab-pane " id="tab_page_four" role="tabpanel">
                                    <!--begin::Tab-->
                                    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab_page_four_tr">
                                                <span>
                                                    <img src="{{asset('/assets/tr.png')}}"
                                                        width="28" height="20" alt="TR" title="TR">
                                                </span>

                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab_page_four_en">
                                                <span>
                                                    <img src="{{asset('/assets/en.png')}}"
                                                        width="28" height="20" alt="EN" title="EN">
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="TabContent_add_3">
                                        <div class="tab-pane fade show active" id="tab_page_four_tr" role="tabpanel">
                                            <div class="card-body p-5">

                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <h4> {{ __('msg.genel') }} {{ __('msg.başlık') }} </h4>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input type="text" value="{{ $data_tr->title ?? '' }}"
                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                            name="def_4_title" id="">
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <h4> {{ __('msg.genel') }} URL </h4>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <textarea name="def_4_description" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" id=""
                                                            cols="30" rows="5">{{ $data_tr->description ?? '' }}</textarea>
                                                    </div>
                                                </div><br><br>


                                                <div class="separator mb-10"></div>
                                                <h6 class="mb-5"> {{ __('msg.bölüm') }} 1</h6>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label class=" col-form-label fw-bold fs-6">
                                                                    {{ __('msg.başlık') }}
                                                                    1</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <input type="text" name="def_4_title_1"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    value="{{ $data_tr->title1 ?? '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label class=" col-form-label fw-bold fs-6">
                                                                    {{ __('msg.ikon') }} </label>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <input type="text" name="def_4_icon1"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    value="{{ $data_tr->icon1 ?? '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <label class=" col-form-label fw-bold fs-6">
                                                            URL </label>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <input type="text" name="def_4_description_1"
                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                            value="{{ $data_tr->url1 ?? '' }}" />
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="separator mb-10"></div>
                                                <h6 class="mb-5"> {{ __('msg.bölüm') }} 2</h6>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label class=" col-form-label fw-bold fs-6">
                                                                    {{ __('msg.başlık') }}
                                                                    1</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <input type="text" name="def_4_title_2"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    value="{{ $data_tr->title2 ?? '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label class=" col-form-label fw-bold fs-6">
                                                                    {{ __('msg.ikon') }} </label>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <input type="text" name="def_4_icon2"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    value="{{ $data_tr->icon2 ?? '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <label class=" col-form-label fw-bold fs-6">
                                                            URL </label>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <input type="text" name="def_4_description_2"
                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                            value="{{ $data_tr->url2 ?? '' }}" />
                                                    </div>
                                                </div>
                                                <br>



                                                <h6 class="mb-5"> {{ __('msg.bölüm') }} 3</h6>
                                                <div class="separator mb-10"></div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label class=" col-form-label fw-bold fs-6">
                                                                    {{ __('msg.başlık') }}
                                                                    1</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <input type="text" name="def_4_title_3"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    value="{{ $data_tr->title3 ?? '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label class=" col-form-label fw-bold fs-6">
                                                                    {{ __('msg.ikon') }} </label>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <input type="text" name="def_4_icon3"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    value="{{ $data_tr->icon3 ?? '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <label class=" col-form-label fw-bold fs-6">
                                                            URL </label>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <input type="text" name="def_4_description_3"
                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                            value="{{ $data_tr->url3 ?? '' }}" />
                                                    </div>
                                                </div>
                                                <br>

                                                <h6 class="mb-5"> {{ __('msg.bölüm') }} 4</h6>
                                                <div class="separator mb-10"></div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label class=" col-form-label fw-bold fs-6">
                                                                    {{ __('msg.başlık') }}
                                                                    1</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <input type="text" name="def_4_title_4"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    value="{{ $data_tr->title4 ?? '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label class=" col-form-label fw-bold fs-6">
                                                                    {{ __('msg.ikon') }} </label>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <input type="text" name="def_4_icon4"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    value="{{ $data_tr->icon4 ?? '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <label class=" col-form-label fw-bold fs-6">
                                                            URL </label>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <input type="text" name="def_4_description_4"
                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                            value="{{ $data_tr->url4 ?? '' }}" />
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
                                                        <h4> {{ __('msg.genel') }} {{ __('msg.başlık') }} </h4>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input type="text" value="{{ $data_en->title ?? '' }}"
                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                            name="def_4_title_en" id="">
                                                    </div>
                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <h4> {{ __('msg.genel') }} URL </h4>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <textarea name="def_4_description_en" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                            id="" cols="30" rows="5">{{ $data_en->description ?? '' }}</textarea>
                                                    </div>
                                                </div><br><br>


                                                <div class="separator mb-10"></div>
                                                <h6 class="mb-5"> {{ __('msg.bölüm') }} 1</h6>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label class=" col-form-label fw-bold fs-6">
                                                                    {{ __('msg.başlık') }}
                                                                    1</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <input type="text" name="def_4_title_1_en"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    value="{{ $data_en->title1 ?? '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label class=" col-form-label fw-bold fs-6">
                                                                    {{ __('msg.ikon') }} </label>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <input type="text" name="def_4_icon1_en"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    value="{{ $data_en->icon1 ?? '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <label class=" col-form-label fw-bold fs-6">
                                                            URL </label>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <input type="text" name="def_4_description_1_en"
                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                            value="{{ $data_en->url1 ?? '' }}" />
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="separator mb-10"></div>
                                                <h6 class="mb-5"> {{ __('msg.bölüm') }} 2</h6>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label class=" col-form-label fw-bold fs-6">
                                                                    {{ __('msg.başlık') }}
                                                                    1</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <input type="text" name="def_4_title_2_en"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    value="{{ $data_en->title2 ?? '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label class=" col-form-label fw-bold fs-6">
                                                                    {{ __('msg.ikon') }} </label>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <input type="text" name="def_4_icon2_en"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    value="{{ $data_en->icon2 ?? '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <label class=" col-form-label fw-bold fs-6">
                                                            URL </label>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <input type="text" name="def_4_description_2_en"
                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                            value="{{ $data_en->url2 ?? '' }}" />
                                                    </div>
                                                </div>
                                                <br>



                                                <h6 class="mb-5"> {{ __('msg.bölüm') }} 3</h6>
                                                <div class="separator mb-10"></div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label class=" col-form-label fw-bold fs-6">
                                                                    {{ __('msg.başlık') }}
                                                                    1</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <input type="text" name="def_4_title_3_en"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    value="{{ $data_en->title3 ?? '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label class=" col-form-label fw-bold fs-6">
                                                                    {{ __('msg.ikon') }} </label>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <input type="text" name="def_4_icon3_en"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    value="{{ $data_en->icon4 ?? '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <label class=" col-form-label fw-bold fs-6">
                                                            URL 2</label>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <input type="text" name="def_4_description_3_en"
                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                            value="{{ $data_en->url3 ?? '' }}" />
                                                    </div>
                                                </div>
                                                <br>

                                                <h6 class="mb-5"> {{ __('msg.bölüm') }} 4</h6>
                                                <div class="separator mb-10"></div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label class=" col-form-label fw-bold fs-6">
                                                                    {{ __('msg.başlık') }}
                                                                    1</label>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <input type="text" name="def_4_title_4_en"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    value="{{ $data_en->title4 ?? '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <label class=" col-form-label fw-bold fs-6">
                                                                    {{ __('msg.ikon') }} </label>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <input type="text" name="def_4_icon4_en"
                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                    value="{{ $data_en->icon4 ?? '' }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <label class=" col-form-label fw-bold fs-6">
                                                            URL </label>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <input type="text" name="def_4_description_4_en"
                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                            value="{{ $data_en->url4 ?? '' }}" />
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
                        </div>
                    </div>
                </div>
                <div class="right" style="text-align: right">
                    <button class="btn btn-primary" type="submit">{{ __('msg.kaydet') }}</button>
                </div><br>
            </div>
        </div>
    @endsection
