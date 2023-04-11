<!-- booking overlay -->
<div id="mobile-bookin-OL" class="booking-overlay">
        <div class="booking-overlay-close">
            <a href="javascript:;" onclick="overlayMenuClose()">
                    <img src="{{ asset('images/close-ico.png') }}" width="60" height="65">
            </a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" id="formContainer">
                    <div class="success-msg" id="bookingMsg"><h1>Thank You.</h1><br><p> The booking enquiry has been submitted. We will get back to you shortly.</p><p><a href="#" onclick="overlayMenuClose()">CLOSE</a></p></div>
                    <div class="success-msg" id="newsletter"><h1>Thank You.</h1><br><p> You have now been subscribed to our newsletter.</p><p><a href="#" onclick="overlayMenuClose()">CLOSE</a></p></div>
                    <div class="success-msg" id="enquiry"><h1>Thank You.</h1><br><p> We have received your enquiry. We will get back to you shortly.</p><p><a href="#" onclick="overlayMenuClose()">CLOSE</a></p></div>
                    <div class="spacer"></div>
                    <form id="MobileBookingForm">
                        <div class="form-row form-spacing ">
                            <div class="col-md-3">
                                <!-- <input type="text" class="form-control" placeholder="Rooms"> -->
                                <select class="form-control" name="noRooms" id="formRooms">
                                    <option value="1">1 Rooms</option>
                                    <option value="2">2 Rooms</option>
                                    <option value="3">3 Rooms</option>
                                    <option value="4">4 Rooms</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                    <select class="form-control" name="noGuests" id="formGuests">
                                            <option value="1">1 Adult</option>
                                            <option value="2">2 Adults</option>
                                            <option value="3">3 Adults</option>
                                            <option value="4">4 Adults</option>
                                            <option value="5">5 Adults</option>
                                            <option value="6">6 Adults</option>
                                            <option value="7">7 Adults</option>
                                            <option value="8">8 Adults</option>
                                            <option value="9">9 Adults</option>
                                            <option value="10">10 Adults</option>
                                            <option value="11">11 Adults</option>
                                            <option value="12">12 Adults</option>
                                        </select>
                            </div>

                            <div class="col-md-3">
                                    <select class="form-control" name="noChilds" id="childsMobile">
                                            <option value="0">0 Childs</option>
                                            <option value="1">1 Child</option>
                                            <option value="2">2 Childs</option>
                                            <option value="3">3 Childs</option>
                                            <option value="4">4 Childs</option>
                                        </select>
                                        <div class="childWrapperMobile"></div>
                            </div>
                            
                            <div class="col-md-3">
                                <input type="text" class="form-control daterange" name="daterange" id="formDate" />
                            </div>
                        </div>

                        <div class="info-text-spacing"><p class="info-text">SELECT YOUR ROOM</p></div>

                        <div class="form-row">
                                <div class="col-md-3">
                                        <select class="form-control" name="noExecRooms">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                        </select>
                                        <label>Executive Suite</label>
                                </div>
                                <div class="col-md-3">
                                        <select class="form-control" name="noJuniorRooms">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                        </select>
                                        <label>Junior Suite</label>
                                </div>
                                <div class="col-md-3">
                                        <select class="form-control" name="noOceanRooms">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                        </select>
                                        <label>Premier Ocean View Room</label>
                                </div>
                                <div class="col-md-3">
                                        <select class="form-control" name="noPremRooms">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                        </select>
                                        <label>Premier Room</label>
                                </div>
                        </div>

                        <div class="spacer_small"></div>
                        <div class="form-row">
                                <div class="col-md-6">
                                        <label class="info-text">NAME*</label>
                                        <input type="text" id="bookName" class="form-control" name="name" placeholder="Enter your name" />
                                </div>
                                <div class="col-md-6">
                                        <label class="info-text">EMAIL ADDRESS</label>
                                        <input type="text" id="bookEmail" class="form-control" name="email" placeholder="Your email address" required />
                                </div>
                                <div class="col-md-12" id="book-msg"></div>
                        </div>
                        {{ csrf_field() }}
                        <div class="form-row">
                        <div class="col"></div>
                        <div class="col-auto">
                        <button type="submit" class="btn btn-orange-brand" id="bookingSubmitBttn">
                        <svg id="loadingBttn" class="lds-message" width="33px"  height="33px"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" style="background: none;"><g transform="translate(20 50)">
                        <circle cx="0" cy="0" r="6" fill="#dcb38d" transform="scale(0.99275 0.99275)">
                        <animateTransform attributeName="transform" type="scale" begin="-0.375s" calcMode="spline" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"></animateTransform>
                        </circle>
                        </g><g transform="translate(40 50)">
                        <circle cx="0" cy="0" r="6" fill="#dcb38d" transform="scale(0.886582 0.886582)">
                        <animateTransform attributeName="transform" type="scale" begin="-0.25s" calcMode="spline" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"></animateTransform>
                        </circle>
                        </g><g transform="translate(60 50)">
                        <circle cx="0" cy="0" r="6" fill="#dcb38d" transform="scale(0.57475 0.57475)">
                        <animateTransform attributeName="transform" type="scale" begin="-0.125s" calcMode="spline" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"></animateTransform>
                        </circle>
                        </g><g transform="translate(80 50)">
                        <circle cx="0" cy="0" r="6" fill="#dcb38d" transform="scale(0.226395 0.226395)">
                        <animateTransform attributeName="transform" type="scale" begin="0s" calcMode="spline" keySplines="0.3 0 0.7 1;0.3 0 0.7 1" values="0;1;0" keyTimes="0;0.5;1" dur="1s" repeatCount="indefinite"></animateTransform>
                        </circle>
                        </g></svg>
                        <div id="submitBttn">SUBMIT</div>
                        </button>
                        </div>
                        <div class="col"></div>
                        </div>
                    </form>
                    <div class="spacer"></div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <!-- /booking overlay -->