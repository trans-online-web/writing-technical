@extends('layouts.app')

@section('content')
<!--== Start Header Wrapper ==-->
@include('includes.transnav')
<!--== End Header Wrapper ==-->
	<div class="justify-content-center call-to-action-landing sp-y parallax bg-img" data-parallax-speed="0.75" data-bg="img/call-to/call-to-bg-3.jpg">
        <div class="pt-5 mt-5">
        	<div class="section-title section-title--white mb-0">
                        <h2 class="text-center">How it <br> Works</h2>
                    </div>
        </div>
    </div>
	<!--== Start About Page Content ==-->
    <div class="about-page-content-area sm-top px-lg-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 order-1 order-lg-0">
                    <div class="about-page-content">
                        <h3>A creative agency specialized in brand strategy and digital creation.</h3>
                        <p>We combine classic brand strategy and account planning to find a brand’s true capability.
                            Then we turn this capability into exceptional content, products, services and campaigns.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 order-0 ml-auto">
                    <figure class="about-thumb about-video-wrap position-relative"><img
                            src="img/about/about-video-icon.jpg" class="w-100" alt="Arden-About">
                        <figcaption class="video-popup-txt"><a href="https://www.youtube.com/watch?v=7e90gBu4pas"
                                class="btn btn-video-popup" data-effect="mfp-zoom-in"><i
                                    class="icon-music-play-button"></i></a></figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--== End About Page Content ==-->

    <!--== Start About Page Feature Area ==-->
    <section class="about-page-2-feature-area sp-y sm-top bg-img" data-bg="assets/img/banner/g-b-4.jpg">
        <div class="container my-lg-5">
            <div class="row mtn-75 mtn-md-50 mtn-sm-45">
                <div class="col-md-6 col-lg-4">
                    <div class="list-box-item list-box-item--white">
                        <div class="list-box__serial">
                            <h4 class="serial-no">01</h4>
                        </div>
                        <div class="list-box__info">
                            <h6>Unlimited Colors</h6>
                            <p>Freely try the colors until there’s one matching the spirit of your business.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="list-box-item list-box-item--white">
                        <div class="list-box__serial">
                            <h4 class="serial-no">02</h4>
                        </div>
                        <div class="list-box__info">
                            <h6>Multi-purpose</h6>
                            <p>Cover a range of themes which you can freely choose for your site.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="list-box-item list-box-item--white">
                        <div class="list-box__serial">
                            <h4 class="serial-no">03</h4>
                        </div>
                        <div class="list-box__info">
                            <h6>Responsive layouts</h6>
                            <p>We’ve made sure Arden is perfectly adapted to any devices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="list-box-item list-box-item--white">
                        <div class="list-box__serial">
                            <h4 class="serial-no">04</h4>
                        </div>
                        <div class="list-box__info">
                            <h6>Easy Customizations</h6>
                            <p>Arden is made for your effortless establishment, explore it for yourself.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="list-box-item list-box-item--white">
                        <div class="list-box__serial">
                            <h4 class="serial-no">05</h4>
                        </div>
                        <div class="list-box__info">
                            <h6>Creative Layouts</h6>
                            <p>Arden offers a great collection of creative and beautiful layouts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="list-box-item list-box-item--white">
                        <div class="list-box__serial">
                            <h4 class="serial-no">06</h4>
                        </div>
                        <div class="list-box__info">
                            <h6>SEO optimized</h6>
                            <p>Never be left behind in the race first ranks from search engines.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End About Page Feature Area ==-->

	
	@include('includes.footer')
@endsection