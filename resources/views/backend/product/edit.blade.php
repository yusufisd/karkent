@extends('backend.master')
@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-lg-10 py-3">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-primary fw-bold fs-3 flex-column justify-content-center my-0">
                    {{ __('msg.ürün') }} {{ __('msg.düzenle') }} </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Back-->
            <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                <!--begin::Title-->
                <a href="javascript:history.back()"
                    class="page-heading d-flex text-dark fw-bold fs-3 justify-content-center text-hover-success my-0">
                    <i class="fa fa-arrow-left mx-2 my-auto"></i>
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
            <!--begin::Row-->
            @if ($errors->any())
                @foreach ($errors->all() as $e)
                    <div class="alert alert-danger">
                        {{ $e }}
                    </div>
                @endforeach
            @endif
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-12 mb-xl-8 mb-5">
                    <div class="card card-flush h-xl-100 mb-xl-8 mb-5">
                        <!--begin::Header-->
                        <!--<div class="ps-12 pt-12"></div>-->
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-5">
                            <!--begin::Form-->
                            <form action="{{ route('admin.product.update',$data_tr->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!--begin::Card body-->
                                <div class="card-body px-0 py-9">


                                    @if ($data_tr->type == 0)
                                        <div id="modul_content">
                                            <div class="row mb-6">

                                                <label class="col-lg-2 col-form-label required fw-bold fs-6 ps-5">
                                                    {{ __('msg.kategori') }} </label>
                                                <div class="col-lg-10">
                                                    <div class="row">
                                                        <div class="col-lg-12 fv-row">
                                                            <select name="category_id" aria-label="Seçiniz"
                                                                data-control="select2" data-placeholder="Seçiniz..."
                                                                class="form-select form-select-solid form-select-lg fw-semibold">
                                                                <option value="">Seçiniz...</option>
                                                                @foreach ($categories as $category)
                                                                    <option
                                                                        {{ $data_tr->category_id == $category->id ? 'selected' : '' }}
                                                                        value="{{ $category->id }}">
                                                                        {{ $category->title }} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-6">
                                                <label class="col-lg-2 col-form-label fw-bold fs-6 ps-5">
                                                    {{ __('msg.resim') }} </label>
                                                <div class="col-lg-10">
                                                    <div class="row">
                                                        <div class="col-lg-12 fv-row">
                                                            <input type="file" name="image" class="form-control"
                                                                value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-6">
                                                <label class="col-lg-2 col-form-label fw-bold fs-6 ps-5">
                                                    {{ __('msg.sıralama') }} </label>
                                                <div class="col-lg-10">
                                                    <div class="row">
                                                        <div class="col-lg-12 fv-row">
                                                            <input type="number" name="queue"
                                                                class="form-control form-control-solid mb-lg-0 mb-3"
                                                                value="{{ $data_tr->queue }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="type" class="form-control" value="0" />


                                            <div class="row ps-5">
                                                <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x fs-6">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab"
                                                            href="#tab_menu_header_external_link_tr">
                                                            <span>
                                                                <img src="{{ asset('/assets/tr.png') }}" width="28"
                                                                    height="20" alt="TR" title="TR">
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab"
                                                            href="#tab_menu_header_external_link_en">
                                                            <span>
                                                                <img src="{{ asset('/assets/en.png') }}" width="28"
                                                                    height="20" alt="EN" title="EN">
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="TabContent_1">
                                                    <div class="tab-pane fade show active"
                                                        id="tab_menu_header_external_link_tr" role="tabpanel">
                                                        <div class="card-body px-0 py-5">
                                                            <div class="row container mb-6">
                                                                <label class="col-lg-2 col-form-label fw-bold fs-6 ps-0">
                                                                    {{ __('msg.ürün') }} {{ __('msg.ad') }} </label>
                                                                <div class="col-lg-10 ps-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 fv-row">
                                                                            <input type="text" name="product_name_tr"
                                                                                class="form-control form-control-lg form-control-solid mb-lg-0 mb-3"
                                                                                value="{{ $data_tr->title }}" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="row container mb-6">
                                                            <label class="col-lg-2 col-form-label fw-bold fs-6 ps-0">
                                                                {{ __('msg.açıklama') }}</label>
                                                            <div class="col-lg-10">
                                                                <div class="row">
                                                                    <div class="col-lg-12 fv-row">
                                                                        <textarea name="product_description_tr" class="form-control form-control-lg form-control-solid mb-lg-0 mb-3"
                                                                            value="">{{ $data_tr->description }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="tab_menu_header_external_link_en"
                                                        role="tabpanel">

                                                        <div class="card-body px-0 py-5">
                                                            <div class="row container mb-6">
                                                                <label class="col-lg-2 col-form-label fw-bold fs-6 ps-0">
                                                                    {{ __('msg.ürün') }} {{ __('msg.ad') }} </label>
                                                                <div class="col-lg-10 ps-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 fv-row">
                                                                            <input type="text" name="product_name_en"
                                                                                class="form-control form-control-lg form-control-solid mb-lg-0 mb-3"
                                                                                value="{{ $data_en->title }}" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row container mb-6">
                                                            <label class="col-lg-2 col-form-label fw-bold fs-6 ps-0">
                                                                {{ __('msg.açıklama') }}</label>
                                                            <div class="col-lg-10">
                                                                <div class="row">
                                                                    <div class="col-lg-12 fv-row">
                                                                        <textarea name="product_description_en" class="form-control form-control-lg form-control-solid mb-lg-0 mb-3"
                                                                            value="">{{ $data_en->description }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                </div>
                        </div>

                    </div>
                    <div class="right" style="text-align:right">
                        <input type="submit" class="btn btn-primary" value=" {{ __('msg.kaydet') }}">
                    </div>
                    @endif

                    @if ($data_tr->type == 1)
                        <div id="external_link_content">
                            <div class="row mb-6">

                                <label class="col-lg-2 col-form-label required fw-bold fs-6 ps-5">
                                    {{ __('msg.kategori') }} </label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <select name="category_id" aria-label="Seçiniz" data-control="select2"
                                                data-placeholder="Seçiniz..."
                                                class="form-select form-select-solid form-select-lg fw-semibold">
                                                <option value="">Seçiniz...</option>
                                                @foreach ($categories as $category)
                                                    <option {{ $data_tr->category_id == $category->id ? 'selected' : '' }}
                                                        value="{{ $category->id }}">
                                                        {{ $category->title }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-2 col-form-label fw-bold fs-6 ps-5">
                                    {{ __('msg.resim') }} </label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input type="file" name="image" class="form-control" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-6">
                                <label class="col-lg-2 col-form-label fw-bold fs-6 ps-5">
                                    {{ __('msg.sıralama') }} </label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-lg-12 fv-row">
                                            <input type="number" name="queue"
                                                class="form-control form-control-solid mb-lg-0 mb-3"
                                                value="{{ $data_tr->queue }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="type" class="form-control" value="1" />

                            <div class="row ps-5">
                                <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x fs-6">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab"
                                            href="#tab_menu_header_external_link_tr">
                                            <span>
                                                <img src="{{ asset('/assets/tr.png') }}" width="28" height="20"
                                                    alt="TR" title="TR">
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab"
                                            href="#tab_menu_header_external_link_en">
                                            <span>
                                                <img src="{{ asset('/assets/en.png') }}" width="28" height="20"
                                                    alt="EN" title="EN">
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="TabContent_1">
                                    <div class="tab-pane fade show active" id="tab_menu_header_external_link_tr"
                                        role="tabpanel">
                                        <div class="card-body px-0 py-5">
                                            <div class="row container mb-6">
                                                <label class="col-lg-2 col-form-label fw-bold fs-6 ps-0">
                                                    {{ __('msg.ürün') }} {{ __('msg.ad') }} </label>
                                                <div class="col-lg-10 ps-0">
                                                    <div class="row">
                                                        <div class="col-lg-12 fv-row">
                                                            <input type="text" name="product_name_tr"
                                                                class="form-control form-control-lg form-control-solid mb-lg-0 mb-3"
                                                                value="{{ $data_tr->title }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row container mb-6">
                                            <label class="col-lg-2 col-form-label fw-bold fs-6 ps-0">
                                                {{ __('msg.ürün') }} URL </label>
                                            <div class="col-lg-10">
                                                <div class="row">
                                                    <div class="col-lg-12 fv-row">
                                                        <input type="text" name="product_url_tr"
                                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3"
                                                            value="{{ $data_tr->link }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row container mb-6">
                                            <label class="col-lg-2 col-form-label fw-bold fs-6 ps-0">
                                                {{ __('msg.kısa') }} {{ __('msg.açıklama') }}</label>
                                            <div class="col-lg-10">
                                                <div class="row">
                                                    <div class="col-lg-12 fv-row">
                                                        <input type="text" name="product_description_tr"
                                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3"
                                                            value="{{ $data_tr->description }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>



                                    <div class="tab-pane fade" id="tab_menu_header_external_link_en" role="tabpanel">

                                        <div class="card-body px-0 py-5">
                                            <div class="row container mb-6">
                                                <label class="col-lg-2 col-form-label fw-bold fs-6 ps-0">
                                                    {{ __('msg.ürün') }} {{ __('msg.ad') }} </label>
                                                <div class="col-lg-10 ps-0">
                                                    <div class="row">
                                                        <div class="col-lg-12 fv-row">
                                                            <input type="text" name="product_name_en"
                                                                class="form-control form-control-lg form-control-solid mb-lg-0 mb-3"
                                                                value="{{ $data_en->title }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row container mb-6">
                                            <label class="col-lg-2 col-form-label fw-bold fs-6 ps-0">
                                                {{ __('msg.ürün') }} URL </label>
                                            <div class="col-lg-10">
                                                <div class="row">
                                                    <div class="col-lg-12 fv-row">
                                                        <input type="text" name="product_url_en"
                                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3"
                                                            value="{{ $data_en->link }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row container mb-6">
                                            <label class="col-lg-2 col-form-label fw-bold fs-6 ps-0">
                                                {{ __('msg.kısa') }} {{ __('msg.açıklama') }}</label>
                                            <div class="col-lg-10">
                                                <div class="row">
                                                    <div class="col-lg-12 fv-row">
                                                        <input type="text" name="product_description_en"
                                                            class="form-control form-control-lg form-control-solid mb-lg-0 mb-3"
                                                            value="{{ $data_en->description }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                        </div>

                </div>

            </div>
        </div>
        <div class="right" style="text-align:right">
            <input type="submit" class="btn btn-primary" value=" {{ __('msg.kaydet') }}">
        </div>

    </div>
    @endif

    </div>

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
@section('script')
    <!--begin:: extra js-->
    <script>
        $(document).ready(function() {

            var selectedOption;

            $('select').on('change', function(e) {
                e.preventDefault();
                $("#modul_content").html("");
                $("#external_link_content").html("");
                $("#card_action").html("");

                selectedOption = $(this).val();

                if (selectedOption === 'modul') {
                    $("#modul_content").append( <
                        div class = "row mb-6" >

                        <
                        label class = "col-lg-2 col-form-label ps-5 required fw-bold fs-6" >
                        {{ __('msg.kategori') }} < /label> <
                        div class = "col-lg-10" >
                        <
                        div class = "row" >
                        <
                        div class = "col-lg-12 fv-row" >
                        '<select name="category_id" aria-label="Seçiniz" data-control="select2" data-placeholder="Seçiniz..." class="form-select form-select-solid form-select-lg fw-semibold"> <
                        option value = "" > Seçiniz... < /option>
                        @foreach ($categories as $category)
                            ' + <
                            option value = "{{ $category->id }}" > {{ $category->title }} < /option>
                        @endforeach <
                        /select> < /
                        div > <
                        /div> < /
                        div > <
                        /div> <
                        div class = "row mb-6" >
                        <
                        label class = "col-lg-2 col-form-label ps-5 fw-bold fs-6" >
                        {{ __('msg.resim') }} < /label> <
                        div class = "col-lg-10" >
                        <
                        div class = "row" >
                        <
                        div class = "col-lg-12 fv-row" >
                        <
                        input type = "file"
                        name = "image"
                        class = "form-control"
                        value = "" / >
                        <
                        /div> < /
                        div > <
                        /div> < /
                        div > <
                        div class = "row mb-6" >
                        <
                        label class = "col-lg-2 col-form-label ps-5 fw-bold fs-6" >
                        {{ __('msg.sıralama') }} < /label> <
                        div class = "col-lg-10" >
                        <
                        div class = "row" >
                        <
                        div class = "col-lg-12 fv-row" >
                        <
                        input type = "number"
                        name = "queue"
                        class = "form-control form-control-solid mb-3 mb-lg-0"
                        value = "" / >
                        <
                        /div> < /
                        div > <
                        /div> < /
                        div > <
                        input type = "hidden"
                        name = "type"
                        class = "form-control"
                        value = "0" / >


                        <
                        div class = "row ps-5" >
                        <
                        ul class = "nav nav-tabs nav-line-tabs nav-line-tabs-2x fs-6" >
                        <
                        li class = "nav-item" >
                        <
                        a class = "nav-link active"
                        data - bs - toggle = "tab"
                        href = "#tab_menu_header_external_link_tr" >
                        <
                        span >
                        <
                        img src = "{{ asset('/assets/tr.png') }}"
                        width = "28"
                        height = "20"
                        alt = "TR"
                        title = "TR" >
                        <
                        /span> < /
                        a > <
                        /li> <
                        li class = "nav-item" >
                        <
                        a class = "nav-link"
                        data - bs - toggle = "tab"
                        href = "#tab_menu_header_external_link_en" >
                        <
                        span >
                        <
                        img src = "{{ asset('/assets/en.png') }}"
                        width = "28"
                        height = "20"
                        alt = "EN"
                        title = "EN" >
                        <
                        /span> < /
                        a > <
                        /li> < /
                        ul > <
                        div class = "tab-content"
                        id = "TabContent_1" >
                        <
                        div class = "tab-pane fade show active"
                        id = "tab_menu_header_external_link_tr"
                        role = "tabpanel" >
                        <
                        div class = "card-body px-0 py-5" >
                        <
                        div class = "row mb-6 container" >
                        <
                        label class = "col-lg-2 col-form-label ps-0 fw-bold fs-6" >
                        {{ __('msg.ürün') }} {{ __('msg.ad') }} < /label> <
                        div class = "col-lg-10 ps-0" >
                        <
                        div class = "row" >
                        <
                        div class = "col-lg-12 fv-row" >
                        <
                        input type = "text"
                        name = "product_name_tr"
                        class = "form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                        value = "" / >
                        <
                        /div> < /
                        div > <
                        /div> < /
                        div > <
                        /div>



                        <
                        div class = "row mb-6 container" >
                        <
                        label class = "col-lg-2 col-form-label ps-0 fw-bold fs-6" >
                        {{ __('msg.açıklama') }} < /label> <
                        div class = "col-lg-10" >
                        <
                        div class = "row" >
                        <
                        div class = "col-lg-12 fv-row" >
                        <
                        textarea name = "product_description_tr"
                        class = "form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                        value = "" / > < /textarea> < /
                        div > <
                        /div> < /
                        div > <
                        /div> < /
                        div >

                        <
                        div class = "tab-pane fade"
                        id = "tab_menu_header_external_link_en"
                        role = "tabpanel" >

                        <
                        div class = "card-body px-0 py-5" >
                        <
                        div class = "row mb-6 container" >
                        <
                        label class = "col-lg-2 col-form-label ps-0 fw-bold fs-6" >
                        {{ __('msg.ürün') }} {{ __('msg.ad') }} < /label> <
                        div class = "col-lg-10 ps-0" >
                        <
                        div class = "row" >
                        <
                        div class = "col-lg-12 fv-row" >
                        <
                        input type = "text"
                        name = "product_name_en"
                        class = "form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                        value = "" / >
                        <
                        /div> < /
                        div > <
                        /div> < /
                        div > <
                        /div>


                        <
                        div class = "row mb-6 container" >
                        <
                        label class = "col-lg-2 col-form-label ps-0 fw-bold fs-6" >
                        {{ __('msg.açıklama') }} < /label> <
                        div class = "col-lg-10" >
                        <
                        div class = "row" >
                        <
                        div class = "col-lg-12 fv-row" >
                        <
                        textarea name = "product_description_en"
                        class = "form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                        value = "" / > < /textarea> < /
                        div > <
                        /div> < /
                        div > <
                        /div> < /
                        div >

                        <
                        /div> <
                        div class = "right"
                        style = "text-align:right" >
                        <
                        input type = "submit"
                        class = "btn btn-primary"
                        value = " {{ __('msg.kaydet') }}" >
                        <
                        /div> < /
                        div > <
                        /div>'


                    );

                } else {


                }



            });



        });
    </script>
    <!--end:: extra js-->
@endsection
