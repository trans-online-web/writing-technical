@extends('layouts.app')
@section('title')
    About Us
@stop
@section('content')
    @include('includes.transnav')
    <!--== End Header Wrapper ==-->
    <div class="justify-content-center call-to-action-landing sp-y parallax bg-img" data-parallax-speed="0.75" data-bg="img/call-to/call-to-bg-3.jpg">
        <div class="pt-5 mt-5">
            <div class="section-title section-title--white mb-0">
                <h2 class="text-center">Contact Us</h2>
            </div>
        </div>
    </div>
    <section class="hero-section" style="background-image: url('images/contact.jpg'); background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;">
        <div class="hero-area-1">

            <div class="container">
                <div class="row ml-3 pl-5 justify-content-center">
                    <div class="col-lg-7 centered">
                        <div class="hero-sub">
                            <div class="hero-left pt-4 pb-4">
                                <h2 style="color: white">CONTACT US</h2>
                                <h5 style="color: white">If you need to get additional information about our custom
                                    writing service, please feel free to contact us either by phone, email or live chat.
                                    We are here to serve all your needs any time you are facingdifficulties with paper
                                    writing.
                                    <br><br>

                                    Upwriters.net proves the honesty and reliability of its services since it has been
                                    found. Contact us right now and get answers to all questions that you have come up
                                    with.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!--/Hero Area-->
    <!--Mission Vission Area-->
    <section class="section-padding-2 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="single-mission-vission">
                        <h4>Live Chat </h4>
                        <p>Text us at these hours: Monday 00:00 AM – Saturday 08:00 PM (UTC).</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="single-mission-vission">
                        <h4>phone</h4>
                        <h4>Upwriters 24/7 Service contact</h4>
                        <p><a href="tel:+1(620)220-2662">
                                +1 (620) 220-2662
                            </a></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="single-mission-vission">
                        <h4>Email</h4>
                        <h4>Request for Proporsal</h4>
                        <p>Support@upwriters.net</p>

                    </div>
                </div>
            </div>
        </div>
    </section><!--/Mission Vission Area-->
@endsection

