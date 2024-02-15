<section id="book-section" class='d-none d-sm-block'>
                    <div id="bookBar" class="container-fluid black-container heading-container">
                            <div class="book-brand">
                                    <a href="{{ url('/') }}"><img src="../images/logo_small.png" data-color="violet" alt="Maagiri Logo" width="60" height="55"></a>
                            </div>
                            <div class="burger-menu">
                                    <a href="javascript:;" onclick="stickyMenu()">
                                            <img src="../images/menu-ico.png" width="60" height="65">
                                    </a>
                            </div>
        
                            <div class="burger-menu-close">
                                    <a href="javascript:;" onclick="stickyMenuClose()">
                                            <img src="../images/close-ico.png" width="60" height="65">
                                    </a>
                            </div>
        
                        <div id="bookBarContent" class="container booking-bar-normal">
                        <div class="row">
                            <div class="col-md-12" class="sticky_bookingbar">
                                <form method="GET" action="https://reservations.maagirihotel.com/booking/book-rooms-11448?">
                                    <div class="form-row">
                                        <div class="col-md-2" style="margin-right:50px;">
                                            <!-- <input type="text" class="form-control" placeholder="Rooms"> -->
                                            <select class="form-control" id="bookBarRooms" name="eZ_room">
                                                <option value="1">1 Room</option>
                                                <option value="2">2 Rooms</option>
                                                <option value="3">3 Rooms</option>
                                                <option value="4">4 Rooms</option>
                                            </select>
                                            <input type="hidden" name="HotelId" value="11448">
                                        </div>
                                        <div class="col-md-2" style="margin-right:50px;">
                                                <select class="form-control" id="bookBarGuests" name="eZ_adult">
                                                        <option value="1">1 Guest</option>
                                                        <option value="2">2 Guests</option>
                                                        <option value="3">3 Guests</option>
                                                        <option value="4">4 Guests</option>
                                                    </select>
                                        </div>
                                        <div class="col" style="margin-right:50px;">
                                            <input type="text" class="form-control daterange" name="daterange" id="bookBarDate" />

                                            <input type="hidden" name="eZ_chkin" id="eZ_chkin">
                                            <input type="hidden" name="eZ_chkout" id="eZ_chkout">
                                            <input type="hidden" name="calformat" value="">
                                            <input type="hidden" name="promotioncode" >
                                            <input type="hidden" name="eZ_Nights" value="" >
                                            <input type="hidden" name="eZ_child" value="0">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-orange-brand">CHECK AVAILABILITY</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
        
                    <!-- sticky nav -->
                    <div class="booking-bar-nav base-nav text-right">
                            <ul class="nav d-none d-sm-inline-flex maagiri-nav" style="margin-right:80px;">
                                
                            @foreach($menu as $m)
                                <li class="nav-item">
                                    @if($m->has_submenu)
                                    <div class="dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" >{{ $m->name }}</a>
                                        <div class="dropdown-menu">
                                            @foreach($submenu as $sb)
                                                @if($sb->parent_id == $m->id)
                                                    <a class="dropdown-item" href="{{ url($sb->link_name) }}">{{ $sb->name }}</a>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    @else
                                    @if($m->name == "Gallery")
                                    <a class="nav-link dropdown-toggle" href="{{ url('gallery/main') }}" >{{ $m->name }}</a>
                                    @endif

                                    @if($m->name == "Contact")
                                    <a class="nav-link dropdown-toggle" href="{{ url('contact') }}" >{{ $m->name }}</a>
                                    @endif
                                    
                                    @if($m->name == "Book Now")
                                    <a class="nav-link dropdown-toggle active" href="https://reservations.maagirihotel.com/booking/book-rooms-11448" >{{ $m->name }}</a>
                                    @endif

                                    @endif
                                </li>
                                @endforeach

                            </ul>
                    </div>
                    <!-- sticky nav end -->
        
                    <div class="long-space"></div>
                </div>
                </section>