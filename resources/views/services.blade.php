@extends('layouts.app')

@section('content')
<!--== Start Header Wrapper ==-->
@include('includes.transnav')
<!--== End Header Wrapper ==-->
	<!--== Start Service Page Hero Area  ==-->
    <div class="service-page-hero-area bg-img parallax" data-parallax-speed="0.75"
        data-bg="img/extra/service-page-hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="about-me-hero-content">
                        <div class="about-me-hero-content--inner mt-5">
                            <h2>Our services</h2>
                            <p>We create experiences that transform brands, grow businesses and make people’s lives
                                better. Small teams working on big challenges.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Service Page Hero Area  ==-->
    <!--== Start Service Page Content Area ==-->
    <div class="service-page-service">
        <div class="container">
            <div class="service-inner-wrap sm-top">
                <div class="row mtn-30">
                    <div class="col-md-4 text-center">
                        <div class="icon-box-item">
                            <div class="icon-box__icon"><i class="icon-basic-pencil-ruler"></i></div>
                            <div class="icon-box__txt">
                                <h6>Digital Solutions</h6>
                                <p>Find success in the digital world, where clients love evolving technologies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="icon-box-item">
                            <div class="icon-box__icon"><i class="icon-basic-message-txt"></i></div>
                            <div class="icon-box__txt">
                                <h6>Communications</h6>
                                <p>Brands are business assets. They drive choice, create value, and engender
                                    loyalty.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="icon-box-item">
                            <div class="icon-box__icon"><i class="icon-basic-globe"></i></div>
                            <div class="icon-box__txt">
                                <h6>Creative Strategy</h6>
                                <p>Brands are business assets. They drive choice, create value, and engender
                                    loyalty.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Service Page Content Area ==-->
    <!--== Start Service Page Feature Area  ==-->
            <div class="service-page-feature-area py-lg-5 sm-top bg-img"
                data-bg="img/extra/presentation-feature.jpg">
                <div class="service-page-feature-content sp-y">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <h4 class="mb-0 text-brand">A creative agency specialized in brand strategy and digital
                                    creation.</h4>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="list-box-item mt-lg-0">
                                    <div class="list-box__info">
                                        <h6 class="text-brand">BRANDING</h6>
                                        <p>We combine classic brand strategy and account planning with digital strategy,
                                            data and user research to find a brand’s true capability. Then we turn this
                                            capability into products and campaigns.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="list-box-item mt-lg-0">
                                    <div class="list-box__info">
                                        <h6 class="text-brand">USER EXPERIENCE</h6>
                                        <p>We enable new user behaviors with relevant, useful and engaging design that
                                            drives growth for impacts people’s lives. Digital devices and platforms augment
                                            our ability to think.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-10">
                            <div class="col-md-6 col-lg-4">
                                <div class="list-box-item list-box-item--white">
                                    <div class="list-box__serial">
                                        <h4 class="serial-no">01</h4>
                                    </div>
                                    <div class="list-box__info">
                                        <h6>Brainstorm</h6>
                                        <p>All the team gather to think about the issue, discuss and give ideas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="list-box-item list-box-item--white">
                                    <div class="list-box__serial">
                                        <h4 class="serial-no">02</h4>
                                    </div>
                                    <div class="list-box__info">
                                        <h6>Design</h6>
                                        <p>Sketch, PSD or Firework the ideas into visible design layouts.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="list-box-item list-box-item--white">
                                    <div class="list-box__serial">
                                        <h4 class="serial-no">03</h4>
                                    </div>
                                    <div class="list-box__info">
                                        <h6>Product testing</h6>
                                        <p>Creative director review the final design and see if we can release it.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Service Page Feature Area  ==-->
            <!--== Start Call to Action Area ==-->
            <div class="call-to-action-modern bg-brand">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="call-to-action-content call-to-action-content--business">
                                <h4>Start a new project?</h4><a href="contact.html" class="btn btn-bordered">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Call to Action Area ==-->
	{{-- <div class="justify-content-center py-3">
        <div class="row justify-content-center">
           <h2 class="featurette px-4">Academic Paper Writing Service</h2>
       </div>
       <div class="row justify-content-center container-fluid pt-3">
           <div class="col-md-4">
               <ul class="list-group">
                 <li class="list-group-item">Accounting</li>
                 <li class="list-group-item">Advertising</li>
                 <li class="list-group-item">Aeronautical Engineering</li>
                 <li class="list-group-item">Aeronautics</li>
                 <li class="list-group-item">Aerospace Science</li>
                 <li class="list-group-item">African-American Studies</li>
                 <li class="list-group-item">Agricultural Studies</li>
                 <li class="list-group-item">American History</li>
                 <li class="list-group-item">American-Literature</li>
                 <li class="list-group-item">Anthropology</li>
                 <li class="list-group-item">Antique Literature</li>
                 <li class="list-group-item">Application Essay</li>
                 <li class="list-group-item">Architecture</li>
                 <li class="list-group-item">Art</li>
                 <li class="list-group-item">Asian Literature</li>
                 <li class="list-group-item">Asian Studies</li>
                 <li class="list-group-item">Astronomy</li>
                 <li class="list-group-item">Aviation</li>
                 <li class="list-group-item">Biology</li>
                 <li class="list-group-item">Business</li>
                 <li class="list-group-item">Canadian Studies</li>
                 <li class="list-group-item">Case Study</li>
                 <li class="list-group-item">Chemistry</li>
                 <li class="list-group-item">Civil &amp; Structural Engineering</li>
                 <li class="list-group-item">Communications and Media</li>
                 <li class="list-group-item">Communications Strategies</li>
                 <li class="list-group-item">Company analysis</li>
                 <li class="list-group-item">Computer Science</li>
                 <li class="list-group-item">Creative Writing</li>
                 <li class="list-group-item">Criminology</li>
                 <li class="list-group-item">Dance</li>
               </ul>
           </div>
           <div class="col-md-4">
               <ul class="list-group">
                 <li class="list-group-item">Design analysis</li>
                 <li class="list-group-item">Drama</li>
                 <li class="list-group-item">East European Studies</li>
                 <li class="list-group-item">E-Commerce</li>
                 <li class="list-group-item">Economics</li>
                 <li class="list-group-item">Education</li>
                 <li class="list-group-item">Education Theories</li>
                 <li class="list-group-item">Engineering</li>
                 <li class="list-group-item">English</li>
                 <li class="list-group-item">Environmental Issues</li>
                 <li class="list-group-item">Ethics</li>
                 <li class="list-group-item">Film</li>
                 <li class="list-group-item">Finance</li>
                 <li class="list-group-item">Geography</li>
                 <li class="list-group-item">Healthcare</li>
                 <li class="list-group-item">History</li>
                 <li class="list-group-item">Holocaust</li>
                 <li class="list-group-item">Information Technology</li>
                 <li class="list-group-item">Internet</li>
                 <li class="list-group-item">Investment</li>
                 <li class="list-group-item">IT Management</li>
                 <li class="list-group-item">Journalism</li>
                 <li class="list-group-item">Latin-American Studies</li>
                 <li class="list-group-item">Law</li>
                 <li class="list-group-item">Legal Issues</li>
                 <li class="list-group-item">Linguistics</li>
                 <li class="list-group-item">Literature</li>
                 <li class="list-group-item">Logistics</li>
                 <li class="list-group-item">Management</li>
                 <li class="list-group-item">Marketing</li>
                 <li class="list-group-item">Mathematics</li>
               </ul>
           </div>
           <div class="col-md-4">
               <ul class="list-group">
                 <li class="list-group-item">Mechanical Engineering</li>
                 <li class="list-group-item">Medicine and Health Studies</li>
                 <li class="list-group-item">Morbi leo risus</li>
                 <li class="list-group-item">Movies</li>
                 <li class="list-group-item">Music</li>
                 <li class="list-group-item">Native-American Studies</li>
                 <li class="list-group-item">Nature</li>
                 <li class="list-group-item">Nursing</li>
                 <li class="list-group-item">Nutrition</li>
                 <li class="list-group-item">Paintings</li>
                 <li class="list-group-item">Pedagogy</li>
                 <li class="list-group-item">Pharmacology</li>
                 <li class="list-group-item">Philosophy</li>
                 <li class="list-group-item">Physics</li>
                 <li class="list-group-item">Political Science</li>
                 <li class="list-group-item">Psychology</li>
                 <li class="list-group-item">Public Relations</li>
                 <li class="list-group-item">Religion and Theology</li>
                 <li class="list-group-item">Religious Studies</li>
                 <li class="list-group-item">Shakespeare Literature</li>
                 <li class="list-group-item">Sociology</li>
                 <li class="list-group-item">Sports</li>
                 <li class="list-group-item">Statistics</li>
                 <li class="list-group-item">Teacher’s Career</li>
                 <li class="list-group-item">Technology</li>
                 <li class="list-group-item">Theatre</li>
                 <li class="list-group-item">Tourism</li>
                 <li class="list-group-item">Trade</li>
                 <li class="list-group-item">Web Design</li>
                 <li class="list-group-item">West-European Studies</li>
               </ul>
           </div>
       </div>
    </div> --}}
    @include('includes.footer')
@endsection