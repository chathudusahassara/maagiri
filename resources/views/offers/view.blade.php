@extends('_shared.main')

@section('content')
<style> 
    
          
            .full-screen {
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }

            #myCarousel {margin-left: 10%; margin-right: 10%;}

.carousel-control {
	top: 50%;
}
.carousel-inner {
    /* width: 940px; */
	height: 520px;
}
.carousel-control.left, .carousel-control.right {
	background: none;
	color: #333;
	border: none;
}
.carousel-control.left {margin-left: -75px; color: black;}
.carousel-control.right {margin-right: -45px; color: black;}
            </style>


<section id="header">
                    <div class="container-fluid page-head-banner" style="background:url(../images/headers/offers.png) center;">
                        

                        <!-- sticky menu -->
        <div class="sticky-menu d-none d-sm-block">
            <ul>
                <li>
                    <a href=""><img src="../images/sticky_menu/search/Normal.svg" width="24"></a>
                    <div class="animated slideInRight">
                        <form>
                                <input type="text" class="form-control" id="search"  placeholder="Search">
                        </form>
                    </div>
                </li>
                <li><a href=""><img src="../images/sticky_menu/contact/Normal.svg" width="24"></a></li>
                <!-- <li>
                    <a href="">EN</a>
                    <div class="animated slideInRight">
                    <ul>
                        <li><a href="">FR</a></li>
                        <li><a href="">AR</a></li>
                        <li><a href="">CN</a></li>
                        <li><a href="">IN</a></li>
                    </ul>
                    </div>
                </li> -->
            </ul>
        </div>
        <!-- sticky menu -->

                        <div class="logo d-none d-sm-block"><a href="{{ url('/') }}"><img src="../images/logo_desktop.svg" data-color="violet" alt="Maagiri Logo"></a></div>
                        <div class="logo-mobi d-block d-sm-none"><a href="{{ url('/') }}"><img src="../images/logo_mobile.svg" data-color="violet" alt="Maagiri Logo"></a></div>
                      <div class="container caption-holder">
                          <div class="row">
                          <div class="pp-caption-pages">
                              <p>SPECIAL OFFERS</p>
                              <h1 class="d-none d-sm-block">{{ $offer->title }}</h1>
                              <h4 class="d-block d-sm-none">{{ $offer->title }}</h4>
                          </div>
                        </div>
                      </div>
                   </div>
                </section>

              <section id="main-content">
                    <div class="container-fluid black-container heading-container">
                            <div class="container nav-scroller">
                                    <div class="col-md-12 pages-nav">
                                        <ul>
                                                <li><a class="active" href="{{ url('wellness/gym') }}">OFFERS</a></li>
                                        </ul>
                                    </div>
                            </div>
                        <div class="container">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="text-wrapper-main">
                                    <h1>{{ $offer->title }}</h1>
                                    <div class="orange-brand"></div>
                                    <p>{{ $offer->details }}</p>
                                    <!-- <div class="breads">28m <span>/</span> 6 to 9 Floor <span>/</span> Sea View <span>/</span> King Size Bed <span>/</span> Max 2 Adults</div> -->
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        @include('_shared.includes.booking')
                        </div>
                    </div>
             </section>

             

             <!-- <section id="main-stay">
                    <div class="container-fluid grey-container heading-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <div class="text-wrapper-pages">
                                            <div class="spacer-2x"></div>
                                            <h1>Restaurant Features</h1>
                                            <div class="orange-brand"></div>
                                            <div class="row">
                                                    <div class="col-md-6">
                                                            <ul>
                                                                <li>Lorem ipsum dolor</li>
                                                                <li>Consectetur adipiscing</li>
                                                                <li>Eiusmod tempor</li>
                                                                <li>Tempor incididunt</li>
                                                                <li>Dolore magna aliqua</li>
                                                                <li>Dolor in reprehenderit</li>
                                                            </ul>
                                                        </div>
            
                                                        <div class="col-md-6">
                                                                <ul>
                                                                    <li>Lorem ipsum dolor</li>
                                                                    <li>Consectetur adipiscing</li>
                                                                    <li>Eiusmod tempor</li>
                                                                    <li>Tempor incididunt</li>
                                                                    <li>Dolore magna aliqua</li>
                                                                    <li>Dolor in reprehenderit</li>
                                                                </ul>
                                                            </div>
                                                            <div class=" col-md-12 spacer-2x"></div>
                                            </div>
                                            <p class="learn-more"><a href="">View Floor Plan <span></span></a></p>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>
            </section> -->

            <section id="pages-media">
                <div class="container-fluid mm-slider-bg-black">
                    <div class="container">
                        <div class="row">
                        <div class="col-md-12 ssts">
                                <ul id="slider">
                                        @foreach(json_decode($offer->image) as $img)
                                        <li><img src="{{ url('storage',$img->name) }}"></li>
                                        @endforeach
                                    </ul>
                        </div>    
                        </div>
                    </div>
                </div>
            </section>
            <section id="en-button">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <a href="javascript:;" onclick="enquireOverlayOpen()" class="btn btn-orange-brand">ENQUIRE</a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="spacer-2x"></div>

@endsection