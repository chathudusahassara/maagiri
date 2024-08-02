@extends('_shared.main')

@section('content')

<section id="header">
                    <div class="container-fluid page-head-banner" style="background-image:url({{ asset('images/blog/blog-bg.jpg') }});">
  
                        <div class="logo d-none d-sm-block"><a href="{{ url('/') }}"><img src="../images/logo_desktop.svg" data-color="violet" alt="Maagiri Logo"></a></div>
                        <div class="logo-mobi d-block d-sm-none"><a href="{{ url('/') }}"><img src="../images/logo_mobile.svg" data-color="violet" alt="Maagiri Logo"></a></div>
                      <div class="container caption-holder">
                          <div class="row">
                          <div class="pp-caption-pages">
                              <p>Maagiri Blog</p>
                              <h1 class="d-none d-sm-block">Updates from Maagiri</h1>
                              <h4 class="d-block d-sm-none">Updates from Maagiri</h4>
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
                                                <li class="category-mgr" data-filter="articles"><a href="#articles">RECENT ARTICLES</a></li>
                                            </ul>
                                        </div>
                                </div>
                        <div class="container">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="text-wrapper-main">
                                    <h1>Blog</h1>
                                    <div class="orange-brand"></div>
                                    
                                    <div style=" font-size: 1.3em;">Latest Updates, Events & Experiences</div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        </div>
                    </div>
             </section>


            @if(count($blogs) > 0)
            <section id="articles">
                <div class="container-fluid offer-container">
                    <div class="container">
                    <div class="row">
                    @foreach($blogs as $im)
                                    <div class="offer-card col-md-6 {{ $im->name }}">
                                      <img class="card-img-top" src="{{ asset('storage/'.$im->image) }}" alt="{{ $im->name }}">
                                      <h1>{{ $im->title }}</h1>
                                      <p class="details">{!! Str::limit($im->content, 100) !!} <a href="{{ url('blog/read/'.$im->slug) }}">Read More</a></p>
                                    </div>
                                    @endforeach
                    </div>                                             
                    </div>
                </div>
            </section>
            <div class="spacer-2x"></div>

            <div class="spacer-2x"></div>
            @endif


            
@endsection