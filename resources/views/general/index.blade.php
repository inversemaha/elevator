@extends('layouts.general')
@section('title', 'Elevator Engineers')
@section('content')

    <!--About-Us-->
    <section class="dark pading">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="about-us-box wow fadeInDown">
                        <h2>about us and our priorities</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-us-post"> <a href="#"><i class="fa fa-building-o"></i></a>
                                    <h4>SUPER CAR INSPECTION</h4>
                                    <span>Quality Features</span> </div>
                                <div class="about-us-post"> <a href="#"><i class="fa fa-cogs"></i></a>
                                    <h4>CUSTOM CAR REPAIR</h4>
                                    <span>Car Cleaning</span> </div>
                                <div class="about-us-post"> <a href="#"><i class="fa fa-desktop"></i></a>
                                    <h4>Repair and inspection</h4>
                                    <span>Auto Repair</span> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-us-post"> <a href="#"><i class="fa fa-desktop"></i></a>
                                    <h4>Racing and speed tests</h4>
                                    <span>We improve car quality</span> </div>
                                <div class="about-us-post"> <a href="#"><i class="fa fa-tachometer"></i></a>
                                    <h4>Car security inspections</h4>
                                    <span>We care security</span> </div>
                                <div class="about-us-post"> <a href="#"><i class="fa fa-users"></i></a>
                                    <h4>Awesome Stuff</h4>
                                    <span>1000+ workers</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-box wow fadeInDown"> <img alt="about-us" src="images/about.jpg" class="img-responsive">
                        <h2>Who we are</h2>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#about-us-->

    <!--services-->
    <section id="Services" class="pading">
        <div class="container">
            <div class="row wow fadeInDown margin">
                <div class="col-md-3">
                    <h2>Our Services</h2>
                </div>
                <div class="col-md-9">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <div class="team-member text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb"> <img src="{{asset('fontEnd/images/1.jpg')}}" alt="Team Member" class="img-responsive">
                                <div class="overlay2">
                                    <h3>Auto Repair</h3>
                                    <p>Engine Transmission</p>
                                    <a class="btn-icon" href="services.html">Read More <i class="fa fa-angle-double-right"></i></a> </div>
                                <div class="img-bg">Engine Transmission</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <div class="team-member text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb"> <img src="{{asset('fontEnd/images/1.jpg')}}" alt="Team Member" class="img-responsive">
                                <div class="overlay2">
                                    <h3>Engine Fitness </h3>
                                    <p>Engine Transmission,</p>
                                    <a class="btn-icon" href="/fontEnd/services.html">Read More <i class="fa fa-angle-double-right"></i></a> </div>
                                <div class="img-bg">Engine Fitness </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <div class="team-member text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb"> <img src="{{asset('fontEnd/images/1.jpg')}}" alt="Team Member" class="img-responsive">
                                <div class="overlay2">
                                    <h3>Engine Transmission</h3>
                                    <p>sit aspernatur aut odit aut fugit,</p>
                                    <a class="btn-icon" href="services.html">Read More <i class="fa fa-angle-double-right"></i></a> </div>
                                <div class="img-bg">Engine Transmission</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <div class="team-member text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb"> <img src="{{asset('fontEnd/images/1.jpg')}}" alt="Team Member" class="img-responsive">
                                <div class="overlay2">
                                    <h3>Battries</h3>
                                    <p>sit aspernatur aut odit aut fugit,</p>
                                    <a class="btn-icon" href="services.html">Read More <i class="fa fa-angle-double-right"></i></a> </div>
                                <div class="img-bg">Battries</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <div class="team-member text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb"> <img src="{{asset('fontEnd/images/1.jpg')}}" alt="Team Member" class="img-responsive">
                                <div class="overlay2">
                                    <h3>Electrical Services</h3>
                                    <p>sit aspernatur aut odit aut fugit,</p>
                                    <a class="btn-icon" href="services.html">Read More <i class="fa fa-angle-double-right"></i></a> </div>
                                <div class="img-bg">Electrical Services</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <div class="team-member text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb"> <img src="{{asset('fontEnd/images/1.jpg')}}" alt="Team Member" class="img-responsive">
                                <div class="overlay2">
                                    <h3>Mufflers & Exhaust</h3>
                                    <p>sit aspernatur aut odit aut fugit,</p>
                                    <a class="btn-icon" href="services.html">Read More <i class="fa fa-angle-double-right"></i></a> </div>
                                <div class="img-bg">Mufflers & Exhaust</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <div class="team-member text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb"> <img src="{{asset('fontEnd/images/1.jpg')}}" alt="Team Member" class="img-responsive">
                                <div class="overlay2">
                                    <h3>Oil Change</h3>
                                    <p>sit aspernatur aut odit aut fugit,</p>
                                    <a class="btn-icon" href="services.html">Read More <i class="fa fa-angle-double-right"></i></a> </div>
                                <div class="img-bg">Oil Change</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <div class="team-member text-center wow fadeInUp animated" data-wow-duration="500ms">
                            <div class="member-thumb"> <img src="{{asset('fontEnd/images/1.jpg')}}" alt="Team Member" class="img-responsive">
                                <div class="overlay2">
                                    <h3>Tires & Alignment</h3>
                                    <p>sit aspernatur aut odit aut fugit,</p>
                                    <a class="btn-icon" href="services.html">Read More <i class="fa fa-angle-double-right"></i></a> </div>
                                <div class="img-bg">Tires & Alignment</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#services-->

    <!--Contact emr-->
    <section id="large-call-to-action">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 block">
                    <div class="bg" style="background-image: url('{{ asset('fontEnd/images/big-cta.jpg')}}');"></div>
                </div>
                <div class="col-md-8">
                    <div class="content">
                        <h1>Providing Personalized and High Quality Services.</h1>
                        <p>Lorem ipsum dolor sit amet, onsectetur adipiscing elit. Quisque nec erat erat. er blandit, nulla quis fermentumLorem ipsum dolor sit amet, onsectetur adipiscing elit. Quisque nec erat erat. er blandit, nulla quis fermentum</p>
                        <a class="btn-slide animation animated-item-3" href="#">Contact Us</a> </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#Contact emr-->

    <!--Experts-->
    <section id="team" class="pading">
        <div class="container">
            <div class="row margin wow fadeInUp animated" data-wow-duration="700ms">
                <div class="col-md-3 col-sm-3">
                    <h2>Meet Our Team</h2>
                </div>
                <div class="col-md-9 col-sm-9">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="team-member col-md-3 col-sm-3 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                    <div class="member-thumb"> <img src="{{asset('fontEnd/images/expert-1.png')}}" alt="Team Member" class="img-responsive">
                        <div class="overlay2">
                            <h5>Auto Repair</h5>
                            <p>sit aspernatur aut odit aut fugit,</p>
                            <ul class="social-links text-center">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h4>John Filmr Doe</h4>
                    <span>Managing Director</span> </div>
                <div class="team-member col-md-3 col-sm-3 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                    <div class="member-thumb"> <img src="{{asset('fontEnd/images/expert-2.png')}}" alt="Team Member" class="img-responsive">
                        <div class="overlay2">
                            <h5>Auto Repair</h5>
                            <p>sit aspernatur aut odit aut fugit,</p>
                            <ul class="social-links text-center">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h4>John Filmr Doe</h4>
                    <span>Managing Director</span> </div>
                <div class="team-member col-md-3 col-sm-3 col-xs-12 text-center  wow fadeInUp animated" data-wow-duration="500ms">
                    <div class="member-thumb"> <img src="{{asset('fontEnd/images/expert-3.png')}}" alt="Team Member" class="img-responsive">
                        <div class="overlay2">
                            <h5>Auto Repair</h5>
                            <p>sit aspernatur aut odit aut fugit,</p>
                            <ul class="social-links text-center">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h4>John Filmr Doe</h4>
                    <span>Managing Director</span> </div>
                <div class="team-member col-md-3 col-sm-3 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
                    <div class="member-thumb"> <img src="{{asset('fontEnd/images/expert-1.png')}}" alt="Team Member" class="img-responsive">
                        <div class="overlay2">
                            <h5>Auto Repair</h5>
                            <p>sit aspernatur aut odit aut fugit,</p>
                            <ul class="social-links text-center">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h4>John Filmr Doe</h4>
                    <span>Managing Director</span> </div>
            </div>
        </div>
    </section>
    <!--/#Experts-->

    <!--Our-Portfolio-->
    <section id="our-work" class="pading">
        <div class="container">
            <div class="row margin">
                <div class="col-md-4 col-sm-5 wow fadeInDown">
                    <h2>Our Recent Work</h2>
                </div>
                <div class="col-md-8 col-sm-7">
                    <hr>
                </div>
            </div>
            <div class="work-filter">
                <ul id="filters" class="clearfix wow fadeInDown">
                    <li><span class="filter active" data-filter="work1 work2 work3 work4 work5">All Services</span></li>
                    <li><span class="filter" data-filter="work1">Residential</span></li>
                    <li><span class="filter" data-filter="work2">Commercial</span></li>
                </ul>
                <div id="portfoliolist">
                    <div class="portfolio work4" data-cat="work4">
                        <div class="portfolio-wrapper gallery-wrap">
                            <div class="our-work-item">
                                <h3 class="heading-overlay">Lorem ipsum doler</h3>
                                <div class="photo-thumb"> <img src="{{asset('fontEnd/images/1.jpg')}}" alt="image 1"> </div>
                                <div class="our-work-overlay"> <span class="icon-overlay"> <a class="fancybox" href="images/1.jpg" data-fancybox-group="gallery" title="Auto Repair"><i class="fa fa-search-plus"></i></a> </span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio work1" data-cat="work1">
                        <div class="portfolio-wrapper gallery-wrap">
                            <div class="our-work-item">
                                <h3 class="heading-overlay">Lorem ipsum doler</h3>
                                <div class="photo-thumb"> <img src="{{asset('fontEnd/images/3.jpg')}}" alt="image 3"> </div>
                                <div class="our-work-overlay"> <span class="icon-overlay"> <a class="fancybox" href="images/3.jpg" data-fancybox-group="gallery" title="Auto Repair"><i class="fa fa-search-plus"></i></a> </span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio work5" data-cat="work5">
                        <div class="portfolio-wrapper gallery-wrap">
                            <div class="our-work-item">
                                <h3 class="heading-overlay">Lorem ipsum doler</h3>
                                <div class="photo-thumb"> <img src="{{asset('fontEnd/images/4.jpg')}}" alt="image 1"> </div>
                                <div class="our-work-overlay"> <span class="icon-overlay"> <a class="fancybox" href="images/4.jpg" data-fancybox-group="gallery" title="Auto Repair"><i class="fa fa-search-plus"></i></a> </span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio work2" data-cat="work2">
                        <div class="portfolio-wrapper gallery-wrap">
                            <div class="our-work-item">
                                <h3 class="heading-overlay">Lorem ipsum doler</h3>
                                <div class="photo-thumb"> <img src="{{asset('fontEnd/images/7.jpg')}}" alt="image 1"> </div>
                                <div class="our-work-overlay"> <span class="icon-overlay"> <a class="fancybox" href="images/7.jpg" data-fancybox-group="gallery" title="Auto Repair"><i class="fa fa-search-plus"></i></a> </span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio work1" data-cat="work1">
                        <div class="portfolio-wrapper gallery-wrap">
                            <div class="our-work-item">
                                <h3 class="heading-overlay">Lorem ipsum doler</h3>
                                <div class="photo-thumb"> <img src="{{asset('fontEnd/images/6.jpg')}}" alt="image 1"> </div>
                                <div class="our-work-overlay"> <span class="icon-overlay"> <a class="fancybox" href="images/6.jpg" data-fancybox-group="gallery" title="Auto Repair"><i class="fa fa-search-plus"></i></a> </span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio work2" data-cat="work2">
                        <div class="portfolio-wrapper gallery-wrap">
                            <div class="our-work-item">
                                <h3 class="heading-overlay">Lorem ipsum doler</h3>
                                <div class="photo-thumb"> <img src="{{asset('fontEnd/images/5.jpg')}}" alt="image 1"> </div>
                                <div class="our-work-overlay"> <span class="icon-overlay"> <a class="fancybox" href="images/5.jpg" data-fancybox-group="gallery" title="Auto Repair"><i class="fa fa-search-plus"></i></a> </span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio work3" data-cat="work3">
                        <div class="portfolio-wrapper gallery-wrap">
                            <div class="our-work-item">
                                <h3 class="heading-overlay">Lorem ipsum doler</h3>
                                <div class="photo-thumb"> <img src="{{asset('fontEnd/images/8.jpg')}}" alt="image 1"> </div>
                                <div class="our-work-overlay"> <span class="icon-overlay"> <a class="fancybox" href="images/8.jpg" data-fancybox-group="gallery" title="Auto Repair"><i class="fa fa-search-plus"></i></a> </span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio work4" data-cat="work4">
                        <div class="portfolio-wrapper gallery-wrap">
                            <div class="our-work-item">
                                <h3 class="heading-overlay">Lorem ipsum doler</h3>
                                <div class="photo-thumb"> <img src="{{asset('fontEnd/images/2.jpg')}}" alt="image 1"> </div>
                                <div class="our-work-overlay"> <span class="icon-overlay"> <a class="fancybox" href="images/2.jpg" data-fancybox-group="gallery" title="Auto Repair"><i class="fa fa-search-plus"></i></a> </span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#Our-Portfolio-->


    <!--Partner-->
    <section id="partner">
        <div class="container">
            <div class="row margin">
                <div class="col-md-3 col-sm-3">
                    <h2>Our Partners</h2>
                </div>
                <div class="col-md-9 col-sm-9">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="logo-slider" class="owl-carousel">
                        <div class="item"><img src="{{asset('fontEnd/images/partner1.jpg')}}" alt="partner1"></div>
                        <div class="item"><img src="{{asset('fontEnd/images/partner2.jpg')}}" alt="partner2"></div>
                        <div class="item"><img src="{{asset('fontEnd/images/partner3.jpg')}}" alt="partner3"></div>
                        <div class="item"><img src="{{asset('fontEnd/images/partner4.jpg')}}" alt="partner4"></div>
                        <div class="item"><img src="{{asset('fontEnd/images/partner4.jpg')}}" alt="partner1"></div>
                        <div class="item"><img src="{{asset('fontEnd/images/partner3.jpg')}}" alt="partner2"></div>
                        <div class="item"><img src="{{asset('fontEnd/images/partner2.jpg')}}" alt="partner3"></div>
                        <div class="item"><img src="{{asset('fontEnd/images/partner1.jpg')}}" alt="partner4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#Partner-->
@endsection
