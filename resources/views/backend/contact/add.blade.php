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
                    {{ __('msg.iletişim') }} {{ __('msg.yönetim') }} </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Back-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <a href="javascript:history.back()"
                    class="page-heading d-flex text-dark fw-bold fs-3 justify-content-center my-0 text-hover-success">
                    <i class="fa fa-arrow-left my-auto mx-2"></i>
                    {{ __('msg.geri dön') }}
                </a>
                <!--end::Title-->
            </div>
            <!--end::Back-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">

            <form action="{{ route('admin.contact.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

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
                                <div class="tab-pane fade show active" role="tabpanel">
                                    <div class="card-body p-5">
                                        <div class="card-title">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative my-1 pe-3">
                                                <h4> {{ __('msg.merkez') }} {{ __('msg.bilgileri') }} </h4>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-2 col-form-label fw-bold fs-6">
                                                {{ __('msg.resim') }} </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-10">
                                                <!--begin::Row-->
                                                <div class="row">
                                                    <!--begin::Col-->
                                                    <div class="col-lg-12 fv-row">
                                                        <input type="file" name="center_image" class="form-control "
                                                            value="" />
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Col-->
                                        </div>

                                        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#tab_add_slider_tr"
                                                    aria-selected="true" role="tab">
                                                    <span>
                                                        <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/turkey.svg"
                                                            width="28" height="28" alt="TR" title="TR">
                                                    </span>

                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab_add_slider_en"
                                                    aria-selected="false" tabindex="-1" role="tab">
                                                    <span>
                                                        <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/england.svg"
                                                            width="28" height="28" alt="EN" title="EN">
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="TabContent_1">
                                            <div class="row mb-6 tab-pane fade show active" id="tab_add_slider_tr"
                                                role="tabpanel">
                                                <!--begin::Card body-->
                                                <div class="card-body p-5">
                                                    <!--begin::Input group-->
                                                    <div class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-2 col-form-label fw-bold fs-6">
                                                            {{ __('msg.adres') }} </label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" name="merkez_adres_tr"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div id="phone_row" class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-2 col-form-label fw-bold fs-6">
                                                            {{ __('msg.telefon') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" name="merkez_telefon_tr"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>

                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div id="email_row" class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-2 col-form-label fw-bold fs-6"> Email</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="email" name="merkez_email_tr"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>

                                                        <!--end::Col-->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="tab_add_slider_en" role="tabpanel">
                                                <!--begin::Card body-->
                                                <div class="card-body p-5">
                                                    <!--begin::Input group-->
                                                    <div class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="col-lg-2 col-form-label fw-bold fs-6">{{ __('msg.adres') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" name="merkez_adres_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div id="phone_row" class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="col-lg-2 col-form-label fw-bold fs-6">{{ __('msg.telefon') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" name="merkez_telefon_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>

                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div id="email_row" class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-2 col-form-label fw-bold fs-6">Email</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="email" name="merkez_email_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
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
                                </div>
                            </div>
                            <!--begin::Body-->
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->

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
                                <div class="tab-pane fade show active" role="tabpanel">
                                    <div class="card-body p-5">
                                        <div class="card-title">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative my-1 pe-3">
                                                <h4> {{ __('msg.fabrika') }} {{ __('msg.bilgileri') }} </h4>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-2 col-form-label fw-bold fs-6">
                                                {{ __('msg.resim') }} </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-10">
                                                <!--begin::Row-->
                                                <div class="row">
                                                    <!--begin::Col-->
                                                    <div class="col-lg-12 fv-row">
                                                        <input type="file" name="factory_image" class="form-control "
                                                            value="" />
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Col-->
                                        </div>

                                        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" data-bs-toggle="tab"
                                                    href="#tab_add_slider_tr_2" aria-selected="true" role="tab">
                                                    <span>
                                                        <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/turkey.svg"
                                                            width="28" height="28" alt="TR" title="TR">
                                                    </span>

                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab_add_slider_en_2"
                                                    aria-selected="false" tabindex="-1" role="tab">
                                                    <span>
                                                        <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/england.svg"
                                                            width="28" height="28" alt="EN" title="EN">
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="TabContent_1">
                                            <div class="row mb-6 tab-pane fade show active" id="tab_add_slider_tr_2"
                                                role="tabpanel">
                                                <!--begin::Card body-->
                                                <div class="card-body p-5">
                                                    <!--begin::Input group-->
                                                    <div class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="col-lg-2 col-form-label fw-bold fs-6">{{ __('msg.adres') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" name="fabrika_adres_tr"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div id="phone_row" class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="col-lg-2 col-form-label fw-bold fs-6">{{ __('msg.telefon') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" name="fabrika_telefon_tr"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>

                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div id="email_row" class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-2 col-form-label fw-bold fs-6">E-posta</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="email" name="fabrik_email_tr"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>

                                                        <!--end::Col-->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="tab_add_slider_en_2" role="tabpanel">
                                                <!--begin::Card body-->
                                                <div class="card-body p-5">
                                                    <!--begin::Input group-->
                                                    <div class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="col-lg-2 col-form-label fw-bold fs-6">{{ __('msg.adres') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" name="fabrika_adres_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div id="phone_row" class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="col-lg-2 col-form-label fw-bold fs-6">{{ __('msg.telefon') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" name="fabrika_telefon_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>

                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div id="email_row" class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-2 col-form-label fw-bold fs-6">Email</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="email" name="fabrika_email_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
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
                                </div>
                            </div>
                            <!--begin::Body-->
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->


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
                                <div class="tab-pane fade show active" role="tabpanel">
                                    <div class="card-body p-5">
                                        <div class="card-title">
                                            <div
                                                class="d-flex align-items-center justify-content-between position-relative my-1 pe-3">
                                                <h4> {{ __('msg.müze') }} {{ __('msg.bilgileri') }} </h4>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="row mb-6">
                                            <!--begin::Label-->
                                            <label class="col-lg-2 col-form-label fw-bold fs-6">
                                                {{ __('msg.resim') }} </label>
                                            <!--end::Label-->
                                            <!--begin::Col-->
                                            <div class="col-lg-10">
                                                <!--begin::Row-->
                                                <div class="row">
                                                    <!--begin::Col-->
                                                    <div class="col-lg-12 fv-row">
                                                        <input type="file" name="museum_image" class="form-control "
                                                            value="" />
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Col-->
                                        </div>

                                        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" data-bs-toggle="tab"
                                                    href="#tab_add_slider_tr_3" aria-selected="true" role="tab">
                                                    <span>
                                                        <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/turkey.svg"
                                                            width="28" height="28" alt="TR" title="TR">
                                                    </span>

                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab_add_slider_en_3"
                                                    aria-selected="false" tabindex="-1" role="tab">
                                                    <span>
                                                        <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/england.svg"
                                                            width="28" height="28" alt="EN" title="EN">
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content" id="TabContent_1">
                                            <div class="row mb-6 tab-pane fade show active" id="tab_add_slider_tr_3"
                                                role="tabpanel">
                                                <!--begin::Card body-->
                                                <div class="card-body p-5">
                                                    <!--begin::Input group-->
                                                    <div class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="col-lg-2 col-form-label fw-bold fs-6">{{ __('msg.adres') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" name="muze_adres_tr"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div id="phone_row" class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="col-lg-2 col-form-label fw-bold fs-6">{{ __('msg.telefon') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" name="muze_telefon_tr"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>

                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div id="email_row" class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-2 col-form-label fw-bold fs-6">Email</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="email" name="muze_email_tr"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>

                                                        <!--end::Col-->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="tab_add_slider_en_3" role="tabpanel">
                                                <!--begin::Card body-->
                                                <div class="card-body p-5">
                                                    <!--begin::Input group-->
                                                    <div class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="col-lg-2 col-form-label fw-bold fs-6">{{ __('msg.adres') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" name="muze_adres_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div id="phone_row" class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="col-lg-2 col-form-label fw-bold fs-6">{{ __('msg.telefon') }}</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" name="muze_telefon_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>

                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div id="email_row" class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-2 col-form-label fw-bold fs-6">Email</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="email" name="muze_email_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
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
                                </div>
                            </div>
                            <!--begin::Body-->
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->

                <div class="right" style="text-align: right">
                    <button type="submit" class="btn btn-primary">
                        {{ __('msg.kaydet') }}
                    </button>
                </div>
            </form>

        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
@endsection
