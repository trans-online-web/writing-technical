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
                        <h3>How to order from us!</h3>
                        <p>Since we work remotely, we do conduct the help online. The online service allows to know more about our work and get various samples essay topics on how to ‘write my essay in time.’<br>
                        To get our services, you will have to create an account with us. To register for the account, you have to follow the steps below.
                        <ul>
                            <li><i class="fas fa-angle-double-right"></i> Click on the “Sign up” button.</li>
                            <li> <i class="fas fa-angle-double-right"></i> On the ‘sign up’ page, fill out your details then click on the ‘sign up’ button.</li>
                            <li> <i class="fas fa-angle-double-right"></i> You will receive a confirmation mail, and upon clicking it, you are done. An account will be created successfully.</li>
                        </ul>
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
                            <h6>Quality Guarantee</h6>
                            <p>All our papers are assessed and evaluated by the quality assurance department before delivery.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="list-box-item list-box-item--white">
                        <div class="list-box__serial">
                            <h4 class="serial-no">02</h4>
                        </div>
                        <div class="list-box__info">
                            <h6>Free Revision</h6>
                            <p>Customers can request for unlimited revisions for up to two months from the submission date.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="list-box-item list-box-item--white">
                        <div class="list-box__serial">
                            <h4 class="serial-no">03</h4>
                        </div>
                        <div class="list-box__info">
                            <h6>Originality</h6>
                            <p>We deliver 100% original papers with 0% plagiarism.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="list-box-item list-box-item--white">
                        <div class="list-box__serial">
                            <h4 class="serial-no">04</h4>
                        </div>
                        <div class="list-box__info">
                            <h6>Money-back guarantee</h6>
                            <p>Get a refund when the delivered paper does not either meet the requirements or is canceled by the school.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="list-box-item list-box-item--white">
                        <div class="list-box__serial">
                            <h4 class="serial-no">05</h4>
                        </div>
                        <div class="list-box__info">
                            <h6>Compliance</h6>
                            <p>We always ensure that we follow customers’ instructions to the latter. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="list-box-item list-box-item--white">
                        <div class="list-box__serial">
                            <h4 class="serial-no">06</h4>
                        </div>
                        <div class="list-box__info">
                            <h6>Privacy and Confidentiality</h6>
                            <p>When you request to write my thesis statement service, we neither share nor disclose clients’ data.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End About Page Feature Area ==-->

	
	@include('includes.footer')
@endsection