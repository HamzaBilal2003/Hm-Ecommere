@extends('layout.main')
@section('content')

    <div class="block-entry fixed-background" style="background-image: url({{asset("assets/img/background-26.jpg")}});">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="cell-view simple-banner-height text-center">
                        <div class="empty-space col-xs-b35 col-sm-b70"></div>
                        <h1 class="h1 light">contact us</h1>
                        <div class="title-underline center"><span></span></div>
                        <div class="simple-article light transparent size-4">In feugiat molestie tortor a malesuada. Etiam a
                            venenatis ipsum. Proin pharetra elit at feugiat commodo vel placerat tincidunt sapien nec</div>
                        <div class="empty-space col-xs-b35 col-sm-b70"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="empty-space col-xs-b35 col-md-b70"></div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>

    <div class="container">
        <div class="text-center">
            <div class="simple-article size-3 grey uppercase col-xs-b5">our contacts</div>
            <div class="h2">we ready for your questions</div>
            <div class="title-underline center"><span></span></div>
        </div>
    </div>

    <div class="empty-space col-sm-b15 col-md-b50"></div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="icon-description-shortcode style-1">
                    <img class="icon" src="{{ asset('assets/img/icon-25.png') }}" alt="">
                    <div class="title h6">address</div>
                    <div class="description simple-article size-2">1st, new york, usa</div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="icon-description-shortcode style-1">
                    <img class="icon" src="{{ asset('assets/img/icon-23.png') }}" alt="">
                    <div class="title h6">phone</div>
                    <div class="description simple-article size-2" style="line-height: 26px;">
                        <a href="tel:+35235551238745">+3 (523) 555 123 8745</a>
                        <br />
                        <a href="tel:+35235557585238">+3 (523) 555 758 5238</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="icon-description-shortcode style-1">
                    <img class="icon" src="{{ asset('assets/img/icon-28.png') }}" alt="">
                    <div class="title h6">email</div>
                    <div class="description simple-article size-2"><a href="mailto:offce@exzo.com">offce@exzo.com</a></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="icon-description-shortcode style-1">
                    <img class="icon" src="{{ asset('assets/img/icon-26.png') }}" alt="">
                    <div class="title h6">Follow us</div>
                    <div class="follow light">
                        <a class="entry" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="entry" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="entry" href="#"><i class="fa fa-linkedin"></i></a>
                        <a class="entry" href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="empty-space col-xs-b25 col-sm-b50"></div>

    {{-- <div class="container">
        <div class="map-wrapper">
            <div id="map-canvas" class="full-width" data-lat="34.0151244" data-lng="-118.4729871" data-zoom="14"></div>
        </div>
        <div class="addresses-block hidden">
            <a class="marker" data-lat="34.0151244" data-lng="-118.4729871"
                data-string="1. Here is some address or email or phone or something else..."></a>
        </div>
    </div> --}}

    <div class="empty-space col-xs-b25 col-sm-b50"></div>

    <div class="container">
        <h4 class="h4 text-center col-xs-b25">have a questions?</h4>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form class="contact-form">
                    <div class="row m5">
                        <div class="col-sm-6">
                            <input class="simple-input col-xs-b20" type="text" value="" placeholder="Name" name="name" />
                        </div>
                        <div class="col-sm-6">
                            <input class="simple-input col-xs-b20" type="text" value="" placeholder="Email" name="email" />
                        </div>
                        <div class="col-sm-6">
                            <input class="simple-input col-xs-b20" type="text" value="" placeholder="Phone" name="phone" />
                        </div>
                        <div class="col-sm-6">
                            <input class="simple-input col-xs-b20" type="text" value="" placeholder="Subject"
                                name="subject" />
                        </div>
                        <div class="col-sm-12">
                            <textarea class="simple-input col-xs-b20" placeholder="Your message" name="message"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <div class="text-center">
                                <div class="button size-2 style-3">
                                    <span class="button-wrapper">
                                        <span class="icon"><img src="{{ asset('assets/img/icon-4.png') }}" alt=""></span>
                                        <span class="text">send message</span>
                                    </span>
                                    <input type="submit" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="empty-space col-xs-b35 col-md-b70"></div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>
@endsection