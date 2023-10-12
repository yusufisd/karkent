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
                    {{ __('msg.kvkk sayfası') }} {{ __('msg.düzenle') }} </h1>
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
        </div>
    </div>


    <form action="{{ route('admin.kvkk.update') }}" method="POST" enctype="multipart/form-data">
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
                            <div class="card-body py-5">

                                <div class="tab-pane" id="tab_page_four" role="tabpanel">
                                    <!--begin::Tab-->
                                    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x fs-6 mb-5">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab_page_four_tr">
                                                <span>
                                                    <img src="{{ asset('/assets/tr.png') }}" width="28" height="20"
                                                        alt="TR" title="TR">
                                                </span>

                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab_page_four_en">
                                                <span>
                                                    <img src="{{ asset('/assets/en.png') }}" width="28" height="20"
                                                        alt="EN" title="EN">
                                                </span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="TabContent_add_3">
                                        <div class="tab-pane fade show active" id="tab_page_four_tr" role="tabpanel">
                                            <div class="card-body py-5">
                                                <textarea name="content_tr" class="ckeditor" id="content" cols="30" rows="10">{{ $data }}</textarea>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade show " id="tab_page_four_en" role="tabpanel">
                                            <div class="card-body py-5">
                                                <textarea name="content_en" class="ckeditor" id="content2" cols="30" rows="10">{{ $data2 }}</textarea>
                                            </div>
                                        </div>

                                    </div>

                                </div>
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
                </div>
            </div>
        </div>

    </form>

@endsection
@section('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

            ClassicEditor
            .create(document.querySelector('#content2'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
