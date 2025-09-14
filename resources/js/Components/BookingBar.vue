<template>
    <section id="book-section" class="d-none d-sm-block">
        <div id="bookBar" class="container-fluid black-container heading-container">
            <div class="book-brand">
                <a href="/">
                    <img src="/images/logo_small.png" data-color="violet" alt="Maagiri Logo" width="60" height="55">
                </a>
            </div>
            
            <div class="burger-menu">
                <a href="javascript:;" @click="toggleStickyMenu">
                    <img src="/images/menu-ico.png" width="60" height="65">
                </a>
            </div>
    
            <div class="burger-menu-close">
                <a href="javascript:;" @click="closeStickyMenu">
                    <img src="/images/close-ico.png" width="60" height="65">
                </a>
            </div>

            <div id="bookBarContent" class="container booking-bar-normal" :class="{ 'hidden': showStickyNav }">
                <div class="row">
                    <div class="col-md-12 sticky_bookingbar">
                        <form method="GET" action="https://reservations.maagirihotel.com/booking/book-rooms-11448?">
                            <div class="form-row">
                                <div class="col-md-2" style="margin-right:50px;">
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
                                    <input type="hidden" name="promotioncode">
                                    <input type="hidden" name="eZ_Nights" value="">
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
    
            <!-- Sticky Nav -->
            <div class="booking-bar-nav base-nav text-right" :class="{ 'show': showStickyNav }">
                <ul class="nav d-none d-sm-inline-flex maagiri-nav" style="margin-right:80px;">
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="/rooms">Rooms</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/executive_suite">Executive Suite</a>
                                <a class="dropdown-item" href="/Junior_Suite">Junior Suite</a>
                                <a class="dropdown-item" href="/premier_room">Premier Room</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="/dining">Dinings</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/coffee_curve">Coffee Curve</a>
                                <a class="dropdown-item" href="/faru">Faru</a>
                                <a class="dropdown-item" href="/peak">Peak</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="/events">Events</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/weddings_celebrations">Weddings & Celebrations</a>
                                <a class="dropdown-item" href="/events_meetings">Events & Meetings</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="/wellness">Wellness</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/fitness_gym">Fitness & Gym</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="/gallery/main">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle active" href="https://reservations.maagirihotel.com/booking/book-rooms-11448">Book Now</a>
                    </li>
                </ul>
            </div>
            <!-- Sticky Nav End -->
    
            <div class="long-space"></div>
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const showStickyNav = ref(false)

const toggleStickyMenu = () => {
    showStickyNav.value = true
}

const closeStickyMenu = () => {
    showStickyNav.value = false
}

onMounted(() => {
    // Initialize date range picker and other functionality
    if (typeof window !== 'undefined') {
        // You can add date picker initialization here
        console.log('BookingBar mounted')
    }
})
</script>

<style scoped>
/* Booking Bar Styles */
.book-brand {
    position: absolute;
    top: 20px;
    left: 20px;
    z-index: 100;
}

.burger-menu {
    position: absolute;
    top: 20px;
    right: 20px;
    z-index: 100;
}

.burger-menu-close {
    position: absolute;
    top: 20px;
    right: 20px;
    z-index: 100;
    display: none;
}

.burger-menu-close.show {
    display: block;
}

.booking-bar-nav {
    display: none;
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    background: rgba(0, 0, 0, 0.9);
    padding: 20px;
    z-index: 1000;
}

.booking-bar-nav.show {
    display: block;
}

.booking-bar-nav .nav {
    justify-content: flex-end;
    margin-right: 80px;
}

.booking-bar-nav .nav-item {
    margin: 0 15px;
}

.booking-bar-nav .nav-link {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    padding: 10px 0;
    transition: color 0.3s ease;
}

.booking-bar-nav .nav-link:hover {
    color: #dcb38d;
}

.booking-bar-nav .nav-link.active {
    color: #dcb38d;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    background: #fff;
    min-width: 200px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    border-radius: 5px;
    padding: 10px 0;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.3s ease;
}

.dropdown:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.dropdown-item {
    display: block;
    padding: 10px 20px;
    color: #333;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.dropdown-item:hover {
    background-color: #f8f9fa;
    color: #dcb38d;
}

.form-row {
    display: flex;
    align-items: center;
    gap: 20px;
}

.form-control {
    padding: 12px 15px;
    border: 2px solid #dcb38d;
    border-radius: 5px;
    background: #fff;
    color: #333;
    font-size: 14px;
    outline: none;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    border-color: #c9a078;
}

.btn-orange-brand {
    background: #dcb38d;
    color: #333;
    border: none;
    padding: 12px 30px;
    border-radius: 5px;
    font-weight: 600;
    text-transform: uppercase;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-orange-brand:hover {
    background: #c9a078;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(220, 179, 141, 0.4);
}

.long-space {
    height: 60px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .booking-bar-nav .nav {
        flex-direction: column;
        margin-right: 0;
    }
    
    .booking-bar-nav .nav-item {
        margin: 5px 0;
    }
    
    .form-row {
        flex-direction: column;
        gap: 15px;
    }
    
    .col-md-2, .col {
        margin-right: 0 !important;
        width: 100%;
    }
}

@media (min-width: 769px) {
    .d-none { display: none !important; }
    .d-sm-block { display: block !important; }
    .d-sm-inline-flex { display: inline-flex !important; }
}
</style>
