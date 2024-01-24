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
                    <div class="container-fluid" >
                    <div class="logo d-none d-sm-block"><a href="{{ url('/') }}"><img src="../images/logo_desktop.svg" data-color="violet" alt="Maagiri Logo"></a></div>
                        <div class="logo-mobi d-block d-sm-none"><a href="{{ url('/') }}"><img src="../images/logo_mobile.svg" data-color="violet" alt="Maagiri Logo"></a></div>
                    </div>
</section>


<section id="main-content">
<div class="spacer-2x"></div>
                    <div class="container-fluid heading-container">
                        <div class="container">
                        <div class="row">
                        <div class="col-md-12 grey-container">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="text-wrapper-main" style="padding-top:100px;">
                                    <h1>{{ $privacy->name }}</h1>
                                    <div class="orange-brand"></div>
                                    <div class="privacy">
                                    {!! $privacy->body !!}
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
             </section>
             <div class="spacer-2x"></div>
@endsection