@extends('_shared.main')

@section('content')

<section id="header">
                    <div class="container-fluid page-head-banner" style="background-image:url({{ asset('storage/d/'.$banner->file) }});">
  
                        <div class="logo d-none d-sm-block"><a href="{{ url('/') }}"><img src="../images/logo_desktop.svg" data-color="violet" alt="Maagiri Logo"></a></div>
                        <div class="logo-mobi d-block d-sm-none"><a href="{{ url('/') }}"><img src="../images/logo_mobile.svg" data-color="violet" alt="Maagiri Logo"></a></div>
                      <div class="container caption-holder">
                          <div class="row">
                          <div class="pp-caption-pages">
                              <p>{{ $banner->name }}</p>
                              <h1 class="d-none d-sm-block">{{ $banner->details }}</h1>
                              <h4 class="d-block d-sm-none">{{ $banner->details }}</h4>
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
                                                <li class="category-mgr" data-filter="all"><a href="#all">ALL</a></li>
                                                <li class="category-mgr" data-filter="rooms"><a href="#rooms">ROOMS</a></li>
                                                <li class="category-mgr" data-filter="dining"><a href="#dining">DINING</a></li>
                                                <li class="category-mgr" data-filter="events"><a href="#events" >EVENTS</a></li>
                                                <li class="category-mgr" data-filter="scenes"><a href="#scenes" >SCENES</a></li>
                                            </ul>
                                        </div>
                                </div>
                        <div class="container">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="text-wrapper-main">
                                    <h1>{{ $content->name }}</h1>
                                    <div class="orange-brand"></div>
                                    {!! $content->body !!}
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        </div>
                    </div>
             </section>


            <section id="pages-media">
                <div class="container-fluid offer-container">
                    <div class="container">
                        

                            <div class="card-columns">
                                    @foreach($images as $im)
                                    <div class="card all {{ $im->name }}">
                                      <img class="card-img-top" src="{{ asset('storage/d/'.$im->file) }}" alt="{{ $im->name }}">
                                    </div>
                                    @endforeach

                                  </div>
                                  

                                                            
                    </div>
                </div>
            </section>
            <div class="spacer-2x"></div>

            
@endsection