@extends('_shared.main')

@section('content')

<section id="header">
                    <div class="container-fluid page-head-banner" style="background-image:url({{ asset('storage/d/'.$banner->file) }});">
  
                        <div class="logo d-none d-sm-block"><a href="{{ url('home') }}"><img src="../images/logo_desktop.svg" data-color="violet" alt="Maagiri Logo"></a></div>
                        <div class="logo-mobi d-block d-sm-none"><a href="{{ url('home') }}"><img src="../images/logo_mobile.svg" data-color="violet" alt="Maagiri Logo"></a></div>
                      <div class="container caption-holder">
                          <div class="row">
                          <div class="pp-caption-pages">
                              <p>Special Offers</p>
                              <h1 class="d-none d-sm-block">Enjoy the best offers</h1>
                              <h4 class="d-block d-sm-none">Enjoy the best offers</h4>
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
                                                <li class="category-mgr" data-filter="all"><a href="#all">RECENT OFFERS</a></li>
                                            </ul>
                                        </div>
                                </div>
                        <div class="container">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="text-wrapper-main">
                                    <h1>Special Offers</h1>
                                    <div class="orange-brand"></div>
                                    {!! $content->body !!}<br>
                                    @if(count($offers) == 0)
                                    <div style=" font-size: 1.3em;">No offers available at the moment.</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        </div>
                    </div>
             </section>


            @if(count($offers) > 0)
            <section id="pages-media">
                <div class="container-fluid offer-container">
                    <div class="container">
                    <div class="row">
                    @foreach($offers as $im)
                                    <div class="offer-card col-md-6 {{ $im->name }}">
                                      <img class="card-img-top" src="{{ asset('storage/'.$im->image) }}" alt="{{ $im->name }}">
                                      <h1>{{ $im->title }}</h1>
                                      <p class="d-none d-sm-block">{{ $im->summary }}</p>
                                      <p class="d-block d-sm-none">{{ $im->summary_mobile }}</p>
                                      <p class="details">{{ $im->details }}</p>
                                    </div>
                                    @endforeach
                    </div>                                             
                    </div>
                </div>
            </section>
            <div class="spacer-2x"></div>
            <section id="en-button">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <a href="https://live.ipms247.com/booking/book-rooms-11448" class="btn btn-orange-brand">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="spacer-2x"></div>
            @endif


            
@endsection