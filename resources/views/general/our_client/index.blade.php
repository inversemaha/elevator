@extends('layouts.page')
@section('title', 'Elevator Engineers')
@section('content')


    <!--client-->
    <section id="services" class="top-padding">
        <div class="container">
            <div class="row wow fadeInDown">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2 class="heading-margin">Meet Our Honorable Clients </h2>
                    <p class="text-margin">Our company is your best source for value-driven elevator and lift systems.
                        Established in 2005, we have over 13 years of collective knowledge and experience that give us a unique advantage in providing professional services to the consumer. We are  able to provide the most value and innovation per Take spent by providing a satisfaction guarantee for every service provided.
                    </p>
                </div>
            </div>
            <div class="row wow fadeInDown">
                <div id="services-slider" class="owl-carousel">
                    <div class="item">
                        <img src="{{asset('fontEnd/images/1.jpg')}}" alt="Owl Image">
                        <span class="overlay-effect">Meghna Group of Industries</span>
                        {{--<span class="button-effect">--}}
          {{--<a class="btn-icon" href="services.html">Read More </a>--}}
          {{--</span>--}}
                    </div>
                    <div class="item">
                        <img src="{{asset('fontEnd/images/2.jpg')}}" alt="Owl Image">
                        <span class="overlay-effect">Bashundhara Group</span>
                        {{--<span class="button-effect"> <a class="btn-icon" href="#">Read More </a> </span>--}}
                    </div>
                    <div class="item">
                        <img src="{{asset('fontEnd/images/3.jpg')}}" alt="Owl Image">
                        <span class="overlay-effect">Ananta Group </span>
                        {{--<span class="button-effect"><a class="btn-icon" href="#">Read More</a></span>--}}
                    </div>
                    <div class="item">
                        <img src="{{asset('fontEnd/images/4.jpg')}}" alt="Owl Image">
                        <span class="overlay-effect">Sunman Group</span>
                        {{--<span class="button-effect"> <a class="btn-icon" href="#">Read More</a> </span>--}}
                    </div>
                    <div class="item">
                        <img src="{{asset('fontEnd/images/5.jpg')}}" alt="Owl Image">
                        <span class="overlay-effect">Youngone Group</span>
                        {{--<span class="button-effect"> <a class="btn-icon" href="#">Read More</a> </span>--}}
                    </div>

                    <div class="item">
                        <img src="{{asset('fontEnd/images/8.jpg')}}" alt="Owl Image">
                        <span class="overlay-effect">Arla Food Bangladesh Ltd. (DANO)</span>
                        {{--<span class="button-effect"> <a class="btn-icon" href="#">Read More</a> </span>--}}
                    </div>
                    <div class="item">
                        <img src="{{asset('fontEnd/images/8.jpg')}}" alt="Owl Image">
                        <span class="overlay-effect">Medinova Medical Services Ltd</span>
                        {{--<span class="button-effect"> <a class="btn-icon" href="#">Read More</a> </span>--}}
                    </div>
                    <div class="item">
                        <img src="{{asset('fontEnd/images/8.jpg')}}" alt="Owl Image">
                        <span class="overlay-effect">Rangs Group</span>
                        {{--<span class="button-effect"> <a class="btn-icon" href="#">Read More</a> </span>--}}
                    </div>
                    <div class="item">
                        <img src="{{asset('fontEnd/images/8.jpg')}}" alt="Owl Image">
                        <span class="overlay-effect">NASIR GROUP</span>
                        {{--<span class="button-effect"> <a class="btn-icon" href="#">Read More</a> </span>--}}
                    </div>
                    <div class="item">
                        <img src="{{asset('fontEnd/images/8.jpg')}}" alt="Owl Image">
                        <span class="overlay-effect">Incepta Pharmaceutical Ltd.</span>
                        {{--<span class="button-effect"> <a class="btn-icon" href="#">Read More</a> </span>--}}
                    </div>
                    <div class="item">
                        <img src="{{asset('fontEnd/images/8.jpg')}}" alt="Owl Image">
                        <span class="overlay-effect">Dr. M R Khan Shishu Hospital & Institute of Child Health</span>
                        {{--<span class="button-effect"> <a class="btn-icon" href="#">Read More</a> </span>--}}
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#services-->

@endsection