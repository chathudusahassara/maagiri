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
                    @if(substr($pagebanner->file, -3) == "mp4"  )
                    <div class="container-fluid page-head-banner" style="background:#333;">
                        <video id="vid" loop autoplay preload="none" muted>
                        <source src="{{ asset("storage/d/".$pagebanner->file) }}" />
                        Your browser does not support the video tag.
                        </video>
                    </div>
                    @else
                    <div class="container-fluid page-head-banner" style="background-image:url({{ asset("storage/d/".$pagebanner->file) }});">
                    @endif
                        

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
                              <p>{{ $pagebanner->name }}</p>
                              <h1 class="d-none d-sm-block">{{ $pagebanner->details }}</h1>
                              <h4 class="d-block d-sm-none">{{ $pagebanner->details }}</h4>
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
                                        @foreach($pages as $p)
                                            <li><a {{ $pageId == $p->id ? "class=active" : "" }} href="{{ url($p->link_name) }}">{{ $p->name }}</a></li>
                                            <!-- class="active" -->
                                        @endforeach
                                        </ul>
                                    </div>
                            </div>
                        <div class="container">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="text-wrapper-main">
                                    <h1>{{ $contents->name }}</h1>
                                    <div class="orange-brand"></div>
                                    {!! $contents->body !!}
                                    <!-- <div class="breads">28m <span>/</span> 6 to 9 Floor <span>/</span> Sea View <span>/</span> King Size Bed <span>/</span> Max 2 Adults</div> -->
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        </div>
                    </div>
             </section>
             @include('_shared.includes.booking')


            @if($features)
            {!! $features->body !!}
            @endif

            <section id="pages-media">
                <div class="container-fluid mm-slider-bg-black">
                    <div class="container">
                        <div class="row">
                        <div class="col-md-12 ssts">
                                <ul id="slider">
                                        @foreach($gallery as $g)
                                        <li><img src="{{ asset("storage/d/".$g->file) }}" alt=""></li>
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
            <input type="hidden" id="pageType" value="{{ $p->name }}" />
@endsection