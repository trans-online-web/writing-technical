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
                                data-paddingleft="[0,0,0,0]">At Technical Writing, we are here to help you.</div>
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
                                data-paddingleft="[0,0,0,0]">Choose us for any essay writing service, and you won’t regret contacting us.</div>
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
                                    <h4 class="mb-0">Our vast resources and research capability bestowed on our writers lead to an on-time creation of a well-organized essay. </h4>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="list-box-item mt-lg-0">
                                        <div class="list-box__info">
                                            <h6 class="text-brand">Creation of unique content</h6>
                                            <p>When writing custom essays, we are driven by customer satisfaction, and we ensure the final product is of premium quality with original content to satisfy our clients, which is our biggest reward of our work. Our writers do extensive research and only use credible sources in completing your essay. We create unique essays free from plagiarism. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="list-box-item mt-lg-0">
                                        <div class="list-box__info">
                                            <h6 class="text-brand">Flexible pricing</h6>
                                            <p>Our custom essay writing services offer quality custom paper at reasonable and affordable student prices. Be aware of cons who claim to be custom writing companies offering cheap essay writing services because they end up compromising the quality of your essay. All loyal customers are given 5% bonus for every order they make; the bonuses are later used in purchasing other papers. </p>
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
                                        <h4 class="mb-0">All custom written papers are done by our professional writers; help us help you get it done. Follow the few simple instructions to make an order. The order will be delivered right to your inbox at any time within the order deadline. When in need of assistance do not hesitate to use our ‘custom essay service helps’ and you will get served with our skilled customer care team. Order now!</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--== End About Page Feature Area  ==-->

@include('includes.footer')
@endsection