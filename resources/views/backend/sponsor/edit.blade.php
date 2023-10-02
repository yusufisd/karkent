@extends('backend.master')
@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-lg-10 py-3">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-primary fw-bold fs-3 flex-column justify-content-center my-0"> {{__('msg.logo')}}
                    {{ __('msg.ekle') }}
                </h1>
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

    <form action="{{ route('admin.sponsor.update', $data->id) }}" method="POST" enctype="multipart/form-data">
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
                    <div class="col-xl-12 mb-xl-8 mb-5">
                        <div class="card card-flush h-xl-100 mb-xl-8 mb-5">
                            <!--begin::Header-->
                            <!--<div class="ps-12 pt-12"></div>-->
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body p-20">

                                <div style="text-align: center">
                                    <img src="/{{ $data->logo }}" style="width: 20%; border-radius:15px" alt="">
                                </div>
                                <br>

                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label fw-bold fs-6 ps-5"> {{ __('msg.logo') }}</label>
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-lg-12 fv-row">
                                                <input type="file" name="image" class="form-control form-control-lg"
                                                    value="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label class="col-lg-2 col-form-label fw-bold fs-6 ps-5"> {{ __('msg.sıralama') }}
                                    </label>
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-lg-12 fv-row">
                                                <input type="number" name="queue" value="{{ $data->queue }}"
                                                    class="form-control form-control-lg form-control-solid mb-lg-0 mb-3" />
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="card-footer d-flex justify-content-between px-0 py-6">

                                    <!--begin::Input group-->
                                    <div class="row mb-0">
                                        <label class="col-lg-8 col-form-label fw-bold fs-6 ps-5">Durum</label>
                                        <div class="col-lg-4 d-flex align-items-center">
                                            <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                                <input class="form-check-input w-50px h-25px" type="checkbox" {{ $data->status == 1 ? 'checked' : '' }}
                                                    id="allowadd_slider_en" checked="checked" name="allowadd_slider_en" />
                                                <label class="form-check-label" for="allowadd_slider_en"></label>
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
