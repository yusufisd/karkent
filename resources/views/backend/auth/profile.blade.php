@extends('backend.master')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-lg-10 py-3">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <h1 class="page-heading d-flex text-primary fw-bold fs-3 flex-column justify-content-center my-0">
                        Profilim</h1>
                </div>
                <div class="page-title d-flex flex-column justify-content-center me-3 flex-wrap">
                    <a href="javascript:history.back()"
                        class="page-heading d-flex text-dark fw-bold fs-3 justify-content-center text-hover-success my-0">
                        <i class="fa fa-arrow-left mx-2 my-auto"></i>
                        Geri Dön
                    </a>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="row g-5 g-xl-8">
                    <div class="col-xl-12 mb-xl-8 mb-5">
                        <div class="card card-flush h-xl-100 mb-xl-8 mb-5">


                            <form action="{{ route('admin.profileUpdate') }}" method="POST">
                                @csrf
                                <div class="card-body p-15">
                                    
                                    @if($errors->any())
                                        @foreach ($errors->all() as $e)
                                            <div class="alert alert-danger">
                                                {{$e}}
                                            </div>
                                        @endforeach
                                    @endif

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">İsim
                                            Soyisim</label>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-6 fv-row">
                                                    <input type="text" name="name"
                                                        class="form-control form-control-lg form-control-solid mb-lg-0 mb-3"
                                                        placeholder="First name" value="{{ $auth->name }}" />
                                                </div>
                                                <div class="col-lg-6 fv-row">
                                                    <input type="text" name="surname"
                                                        class="form-control form-control-lg form-control-solid"
                                                        placeholder="Last name" value="{{ $auth->surname }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="required">Telefon</span>
                                        </label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="tel" name="phone"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Phone number" value="{{ $auth->phone }}" />
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="required">Email</span>
                                        </label>
                                        <div class="col-lg-8 fv-row">
                                            <input type="tel" name="email"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Phone number" value="{{ $auth->email }}" />
                                        </div>
                                    </div>




                                    <div class="card-footer d-flex justify-content-end px-0 py-6">

                                        <button type="submit" class="btn btn-outline btn-outline-success"
                                            id="btn_submit_profile"><i class="fa-solid fa-check ps-1"></i> KAYDET</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
