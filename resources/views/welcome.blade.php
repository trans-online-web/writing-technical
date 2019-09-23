<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Technical Writing</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
</head>

<body>
    <div>
        <!--== Start Header Wrapper ==-->
        @include('includes.transnav')
        <!--== End Header Wrapper ==-->
        <div class="call-to-action-wrapper parallax" data-parallax-speed="0.55" data-bg="/img/call-to/call-to-bg-5.jpg"
            style="background-position: center 24.45%; background-image: url(&quot;assets/img/call-to/call-to-bg-5.jpg&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="call-to-action-content call-to-action-content--startup">
                            <div class="call-to-action-content-inner">
                                <h2>Start a new project?</h2><a href="contact.htm" class="btn btn-bordered">Contact
                                    Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== Start Our Service Area ==-->
        <section class="our-service-area sm-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="about-content about-content-icon ml-0 pt-0">
                            <div class="section-title pr-lg-5">
                                <h5>Services We Provide</h5>
                                <h4 class="mb-0">Modern digital creative agency.</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row mtn-75 mtn-md-45 mtn-sm-40">
                            <div class="col-md-6">
                                <div class="list-box-item">
                                    <div class="list-box__serial">
                                        <h4 class="serial-no">01</h4>
                                    </div>
                                    <div class="list-box__info">
                                        <h6>Digital Solutions</h6>
                                        <p>Find success in the digital world, where clients love evolving technologies.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="list-box-item">
                                    <div class="list-box__serial">
                                        <h4 class="serial-no">02</h4>
                                    </div>
                                    <div class="list-box__info">
                                        <h6>Creative Strategy</h6>
                                        <p>Delighting users with simple and functional products and services.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="list-box-item">
                                    <div class="list-box__serial">
                                        <h4 class="serial-no">03</h4>
                                    </div>
                                    <div class="list-box__info">
                                        <h6>Communications</h6>
                                        <p>Brands are business assets. They drive choice, create value, and engender
                                            loyalty.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="list-box-item">
                                    <div class="list-box__serial">
                                        <h4 class="serial-no">04</h4>
                                    </div>
                                    <div class="list-box__info">
                                        <h6>Integrated marketing</h6>
                                        <p>Driving sales with a cross-channel approach to communications.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Our Service Area ==-->
        <!--== Start Gallery Banner Area ==-->
        <div class="gallery-banner-area sm-top-wp">
            <div class="row no-gutters">
                <div class="col-md-6 col-xl-6">
                    <div class="gallery-banner-item bg-img" data-bg="img/banner/g-b-1.jpg"></div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="gallery-banner-item bg-img" data-bg="img/banner/g-b-2.jpg"></div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="gallery-banner-item gallery-banner-item-txt bg-brand">
                        <div class="gallery-banner-txt">
                            <h4>Collaboration</h4>
                            <p>Our collaborative approach means you are invited to work with our close-knit team as we
                                strive to deliver truly personalised work.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="gallery-banner-item bg-img" data-bg="img/banner/g-b-3.jpg"></div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="gallery-banner-item gallery-banner-item-txt bg-secondary">
                        <div class="gallery-banner-txt">
                            <h4>Forward-thinking</h4>
                            <p>We are always looking ahead to stay on top of the latest digital design and technology so
                                the projects will be ready for tomorrow’s opportunities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="gallery-banner-item bg-img" data-bg="img/banner/g-b-4.jpg"></div>
                </div>
            </div>
        </div>
        <!--== End Gallery Banner Area ==-->
        <!--== Start Funfact Counter Area ==-->
        <div class="counter-marketing-agency sp-y parallax" data-parallax-speed="0.75"
            data-bg="img/extra/marketing-funfact.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-1 order-lg-0">
                        <div class="funfact-agency-content sp-y mt-40 mt-lg-0">
                            <div class="row mtn-40">
                                <div class="col-sm-6 text-center">
                                    <div class="counter-item">
                                        <h2 class="counter-number plus"><span class="counter">3000</span></h2>
                                        <h6 class="counter-txt">Satisfied Clients</h6>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <div class="counter-item">
                                        <h2 class="counter-number"><span class="counter">340</span></h2>
                                        <h6 class="counter-txt">Projects</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 ml-auto order-0">
                        <div class="section-title section-title--white mb-0">
                            <h2>Award winning marketing agency</h2>
                            <p class="text-white">Arden's mission is a unique combination of broadcast, interactive and
                                tech talent that has pointedly addressed the future.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Funfact Counter Area ==-->
        <!--== Start Call to Action Area ==-->
        <div class="call-to-action-modern">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="call-to-action-content call-to-action-content--modern">
                            <div class="call-to-action-content-inner">
                                <div class="contact-content-wrap">
                                    <h2>Start a new project?</h2>
                                    <div class="call-to-contact">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>VISIT OUR STUDIO AT</h5>
                                                <h4 class="mb-0">2005 Stokes Isle Apt. 896, Venaville 10010, USA</h4>
                                            </div>
                                            <div class="col-md-6 mt-sm-25">
                                                <h5>OR MESSAGE US</h5>
                                                <h4 class="mb-0">info@yourdomain.com, (+68)120034509</h4>
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
        <!--== End Call to Action Area ==-->

        @include('includes.footer')

        <!-- Start Off Canvas Menu Wrapper -->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-inner">
                <!-- Start Off Canvas Content Wrapper -->
                <div class="off-canvas-content">
                    <!-- Off Canvas Header -->
                    <div class="off-canvas-header">
                        <div class="logo-area"><a href="index.html"><img src="assets/img/logo.png" alt="Logo"></a></div>
                        <div class="close-action"><button class="btn-close"><i class="pe-7s-close"></i></button></div>
                    </div>
                    <div class="off-canvas-item">
                        <!-- Start Mobile Menu Wrapper -->
                        <div class="res-mobile-menu">
                            <!-- Note Content Auto Generate By Jquery From Main Menu -->
                        </div><!-- End Mobile Menu Wrapper -->
                    </div>
                </div><!-- End Off Canvas Content Wrapper -->
            </div>
        </aside>
        <!-- End Off Canvas Menu Wrapper -->
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/app.min.js') }}" defer></script>
</body>

</html>
