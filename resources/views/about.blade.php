@extends('layouts.app')

@section('content')
<!--== Start Header Wrapper ==-->
@include('includes.transnav')
<!--== End Header Wrapper ==-->
<!--== Start About Page Hero Area ==-->
        <div class="about-hero-area">
            <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                data-alias="about-us-01" data-source="gallery">
                <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
                <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" data-version="5.4.7">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-6" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide">
                            <!-- MAIN IMAGE --> <img src="img/about/about-01-slider.jpg" alt="Arden"
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                data-bgparallax="off" class="rev-slidebg" data-no-retina><!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme" id="slide-6-layer-5"
                                data-x="['left','left','left','left']" data-hoffset="['370','103','100','15']"
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['220','219','300','300']"
                                data-fontsize="['56','56','42','35']" data-lineheight="['70','70','50','40']"
                                data-width="['709','709','500','320']" data-height="none" data-whitespace="normal"
                                data-type="text" data-responsive_offset="on"
                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]">Here at Arden, we are free to do what we love.</div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption" id="slide-6-layer-6" data-x="['left','left','left','left']"
                                data-hoffset="['370','105','105','15']" data-y="['bottom','bottom','bottom','bottom']"
                                data-voffset="['130','107','200','100']" data-fontsize="['18','18','18','15']"
                                data-lineheight="['28','28','28','26']" data-width="['580','686','400','300']"
                                data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on"
                                data-responsive="off"
                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]">We create experiences where people can connect with brands
                                the same way they connect with each other.</div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom"></div>
                </div>
            </div>
        </div>
        <!--== End About Page Hero Area ==-->
        <!--== Start About Page Feature Area  ==-->
                <div class="about-page-feature-area pb-5 mb-3">
                    <div class="about-page-feature-content sp-y" data-bg="img/icons/letter_a-2.png">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <h4 class="mb-0">A creative agency specialized in brand strategy and digital creation.</h4>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="list-box-item mt-lg-0">
                                        <div class="list-box__info">
                                            <h6 class="text-brand">BRANDING</h6>
                                            <p>We combine classic brand strategy and account planning with digital strategy,
                                                data and user research to find a brand’s true capability. Then we turn this
                                                capability into content, products and campaigns.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="list-box-item mt-lg-0">
                                        <div class="list-box__info">
                                            <h6 class="text-brand">USER EXPERIENCE</h6>
                                            <p>We enable new user behaviors with relevant, useful and engaging design that
                                                drives growth for businesses and impacts people’s lives. Digital devices and
                                                platforms augment our ability to think.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-anda-danda-pic">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <figure class="about-pic"><img class="w-100" src="img/about/about-01.jpg"
                                            alt="Arden"></figure>
                                </div>
                                <div class="col-md-4">
                                    <figure class="about-pic mt-sm-15"><img class="w-100" src="img/about/about-02.jpg"
                                            alt="Arden"></figure>
                                </div>
                                <div class="col-lg-9 m-auto text-center">
                                    <div class="success-dialogue sm-top">
                                        <h4 class="mb-0">Success is no accident. It is hard word, preseverance, learning,
                                            studying, sacrifice and of all, love of what you are doing or learning to do.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--== End About Page Feature Area  ==-->

@include('includes.footer')
@endsection