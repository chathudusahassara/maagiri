<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow">
        <meta itemprop="image" content="">
        <meta itemprop="description" content="">
        <meta name="description" content="Maagiri Official website">
        <meta name="keywords" content="Maagiri Official website">
        <meta name="twitter:description" content="Maagiri Official website">
        <meta name="twitter:title" content="Maagiri Official website">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@maagiri">
        <meta name="twitter:creator" content="@maagiri">

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
        <link rel='stylesheet prefetch' href='{{ asset('css/bootstrap.min.css') }}'>
        <link rel='stylesheet prefetch' href='{{ asset('css/maagiri-layout.css') }}'>
        <link rel='stylesheet prefetch' href='{{ asset('css/accord.css') }}'>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
        <link rel='stylesheet prefetch' href='https://daneden.github.io/animate.css/animate.min.css'>
        <link rel='stylesheet prefetch' href='{{ asset('css/daterangepicker.css') }}'>
        <link rel='stylesheet prefetch' href='{{ asset('css/anythingslider.css') }}'>


        <style> 

      
.full-screen {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
</style>

</head>
<body>

  <header>
                    <nav class="navbar navbar-expand-md maagiri-nav-dark">
                    <div class="mobile-nav d-block d-sm-none">
                            <a href="#" onclick="openNav()">
                                <img src="{{ asset('images/menu-ico.png') }}" width="100%">
                            </a>
                    </div>
                <div class="container-fluid base-nav">
                      <div class="brand"></div>
                      

                     

                </div>
            </nav>
                  </header>


                          
       
  

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
                            <li>T. +960 300 5001</li>
                            <li>E. reservations@maagirihotel.com</li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-nav-col footer-socials">
                        <ul>
                            <li class="h d-none d-sm-block"><a href="" class="orange-brand">SOCIAL</a></li>
                            <ul>
                                <li><a href="https://web.facebook.com/Maagiri-Hotel-127052284636238/"><img src="{{ asset('images/socials/fb.svg') }}" width="24"></a></li>
                                <li><a href="https://www.instagram.com/maagirihotel/"><img src="{{ asset('images/socials/insta.svg') }}" width="24"></a></li>
                                <li><a href="https://twitter.com/maagirihotel"><img src="{{ asset('images/socials/twitter.svg') }}" width="24"></a></li>
                            </ul>
                        </ul>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>

        

        <div class="container-fluid black-container footer-inline">
            <div class="container d-none d-sm-block">
                <ul>
                    <!-- <li><a href="">The Hotel</a></li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Offers</a></li> -->
                    <li><a href="{{ url('privacy') }}">Privacy Policy</a></li>
                    <li><a href="">Terms & Conditions</a></li>
                </ul>
                <p>© 2018 Maagiri Hotel, All Rights Reserved</p>
            </div>

            <!-- mobile -->
            <div class="container d-block d-sm-none">
                    <ul>
                        <li><a href="">Careers</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms & Conditions</a></li>
                    </ul>
                    <p>© 2018 Maagiri Hotel, All Rights Reserved</p>
                </div>
            <!-- mobile -->
        </div>
  

    </section>







</body>
<script src='{{ asset('js/lt-jquery.min.js') }}'></script>
    <script src='{{ asset('js/popper.min.js') }}'></script>
    <script src='{{ asset('js/bootstrap.min.js') }}'></script>
    <script src='{{ asset('js/moment.js') }}'></script>
    <script src='{{ asset('js/daterangepicker.js') }}'></script>
    <script src='{{ asset('js/classie.js') }}'></script>
  
</html>