@extends('backend.master')
@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-10">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-primary fw-bold fs-3 flex-column justify-content-center my-0">Kullanıcı Ekle</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Back-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <a href="javascript:history.back()" class="page-heading d-flex text-dark fw-bold fs-3 justify-content-center my-0 text-hover-success">
                    <i class="fa fa-arrow-left my-auto mx-2"></i>
                    Geri Dön
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
                                    <form action="{{route('admin.user.store')}}" method="POST" id="user_form" class="form">
                                        @csrf
                                        <!--begin::Card body-->
                                        <div class="card-body px-3 py-9">
                                            
                                            <div class="row mb-6">
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                    <div class="row">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-4 col-form-label fw-bold fs-6 required">Adı</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-8">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" id="user_name" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="" />
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
                                                        <label class="col-lg-4 col-form-label fw-bold fs-6 required">Soyadı</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-8">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" id="user_surname" name="surname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="" />
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
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                    <div class="row">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-4 col-form-label fw-bold fs-6">Şahsi Telefon</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-8">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input id="user_no" type="number" name="phone" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="" />
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
                                                        <label class="col-lg-4 col-form-label fw-bold fs-6 required">Şahsi E-Posta</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-8">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="email" id="user_email" name="email" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="" />
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

                                            <div class="separator my-10"></div>

                                         

                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                    <div class="row">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-4 col-form-label fw-bold fs-6 required">Şifre</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-8">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input id="user_password" type="password" name="password" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="" />
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
                                                        <label class="col-lg-4 col-form-label fw-bold fs-6 required">Şifre Tekrar</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-8">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="password" id="user_password_again" name="password_confirm" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="" />
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
                                                <label class="col-lg-2 col-form-label fw-bold fs-6 ps-5 required">Dil</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-4">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                            <select name="role" aria-label="Seçiniz" data-control="select2" data-placeholder="Seçiniz..." class="form-select form-select-solid form-select-lg fw-semibold">
                                                                @foreach ($roles as $item)
                                                                    
                                                                <option value="{{$item->name}}">{{strtoupper($item->name)}}</option>

                                                                @endforeach

                                                            </select>
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->

                                                
                                        </div>
                                        <!--end::Card body-->
                                        <!--begin::Actions-->
                                        <div class="card-footer d-flex justify-content-between py-6 px-0">
                                            
                                            <!--begin::Input group-->
                                            <div class="row mb-0">
                                                <label class="col-lg-8 col-form-label fw-bold fs-6 ps-8">Durum</label>
                                                <div class="col-lg-4 d-flex align-items-center">
                                                    <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                                        <input class="form-check-input w-50px h-25px" type="checkbox" id="allowuser" checked="checked" />
                                                        <label class="form-check-label" for="allowuser"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Input group-->

                                            <button type="submit" class="btn btn-outline btn-outline-success" id="btn_submit_user"><i class="fa-solid fa-check ps-1"></i> KAYDET</button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form-->
                        </div>
                        <!--begin::Body-->
                    </div>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
@endsection
