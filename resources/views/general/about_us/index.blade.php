@extends('layouts.page')
@section('title', 'Elevator Engineers')
@section('content')

    <!-- about us slider -->
    <section id="about-us" class="pading">
        <div class="container">
            <div class="row wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="col-md-12 text-center">
                    <h2 class="heading-margin">Wellcome to ELEVATOR ENGINEERS LTD.</h2>
                    <p class="text-margin">We, as an authorized supplier, maintain an inventory of virtually every elevator spare parts manufactured since last 13 years. All of these supplies will be shipped for any spare parts as required. This service will be utilized only in the event of materials which are not available at stock. The spare parts manufactured by our suppliers maintain standard specifications.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                    <div class="about-text wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <h3>About ELEVATOR ENGINEERS LTD.</h3>
                        <p class="text-justify">Our company is your best source for value-driven elevator and lift systems.
                            Established in 2005, we have over 13 years of collective knowledge and experience that give us a unique advantage in providing professional services to the consumer. We are  able to provide the most value and innovation per Take spent by providing a satisfaction guarantee for every service provided.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-right wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div id="about-slider">
                        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators visible-xs">
                                <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-slider" data-slide-to="1"></li>
                                <li data-target="#carousel-slider" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active"> <img src="{{asset('fontEnd/images/bg2.jpg')}}" class="img-responsive" alt=""> </div>
                                <div class="item"> <img src="{{asset('fontEnd/images/bg1.jpg')}}" class="img-responsive" alt=""> </div>
                                <div class="item"> <img src="{{asset('fontEnd/images/bg2.jpg')}}" class="img-responsive" alt=""> </div>
                            </div>
                            <a class="left carousel-control hidden-xs"  href="#carousel-slider" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                        <!--/#carousel-slider-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/-->

    {{--<!--/about-tabs-->--}}
    {{--<section id="content" class="top-padding">--}}
        {{--<div class="container">--}}
            {{--<div class="row margin">--}}
                {{--<div class="col-md-3 col-sm-4 wow fadeInDown">--}}
                    {{--<h2>We Serve As</h2>--}}
                {{--</div>--}}
                {{--<div class="col-md-9 col-sm-8">--}}
                    {{--<hr>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 col-sm-12 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">--}}
                    {{--<div class="tab-wrap wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">--}}
                        {{--<div class="media">--}}
                            {{--<div class="parrent pull-left">--}}
                                {{--<ul class="nav nav-tabs nav-stacked">--}}
                                    {{--<li class="active"> <a href="#tab1" data-toggle="tab" class="analistic-01">--}}
                                            {{--<div class="icon-1"> <i class="fa fa-cogs"></i></div>--}}
                                            {{--<h4>Repair and inspection service</h4>--}}
                                            {{--<p>Repair and inspection service</p>--}}
                                        {{--</a> </li>--}}
                                    {{--<li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">--}}
                                            {{--<div class="icon-1"> <i class="fa fa-tachometer"></i></div>--}}
                                            {{--<h4>Repair and inspection service</h4>--}}
                                            {{--<p>Repair and inspection service</p>--}}
                                        {{--</a> </li>--}}
                                    {{--<li class=""><a href="#tab3" data-toggle="tab" class="tehnical">--}}
                                            {{--<div class="icon-1"> <i class="fa fa-wrench"></i></div>--}}
                                            {{--<h4>Repair and inspection service</h4>--}}
                                            {{--<p>Repair and inspection service</p>--}}
                                        {{--</a> </li>--}}
                                    {{--<li class=""><a href="#tab4" data-toggle="tab" class="tehnical">--}}
                                            {{--<div class="icon-1"> <i class="fa fa-cog"></i></div>--}}
                                            {{--<h4>Repair and inspection service</h4>--}}
                                            {{--<p>Repair and inspection service</p>--}}
                                        {{--</a> </li>--}}
                                    {{--<li class=""><a href="#tab5" data-toggle="tab" class="tehnical">--}}
                                            {{--<div class="icon-1"> <i class="fa fa-clock-o"></i></div>--}}
                                            {{--<h4>Repair and inspection service</h4>--}}
                                            {{--<p>Repair and inspection service</p>--}}
                                        {{--</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="parrent media-body">--}}
                                {{--<div class="tab-content">--}}
                                    {{--<div class="tab-pane fade active in" id="tab1">--}}
                                        {{--<div class="media-body text-center">--}}
                                            {{--<h3>Repair and Inspection Services</h3>--}}
                                        {{--</div>--}}
                                        {{--<div class="row list clearfix">--}}
                                            {{--<ul class="col-md-4 col-sm-4 col-xs-12">--}}
                                                {{--<li>Professional car cleaning</li>--}}
                                                {{--<li>Monthly car inspections</li>--}}
                                                {{--<li>Inner car cleaning</li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="col-md-4 col-sm-4 col-xs-12">--}}
                                                {{--<li>Car painting assets and service</li>--}}
                                                {{--<li>Selling car materials and stuff</li>--}}
                                                {{--<li>Repair cars and materials</li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="col-md-4 col-sm-4 col-xs-12">--}}
                                                {{--<li>Car painting assets and service</li>--}}
                                                {{--<li>Selling car materials and stuff</li>--}}
                                                {{--<li>Repair cars and materials</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div class="media">--}}
                                            {{--<div class="pull-right"> <img class="img-responsive" src="{{asset('fontEnd/images/tab1.png')}}" alt="tab image"> </div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="tab-pane fade " id="tab2">--}}
                                        {{--<div class="media-body text-center">--}}
                                            {{--<h3>Repair and Inspection Services</h3>--}}
                                        {{--</div>--}}
                                        {{--<div class="row list clearfix">--}}
                                            {{--<ul class="col-md-4 col-sm-4 col-xs-12">--}}
                                                {{--<li>Professional car cleaning</li>--}}
                                                {{--<li>Monthly car inspections</li>--}}
                                                {{--<li>Inner car cleaning</li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="col-md-4 col-sm-4 col-xs-12">--}}
                                                {{--<li>Car painting assets and service</li>--}}
                                                {{--<li>Selling car materials and stuff</li>--}}
                                                {{--<li>Repair cars and materials</li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="col-md-4 col-sm-4 col-xs-12">--}}
                                                {{--<li>Car painting assets and service</li>--}}
                                                {{--<li>Selling car materials and stuff</li>--}}
                                                {{--<li>Repair cars and materials</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div class="media">--}}
                                            {{--<div class="pull-right"> <img class="img-responsive" src="{{asset('fontEnd/images/tab2.png')}}" alt="tab image"> </div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="tab-pane fade" id="tab3">--}}
                                        {{--<div class="media-body text-center">--}}
                                            {{--<h3>Repair and Inspection Services</h3>--}}
                                        {{--</div>--}}
                                        {{--<div class="row list clearfix">--}}
                                            {{--<ul class="col-md-4 col-sm-4 col-xs-12">--}}
                                                {{--<li>Professional car cleaning</li>--}}
                                                {{--<li>Monthly car inspections</li>--}}
                                                {{--<li>Inner car cleaning</li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="col-md-4 col-sm-4 col-xs-12">--}}
                                                {{--<li>Car painting assets and service</li>--}}
                                                {{--<li>Selling car materials and stuff</li>--}}
                                                {{--<li>Repair cars and materials</li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="col-md-4 col-sm-4 col-xs-12">--}}
                                                {{--<li>Car painting assets and service</li>--}}
                                                {{--<li>Selling car materials and stuff</li>--}}
                                                {{--<li>Repair cars and materials</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div class="media">--}}
                                            {{--<div class="pull-right"> <img class="img-responsive" src="{{asset('fontEnd/images/tab3.png')}}" alt="tab image"> </div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="tab-pane fade" id="tab4">--}}
                                        {{--<div class="media-body text-center">--}}
                                            {{--<h3>Repair and Inspection Services</h3>--}}
                                        {{--</div>--}}
                                        {{--<div class="row list clearfix">--}}
                                            {{--<ul class="col-md-4 col-sm-4 col-xs-12">--}}
                                                {{--<li>Professional car cleaning</li>--}}
                                                {{--<li>Monthly car inspections</li>--}}
                                                {{--<li>Inner car cleaning</li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="col-md-4 col-sm-4 col-xs-12">--}}
                                                {{--<li>Car painting assets and service</li>--}}
                                                {{--<li>Selling car materials and stuff</li>--}}
                                                {{--<li>Repair cars and materials</li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="col-md-4 col-sm-4 col-xs-12">--}}
                                                {{--<li>Car painting assets and service</li>--}}
                                                {{--<li>Selling car materials and stuff</li>--}}
                                                {{--<li>Repair cars and materials</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div class="media">--}}
                                            {{--<div class="pull-right"> <img class="img-responsive" src="{{asset('fontEnd/images/tab4.png')}}" alt="tab image"> </div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="tab-pane fade" id="tab5">--}}
                                        {{--<div class="media-body text-center">--}}
                                            {{--<h3>Repair and Inspection Services</h3>--}}
                                        {{--</div>--}}
                                        {{--<div class="row list clearfix">--}}
                                            {{--<ul class="col-md-4 col-sm-4 col-xs-12">--}}
                                                {{--<li>Professional car cleaning</li>--}}
                                                {{--<li>Monthly car inspections</li>--}}
                                                {{--<li>Inner car cleaning</li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="col-md-4 col-sm-4 col-xs-12">--}}
                                                {{--<li>Car painting assets and service</li>--}}
                                                {{--<li>Selling car materials and stuff</li>--}}
                                                {{--<li>Repair cars and materials</li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="col-md-4 col-sm-4 col-xs-12">--}}
                                                {{--<li>Car painting assets and service</li>--}}
                                                {{--<li>Selling car materials and stuff</li>--}}
                                                {{--<li>Repair cars and materials</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div class="media">--}}
                                            {{--<div class="pull-right"> <img class="img-responsive" src="{{asset('fontEnd/images/tab5.png')}}" alt="tab image"> </div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!--/.tab-content-->--}}
                            {{--</div>--}}
                            {{--<!--/.media-body-->--}}
                        {{--</div>--}}
                        {{--<!--/.media-->--}}
                    {{--</div>--}}
                    {{--<!--/.tab-wrap-->--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<!--/#about-tabs-->--}}

    {{--<!-- our-Specialist -->--}}
    {{--<section id="specialties" class="pading">--}}
        {{--<div class="container team">--}}
            {{--<div class="row wow fadeInDown">--}}
                {{--<div class="col-md-12 text-center">--}}
                    {{--<h2 class="heading-margin">Our Specialist</h2>--}}
                    {{--<p class="text-margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>--}}
                        {{--et dolore magna aliqua. Ut enim ad minim veniam</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row clearfix">--}}
                {{--<div class="col-md-4 col-sm-6">--}}
                    {{--<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">--}}
                        {{--<div class="media">--}}
                            {{--<div class="pull-left"> <a href="#"><img class="media-object" src="{{asset('fontEnd/images/client1.png')}}" alt=""></a> </div>--}}
                            {{--<div class="media-body">--}}
                                {{--<h4>Jhon Doe</h4>--}}
                                {{--<h5>Tuning Expert</h5>--}}
                                {{--<ul class="tag clearfix">--}}
                                    {{--<li class="btn"><a href="#">Tag-1</a></li>--}}
                                    {{--<li class="btn"><a href="#">Tag-1</a></li>--}}
                                    {{--<li class="btn"><a href="#">Tag-1 </a></li>--}}
                                    {{--<li class="btn"><a href="#">Tag-1</a></li>--}}
                                {{--</ul>--}}
                                {{--<ul class="social_icons">--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--/.media -->--}}
                        {{--<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--/.col-lg-4 -->--}}

                {{--<div class="col-md-4 col-sm-6 col-md-offset-2">--}}
                    {{--<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">--}}
                        {{--<div class="media">--}}
                            {{--<div class="pull-left"> <a href="#"><img class="media-object" src="{{asset('fontEnd/images/client2.png')}}" alt=""></a> </div>--}}
                            {{--<div class="media-body">--}}
                                {{--<h4>Jhon Doe</h4>--}}
                                {{--<h5>Engine Expert</h5>--}}
                                {{--<ul class="tag clearfix">--}}
                                    {{--<li class="btn"><a href="#">Tag-1</a></li>--}}
                                    {{--<li class="btn"><a href="#">Tag-1</a></li>--}}
                                    {{--<li class="btn"><a href="#">Tag-1 </a></li>--}}
                                    {{--<li class="btn"><a href="#">Tag-1</a></li>--}}
                                {{--</ul>--}}
                                {{--<ul class="social_icons">--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--/.media -->--}}
                        {{--<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--/.col-lg-4 -->--}}
            {{--</div>--}}
            {{--<!--/.row -->--}}
            {{--<div class="row team-bar">--}}
                {{--<div class="first-one-arrow hidden-xs">--}}
                    {{--<hr>--}}
                {{--</div>--}}
                {{--<div class="first-arrow hidden-xs">--}}
                    {{--<hr>--}}
                    {{--<i class="fa fa-angle-up"></i> </div>--}}
                {{--<div class="second-arrow hidden-xs">--}}
                    {{--<hr>--}}
                    {{--<i class="fa fa-angle-down"></i> </div>--}}
                {{--<div class="third-arrow hidden-xs">--}}
                    {{--<hr>--}}
                    {{--<i class="fa fa-angle-up"></i> </div>--}}
                {{--<div class="fourth-arrow hidden-xs">--}}
                    {{--<hr>--}}
                    {{--<i class="fa fa-angle-down"></i> </div>--}}
            {{--</div>--}}
            {{--<!--skill_border-->--}}

            {{--<div class="row clearfix">--}}
                {{--<div class="col-md-4 col-sm-6 col-md-offset-2">--}}
                    {{--<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">--}}
                        {{--<div class="media">--}}
                            {{--<div class="pull-left"> <a href="#"><img class="media-object" src="{{asset('fontEnd/images/client2.png')}}" alt=""></a> </div>--}}
                            {{--<div class="media-body">--}}
                                {{--<h4>Jhon Doe</h4>--}}
                                {{--<h5>Engine expaert</h5>--}}
                                {{--<ul class="tag clearfix">--}}
                                    {{--<li class="btn"><a href="#">Tag-1</a></li>--}}
                                    {{--<li class="btn"><a href="#">Tag-1</a></li>--}}
                                    {{--<li class="btn"><a href="#">Tag-1 </a></li>--}}
                                    {{--<li class="btn"><a href="#">Tag-1</a></li>--}}
                                {{--</ul>--}}
                                {{--<ul class="social_icons">--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--/.media -->--}}
                        {{--<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6 col-md-offset-2">--}}
                    {{--<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">--}}
                        {{--<div class="media">--}}
                            {{--<div class="pull-left"> <a href="#"><img class="media-object" src="{{asset('fontEnd/images/client3.png')}}" alt=""></a> </div>--}}
                            {{--<div class="media-body">--}}
                                {{--<h4>Jhon Doe</h4>--}}
                                {{--<h5>Marketing Expert</h5>--}}
                                {{--<ul class="tag clearfix">--}}
                                    {{--<li class="btn"><a href="#">Tag-1</a></li>--}}
                                    {{--<li class="btn"><a href="#">Tag-1</a></li>--}}
                                    {{--<li class="btn"><a href="#">Tag-1 </a></li>--}}
                                    {{--<li class="btn"><a href="#">Tag-1</a></li>--}}
                                {{--</ul>--}}
                                {{--<ul class="social_icons">--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--/.media -->--}}
                        {{--<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!--/.row-->--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<!--/#our-section-->--}}

    {{--<!--Testinomial-->--}}
    {{--<section id="testimonials" class="top-padding">--}}
        {{--<div class="container">--}}
            {{--<div class="row wow fadeInDown">--}}
                {{--<div id="testimonial-slider" class="owl-carousel text-center">--}}
                    {{--<div class="item wow fadeInDown"><img src="{{asset('fontEnd/images/client1.png')}}" alt="client-1">--}}
                        {{--<div class="testimonial-detail text-center">--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
                                {{--Mollitia sequi modi optio delectus eveniet voluptates impedit facere nostrum, esse?--}}
                                {{--Aspernatur, repellendus. Iure ab nisi fuga, veniam ad impedit et! Magni. </p>--}}
                            {{--<hr class="testimonial-line">--}}
                            {{--<h3>H.Mitchel Aston</h3>--}}
                            {{--<h4>Down st. NY</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="item wow fadeInDown"><img src="{{asset('fontEnd/images/client2.png')}}" alt="client-2">--}}
                        {{--<div class="testimonial-detail text-center">--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
                                {{--Mollitia sequi modi optio delectus eveniet voluptates impedit facere nostrum, esse?--}}
                                {{--Aspernatur, repellendus. Iure ab nisi fuga, veniam ad impedit et! Magni. </p>--}}
                            {{--<hr class="testimonial-line">--}}
                            {{--<h3>H.Mitchel Aston</h3>--}}
                            {{--<h4>Down st. NY</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="item wow fadeInDown"><img src="{{asset('fontEnd/images/client1.png')}}" alt="client-3">--}}
                        {{--<div class="testimonial-detail text-center">--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
                                {{--Mollitia sequi modi optio delectus eveniet voluptates impedit facere nostrum, esse?--}}
                                {{--Aspernatur, repellendus. Iure ab nisi fuga, veniam ad impedit et! Magni. </p>--}}
                            {{--<hr class="testimonial-line">--}}
                            {{--<h3>H.Mitchel Aston</h3>--}}
                            {{--<h4>Down st. NY</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<!--/#Testinomial-->--}}

    {{--<!--Partner-->--}}
    {{--<section id="partner" class="pading">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 text-center wow fadeInDown">--}}
                    {{--<h2 class="heading-margin">Our Partners</h2>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>--}}
                        {{--et dolore magna aliqua. Ut enim ad minim veniam</p>--}}
                {{--</div>--}}
                {{--<div class="col-md-1 hidden-xs"></div>--}}
                {{--<div class="col-md-10">--}}
                    {{--<div id="logo-slider" class="owl-carousel">--}}
                        {{--<div class="item"><img src="{{asset('fontEnd/images/partner1.jpg')}}" alt="partner1"></div>--}}
                        {{--<div class="item"><img src="{{asset('fontEnd/images/partner2.jpg')}}" alt="partner2"></div>--}}
                        {{--<div class="item"><img src="{{asset('fontEnd/images/partner3.jpg')}}" alt="partner3"></div>--}}
                        {{--<div class="item"><img src="{{asset('fontEnd/images/partner4.jpg')}}" alt="partner4"></div>--}}
                        {{--<div class="item"><img src="{{asset('fontEnd/images/partner1.jpg')}}" alt="partner1"></div>--}}
                        {{--<div class="item"><img src="{{asset('fontEnd/images/partner2.jpg')}}" alt="partner2"></div>--}}
                        {{--<div class="item"><img src="{{asset('fontEnd/images/partner3.jpg')}}" alt="partner3"></div>--}}
                        {{--<div class="item"><img src="{{asset('fontEnd/images/partner4.jpg')}}" alt="partner4"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-1 hidden-xs"></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

@endsection
