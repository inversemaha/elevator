@extends('layouts.page')
@section('title', 'Elevator Engineers')
@section('content')

    <!--gmap_area -->
    <section class="heading top-padding">
        <div class="container">
            <div class="col-md-12 trip-heading text-center jw-animate-gen noOpacity" data-gen-offset="80%" data-gen="fadeInDown">
                <h2 class="heading-margin">How to Reach Us? </h2>
                <p class="text-margin"> Please give us a call or an email to see how we can help you!
                </p>
            </div>

        </div>
    </section>
    <div id="contact-info-2">

        <div class="container">
            <div class="row contact-us-section">
                <div class="col-md-9 col-sm-9">
                    <form method="post" class="jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeInLeft">
                        <div class="form-group">
                            <label class="sr-only" for="inputName">Name</label>
                            <input type="text" name="userName" value="" class="form-control" id="inputName" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="inputEmail">Email address</label>
                            <input type="email" name="email" value="" class="form-control" id="inputEmail" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="userMassege" placeholder="Message"  required></textarea>
                        </div>
                        <button type="submit" class="btn btn-default btn-contact-usNow">      Submit Now!
                        </button>
                    </form>
                </div>
                <div class="col-md-3 col-sm-3 contact-detail jw-animate-gen noOpacity" data-gen-offset="75%" data-gen="fadeInRight">
                    <div class="col-md-12 col-sm-12 contact-text">
                        <div class="col-md-2 col-sm-2 text-center contact-detail-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <p class="col-md-10 col-sm-10 contact-detail-text">
                            House 664/A,
                            Road # 09 (Main Road),
                            DOHS Mirpur, Dhaka – 1216.

                        </p>
                    </div>
                    <div class="col-md-12 col-sm-12 contact-text">
                        <div class="col-md-2 col-sm-2 text-center contact-detail-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <p class="col-md-10 col-sm-10 contact-detail-text">
                            <a href="#">elevatorengineersltd@gmail.com </a>
                            <br>
                            {{--<a href="#">personal@mail.com </a>--}}
                        </p>
                    </div>
                    <div class="col-md-12 col-sm-12 contact-text">
                        <div class="col-md-2 col-sm-2 text-center contact-detail-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <p class="col-md-10 col-sm-10 contact-detail-text">
                            <a href="#">88-02-44806324</a>
                            <br>
                            <a href="#">88-02-44806325</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gmap-area-2">

        <div class="gmap-2">
            {{--<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="100%" height="443" src="https://maps.google.com/maps?hl=en&q=Faisal Town, &ie=UTF8&t=roadmap&z=6&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="http://buyproxies.io/">buy proxies</a></small></div></iframe>--}}
            <iframe width="100%" height="443" marginheight="0" marginwidth="0" frameborder="0" style="border:0;" allowfullscreen="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.4653862114455!2d90.37079341445751!3d23.837602591357456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1856c5900b9%3A0xa7f3b4c907763577!2sElevator%20Engineers%20Ltd.!5e0!3m2!1sen!2sbd!4v1572503017276!5m2!1sen!2sbd"></iframe>
        </div>
    </div>
    <!--/#gmap_area -->

@endsection
