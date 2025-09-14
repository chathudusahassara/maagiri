<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow">

        <meta property="og:type" content="website">
        <meta property="og:title" itemprop="name" content="Maagiri Hotel – Leading city hotel in Male’, Maldives">
        <meta property="og:site_name" content="Maagiri">
        <meta property="og:url" content="{{ url('/') }}"/>
        <meta property="og:image" content="{{ url('images/logo_desktop.svg') }}">
        <meta property="og:description" content="Maagiri Hotel – leading city hotel in Male’, Maldives is located in one of the premier locations in Male’ conveniently opposite of Airport/ Hulhumale’ FerryTerminal. Set against a scenic backdrop of the surrounding ocean, Maagiri Hotel provides a 4-star accommodation to complement its excellent service." />

        <meta itemprop="image" content="{{ url('images/logo_desktop.svg') }}">
        <meta name="description" content="Maagiri Hotel – Leading city hotel in Male’, Maldives is located in one of the premier locations in Male’ conveniently opposite of Airport/ Hulhumale’ FerryTerminal. Set against a scenic backdrop of the surrounding ocean, Maagiri Hotel provides a 4-star accommodation to complement its excellent service.">
        <meta name="keywords" content="Maagiri hotel, Maldives Hotels, Maldives, Maagiri, Male City Hotels, Male City, Hotels Maldives, City Hotels, Stay in Maldives, Stay, Holiday, Conference Hotel, Restaurant Maldives">
        <meta name="twitter:description" content="Maagiri Hotel – leading city hotel in Male’, Maldives is located in one of the premier locations in Male’ conveniently opposite of Airport/ Hulhumale’ FerryTerminal. Set against a scenic backdrop of the surrounding ocean, Maagiri Hotel provides a 4-star accommodation to complement its excellent service.">
        <meta name="twitter:title" content="Maagiri Hotel – Leading city hotel in Male’, Maldives">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@maagiri">
        <meta name="twitter:creator" content="@maagiri">

        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="/manifest.json">

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
        <link rel='stylesheet prefetch' href="{{ asset('css/bootstrap.min.css') }}">
        <link rel='stylesheet prefetch' href="{{ asset('css/maagiri-layout.css') }}">
        <link rel='stylesheet prefetch' href="{{ asset('css/accord.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
        <link rel='stylesheet prefetch' href="https://daneden.github.io/animate.css/animate.min.css">
        <link rel='stylesheet prefetch' href="{{ asset('css/daterangepicker.css') }}">
        <link rel='stylesheet prefetch' href="{{ asset('css/anythingslider.css') }}">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

        <title>Maagiri City Hotel Maldives</title>

        <style> 
        .full-screen {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        </style>

        <script type="text/javascript">

        (function(c,l,a,r,i,t,y){

            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};

            t=l.createElement(r);t.async=1;t.src=https://www.clarity.ms/tag/+i;

            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);

        })(window, document, "clarity", "script", "l1mgzxgxwx");

        </script>

</head>
<body>

  <header>
                    <nav class="navbar navbar-expand-md maagiri-nav-dark">
                    <div class="mobile-nav d-block d-sm-none">
                            <a href="#" onclick="openNav()">
                                <img src="{{ asset('images/menu-ico.png') }}" width="100%">
                            </a>
                    </div>
                    <div class="mobile-booking-nav d-block d-sm-none">
                        <!-- <a href="javascript:;" onclick="overlayMenuOpen()">Book Now</a> -->
                        <a href="https://reservations.maagirihotel.com/booking/book-rooms-11448">Book Now</a>
                    </div>

                <div class="container-fluid base-nav">
                      <div class="brand"></div>
                      

                      <ul class="nav justify-content-end d-none d-sm-inline-flex maagiri-nav">
                            

                                @foreach($menu as $m)
                                <li class="nav-item">
                                    @if($m->has_submenu)
                                    <div class="dropdown">
                                        <a class="nav-link dropdown-toggle" href="{{ url((string)$m->link_name) }}" >{{ $m->name }}</a>
                                        <div class="dropdown-menu">
                                            @foreach($submenu as $sb)
                                                @if($sb->parent_id == $m->id)
                                                    <a class="dropdown-item" href="{{ url((string)$sb->link) }}">{{ $sb->name }}</a>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    @else
                                    @if($m->name == "Blog")
                                    <a class="nav-link dropdown-toggle" href="{{ url('blog/all') }}" >{{ $m->name }}</a>
                                    @endif

                                    @if($m->name == "Gallery")
                                    <a class="nav-link dropdown-toggle" href="{{ url('gallery/main') }}" >{{ $m->name }}</a>
                                    @endif

                                    @if($m->name == "Contact")
                                    <a class="nav-link dropdown-toggle" href="{{ url('contact') }}" >{{ $m->name }}</a>
                                    @endif

                                    @if($m->name == "Offers")
                                    <a class="nav-link dropdown-toggle" href="{{ url('offers') }}" >{{ $m->name }}</a>
                                    @endif
                                    
                                    @if($m->name == "Book Now")
                                    <!-- <a class="nav-link dropdown-toggle active" href="javascript:;" onclick="overlayMenuOpen()" >{{ $m->name }}</a> -->
                                    <a class="nav-link dropdown-toggle active" href="https://reservations.maagirihotel.com/booking/book-rooms-11448" >{{ $m->name }}</a>
                                    @endif

                                    @endif
                                </li>
                                @endforeach

                          </ul>

                </div>
            </nav>
                  </header>
                          
<div class="scroll-top-wrapper ">
  <a class="scroll-top-inner">
    <i class="fa fa-2x fa-arrow-circle-up"></i>
  </span>
</div>

<div class="whatsapp-scroll-top-wrapper">
  <a href="https://wa.me/9607998484" class="scroll-top-inner">
    <i class="fa fa-2x fa fa-whatsapp"></i>
    </a>
</div>

  

    @yield('content')


<section id="footer">
        <div class="container-fluid black-container footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 footer-nav-col">
                        <ul>
                            <li class="h d-block d-sm-none"><a href="" class="orange-brand">Maagiri Hotel</a></li>
                            <li class="h d-none d-sm-block"><a href="" class="orange-brand">ADDRESS</a></li>
                            <li>Boduthakurufaanu Magu</li>
                            <li>Male', 20012</li>
                            <li>Republic of Maldives</li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-nav-col">
                        <ul>
                            <li class="h d-none d-sm-block"><a href="" class="orange-brand">CONTACT</a></li>
                            <li>T. +960 331 8484</li>
                            <li>E. reservations@maagirihotel.com</li>
                        </ul>
                    </div>
                    <div class="col-md-2 footer-nav-col footer-socials">
                        <ul>
                            <li class="h d-none d-sm-block"><a href="" class="orange-brand">SOCIAL</a></li>
                            <ul>
                                <li><a href="https://web.facebook.com/Maagiri-Hotel-127052284636238/"><img src="{{ asset('images/socials/fb.svg') }}" width="24"></a></li>
                                <li><a href="https://www.instagram.com/maagirihotel/"><img src="{{ asset('images/socials/insta.svg') }}" width="24"></a></li>
                                <li><a href="https://twitter.com/maagirihotel"><img src="{{ asset('images/socials/twitter.svg') }}" width="24"></a></li>
                            </ul>
                        </ul>
                    </div>
                    <div class="col-md-2 text-right logo-tripadvisor">
                        <img src="{{ url('images/tripadvisor.png') }}" width="120">
                    </div>
                    <div class="col-md-2 text-right logo-tripadvisor">
                        <img src="{{ url('images/travellers_choice.png') }}" width="120">
                    </div>
                </div>
            </div>
        </div>

        

        <div class="container-fluid black-container footer-inline">
            <div class="container d-none d-sm-block">
            <div class="row">
            <div class="col-md-8">
                <ul>
                    <!-- <li><a href="">The Hotel</a></li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Offers</a></li> -->
                    <li><a href="{{ url('privacy') }}">Privacy Policy</a></li>
                    <li><a href="{{ url('terms') }}">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="col-md-4"><img src="{{ asset('images/payment-gateway.png') }}" width="100%"></div>
            <div class="col-md-12">
            <p class="copy">©<?php echo date("Y"); ?> Maagiri Hotel, All Rights Reserved <span>Designed & Developed by <b>Nous</b></span></p>
            </div>
            </div>
            </div>
            </div>

            <!-- mobile -->
            <div class="container d-block d-sm-none footer-inline">
                    <ul>
                        <li><a href="">Careers</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms & Conditions</a></li>
                    </ul>
                    <p style="margin-bottom:10px;">© 2018 Maagiri Hotel, All Rights Reserved</p>
                    <p style="margin-top:0; padding-top:0;">Designed & Developed by <b>Nous</b></p>
                </div>
            <!-- mobile -->
        </div>
  

    </section>


    <!-- side nav -->

    <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="col-md-12">
                    <ul class="member-nav mobile-nav-menu">
                    <!-- <i class="fa fa-angle-down pull-right" aria-hidden="true"></i> -->
                            @foreach($menu as $m)
                            <li href="#{{ $m->name }}" data-toggle="collapse">
                                    @if($m->has_submenu)
                                    <a href="javascript:;">{{ $m->name }}</a>
                                    <ul style="margin:0; padding:0;" class="collapse" id="{{ $m->name }}">
                                    @foreach($submenu as $sb)
                                        @if($sb->parent_id == $m->id)
                                            <li><a href="{{ url((string)$sb->link) }}">{{ $sb->name }}</a></li>
                                        @endif
                                    @endforeach
                                    </ul>
                                    @else
                                        @if($m->name == "Gallery")
                                        <a href="{{ url('gallery/main') }}"><b>{{ $m->name }}</b></a>
                                        @endif

                                        @if($m->name == "Blog")
                                        <a href="{{ url('blog/all') }}" >{{ $m->name }}</a>
                                        @endif

                                        @if($m->name == "Offers")
                                        <a href="{{ url('offers') }}" >{{ $m->name }}</a>
                                        @endif

                                        @if($m->name == "Contact")
                                        <a href="{{ url('contact') }}"><b>{{ $m->name }}</b></a>
                                        @endif


                                    @endif
                            </li>
                            @endforeach 
                    </ul>
            </div>

            <div class="container-fluid mobile-bottom"></div>
    </div>

    <!-- side nav -->



    <!-- enquire overlay -->
    <div id="enquire-OL" class="booking-overlay">
        <div class="booking-overlay-close">
            <a href="javascript:;" onclick="enquireOverlayClose()">
                    <img src="{{ asset('images/close-ico.png') }}" width="60" height="65">
            </a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form id="enquiryForm">
                        <div class="form-row form-spacing black-bg">
                                <div class="col">
                                    <label class="info-text">NAME*</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter your name" required />
                                </div>
                                <div class="col">
                                    <label class="info-text">EMAIL ADDRESS</label>
                                    <input type="email" class="form-control" name="email" placeholder="Your email address" required />
                                    <input type="hidden" id="type" name="type">
                                </div>
                        </div>
                        <div class="form-row black-bg">
                            <div class="col">
                                <label class="info-text">MESSAGE</label>
                                <textarea class="form-control" rows="10" name="messageBody"></textarea>
                                {{ csrf_field() }}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col"></div>
                            <div class="col-auto">
                                    <button type="submit" class="btn btn-orange-brand">SEND</button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <!-- //enquire overlay -->



    <!-- booking overlay -->
    <div id="bookin-OL" class="booking-overlay">
        <div class="booking-overlay-close">
            <a href="javascript:;" onclick="overlayMenuClose()">
                    <img src="{{ asset('images/close-ico.png') }}" width="60" height="65">
            </a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" id="formContainer">
                    <div class="success-msg" id="bookingMsg"><h1>Thank You.</h1><br><p> The booking enquiry has been submitted. We will get back to you shortly.</p><p><a href="#" onclick="overlayMenuClose()">CLOSE</a></p></div>
                    <div class="success-msg" id="newsletter"><h1>Thank You.</h1><br><p> You have now been subscribed to our newsletter.</p><p><a href="#" onclick="overlayMenuClose()">CLOSE</a></p></div>
                    <div class="success-msg" id="enquiry"><h1>Thank You.</h1><br><p> We have received your enquiry. We will get back to you shortly.</p><p><a href="#" onclick="overlayMenuClose()">CLOSE</a></p></div>
                    
                    <form id="BookingForm">
                        <div class="form-row form-spacing black-bg">
                            <div class="col-md-3">
                                <!-- <input type="text" class="form-control" placeholder="Rooms"> -->
                                <select class="form-control" name="noRooms" id="formRooms">
                                    <option value="1">1 Rooms</option>
                                    <option value="2">2 Rooms</option>
                                    <option value="3">3 Rooms</option>
                                    <option value="4">4 Rooms</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                    <select class="form-control" name="noGuests" id="formGuests">
                                            <option value="1">1 Adult</option>
                                            <option value="2">2 Adults</option>
                                            <option value="3">3 Adults</option>
                                            <option value="4">4 Adults</option>
                                            <option value="5">5 Adults</option>
                                            <option value="6">6 Adults</option>
                                            <option value="7">7 Adults</option>
                                            <option value="8">8 Adults</option>
                                            <option value="9">9 Adults</option>
                                            <option value="10">10 Adults</option>
                                            <option value="11">11 Adults</option>
                                            <option value="12">12 Adults</option>
                                        </select>
                            </div>

                            <div class="col-md-3">
                                    <select class="form-control" name="noChilds" id="childs">
                                            <option value="0">0 Childs</option>
                                            <option value="1">1 Child</option>
                                            <option value="2">2 Childs</option>
                                            <option value="3">3 Childs</option>
                                            <option value="4">4 Childs</option>
                                        </select>
                                        <div id="childWrapper"></div>

                            </div>
                            
                            <div class="col-md-3">
                                <input type="text" class="form-control daterange" name="daterange" id="formDate" />
                            </div>
                        </div>

                        <div class="info-text-spacing"><p class="info-text">SELECT YOUR ROOM</p></div>

                        <div class="form-row">
                                <div class="col-md-3">
                                        <select class="form-control" name="noExecRooms">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                        </select>
                                        <label>Executive Suite</label>
                                </div>
                                <div class="col-md-3">
                                        <select class="form-control" name="noJuniorRooms">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                        </select>
                                        <label>Junior Suite</label>
                                </div>
                                <div class="col-md-3">
                                        <select class="form-control" name="noOceanRooms">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                        </select>
                                        <label>Premier Ocean View Room</label>
                                </div>
                                <div class="col-md-3">
                                        <select class="form-control" name="noPremRooms">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                        </select>
                                        <label>Premier Room</label>
                                </div>
                        </div>

                        <div class="spacer_small"></div>
                        <div class="form-row">
                                <div class="col-md-6">
                                        <label class="info-text">NAME*</label>
                                        <input type="text" id="bookName" class="form-control" name="name" placeholder="Enter your name" required />
                                </div>
                                <div class="col-md-6">
                                        <label class="info-text">EMAIL ADDRESS</label>
                                        <input type="email" id="bookEmail" class="form-control" name="email" placeholder="Your email address" required />
                                </div>
                                <div class="col-md-12" id="book-msg"></div>
                        </div>
                        {{ csrf_field() }}
                        <div class="form-row">
                        <div class="col"></div>
                        <div class="col-auto">
                        <button type="submit" class="btn btn-orange-brand" id="bookingSubmitBttn">
                        <svg id="loadingBttn" class="lds-message" width="33px"  height="33px"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" style="background: none;"><g transform="translate(20 50)">
                        <circle cx="0" cy="0" r="6" fill="#dcb38d" transform="scale(0.99275 0.99275)">
                        <animateTransform attributeName="transform" type="scale" begin="-0.375s" calcMode="spline" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"></animateTransform>
                        </circle>
                        </g><g transform="translate(40 50)">
                        <circle cx="0" cy="0" r="6" fill="#dcb38d" transform="scale(0.886582 0.886582)">
                        <animateTransform attributeName="transform" type="scale" begin="-0.25s" calcMode="spline" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"></animateTransform>
                        </circle>
                        </g><g transform="translate(60 50)">
                        <circle cx="0" cy="0" r="6" fill="#dcb38d" transform="scale(0.57475 0.57475)">
                        <animateTransform attributeName="transform" type="scale" begin="-0.125s" calcMode="spline" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"></animateTransform>
                        </circle>
                        </g><g transform="translate(80 50)">
                        <circle cx="0" cy="0" r="6" fill="#dcb38d" transform="scale(0.226395 0.226395)">
                        <animateTransform attributeName="transform" type="scale" begin="0s" calcMode="spline" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"></animateTransform>
                        </circle>
                        </g></svg>
                        <div id="submitBttn">SUBMIT</div>
                        </button>
                        </div>
                        <div class="col"></div>
                        </div>
                    </form>
                    <div class="d-block d-sm-none" style="height:100px;"></div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <!-- /booking overlay -->


</body>
<script src="{{ asset('js/lt-jquery.min.js') }}"></script>
    <script src='{{ asset('js/popper.min.js') }}'></script>
    <script src='{{ asset('js/bootstrap.min.js') }}'></script>
    <script src='{{ asset('js/moment.js') }}'></script>
    <script src='{{ asset('js/daterangepicker.js') }}'></script>
    <script src='{{ asset('js/classie.js') }}'></script>
    <script src='{{ asset('js/jquery.anythingslider.min.js') }}'></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117759127-1"></script>
    
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-117759127-1');
    </script> -->


<script>
//window.sr=ScrollReveal(),sr.reveal(".dine"),sr.reveal(".event"),sr.reveal(".heading-container");var $item=$(".carousel .carousel-item"),$wHeight=window.innerHeight-95;function openNav(){document.getElementById("mySidenav").style.width="100%",$(".overlay").show()}function closeNav(){document.getElementById("mySidenav").style.width="0",$(".overlay").hide()}$item.eq(0).addClass("active"),$item.height($wHeight),$item.addClass("full-screen"),$(".carousel img").each(function(){var e=$(this).attr("src"),o=$(this).attr("data-color");$(this).parent().css({"background-image":"url("+e+")","background-color":o}),$(this).remove()}),$(window).on("resize",function(){$wHeight=window.innerHeight-95,$item.height($wHeight)}),$(".carousel").carousel({interval:6e3,pause:"false"}),jQuery(function(e){var o=e("div.carousel-item:nth-child(1) .carousel-caption");e(".pp-caption").html(o.html()),o.css("display","none"),e(".carousel").on("slide.bs.carousel",function(o){var a=e("div.carousel-item:nth-child("+(e(o.relatedTarget).index()+1)+") .carousel-caption");e(".pp-caption").html(a.html()),a.css("display","none")})}),$(".accord").click(function(){var e=$(this);$(".accord-media",e).show(),$(".text-accort",e).fadeOut(),$(".accord .text-accort").siblings().show(),$(".text-area").hide(),$(this).hasClass("scale-up")?($(".accord-main div").removeClass("scale-up"),$(".accord-main div").removeClass("scale-down"),$(".text-accort").show(),$(".accord-contents").hide(),$(".text-area").hide()):($(".accord-main div").removeClass("scale-up"),$(".accord-main div").removeClass("scale-down"),$(this).addClass("scale-up").siblings().addClass("scale-down"),$(".accord-contents",e).show(),$(".text-area").fadeIn(2e3))}),$(".sticky-menu li a").hover(function(){});var nowDate=new Date;nowDate.setDate(nowDate.getDate()+1);var dd=nowDate.getDate(),mm=nowDate.getMonth()+1,y=nowDate.getFullYear();function init(){window.addEventListener("scroll",function(e){window.pageYOffset||document.documentElement.scrollTop;var o=document.querySelector("#bookBar");fs=document.querySelector("#bookBarContent");var a=$("#book-section").offset().top;window.pageYOffset>a?(classie.add(o,"fixed-top"),classie.remove(fs,"booking-bar-normal"),classie.add(o,"booking-bar-normal"),$(".long-space").hide(),$(".book-brand").show(),$(".burger-menu").show(),stickyMenuClose()):classie.has(o,"fixed-top")&&(classie.remove(o,"fixed-top"),classie.remove(o,"booking-bar-normal"),classie.add(fs,"booking-bar-normal"),$(".long-space").show(),$(".book-brand").hide(),$(".burger-menu").hide(),$("#bookBarContent").addClass(".booking-bar-normal"))})}function stickyMenu(){$("#bookBarContent").hide(),$(".booking-bar-nav").show(),$(".burger-menu").hide(),$(".burger-menu-close").show()}function stickyMenuClose(){$(".burger-menu").show(),$(".booking-bar-nav").hide(),$("#bookBarContent").fadeIn(),$(".burger-menu-close").hide()}function overlayMenuClose(){$("#bookin-OL").fadeOut()}function overlayMenuOpen(){$("#BookingForm").show(),$(".success-msg").hide();var e=$("#bookBarRooms").val(),o=$("#bookBarGuests").val(),a=$("#bookBarDate").val();$("#formRooms").val(e),$("#formGuests").val(o),$("#formDate").val(a),$("#bookin-OL").fadeIn()}function mobileOverlayMenuOpen(){$("#BookingForm").show(),$(".success-msg").hide();var e=$("#bookBarRooms").val(),o=$("#bookBarGuests").val(),a=$("#bookBarDate").val();$("#formRooms").val(e),$("#formGuests").val(o),$("#formDate").val(a),$("#mobile-bookin-OL").fadeIn()}function enquireOverlayOpen(){var e=$("#pageType").val();$("#type").val(e),$("#enquire-OL").fadeIn()}function enquireOverlayClose(){$("#enquire-OL").fadeOut()}function selectorAge(e){for($("#childWrapper").empty(),$i=0;$i<e;$i++){var o=$('<select class="form-control ages" name="childAge'+($i+1)+'"/>');for($p=0;$p<15;$p++)0==$p?$("<option disabled selected>Child "+($i+1)+" Age</option>").appendTo(o):$("<option value="+$p+">"+$p+" Year(s)</option>").appendTo(o);o.appendTo("#childWrapper")}}function selectorAgeMobile(e){for($("#childWrapperMobile").empty(),$i=0;$i<e;$i++){var o=$('<select class="form-control ages" name="childAge'+($i+1)+'"/>');for($p=0;$p<15;$p++)0==$p?$("<option disabled selected>Child "+($i+1)+" Age</option>").appendTo(o):$("<option value="+$p+">"+$p+" Year(s)</option>").appendTo(o);o.appendTo("#childWrapperMobile")}}$(function(){$('input[name="daterange"]').daterangepicker({autoApply:!0,autoUpdateInput:!0,locale:{cancelLabel:"Clear",format:"DD/MM/YYYY"},startDate:Date.now(),endDate:dd+"-"+mm+"-"+y}),$('input[name="daterange"]').on("apply.daterangepicker",function(e,o){$(this).val(o.startDate.format("DD/MM/YYYY")+" - "+o.endDate.format("DD/MM/YYYY")),$("#eZ_chkin").val(o.startDate.format("DD-MM-YY")),$("#eZ_chkout").val(o.endDate.format("DD-MM-YY"))}),$('input[name="daterange"]').on("cancel.daterangepicker",function(e,o){$(this).val("")})}),window.onload=init(),$("#slider").anythingSlider({expand:!0,autoPlay:!1,buildArrows:!0,buildStartStop:!1,buildNavigation:!1,appendForwardTo:null,appendBackTo:null}),$("ul.nav li.dropdown").hover(function(){$(this).find(".dropdown-menu").stop(!0,!0).delay(200).fadeIn(500)},function(){$(this).find(".dropdown-menu").stop(!0,!0).delay(200).fadeOut(500)}),$("#BookingForm").on("submit",function(e){if($("#bookName").val().length>0||$("#bookEmail").val().length>0){$("input[type=submit]").attr("disabled","disabled"),$("#submitBttn").hide(),$("#loadingBttn").fadeIn();$.ajax({type:"POST",url:"{{ url('bookings/send') }}",data:$("#BookingForm").serialize(),success:function(e){$("#BookingForm").hide(),$("#bookingMsg").fadeIn()}})}else $("#book-msg").empty(),$("#book-msg").append("<p class='msg-alert'>*Please fill all the required fields.</p>");e.preventDefault()}),$("#NewsletterForm").on("submit",function(e){$.ajax({type:"POST",url:"{{ url('newsletter/send') }}",data:$("#NewsletterForm").serialize(),success:function(e){overlayMenuOpen(),$("#BookingForm").hide(),$("#newsletter").fadeIn()}}),e.preventDefault()}),$("#enquiryForm").on("submit",function(e){$.ajax({type:"POST",url:"{{ url('enquiry/send') }}",data:$("#enquiryForm").serialize(),success:function(e){overlayMenuOpen(),$("#BookingForm").hide(),$("#enquiry").fadeIn()}}),e.preventDefault()}),$("#ContactForm").on("submit",function(e){$.ajax({type:"POST",url:"{{ url('contact/send') }}",data:$("#ContactForm").serialize(),success:function(e){overlayMenuOpen(),$("#BookingForm").hide(),$("#enquiry").fadeIn()}}),e.preventDefault()}),$(document).ready(function(){function e(){verticalOffset="undefined"!=typeof verticalOffset?verticalOffset:0,element=$("body"),offset=element.offset(),offsetTop=offset.top,$("html, body").animate({scrollTop:offsetTop},500,"linear")}$(function(){$(document).on("scroll",function(){$(window).scrollTop()>100?$(".scroll-top-wrapper").addClass("show"):$(".scroll-top-wrapper").removeClass("show")}),$(".scroll-top-wrapper").on("click",e)})}),$("#childs").on("change",function(){$childs=$("#childs").val(),selectorAge($childs)}),$("#childsMobile").on("change",function(){$childs=$("#childsMobile").val(),selectorAgeMobile($childs)});
window.sr = ScrollReveal(), sr.reveal(".dine"), sr.reveal(".event"), sr.reveal(".heading-container");
var $item = $(".carousel .carousel-item"),
    $wHeight = window.innerHeight - 95;

function openNav() {
    document.getElementById("mySidenav").style.width = "100%", $(".overlay").show()
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0", $(".overlay").hide()
}
$item.eq(0).addClass("active"), $item.height($wHeight), $item.addClass("full-screen"), $(".carousel img").each(function() {
    var e = $(this).attr("src"),
        o = $(this).attr("data-color");
    $(this).parent().css({
        "background-image": "url(" + e + ")",
        "background-color": o
    }), $(this).remove()
}), $(window).on("resize", function() {
    $wHeight = window.innerHeight - 95, $item.height($wHeight)
}), $(".carousel").carousel({
    interval: 6e3,
    pause: "false"
}), jQuery(function(e) {
    var o = e("div.carousel-item:nth-child(1) .carousel-caption");
    e(".pp-caption").html(o.html()), o.css("display", "none"), e(".carousel").on("slide.bs.carousel", function(o) {
        var a = e("div.carousel-item:nth-child(" + (e(o.relatedTarget).index() + 1) + ") .carousel-caption");
        e(".pp-caption").html(a.html()), a.css("display", "none")
    })
}), $(".accord").click(function() {
    var e = $(this);
    $(".accord-media", e).show(), $(".text-accort", e).fadeOut(), $(".accord .text-accort").siblings().show(), $(".text-area").hide(), $(this).hasClass("scale-up") ? ($(".accord-main div").removeClass("scale-up"), $(".accord-main div").removeClass("scale-down"), $(".text-accort").show(), $(".accord-contents").hide(), $(".text-area").hide()) : ($(".accord-main div").removeClass("scale-up"), $(".accord-main div").removeClass("scale-down"), $(this).addClass("scale-up").siblings().addClass("scale-down"), $(".accord-contents", e).show(), $(".text-area").fadeIn(2e3))
}), $(".sticky-menu li a").hover(function() {});
var nowDate = new Date;
nowDate.setDate(nowDate.getDate() + 1);
var dd = nowDate.getDate(),
    mm = nowDate.getMonth() + 1,
    y = nowDate.getFullYear();

function init() {
    window.addEventListener("scroll", function(e) {
        window.pageYOffset || document.documentElement.scrollTop;
        var o = document.querySelector("#bookBar");
        fs = document.querySelector("#bookBarContent");
        var a = $("#book-section").offset().top;
        window.pageYOffset > a ? (classie.add(o, "fixed-top"), classie.remove(fs, "booking-bar-normal"), classie.add(o, "booking-bar-normal"), $(".long-space").hide(), $(".book-brand").show(), $(".burger-menu").show(), stickyMenuClose()) : classie.has(o, "fixed-top") && (classie.remove(o, "fixed-top"), classie.remove(o, "booking-bar-normal"), classie.add(fs, "booking-bar-normal"), $(".long-space").show(), $(".book-brand").hide(), $(".burger-menu").hide(), $("#bookBarContent").addClass(".booking-bar-normal"))
    })
}

function stickyMenu() {
    $("#bookBarContent").hide(), $(".booking-bar-nav").show(), $(".burger-menu").hide(), $(".burger-menu-close").show()
}

function stickyMenuClose() {
    $(".burger-menu").show(), $(".booking-bar-nav").hide(), $("#bookBarContent").fadeIn(), $(".burger-menu-close").hide()
}

function overlayMenuClose() {
    $("#bookin-OL").fadeOut()
}

function overlayMenuOpen() {
    $("#BookingForm").show(), $(".success-msg").hide();
    var e = $("#bookBarRooms").val(),
        o = $("#bookBarGuests").val(),
        a = $("#bookBarDate").val();
    $("#formRooms").val(e), $("#formGuests").val(o), $("#formDate").val(a), $("#bookin-OL").fadeIn()
}

function mobileOverlayMenuOpen() {
    $("#BookingForm").show(), $(".success-msg").hide();
    var e = $("#bookBarRooms").val(),
        o = $("#bookBarGuests").val(),
        a = $("#bookBarDate").val();
    $("#formRooms").val(e), $("#formGuests").val(o), $("#formDate").val(a), $("#mobile-bookin-OL").fadeIn()
}

function enquireOverlayOpen() {
    var e = $("#pageType").val();
    $("#type").val(e), $("#enquire-OL").fadeIn()
}

function enquireOverlayClose() {
    $("#enquire-OL").fadeOut()
}

function selectorAge(e) {
    for ($("#childWrapper").empty(), $i = 0; $i < e; $i++) {
        var o = $('<select class="form-control ages" name="childAge' + ($i + 1) + '"/>');
        for ($p = 0; $p < 15; $p++) 0 == $p ? $("<option disabled selected>Child " + ($i + 1) + " Age</option>").appendTo(o) : $("<option value=" + $p + ">" + $p + " Year(s)</option>").appendTo(o);
        o.appendTo("#childWrapper")
    }
}

function selectorAgeMobile(e) {
    for ($("#childWrapperMobile").empty(), $i = 0; $i < e; $i++) {
        var o = $('<select class="form-control ages" name="childAge' + ($i + 1) + '"/>');
        for ($p = 0; $p < 15; $p++) 0 == $p ? $("<option disabled selected>Child " + ($i + 1) + " Age</option>").appendTo(o) : $("<option value=" + $p + ">" + $p + " Year(s)</option>").appendTo(o);
        o.appendTo("#childWrapperMobile")
    }
}
$(function() {
    $('input[name="daterange"]').daterangepicker({
        autoApply: !0,
        autoUpdateInput: !0,
        locale: {
            cancelLabel: "Clear",
            format: "DD/MM/YYYY"
        },
        startDate: Date.now(),
        endDate: dd + "-" + mm + "-" + y
    }), $('input[name="daterange"]').on("apply.daterangepicker", function(e, o) {
        $(this).val(o.startDate.format("DD/MM/YYYY") + " - " + o.endDate.format("DD/MM/YYYY")), $("#eZ_chkin").val(o.startDate.format("DD-MM-YY")), $("#eZ_chkout").val(o.endDate.format("DD-MM-YY"))
    }), $('input[name="daterange"]').on("cancel.daterangepicker", function(e, o) {
        $(this).val("")
    })
}), window.onload = init(), $("#slider").anythingSlider({
    expand: !0,
    autoPlay: !1,
    buildArrows: !0,
    buildStartStop: !1,
    buildNavigation: !1,
    appendForwardTo: null,
    appendBackTo: null
}), $("ul.nav li.dropdown").hover(function() {
    $(this).find(".dropdown-menu").stop(!0, !0).delay(200).fadeIn(500)
}, function() {
    $(this).find(".dropdown-menu").stop(!0, !0).delay(200).fadeOut(500)
}), $("#BookingForm").on("submit", function(e) {
    if ($("#bookName").val().length > 0 || $("#bookEmail").val().length > 0) {
        $("input[type=submit]").attr("disabled", "disabled"), $("#submitBttn").hide(), $("#loadingBttn").fadeIn();
        $.ajax({
            type: "POST",
            url: "{{ url('bookings/send') }}",
            data: $("#BookingForm").serialize(),
            success: function(e) {
                $("#BookingForm").hide(), $("#bookingMsg").fadeIn()
            }
        })
    } else $("#book-msg").empty(), $("#book-msg").append("<p class='msg-alert'>*Please fill all the required fields.</p>");
    e.preventDefault()
}), $("#NewsletterForm").on("submit", function(e) {
    $.ajax({
        type: "POST",
        url: "{{ url('newsletter/send') }}",
        data: $("#NewsletterForm").serialize(),
        success: function(e) {
            overlayMenuOpen(), $("#BookingForm").hide(), $("#newsletter").fadeIn()
        }
    }), e.preventDefault()
}), $("#enquiryForm").on("submit", function(e) {
    $.ajax({
        type: "POST",
        url: "{{ url('enquiry/send') }}",
        data: $("#enquiryForm").serialize(),
        success: function(e) {
            overlayMenuOpen(), $("#BookingForm").hide(), $("#enquiry").fadeIn()
        }
    }), e.preventDefault()}), 
    // $("#ContactForm").on("submit", function(e) {
    // $.ajax({
    //     type: "POST",
    //     url: "{{ url('contact/send') }}",
    //     data: $("#ContactForm").serialize(),
    //     success: function(e) {
    //         overlayMenuOpen(), $("#BookingForm").hide(), $("#enquiry").fadeIn()
    //     }
    // }), e.preventDefault()}), 
    // $("#room_ContactForm").on("submit", function(e) {
    // $.ajax({
    //     type: "POST",
    //     url: "{{ url('contact/room/send') }}",
    //     data: $("#room_ContactForm").serialize(),
    //     success: function(e) {
    //         overlayMenuOpen(), $("#BookingForm").hide(), $("#enquiry").fadeIn()
    //     }
    // }), e.preventDefault()}), 
    $(document).ready(function() {
    function e() {
        verticalOffset = "undefined" != typeof verticalOffset ? verticalOffset : 0, element = $("body"), offset = element.offset(), offsetTop = offset.top, $("html, body").animate({
            scrollTop: offsetTop
        }, 500, "linear")
    }
    $(function() {
        $(document).on("scroll", function() {
            $(window).scrollTop() > 100 ? $(".scroll-top-wrapper").addClass("show") : $(".scroll-top-wrapper").removeClass("show")
        }), $(".scroll-top-wrapper").on("click", e)
    })
}), $("#childs").on("change", function() {
    $childs = $("#childs").val(), selectorAge($childs)
}), $("#childsMobile").on("change", function() {
    $childs = $("#childsMobile").val(), selectorAgeMobile($childs)
});
</script>

<script>
            $(document).ready(function(){
                $(".category-mgr").click(function(){
                    // get the data-filter value of the button
                    var filterValue = $(this).attr('data-filter');
                    
                    // show all items
                    if(filterValue == "all")
                    {
                        $(".all").show("slow");
                    }
                    else
                    {   
                        // hide all items
                        $(".all").not('.'+filterValue).hide("slow");
                        // and then, show only items with selected data-filter value
                        $(".all").filter('.'+filterValue).show("slow");
                    }
                });

            });

            $("#offer-close").on("click",function(){
                $("#offer-open").show();
                $(".offers").fadeOut();
            })

            $("#offer-open").on("click",function(){
                $("#offer-open").hide();
                $(".offers").fadeIn();
            })
        </script>

        <!--Start of Zendesk Chat Script-->
        <script type="text/javascript">
        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
        $.src="https://v2.zopim.com/?5iwB13okeOqsm9zZQiBymNxgm8CNNb8U";z.t=+new Date;$.
        type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
        </script>
        <!--End of Zendesk Chat Script-->

        <!-- Global site tag (gtag.js) - AdWords: 801728296 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-801728296"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-801728296');
        </script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-HWLTPZJJYC">
        </script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-HWLTPZJJYC');
        </script>

        <!-- Google Tag Manager -->

        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

        })(window,document,'script','dataLayer','GTM-TC6GQL4F');</script>

        <!-- End Google Tag Manager -->

        <!-- Google Tag Manager (noscript) -->

        <noscript><iframe src=https://www.googletagmanager.com/ns.html?id=GTM-TC6GQL4F

        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

        <!-- End Google Tag Manager (noscript) -->


</html>

<style>

.whatsapp-scroll-top-wrapper{
    position: fixed;
    width: 50px;
	height: 48px;
	right: 30px;
	bottom: 30px;
    background-color: #25d366 ;
    border-top-left-radius: 10px;
	border-top-right-radius: 10px;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
    padding: 7px;
    z-index: 99999999;
    align-items: center;
}

.whatsapp-scroll-top-wrapper a {
    color: white;
}
</style>