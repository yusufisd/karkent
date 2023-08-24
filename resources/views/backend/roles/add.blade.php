@extends('backend.master')
@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-10">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-primary fw-bold fs-3 flex-column justify-content-center my-0"> {{__('msg.rol')}}  {{__('msg.ekle')}}</h1>
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
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->

        <form action="{{ route('admin.role.store') }}" method="POST">
            @csrf
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
                                <!--begin::Card body-->
                                <div class="card-body px-0 py-9">
                                    <!--begin::Input group-->
                                    <div class="row">
                                        <!--begin::Label-->
                                        <label class="col-lg-2 col-form-label fw-bold fs-6 required"> {{__('msg.rol')}} {{__('msg.ad')}} </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-10">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-12 fv-row">
                                                    <input id="user_name" name="role_name"
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

                <!--begin::Row-->
                <div class="row g-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-xl-12 mb-5 mb-xl-8">
                        <div class="card card-flush h-xl-100 mb-5 mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body py-5">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <table id="product_management_table"
                                        class="table table-striped table-row-bordered gy-5 gs-7">
                                        <thead>
                                            <tr class="fw-bold fs-6 text-gray-800">
                                                <th class="w-60">{{__('msg.sayfa tanımı')}} {{__('msg.ad')}}</th>
                                                <th class="w-10 text-center"> {{__('msg.görüntüle')}} </th>
                                                <th class="w-10 text-center">{{__('msg.ekle')}}</th>
                                                <th class="w-10 text-center">{{__('msg.düzenle')}}</th>
                                                <th class="w-10 text-center">{{__('msg.sil')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{__('msg.sayfa tanımı')}} </td>
                                                <td>
                                                    <div
                                                        class="form-check form-check-solid form-switch form-check-custom fv-row justify-content-center">
                                                        <input class="form-check-input w-50px h-25px"
                                                            name="page_defi_1_show" type="checkbox"
                                                            id="categories_allow_view" />
                                                        <label class="form-check-label" for="categories_allow_view"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check form-check-solid form-switch form-check-custom fv-row justify-content-center">
                                                        <input class="form-check-input w-50px h-25px" name="page_defi_1_add"
                                                            type="checkbox" id="categories_allow_add" />
                                                        <label class="form-check-label" for="categories_allow_add"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check form-check-solid form-switch form-check-custom fv-row justify-content-center">
                                                        <input class="form-check-input w-50px h-25px"
                                                            name="page_defi_1_edit" type="checkbox"
                                                            id="categories_allow_edit" />
                                                        <label class="form-check-label" for="categories_allow_edit"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check form-check-solid form-switch form-check-custom fv-row justify-content-center">
                                                        <input class="form-check-input w-50px h-25px"
                                                            name="page_defi_1_delete" type="checkbox"
                                                            id="categories_allow_delete" />
                                                        <label class="form-check-label"
                                                            for="categories_allow_delete"></label>
                                                    </div>
                                                </td>
                                          

                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table container-->
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
                            <!--begin::Body-->
                            <div class="card-body py-5">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <table id="order_management_table"
                                        class="table table-striped table-row-bordered gy-5 gs-7">
                                        <thead>
                                            <tr class="fw-bold fs-6 text-gray-800">
                                                <th class="w-60">{{__('msg.slider')}} {{__('msg.yönetim')}}</th>
                                                <th class="w-10 text-center">{{__('msg.görüntüle')}}</th>
                                                <th class="w-10 text-center">{{__('msg.ekle')}}</th>
                                                <th class="w-10 text-center">{{__('msg.düzenle')}}</th>
                                                <th class="w-10 text-center">{{__('msg.sil')}}</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Slider</td>
                                                <td>
                                                    <div
                                                        class="form-check form-check-solid form-switch form-check-custom fv-row justify-content-center">
                                                        <input class="form-check-input w-50px h-25px" name="slider_show"
                                                            type="checkbox" id="orders_allow_view" />
                                                        <label class="form-check-label" for="orders_allow_view"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check form-check-solid form-switch form-check-custom fv-row justify-content-center">
                                                        <input class="form-check-input w-50px h-25px" name="slider_add"
                                                            type="checkbox" id="orders_allow_add" />
                                                        <label class="form-check-label" for="orders_allow_add"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check form-check-solid form-switch form-check-custom fv-row justify-content-center">
                                                        <input class="form-check-input w-50px h-25px" name="slider_edit"
                                                            type="checkbox" id="orders_allow_edit" />
                                                        <label class="form-check-label" for="orders_allow_edit"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check form-check-solid form-switch form-check-custom fv-row justify-content-center">
                                                        <input class="form-check-input w-50px h-25px" name="slider_delete"
                                                            type="checkbox" id="orders_allow_delete" />
                                                        <label class="form-check-label" for="orders_allow_delete"></label>
                                                    </div>
                                                </td>

                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table container-->
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
                            <!--begin::Body-->
                            <div class="card-body py-5">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <table id="customer_management_table"
                                        class="table table-striped table-row-bordered gy-5 gs-7">
                                        <thead>
                                            <tr class="fw-bold fs-6 text-gray-800">
                                                <th class="w-60">{{__('msg.diğer')}} {{__('msg.işlem')}}</th>
                                                <th class="w-10 text-center">{{__('msg.görüntüle')}}</th>
                                                <th class="w-10 text-center">{{__('msg.ekle')}}</th>
                                                <th class="w-10 text-center">{{__('msg.düzenle')}}</th>
                                                <th class="w-10 text-center">{{__('msg.sil')}}</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td> {{__('msg.sponsor')}}  </td>
                                                <td>
                                                    <div
                                                        class="form-check form-check-solid form-switch form-check-custom fv-row justify-content-center">
                                                        <input class="form-check-input w-50px h-25px" name="sponsor_show"
                                                            type="checkbox" id="customers_allow_view" />
                                                        <label class="form-check-label"
                                                            for="customers_allow_view"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check form-check-solid form-switch form-check-custom fv-row justify-content-center">
                                                        <input class="form-check-input w-50px h-25px" name="sponsor_add"
                                                            type="checkbox" id="customers_allow_add" />
                                                        <label class="form-check-label" for="customers_allow_add"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check form-check-solid form-switch form-check-custom fv-row justify-content-center">
                                                        <input class="form-check-input w-50px h-25px" name="sponsor_edit"
                                                            type="checkbox" id="customers_allow_edit" />
                                                        <label class="form-check-label"
                                                            for="customers_allow_edit"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check form-check-solid form-switch form-check-custom fv-row justify-content-center">
                                                        <input class="form-check-input w-50px h-25px"
                                                            name="sponsor_delete" type="checkbox"
                                                            id="customers_allow_delete" />
                                                        <label class="form-check-label"
                                                            for="customers_allow_delete"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{__('msg.tarihçe')}}</td>
                                                <td>
                                                    <div
                                                        class="form-check form-check-solid form-switch form-check-custom fv-row justify-content-center">
                                                        <input class="form-check-input w-50px h-25px" name="history_show"
                                                            type="checkbox" id="customer_groups_allow_view" />
                                                        <label class="form-check-label"
                                                            for="customer_groups_allow_view"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check form-check-solid form-switch form-check-custom fv-row justify-content-center">
                                                        <input class="form-check-input w-50px h-25px" name="history_add"
                                                            type="checkbox" id="customer_groups_allow_add" />
                                                        <label class="form-check-label"
                                                            for="customer_groups_allow_add"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check form-check-solid form-switch form-check-custom fv-row justify-content-center">
                                                        <input class="form-check-input w-50px h-25px" name="history_edit"
                                                            type="checkbox" id="customer_groups_allow_edit" />
                                                        <label class="form-check-label"
                                                            for="customer_groups_allow_edit"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="form-check form-check-solid form-switch form-check-custom fv-row justify-content-center">
                                                        <input class="form-check-input w-50px h-25px"
                                                            name="history_delete" type="checkbox"
                                                            id="customer_groups_allow_delete" />
                                                        <label class="form-check-label"
                                                            for="customer_groups_allow_delete"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--begin::Body-->
                        </div>
                    </div>
                    <!--end::Col-->
                </div>

                <div class="right" style="text-align: right">
                    <input type="submit" class="btn btn-primary" value="KAYDET" id="">
                </div><br>
            </div>

            
        </form>

    </div>
    <!--end::Content-->
@endsection
