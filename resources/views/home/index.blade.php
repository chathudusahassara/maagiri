@extends('_shared.main')

@section('content')

      <section id="header">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            
            <div class="carousel-inner">
                <!-- @foreach($banner as $bn)
                <div class="carousel-item">
                    <img src="{{ asset('storage/d/'.$bn->file) }}" data-color="black" alt="First Image">
                    <div class="carousel-caption">
                        <h3 class="orange-brand">{!! $bn->name !!}</h3>
                        <p>{{ $bn->details }}</p>
                    </div>
                </div>
                @endforeach -->
                <!-- <video id="vid" loop autoplay preload="none" muted>
                    <source src="{{ asset('storage/d/maagiri_promo.mov') }}" />
                    Your browser does not support the video tag.
                </video> -->
                <div class="carousel-item">
                <!-- <iframe src="https://www.youtube.com/embed/cnMGJNgbsog?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
                    <video id="vid" loop autoplay preload="none" muted>
                    <source src="{{ asset('storage/d/maagiri_building.mp4') }}" />
                    Your browser does not support the video tag.
                    </video>
                    <div class="carousel-caption">
                        <h3 class="orange-brand">{!! $bn->name !!}</h3>
                        <p>{{ $bn->details }}</p>
                    </div>

                    @if(count($offers) > 0)
                    <div class="offers">
                    <div id="offer-close" class="closer"><span><i class="fa fa-times-circle" aria-hidden="true"></i></span></div>
                        @foreach($offers as $off)
                            <div class="offer-item">
                                <h2>{{ $off->title }}</h2>
                                <div class="orange-brand"></div>
                                <p class="d-none d-sm-block">{{ $off->summary }}</p>
                                <p class="d-block d-sm-none">{{ $off->summary_mobile }}</p>
                                <a href="{{ url('offers') }}">DETAILS</a> | <a style="color:#ccc;" href="https://live.ipms247.com/booking/book-rooms-11448">BOOK NOW</a>
                            </div>
                        @endforeach
                    </div>
                    </div>
                    @endif

            </div>

        </div>

        <div class="sticky-menu-offers d-none d-sm-block">
            <ul>
                <li class="rotate" id="offer-open">Offers</li>
            </ul>
        </div>
        <!-- sticky menu -->
        <!-- <div class="sticky-menu d-none d-sm-block">
            <ul>
                <li>
                    <a href=""><img src="images/sticky_menu/search/Normal.svg" width="24"></a>
                    <div class="animated slideInRight">
                        <form>
                                <input type="text" class="form-control" id="search"  placeholder="Search">
                        </form>
                    </div>
                </li>
                <li><a href=""><img src="images/sticky_menu/contact/Normal.svg" width="24"></a></li>
                <li>
                    <a href="">EN</a>
                    <div class="animated slideInRight">
                    <ul>
                        <li><a href="">FR</a></li>
                        <li><a href="">AR</a></li>
                        <li><a href="">CN</a></li>
                        <li><a href="">IN</a></li>
                    </ul>
                    </div>
                </li>
            </ul>
        </div> -->
        <!-- sticky menu -->

        <div class="logo d-none d-sm-block"><a href="{{ url('home') }}"><img src="images/logo_desktop.svg" data-color="violet" alt="Maagiri Logo"></a></div>
        <div class="logo-mobi d-block d-sm-none"><a href="{{ url('home') }}"><img src="images/logo_mobile.svg" data-color="violet" alt="Maagiri Logo"></a></div>
        <div class="pp-caption"></div>
    </section>


        <section id="main-content">
            <div class="container-fluid black-container heading-container">
                <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="text-wrapper-main">
                            <p class="sub-heading">OVERVIEW</p>
                            <h1>Maagiri Hotel</h1>
                            <div class="orange-brand"></div>
                            {!! $about->body !!}
                            <!-- <p class="learn-more"><a href="about.html">Learn More</a></p> -->
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                </div>
            </div>
        </section>

       @include('_shared.includes.booking')

        <div class="long-space"></div>
        </div>
        </section>


        <section id="main-stay">
                <div class="container-fluid heading-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-wrapper-main">
                                        <p class="sub-heading">ROOMS</p>
                                        <h1>Your Custom Tailored Stay</h1>
                                        <!-- <h4 class="d-block d-sm-none">Your Custom Tailored Stay</h3> -->
                                        <div class="orange-brand"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid maagiri-accord d-none d-sm-block">
                    <div class="row accord-main">
                        <?php $ex = 1; ?>
                        @foreach($rooms as $rm)
                        <div id="ex-{{ $ex }}" class="accord-a accord">
                            <div class="row acc">
                                @if($ex == 1 || $ex ==2)
                                <div class="accord-media-image" style="background-image:url({{ asset('storage/d/'.$rm->file) }});background-position:right; ">
                                @endif

                                @if($ex == 3 || $ex ==4)
                                <div class="accord-media-image" style="background-image:url({{ asset('storage/d/'.$rm->file) }});background-position:left; ">
                                @endif
                                    <div class="overlay"></div>
                                        <div class="text-accort">
                                            <h2>{{ $rm->name }}</h2>
                                            <div class="orange-brand"></div>
                                        </div>
                                </div>
                                <div class="accord-contents">
                                <div class="text-area">
                                        <div class="text-accort-c">
                                                <h2>{{ $rm->name }}</h2>
                                                <div class="orange-brand"></div>
                                            </div>
                                            {!! $rm->details !!}
                                            @if($ex == 1)
                                            <a href="{{ url('executive_suite') }}" class="btn btn-orange-brand">EXPLORE</a>
                                            @endif
                                            @if($ex == 2)
                                            <a href="{{ url('Junior_Suite') }}" class="btn btn-orange-brand">EXPLORE</a>
                                            @endif
                                            @if($ex == 3)
                                            <a href="{{ url('premier_room') }}" class="btn btn-orange-brand">EXPLORE</a>
                                            @endif
                                            @if($ex == 4)
                                            <a href="{{ url('premier_ocean_view_room') }}" class="btn btn-orange-brand">EXPLORE</a>
                                            @endif
                                        </div>
                                </div>
                            </div>
                        </div>
                        <?php $ex++; ?>
                        @endforeach

                    </div>
                </div>

                <!--mobile -->
                <div class="d-block d-sm-none">
                
                @foreach($rooms as $rm)
                <div class="rows media-wrapper">
                        <div class="col-md-6 parent">
                        <div class="image" style="background-image:url({{ asset('storage/d/'.$rm->file) }});"></div>
                        </div>
                        <!-- <img src="{{ asset('images/rooms/exec/edit-4.jpg') }}" width="100%"> -->
                        <div class="col-md-6 text">
                            <h2>{{ $rm->name }}</h2>
                            <div class="orange-brand"></div>
                            {!! $rm->details !!}
                            <a href="{{ url('rooms/executive') }}" class="btn btn-orange-brand">EXPLORE</a>
                        </div>
                    </div>
                    <div class="spacer-2x"></div>
                    @endforeach

                </div>
                <!--mobile -->
        </section>


        <section id="main-stay">
                <div class="container-fluid heading-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-wrapper-main">
                                        <p class="sub-heading">DINING</p>
                                        <h1>Savour the Exceptional</h1>
                                        <div class="orange-brand"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <section id="media-container">
                <div class="container-fluid d-none d-sm-block">
                    <?php $dnnum = 1; ?>
                    @foreach($dining as $dn)
                    <div class="row media-wrapper dine">
                        @if($dnnum % 2 == 0)
                        <div class="col-md-6 text">
                            <h2>{{ $dn->name }}</h2>
                            <div class="orange-brand"></div>
                            {!! $dn->details !!}
                            <a href="{{ url('dining/curve') }}" class="btn btn-orange-brand">EXPLORE</a>
                        </div>
                        <div class="col-md-6 parent">
                            <div class = "image" style="background-image:url({{ asset('storage/d/'.$dn->file) }});"></div>
                        </div>
                        @else
                        <div class="col-md-6 parent">
                        <div class = "image" style="background-image:url({{ asset('storage/d/'.$dn->file) }});"></div>
                        </div>
                        <div class="col-md-6 text">
                            <h2>{{ $dn->name }}</h2>
                            <div class="orange-brand"></div>
                            {!! $dn->details !!}
                            <a href="{{ url('dining/curve') }}" class="btn btn-orange-brand">EXPLORE</a>
                        </div>
                        @endif
                    </div>
                    <?php $dnnum++; ?>
                    @endforeach
                </div>

                <!-- mobile -->
                <div class="container-fluid d-block d-sm-none">
                        @foreach($dining as $dn)
                        <div class="row media-wrapper">
                        <div class="col-md-6 parent">
                        <div class = "image" style="background-image:url({{ asset('storage/d/'.$dn->file) }});"></div>
                        </div>
                            <div class="col-md-6 text">
                                <h2>{{ $dn->name }}</h2>
                                <div class="orange-brand"></div>
                                {!! $dn->details !!}
                                <a href="{{ url('dining/curve') }}" class="btn btn-orange-brand">EXPLORE</a>
                            </div>
                        </div>
                        <div class="spacer-2x"></div>
                        @endforeach
                </div>
                <!-- mobile -->
        </section>

        <section id="main-stay">
                <div class="container-fluid heading-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-wrapper-main">
                                        <p class="sub-heading">EVENTS</p>
                                        <h1>Elevate Your Gatherings</h1>
                                        <div class="orange-brand"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section id="media-container">
                <div class="container-fluid d-none d-sm-block">
                    <?php $evnum = 1; ?>
                    @foreach($events as $ev)
                    <div class="row media-wrapper event">
                        @if($evnum % 2 == 0)
                        <div class="col-md-6 text">
                            <h2>{{ $ev->name }}</h2>
                            <div class="orange-brand"></div>
                            {!! $ev->details !!}
                            <a href="{{ url('weddings_celebrations') }}" class="btn btn-orange-brand">EXPLORE</a>
                        </div>
                        <div class="col-md-6 parent">
                        <div class = "image" style="background-image:url({{ asset('storage/d/'.$ev->file) }});"></div>
                        </div>
                        @else
                        <div class="col-md-6 parent">
                        <div class = "image" style="background-image:url({{ asset('storage/d/'.$ev->file) }});"></div>
                        </div>
                        <div class="col-md-6 text">
                            <h2>{{ $ev->name }}</h2>
                            <div class="orange-brand"></div>
                            {!! $ev->details !!}
                            <a href="{{ url('events_meetings') }}" class="btn btn-orange-brand">EXPLORE</a>
                        </div>
                        @endif
                    </div>
                    <?php $evnum++; ?>
                    @endforeach

                </div>

                <!-- mobile -->
                <div class="container-fluid d-block d-sm-none">
                        @foreach($events as $ev)
                        <div class="row media-wrapper">
                        <div class="col-md-6 parent">
                        <div class = "image" style="background-image:url({{ asset('storage/d/'.$ev->file) }});"></div>
                        </div>
                            <div class="col-md-6 text">
                                <h2>{{ $ev->name }}</h2>
                                <div class="orange-brand"></div>
                                {!! $ev->details !!}
                                <a href="{{ url('events/wedding') }}" class="btn btn-orange-brand">EXPLORE</a>
                            </div>
                        </div>
                        <div class="spacer-2x"></div>
                        @endforeach
                    </div>
                <!-- mobile -->
        </section>



        <section id="main-stay">
                <div class="container-fluid heading-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-wrapper-main">
                                        <p class="sub-heading">WELLNESS</p>
                                        <h1>Rebalance & Renew</h1>
                                        <div class="orange-brand"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section> 

        <section id="media-container">
                <div class="container-fluid">
                    @foreach($wellness as $wl)
                    <div class="row media-wrapper">
                    <div class="col-md-6 parent">
                        <div class = "image" style="background-image:url({{ asset('storage/d/'.$wl->file) }});"></div>
                        </div>
                        <div class="col-md-6 text">
                            <h2>{{ $wl->name }}</h2>
                            <div class="orange-brand"></div>
                            {!! $wl->details !!}
                            <a href="{{ url('wellness/gym') }}" class="btn btn-orange-brand">EXPLORE</a>
                        </div>
                    </div>
                    @endforeach
                </div>
        </section>


        <section id="main-stay">
            <div class="container-fluid grey-container heading-container d-none d-sm-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-wrapper-main" style="padding-top:100px; padding-bottom:100px;">
                                    <p >CONNECT</p>
                                    <h1>Subscribe to our Newsletter</h1>
                                    <div class="orange-brand"></div>
                                    <p>Stay informed of the latest happenings at Maagiri Hotel and be the <br> 
                                       first to receive our latest special offers. </p>
                                    
                                    <div class="row subscribe-area">
                                    <div class="col"></div>
                                    <div class="col-auto">
                                        <form class="form-inline" id="NewsletterForm">
                                                <div class="form-group">
                                                        <input type="email" class="form-control input-orange-line" placeholder="Your Email" name="newsletteremail" required>
                                                        {{ csrf_field() }}
                                                    </div>
                                            <button type="submit" class="btn btn-orange-brand">SUBSCRIBE</button>
                                        </form>
                                    </div>
                                    <div class="col"></div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <div class="container-fluid d-block d-sm-none"><div class="spacer-2x"></div></div>
    <script>
        document.getElementById('vid').play();
    </script>
    
@endsection 