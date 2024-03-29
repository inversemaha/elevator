@extends('layouts.page')
@section('title', 'Elevator Engineers')
@section('content')

    <!-- about us slider -->
    <section id="about-us" class="pading">
        <div class="container">
            <div class="row wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="col-md-12 text-center">
                    <h2 class="heading-margin">Well Come to ELEVATOR ENGINEERS LTD.</h2>
                    <p class="text-margin">Our company is your best source for value-driven elevator and lift systems.
                        Established in 2005, we have over 13 years of collective knowledge and experience that give us a unique advantage in providing professional services to the consumer. We are  able to provide the most value and innovation per Take spent by providing a satisfaction guarantee for every service provided.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                    <div class="about-text wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <h3>HOME ELEVATORS</h3>
                        <p class="text-justify">Home elevators are smaller than commercial elevators. Typically, a home elevator can accommodate three or four adults or two people with one in a wheelchair. Floor size can be up to 18 sq. ft. (1.67 sq. meters) – where allowable by code. 500-lb. (226 kg), 950-lb. (430kg) and 1,000-lb (453 kg) weight capacities are available. They are usually designed to complement or replicate the home’s interior or a homeowner’s custom elements.

                            Architects love the near endless design possibilities. Every product is skillfully hand-made and finished one-at-a-time, making customization possible. We have built a strong reputation in the Reno/ Lake Tahoe area by providing exceptional customer service and delivering a clean reliable product.</p>
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
                                <div class="item active"> <img src="{{('fontEnd/images/bg2.jpg')}}" class="img-responsive" alt=""> </div>
                                <div class="item"> <img src="{{('fontEnd/images/bg1.jpg')}}" class="img-responsive" alt=""> </div>
                                <div class="item"> <img src="{{('fontEnd/images/bg2.jpg')}}" class="img-responsive" alt=""> </div>
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
            </div><br><br>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 text-right wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div id="about-slider1">
                        <div id="carousel-slider1" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators visible-xs">
                                <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-slider" data-slide-to="1"></li>
                                <li data-target="#carousel-slider" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active"> <img src="{{('fontEnd/images/bg1.jpg')}}" class="img-responsive" alt=""> </div>
                                <div class="item"> <img src="{{('fontEnd/images/bg2.jpg')}}" class="img-responsive" alt=""> </div>
                                <div class="item"> <img src="{{('fontEnd/images/bg1.jpg')}}" class="img-responsive" alt=""> </div>
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
                <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                    <div class="about-text wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <h3>About HOME ELEVATORS</h3>
                        <p class="text-justify">Choose a standard model or a one-of-a-kind elevator. Inclinator’s Elevette® is available in five standard cab styles, three drive system types, many door configurations and the most custom features and accessory options. Elevette can be placed in an interior or exterior elevator shaft or in no shaft … running up the center of open winding stairs, next to stairways and where no stairs exist.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#about-slider-->

@endsection