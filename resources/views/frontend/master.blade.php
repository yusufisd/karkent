<!DOCTYPE html>
<html lang="tr">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Buskey - Corporate Business Template">

    <!-- ========== Page Title ========== -->
    <title>Karkent Tekstil</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="/assets/frontend/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="/assets/frontend/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/frontend/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/assets/frontend/css/flaticon-business-set.css" rel="stylesheet" />
    <link href="/assets/frontend/css/magnific-popup.css" rel="stylesheet" />
    <link href="/assets/frontend/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="/assets/frontend/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="/assets/frontend/css/animate.css" rel="stylesheet" />
    <link href="/assets/frontend/css/bootsnav.css" rel="stylesheet" />
    <link href="/assets/frontend/style.css" rel="stylesheet">
    <link href="/assets/frontend/css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="all" href="/assets/frontend/css/cerez.css" />

    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="/assets/frontend/js/html5/html5shiv.min.js"></script>
      <script src="/assets/frontend/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900" rel="stylesheet">


</head>

<body>


    <!-- Preloader Start -->
    <!-- Preloader Ends -->

    <!-- Start Header Top
    ============================================= -->
    <div class="top-bar-area bg-theme text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="info box">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <p>
                                        karkent@karkent.com
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info">
                                    <p>
                                        444 6 298
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="topbar-social col-md-3">
                    <ul class="text-right">
                        <li>
                            <a href="https://www.facebook.com/KarkentTextile"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@karkenttextile/"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/karkenttextile/"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://tr.linkedin.com/company/karkenttextile"><i class="fab fa-linkedin"></i></a>
                        </li>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li>
                            @php
                                $langs = ['en', 'tr'];
                                if (\Session::get('applocale') != null) {
                                    unset($langs[array_search(\Session::get('applocale'), $langs)]);
                                } else {
                                    unset($langs[array_search(config('app.fallback_locale'), $langs)]);
                                }
                            @endphp
                            @foreach ($langs as $key => $value)
                                <a href="{{ route('chaange.lang', $value) }}"> <img
                                        src="/assets/frontend/img/{{ $value }}.png" alt="{{ $value }}"
                                        width="24">
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header
    ============================================= -->
    <header>

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed border white no-background bootsnav">

            <div class="container">

                <!-- Start Header Navigation -->
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>

                    <a class="navbar-brand" href="#brand">

                        <img src="/assets/frontend/img/logo-light.png" class="logo logo-display" alt="Logo">

                        <img src="/assets/frontend/img/logo.png" class="logo logo-scrolled" alt="Logo">
                        <div class="onlang"><a href="#"> <img src="/assets/frontend/img/lang.png" alt="Logo"
                                    width="24"></div>
                    </a>

                </div>

                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">

                        <li>
                            <a href="index.html">Ana Sayfa</a>
                        </li>
                        <li>
                            <a href="about.html">Kurumsal</a>
                        </li>

                        <li>

                        @foreach (categories2() as $cat)
                        <li class="dropdown">
                            <a href="shirting-fabric.html" class="dropdown-toggle" data-toggle="dropdown">
                                {{ $cat->title }} </a>
                            <ul class="dropdown-menu">

                                @foreach (products2($cat->id) as $pro)
                                <li><a  target="_blank" href="{{$pro->link != null ? $pro->link : '#'}}"> {{$pro->title}} </a></li>
                                    
                                @endforeach


                                
                            </ul>
                        </li>
                        @endforeach




                        <li>
                            <a href="{{ route('frontend.contact') }}">İLETİŞİM</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->


    @yield('content')

    <!-- Stop WhatsApp ============================================= -->

    <!-- Start Footer ============================================= -->
    <footer class="default-padding-top text-light">
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p style="text-align:left;">&copy; Copyright 2023</p>
                        </div>
                        <div class="col-md-6 footer-bottom-menu text-right">
                            <ul>
                                <li><a href="/assets/frontend/img/talep.pdf">Talep Formu</a></li>
                                <li><a href="/assets/frontend/img/politika.pdf">Politika</a></li>
                                <li><a href="/assets/frontend/img/kvkk.pdf">KVKK Aydınlatma Metni</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
    <script>
        window.addEventListener("load", function() {
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#d71621", // şerit arkaplan rengi
                        "text": "#ffffff" // şerit üzerindeki yazı rengi
                    },
                    "button": {
                        "background": "#333", // buton arkaplan rengi - "transparent" kullanıp border açabilirsiniz.
                        //"border": "#14a7d0", arkaplan rengini transparent yapıp çerçeve kullanabilirsini
                        "text": "#ffffff" // buton yazı rengi
                    }
                },
                "theme": "classic", // kullanabileceğiniz temalar block, edgeless, classic
                // "type": "opt-out", gizle uyarısını aktif etmek için
                // "position": "top", aktif ederseniz uyarı üst kısımda görünür
                // "position": "top", "static": true, aktif ederseniz uyarı üst kısımda sabit olarak görünür
                // "position": "bottom-left", aktif ederseniz uyarı solda görünür
                //"position": "bottom-right", aktif ederseniz uyarı sağda görünür
                "content": {
                    "message": "Web sitemizde size en iyi deneyimi sunabilmemiz için çerezleri kullanıyoruz. Bu siteyi kullanmaya devam ederseniz, bunu kabul etmiş sayılıyorsunuz.",
                    "dismiss": "Tamam",
                    "link": "Daha fazla bilgi",
                    "href": "/assets/frontend/img/kvkk.pdf"
                }
            })
        });
    </script>
    <!-- jQuery Frameworks
    ============================================= -->
    <script src="/assets/frontend/js/jquery-1.12.4.min.js"></script>
    <script src="/assets/frontend/js/bootstrap.min.js"></script>
    <script src="/assets/frontend/js/equal-height.min.js"></script>
    <script src="/assets/frontend/js/jquery.appear.js"></script>
    <script src="/assets/frontend/js/jquery.easing.min.js"></script>
    <script src="/assets/frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/frontend/js/progress-bar.min.js"></script>
    <script src="/assets/frontend/js/modernizr.custom.13711.js"></script>
    <script src="/assets/frontend/js/owl.carousel.min.js"></script>
    <script src="/assets/frontend/js/wow.min.js"></script>
    <script src="/assets/frontend/js/isotope.pkgd.min.js"></script>
    <script src="/assets/frontend/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/frontend/js/count-to.js"></script>
    <script src="/assets/frontend/js/bootsnav.js"></script>
    <script src="/assets/frontend/js/timeline.min.js"></script>
    <script src="/assets/frontend/js/Chart.min.js"></script>
    <script src="/assets/frontend/js/custom-chart.js"></script>
    <script src="/assets/frontend/js/main.js"></script>
    <script type='text/javascript' src='/assets/frontend/js/cerez.js'></script>


</body>

</html>
