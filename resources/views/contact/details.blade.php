@extends('_shared.main')

@section('content')
<section id="header">
                        <div class="container-fluid page-head-banner" style="background-image:url(../images/gym.png);">
      
                            <div class="logo d-none d-sm-block"><a href="{{ url('/') }}"><img src="../images/logo_desktop.svg" data-color="violet" alt="Maagiri Logo"></a></div>
                            <div class="logo-mobi d-block d-sm-none"><a href="{{ url('/') }}"><img src="../images/logo_mobile.svg" data-color="violet" alt="Maagiri Logo"></a></div>
                          <div class="container caption-holder">
                              <div class="row">
                              <div class="pp-caption-pages">
                                  <p>CONTACT</p>
                                  <h1 class="d-none d-sm-block">We Would Love to Hear from You</h1>
                                  <h4 class="d-block d-sm-none">We Would Love to Hear from You</h4>
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
                                            <li><a href="#contact-form" class="active">CONTACT US</a></li>
                                            <li><a href="#map">MAP & DIRECTION</a></li>
                                        </ul>
                                    </div>
                            </div>
                        <div class="container">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="text-wrapper-main">
                                    <h1>{{ $contact->name }}</h1>
                                    <div class="orange-brand"></div>
                                    {!! $contact->body !!}
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        </div>

                        <div id="contact-form" class="container contact-form">
                           
                            <div class="row">
                 
                                <div class="col-md-6" style=" font-size:22px; margin-bottom:84px;">
                                    <form id="ContactForm">
                                        <div class="form-group">
                                            <h1 style=" font-size:22px; margin-bottom:24px;">For General Inquiries</h1>
                                            <div class="form-holder">
                                                <label>FULL NAME*</label>
                                                <input type="text" class="form-control" name="firstname" placeholder="Enter your first name" required>
                                            </div>
                                            <!-- <div class="form-holder">
                                                <label>LAST NAME</label>
                                                <input type="text" class="form-control" name="lastname" placeholder="And the last name">
                                            </div> -->
                                            <div class="form-holder">
                                                    <label>EMAIL ADDRESS*</label>
                                                    <input type="email" class="form-control" name="email" placeholder="Your email address" required>
                                            </div>
                                            <div class="form-holder">
                                                    <label>CONTACT NUMBER</label>
                                                    <input type="text" class="form-control" name="mobile" placeholder="Your telephone or mobile number">
                                                    {{ csrf_field() }}
                                            </div>
                                            <!-- <div class="form-holder">
                                                    <label>SUBJECT*</label>
                                                    <input type="text" name="subject" class="form-control" placeholder="General Inquiry" required>
                                            </div> -->
                                            <div class="form-holder">
                                                    <label>MESSAGE*</label>
                                                    <textarea name="contactmessage" class="form-control" rows="5"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-orange-brand float-right btn-send">SEND</button>
                                            <button class="btn btn-orange-brand float-right btn-clear">CLEAR</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-md-6" style=" font-size:22px; margin-bottom:24px;">
                                    <form id="room_ContactForm">
                                        <div class="form-group">
                                            <h1 style=" font-size:22px; margin-bottom:24px;">For Room Inquiries</h1>
                                            <div class="form-holder">
                                                <label>FULL NAME*</label>
                                                <input type="text" class="form-control" name="firstname" placeholder="Enter your first name" required>
                                            </div>
                                            <!-- <div class="form-holder">
                                                <label>LAST NAME</label>
                                                <input type="text" class="form-control" name="lastname" placeholder="And the last name">
                                            </div> -->
                                            <div class="form-holder">
                                                    <label>EMAIL ADDRESS*</label>
                                                    <input type="email" class="form-control" name="email" placeholder="Your email address" required>
                                            </div>
                                            <div class="form-holder">
                                                    <label>CONTACT NUMBER</label>
                                                    <input type="text" class="form-control" name="mobile" placeholder="Your telephone or mobile number">
                                                    {{ csrf_field() }}
                                            </div>
                                            <!-- <div class="form-holder">
                                                    <label>SUBJECT*</label>
                                                    <input type="text" name="subject" class="form-control" placeholder="General Inquiry" required>
                                            </div> -->
                                            <div class="form-holder">
                                                    <label>MESSAGE*</label>
                                                    <textarea name="contactmessage" class="form-control" rows="5"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-orange-brand float-right btn-send">SEND</button>
                                            <button class="btn btn-orange-brand float-right btn-clear">CLEAR</button>
                                        </div>
                                    </form>    
                                </div>
                         
                            </div>
                        </div>
                    </div>
             </section>

             <section id="map">
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col-md-3 contact-details grey-container">
                             <div class="col-md-12">
                                    <div class="col-md-12 address">
                                <ul>
                                        <li><h3>MAAGIRI HOTEL<div class="orange-brand"></div></h3></li>
                                        <li>Boduthakurufaanu Magu</li>
                                        <li>Male', 20012</li>
                                        <li>Republic of Maldives</li>
                                        <li><br></li>
                                        <li>T. +960 331 8484</li>
                                        <li>E. info@maagirihotel.com</li>

                                        <ul class="socials">
                                                <li><a href="https://web.facebook.com/Maagiri-Hotel-127052284636238/"><img src="{{ asset('images/socials/fb.svg') }}" width="24"></a></li>
                                                <li><a href="https://www.instagram.com/maagirihotel/"><img src="{{ asset('images/socials/insta.svg') }}" width="24"></a></li>
                                                <li><a href="https://twitter.com/maagirihotel"><img src="{{ asset('images/socials/twitter.svg') }}" width="24"></a></li>
                                            </ul>
                                    </ul>
                                    </div>
                            </div>
                         </div>

                         <div class="col-md-9 map" style="background:#ccc; padding:0; ">
                                <iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJgTuQEP5-PzsREzJmSzq4Q_I&key=AIzaSyDG22NogYbGOynPb9rb2G_qSnNkAWe1bB4" allowfullscreen></iframe>
                         </div>
                     </div>
                 </div>
             </section>


             <section id="contact-details">
                    <div class="container contact-details">
                            <div class="row">
                                
                                <div class="col-md-4">
                                    <ul>
                                        <li><h3>COFFEE CURVE<div class="orange-brand"></div></h3></li>
                                        <li>Ground Floor, Maagiri Hotel</li>
                                        <li>Boduthakurufaanu Magu</li>
                                        <li>Male', 20012</li>
                                        <li>Republic of Maldives</li>
                                        <li><br></li>
                                        <li>T. +960 331 8484</li>
                                        <li>E. info@maagirihotel.com</li>
                                        <ul>
                                        <li><a href="https://web.facebook.com/Maagiri-Hotel-127052284636238/"><img src="{{ asset('images/socials/fb.svg') }}" width="24"></a></li>
                                                <li><a href="https://www.instagram.com/maagirihotel/"><img src="{{ asset('images/socials/insta.svg') }}" width="24"></a></li>
                                                <li><a href="https://twitter.com/maagirihotel"><img src="{{ asset('images/socials/twitter.svg') }}" width="24"></a></li>
                                            </ul>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                        <ul>
                                        <li><h3>FARU<div class="orange-brand"></div></h3></li>
                                        <li>3rd Floor, Maagiri Hotel</li>
                                        <li>Boduthakurufaanu Magu</li>
                                        <li>Male', 20012</li>
                                        <li>Republic of Maldives</li>
                                        <li><br></li>
                                        <li>T. +960 331 8484</li>
                                        <li>E. info@maagirihotel.com</li>
                                        <ul>
                                        <li><a href="https://web.facebook.com/Maagiri-Hotel-127052284636238/"><img src="{{ asset('images/socials/fb.svg') }}" width="24"></a></li>
                                                <li><a href="https://www.instagram.com/maagirihotel/"><img src="{{ asset('images/socials/insta.svg') }}" width="24"></a></li>
                                                <li><a href="https://twitter.com/maagirihotel"><img src="{{ asset('images/socials/twitter.svg') }}" width="24"></a></li>
                                            </ul>
                                        </ul>
                                    </div>


                                <div class="col-md-4">
                                    <ul>
                                        <li><h3>PEAK<div class="orange-brand"></div></h3></li>
                                        <li>9th Floor/ Terrace, Maagiri Hotel</li>
                                        <li>Boduthakurufaanu Magu</li>
                                        <li>Male', 20012</li>
                                        <li>Republic of Maldives</li>
                                        <li><br></li>
                                        <li>T. +960 331 8484</li>
                                        <li>E. info@maagirihotel.com</li>
                                        <ul>
                                        <li><a href="https://web.facebook.com/Maagiri-Hotel-127052284636238/"><img src="{{ asset('images/socials/fb.svg') }}" width="24"></a></li>
                                                <li><a href="https://www.instagram.com/maagirihotel/"><img src="{{ asset('images/socials/insta.svg') }}" width="24"></a></li>
                                                <li><a href="https://twitter.com/maagirihotel"><img src="{{ asset('images/socials/twitter.svg') }}" width="24"></a></li>
                                            </ul>
                                    </ul>
                                </div>

                            </div>
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
                                                <form class="form-inline">
                                                        <div class="form-group">
                                                                <input type="text" class="form-control input-orange-line" placeholder="Your Email">
                                                            </div>
                                                    <button class="btn btn-orange-brand">SUBSCRIBE</button>
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
@endsection