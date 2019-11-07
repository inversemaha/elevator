@extends('layouts.page')
@section('title', 'Elevator Engineers')
@section('content')

    <!-- about us slider -->
    <section id="about-us" class="pading">
        <div class="container">
            <div class="row wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="col-md-12 text-center">
                    <h2 class="heading-margin">Our Business Partners</h2>
                    {{--<p class="text-margin">We, as an authorized supplier, maintain an inventory of virtually every elevator spare parts manufactured since last 13 years. All of these supplies will be shipped for any spare parts as required. This service will be utilized only in the event of materials which are not available at stock. The spare parts manufactured by our suppliers maintain standard specifications.</p>--}}
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
                                <div style="height: 400px" class="item active"> <img src="{{asset('fontEnd/images/bg2.jpg')}}" class="img-responsive" alt=""> </div>
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

@endsection