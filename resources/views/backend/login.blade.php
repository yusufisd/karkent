<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gavia Works | Yönetim Paneli</title>
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <link rel="shortcut icon" href="/assets/backend/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="/assets/backend/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/backend/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="app-blank">
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <div class="w-lg-500px p-10">
                        <form class="form w-100"  method="POST" action="{{route('admin.login_post')}}">
							@csrf
                            <div class="text-center mb-11">
                                <h1 class="text-dark fw-bolder mb-3">Gavia Yönetim Paneli Giriş</h1>
                            </div>

							@if($errors->any())
								@foreach ($errors->all() as $e)
									<div class="alert alert-danger">
										{{$e}}
									</div>
								@endforeach
							@endif

                            <div class="fv-row mb-8">
                                <input type="text" placeholder="Email" name="email" autocomplete="off"
                                    class="form-control bg-transparent" />
                            </div>
                            <div class="fv-row mb-3" data-kt-password-meter="true">
                                <input type="password" placeholder="Şifre" name="password" autocomplete="off"
                                    class="form-control bg-transparent" />
                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                    data-kt-password-meter-control="visibility">
                                    <i class="bi bi-eye-slash fs-2"></i>
                                    <i class="bi bi-eye fs-2 d-none"></i>
                                </span>
                            </div>
                            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                <div></div>
                                <a href="{{route('admin.forgotPassword')}}" class="link-primary">Şifrenizi mi unuttunuz ?</a>
                            </div>
                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-success">
                                    <span class="indicator-label">Giriş Yap</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
                style="background-image: url(/assets/backend/media/misc/background.png)">
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                    <a href="../../demo1/dist/index.html" class="mb-0 mb-lg-12">
                        <img alt="Logo" src="/assets/backend/media/logos/erkek.png" class="h-60px h-lg-75px" />
                    </a>
                    <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
                        src="/assets/backend/media/misc/giris.png" alt="" />
                    <h1 class="d-none d-lg-block text-dark fs-2qx fw-bolder text-center mb-7">Lorem ipsum dolor sit
                        amet consectetur.</h1>
                    <div class="d-none d-lg-block text-dark fs-base text-center">Lorem ipsum dolor sit, amet
                        consectetur adipisicing elit. Excepturi praesentium quia perspiciatis <a href="#"
                            class="opacity-75-hover text-primary fw-bold me-1">the blogger</a>
                        <br />and provides some about
                        <a href="#" class="opacity-75-hover text-primary fw-bold me-1">the interviewee</a>and
                        their
                        <br />work following this is a transcript of the interview.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var hostUrl = "/assets/backend/";
    </script>
    <script src="/assets/backend/plugins/global/plugins.bundle.js"></script>
    <script src="/assets/backend/js/scripts.bundle.js"></script>
    <script src="/assets/backend/js/custom/authentication/sign-in/general.js"></script>
    @include('sweetalert::alert')

</body>

</html>
