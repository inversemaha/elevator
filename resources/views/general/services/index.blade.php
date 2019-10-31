@extends('layouts.page')
@section('title', 'Elevator Engineers')
@section('content')

    <!--Work-->
    <section id="our-work" class="pading">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center wow fadeInDown">
                    <h2 class="heading-margin">Our Services</h2>
                    <p class="text-margin">We, as an authorized supplier, maintain an inventory of virtually every elevator spare parts manufactured since last 13 years. All of these supplies will be shipped for any spare parts as required. This service will be utilized only in the event of materials which are not available at stock. The spare parts manufactured by our suppliers maintain standard specifications.</p>
                </div>
            </div>

            <div class="work-filter">

                <ul id="filters" class="clearfix wow fadeInDown">
                    <li><span class="filter active" data-filter="work1 work2 work3 work4 work5">All Services</span></li>
                    <li><span class="filter" data-filter="work1">Maintenance and Repair</span></li>
                    <li><span class="filter" data-filter="work2">Inspection and Lubrication</span></li>
                    <li><span class="filter" data-filter="work3">Full Maintenance </span></li>
                    <li><span class="filter" data-filter="work4">Advance Support</span></li>
                    <li><span class="filter" data-filter="work5">Full Maintenance </span></li>
                </ul>

                <div id="portfoliolist">
                    <div class="portfolio work4" data-cat="work4">
                        <div class="portfolio-wrapper gallery-wrap">
                            <img src="{{asset('fontEnd/images/1.jpg')}}" alt="feature-1" />
                            <div class="overlay">
                                <div class="gallery-inner">
                                    <h3>work1</h3>
                                    <p>
                                        <a class="fancybox" href="images/1.jpg" data-fancybox-group="gallery" title="">
                                            <i class="fa fa-eye"></i>View Large</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="portfolio work1" data-cat="work1">
                        <div class="portfolio-wrapper gallery-wrap">
                            <img src="{{asset('fontEnd/images/3.jpg')}}" alt="feature-3" />
                            <div class="overlay">
                                <div class="gallery-inner">
                                    <h3>work1</h3>
                                    <p><a class="fancybox" href="images/3.jpg" data-fancybox-group="gallery" title="">
                                            <i class="fa fa-eye"></i>View Large</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio work5" data-cat="work5">
                        <div class="portfolio-wrapper gallery-wrap">
                            <img src="{{asset('fontEnd/images/4.jpg')}}" alt="feature-4" />
                            <div class="overlay">
                                <div class="gallery-inner">
                                    <h3>work1</h3>
                                    <p><a class="fancybox" href="images/4.jpg" data-fancybox-group="gallery" title="">
                                            <i class="fa fa-eye"></i>View Large</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio work2" data-cat="work2">
                        <div class="portfolio-wrapper gallery-wrap">
                            <img src="{{asset('fontEnd/images/5.jpg')}}" alt="feature-7" />
                            <div class="overlay">
                                <div class="gallery-inner">
                                    <h3>work1</h3>
                                    <p><a class="fancybox" href="images/7.jpg" data-fancybox-group="gallery" title="">
                                            <i class="fa fa-eye"></i>View Large</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio work1" data-cat="work1">
                        <div class="portfolio-wrapper gallery-wrap">
                            <img src="{{asset('fontEnd/images/6.jpg')}}" alt="feature-6" />
                            <div class="overlay">
                                <div class="gallery-inner">
                                    <h3>work1</h3>
                                    <p><a class="fancybox" href="images/6.jpg" data-fancybox-group="gallery" title="">
                                            <i class="fa fa-eye"></i>View Large</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="portfolio work2" data-cat="work2">
                        <div class="portfolio-wrapper gallery-wrap">
                            <img src="{{asset('fontEnd/images/7.jpg')}}" alt="" />
                            <div class="overlay">
                                <div class="gallery-inner">
                                    <h3>work1</h3>
                                    <p><a class="fancybox" href="images/5.jpg" data-fancybox-group="gallery" title="">
                                            <i class="fa fa-eye"></i>View Large</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio work3" data-cat="work3">
                        <div class="portfolio-wrapper gallery-wrap">
                            <img src="{{asset('fontEnd/images/8.jpg')}}" alt="feature-8" />
                            <div class="overlay">
                                <div class="gallery-inner">
                                    <h3>work1</h3>
                                    <p><a class="fancybox" href="images/8.jpg" data-fancybox-group="gallery" title="">
                                            <i class="fa fa-eye"></i>View Large</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio work4" data-cat="work4">
                        <div class="portfolio-wrapper gallery-wrap">
                            <img src="{{asset('fontEnd/images/2.jpg')}}" alt="feature-2" />
                            <div class="overlay">
                                <div class="gallery-inner">
                                    <div class="overlay">
                                        <div class="gallery-inner">
                                            <h3>work1</h3>
                                            <p><a class="fancybox" href="images/2.jpg" data-fancybox-group="gallery" title="">
                                                    <i class="fa fa-eye"></i>View Large</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </section>
    <!--/#work-->

    <!--services-->
    <section id="services" class="top-padding">
        <div class="container">
            <div class="row wow fadeInDown">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2 class="heading-margin">Our ELEVATOR ENGINEERS LTD. Service</h2>
                    <p class="text-margin">Our company is your best source for value-driven elevator and lift systems.
                        Established in 2005, we have over 13 years of collective knowledge and experience that give us a unique advantage in providing professional services to the consumer. We are  able to provide the most value and innovation per Take spent by providing a satisfaction guarantee for every service provided.
                    </p>
                </div>
            </div>
            <div class="row wow fadeInDown">
                <div id="services-slider" class="owl-carousel">
                    <div class="item">
                        <img src="{{asset('fontEnd/images/1.jpg')}}" alt="Owl Image">
                        <span class="overlay-effect">Maintenance and Repair</span>
                        <span class="button-effect">
          <a class="btn-icon" href="services.html">Read More </a>
          </span>
                    </div>
                    <div class="item">
                        <img src="{{asset('fontEnd/images/2.jpg')}}" alt="Owl Image">
                        <span class="overlay-effect">Inspection and Lubrication</span>
                        <span class="button-effect"> <a class="btn-icon" href="#">Read More </a> </span>
                    </div>
                    <div class="item">
                        <img src="{{asset('fontEnd/images/3.jpg')}}" alt="Owl Image">
                        <span class="overlay-effect">Full Maintenance </span>
                        <span class="button-effect"><a class="btn-icon" href="#">Read More</a></span>
                    </div>
                    <div class="item">
                        <img src="{{asset('fontEnd/images/4.jpg')}}" alt="Owl Image">
                        <span class="overlay-effect">Advance Support</span>
                        <span class="button-effect"> <a class="btn-icon" href="#">Read More</a> </span>
                    </div>
                    <div class="item">
                        <img src="{{asset('fontEnd/images/5.jpg')}}" alt="Owl Image">
                        <span class="overlay-effect">Full Maintenance with overtime callbacks</span>
                        <span class="button-effect"> <a class="btn-icon" href="#">Read More</a> </span>
                    </div>

                    <div class="item">
                        <img src="{{asset('fontEnd/images/8.jpg')}}" alt="Owl Image">
                        <span class="overlay-effect">Full Maintenance</span>
                        <span class="button-effect"> <a class="btn-icon" href="#">Read More</a> </span>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#services-->

    <!--Experts-->
    {{--<section id="experts" class="pading">--}}
        {{--<div class="container">--}}
            {{--<div class="row  wow fadeInDown">--}}
                {{--<div class="col-md-12 col-sm-12 col-xs-12 text-center">--}}
                    {{--<h2 class="heading-margin">Meet Our Experts</h2>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br>--}}
                        {{--et dolore magna aliqua. Ut enim ad minim veniam</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div id="expert-slider" class="owl-carousel  wow fadeInDown">--}}
                {{--<div class="experts-work-wrap">--}}
                    {{--<div class="item"><img src="images/expert-1.png" alt="partner2">--}}
                        {{--<div class="experts-overlay">--}}
                            {{--<div class="experts-work-inner">--}}
                                {{--<h3><a href="#">Engine Transmission</a> </h3>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>--}}
                            {{--</div>--}}
                            {{--<div class="expert-social">--}}
                                {{--<ul class="expert-social-share">--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="img-bg">Adamaris</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="experts-work-wrap">--}}
                    {{--<div class="item"><img src="images/expert-2.png" alt="partner2">--}}
                        {{--<div class="experts-overlay">--}}
                            {{--<div class="experts-work-inner">--}}
                                {{--<h3><a href="#">Engine Transmission</a> </h3>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>--}}
                            {{--</div>--}}
                            {{--<div class="expert-social">--}}
                                {{--<ul class="expert-social-share">--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="img-bg">Ackerley </div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="experts-work-wrap">--}}
                    {{--<div class="item"><img src="images/expert-3.png" alt="partner2">--}}
                        {{--<div class="experts-overlay">--}}
                            {{--<div class="experts-work-inner">--}}
                                {{--<h3><a href="#">Engine Transmission</a> </h3>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>--}}
                            {{--</div>--}}
                            {{--<div class="expert-social">--}}
                                {{--<ul class="expert-social-share">--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="img-bg">Aethelred</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="experts-work-wrap">--}}
                    {{--<div class="item"><img src="images/expert-1.png" alt="partner2">--}}
                        {{--<div class="experts-overlay">--}}
                            {{--<div class="experts-work-inner">--}}
                                {{--<h3><a href="#">Engine Transmission</a> </h3>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>--}}
                            {{--</div>--}}
                            {{--<div class="expert-social">--}}
                                {{--<ul class="expert-social-share">--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="img-bg">Adamaris</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="experts-work-wrap">--}}
                    {{--<div class="item"><img src="images/expert-2.png" alt="partner2">--}}
                        {{--<div class="experts-overlay">--}}
                            {{--<div class="experts-work-inner">--}}
                                {{--<h3><a href="#">Engine Transmission</a> </h3>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>--}}
                            {{--</div>--}}
                            {{--<div class="expert-social">--}}
                                {{--<ul class="expert-social-share">--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="img-bg">Ackerley </div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="experts-work-wrap">--}}
                    {{--<div class="item"><img src="images/expert-3.png" alt="partner2">--}}
                        {{--<div class="experts-overlay">--}}
                            {{--<div class="experts-work-inner">--}}
                                {{--<h3><a href="#">Engine Transmission</a> </h3>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>--}}
                            {{--</div>--}}
                            {{--<div class="expert-social">--}}
                                {{--<ul class="expert-social-share">--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="img-bg">Aethelred</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="experts-work-wrap">--}}
                    {{--<div class="item"><img src="images/expert-1.png" alt="partner2">--}}
                        {{--<div class="experts-overlay">--}}
                            {{--<div class="experts-work-inner">--}}
                                {{--<h3><a href="#">Engine Transmission</a> </h3>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>--}}
                            {{--</div>--}}
                            {{--<div class="expert-social">--}}
                                {{--<ul class="expert-social-share">--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="img-bg">Adamaris</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="experts-work-wrap">--}}
                    {{--<div class="item"><img src="images/expert-2.png" alt="partner2">--}}
                        {{--<div class="experts-overlay">--}}
                            {{--<div class="experts-work-inner">--}}
                                {{--<h3><a href="#">Engine Transmission</a> </h3>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>--}}
                            {{--</div>--}}
                            {{--<div class="expert-social">--}}
                                {{--<ul class="expert-social-share">--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="img-bg">Ackerley </div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="experts-work-wrap">--}}
                    {{--<div class="item"><img src="images/expert-3.png" alt="partner2">--}}
                        {{--<div class="experts-overlay">--}}
                            {{--<div class="experts-work-inner">--}}
                                {{--<h3><a href="#">Engine Transmission</a> </h3>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>--}}
                            {{--</div>--}}
                            {{--<div class="expert-social">--}}
                                {{--<ul class="expert-social-share">--}}
                                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="img-bg">Aethelred</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<!--/#Experts-->--}}

    {{--<!--Testinomial-->--}}
    {{--<section id="testimonials" class="top-padding">--}}
        {{--<div class="container">--}}
            {{--<div class="row wow fadeInDown">--}}
                {{--<div id="testimonial-slider" class="owl-carousel text-center">--}}
                    {{--<div class="item wow fadeInDown"><img src="images/client1.png" alt="client-1">--}}
                        {{--<div class="testimonial-detail text-center">--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
                                {{--Mollitia sequi modi optio delectus eveniet voluptates impedit facere nostrum, esse?--}}
                                {{--Aspernatur, repellendus. Iure ab nisi fuga, veniam ad impedit et! Magni. </p>--}}
                            {{--<hr class="testimonial-line">--}}
                            {{--<h3>H.Mitchel Aston</h3>--}}
                            {{--<h4>Down st. NY</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="item wow fadeInDown"><img src="images/client2.png" alt="client-2">--}}
                        {{--<div class="testimonial-detail text-center">--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
                                {{--Mollitia sequi modi optio delectus eveniet voluptates impedit facere nostrum, esse?--}}
                                {{--Aspernatur, repellendus. Iure ab nisi fuga, veniam ad impedit et! Magni. </p>--}}
                            {{--<hr class="testimonial-line">--}}
                            {{--<h3>H.Mitchel Aston</h3>--}}
                            {{--<h4>Down st. NY</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="item wow fadeInDown"><img src="images/client1.png" alt="client-3">--}}
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
                        {{--<div class="item"><img src="images/partner1.jpg" alt="partner1"></div>--}}
                        {{--<div class="item"><img src="images/partner2.jpg" alt="partner2"></div>--}}
                        {{--<div class="item"><img src="images/partner3.jpg" alt="partner3"></div>--}}
                        {{--<div class="item"><img src="images/partner4.jpg" alt="partner4"></div>--}}
                        {{--<div class="item"><img src="images/partner1.jpg" alt="partner1"></div>--}}
                        {{--<div class="item"><img src="images/partner2.jpg" alt="partner2"></div>--}}
                        {{--<div class="item"><img src="images/partner3.jpg" alt="partner3"></div>--}}
                        {{--<div class="item"><img src="images/partner4.jpg" alt="partner4"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-1 hidden-xs"></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

@endsection