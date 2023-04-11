
//The minified version of these scripts are included in the homepage.
//only use this to troubleshoot.
//09 June 2019 //SammuMufeed



window.sr = ScrollReveal();
sr.reveal('.dine');
sr.reveal('.event');
sr.reveal('.heading-container');

var $item = $('.carousel .carousel-item');
var $wHeight = (window.innerHeight-95); //$(window).height();
$item.eq(0).addClass('active');
$item.height($wHeight); 
$item.addClass('full-screen');

$('.carousel img').each(function() {
    var $src = $(this).attr('src');
    var $color = $(this).attr('data-color');
    $(this).parent().css({
    'background-image' : 'url(' + $src + ')',
    'background-color' : $color
    });
    $(this).remove();
});

$(window).on('resize', function (){
    $wHeight = (window.innerHeight-95);
    $item.height($wHeight);
});

$('.carousel').carousel({
    interval: 6000,
    pause: "false"
});
//# sourceURL=pen.js


jQuery(function ($) {
    var caption = $('div.carousel-item:nth-child(1) .carousel-caption');
    $('.pp-caption').html(caption.html());
    caption.css('display', 'none');

    $(".carousel").on('slide.bs.carousel', function (evt) {
        var caption = $('div.carousel-item:nth-child(' + ($(evt.relatedTarget).index() + 1) + ') .carousel-caption');
        $('.pp-caption').html(caption.html());
        caption.css('display', 'none');
    });
});



$(".accord").click(function() {
    var $this = $(this);

    $('.accord-media',$this).show();
    $('.text-accort', $this).fadeOut();
    $('.accord .text-accort').siblings().show();
    $(".text-area").hide();

    // if($(this).hasClass('.accord .acc col-md-6')){
    //     $('.acc').removeClass('col-md-6');
    // }

    if(!$(this).hasClass('scale-up')){
        $('.accord-main div').removeClass('scale-up');
        $('.accord-main div').removeClass('scale-down');
        $(this).addClass('scale-up').siblings().addClass('scale-down');
        $(".accord-contents", $this).show();
        $(".text-area").fadeIn(2000);
    }else{
        $('.accord-main div').removeClass('scale-up');
        $('.accord-main div').removeClass('scale-down');
        //$(".accord-contents").hide();
        $('.text-accort').show();
        $(".accord-contents").hide();
        $(".text-area").hide();
        //$(".text-area").fadeOut(1000);
    }

    
})

//$(".accord-contents").hide();
//$('.accord-media-image').removeClass('col-md-6');
//$('.accord-media-image').addClass('col-md-12');

// $(this).on("click",function(){
    
// })



//MOBILE NAVIGATION
function openNav() {
document.getElementById("mySidenav").style.width = "100%";
$( ".overlay" ).show();
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    $( ".overlay" ).hide();
}


$(".sticky-menu li a").hover(function(){
    
})


//date + 2 days
var nowDate = new Date();
nowDate.setDate(nowDate.getDate() + 1);

var dd = nowDate.getDate();
var mm = nowDate.getMonth() + 1;
var y = nowDate.getFullYear();

//date range select /// home bookings
$(function() {
    $('input[name="daterange"]').daterangepicker({
        "autoApply": true,
        autoUpdateInput: true,
        locale: {
            cancelLabel: 'Clear',
            format: 'DD/MM/YYYY'
        },
        startDate: Date.now(),
        endDate : dd + "-" + mm + "-" + y
    });

    $('input[name="daterange"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
        $("#eZ_chkin").val(picker.startDate.format('DD-MM-YY'));
        $("#eZ_chkout").val(picker.endDate.format('DD-MM-YY'));
    });

    $('input[name="daterange"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });

    

});


//
function init() {
window.addEventListener('scroll', function(e){

    var distanceY = window.pageYOffset || document.documentElement.scrollTop,
        shrinkOn = 300,
        header = document.querySelector("#bookBar");
        fs = document.querySelector("#bookBarContent");

    var element_position = $('#book-section').offset().top;
    
    var y_scroll_pos = window.pageYOffset;
    var scroll_pos_test = element_position;

    //console.log(y_scroll_pos);

    if (y_scroll_pos > scroll_pos_test) {
        classie.add(header,"fixed-top");
        classie.remove(fs,"booking-bar-normal");
        classie.add(header,"booking-bar-normal");
        $(".long-space").hide();
        $(".book-brand").show();
        $(".burger-menu").show();
        stickyMenuClose();
    } else {
        if (classie.has(header,"fixed-top")) {
            classie.remove(header,"fixed-top");
            classie.remove(header,"booking-bar-normal");
            classie.add(fs,"booking-bar-normal");
            $(".long-space").show();
            $(".book-brand").hide();
            $(".burger-menu").hide();
            $("#bookBarContent").addClass(".booking-bar-normal");
        }
    }
});


}
window.onload = init();


function stickyMenu(){
    $("#bookBarContent").hide();
    $(".booking-bar-nav").show();
    $(".burger-menu").hide();
    $(".burger-menu-close").show();
}

function stickyMenuClose(){
    $(".burger-menu").show();
    $(".booking-bar-nav").hide();
    $("#bookBarContent").fadeIn();
    $(".burger-menu-close").hide();
}

function overlayMenuClose(){
    $("#bookin-OL").fadeOut();
}

function overlayMenuOpen(){

    $("#BookingForm").show();
    $(".success-msg").hide();
    var rooms = $("#bookBarRooms").val();
    var guests = $("#bookBarGuests").val();
    var date = $("#bookBarDate").val();

    $("#formRooms").val(rooms);
    $("#formGuests").val(guests);
    $("#formDate").val(date);

    $("#bookin-OL").fadeIn();
}


//mobile booking
function mobileOverlayMenuOpen(){

    $("#BookingForm").show();
    $(".success-msg").hide();
    var rooms = $("#bookBarRooms").val();
    var guests = $("#bookBarGuests").val();
    var date = $("#bookBarDate").val();

    $("#formRooms").val(rooms);
    $("#formGuests").val(guests);
    $("#formDate").val(date);

    $("#mobile-bookin-OL").fadeIn();
}

function enquireOverlayOpen(){

    //type
    var getType = $("#pageType").val();
    $("#type").val(getType);
    $("#enquire-OL").fadeIn();
}

function enquireOverlayClose(){
    $("#enquire-OL").fadeOut();
}

// DOM Ready
$('#slider').anythingSlider({
    expand       : true,
    autoPlay     : false,
    buildArrows  : true,
    buildStartStop : false,
    buildNavigation : false,
    /*appendControlsTo: $('#nav'),*/
    appendForwardTo     : null,
    appendBackTo        : null
    });


$('ul.nav li.dropdown').hover(function() {
$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});


//method="POST" action="{{ url('bookings/send') }}"

$("#BookingForm").on("submit",function(e){
//if($("#formRooms").val() > 0)

    if($("#bookName").val().length > 0 || $("#bookEmail").val().length > 0 ){

        $("input[type=submit]").attr("disabled", "disabled");
        $("#submitBttn").hide();
        $("#loadingBttn").fadeIn();
        var url = "{{ url('bookings/send') }}";
        $.ajax({
        type: "POST",
        url: url,
        data: $("#BookingForm").serialize(), // serializes the form's elements.
        success: function(data)
            {
                $("#BookingForm").hide();
                $("#bookingMsg").fadeIn();
            }
        });

    }else{
        $("#book-msg").empty();
        $("#book-msg").append("<p class='msg-alert'>*Please fill all the required fields.</p>");
    }
    e.preventDefault();
});

//BOOKING FORM END


//NEWSLETTER FORM
$("#NewsletterForm").on("submit",function(e){
    var newsurl = "{{ url('newsletter/send') }}";
    $.ajax({
        type: "POST",
        url: newsurl,
        data: $("#NewsletterForm").serialize(), // serializes the form's elements.
        success: function(data)
            {
                overlayMenuOpen();
                $("#BookingForm").hide();
                $("#newsletter").fadeIn();
            }
        });
    e.preventDefault();
});
//NEWSLETTER FORM END


//ENQUIRY
$("#enquiryForm").on("submit",function(e){
    var enqurl = "{{ url('enquiry/send') }}";
    $.ajax({
        type: "POST",
        url: enqurl,
        data: $("#enquiryForm").serialize(), // serializes the form's elements.
        success: function(data)
            {
                overlayMenuOpen();
                $("#BookingForm").hide();
                $("#enquiry").fadeIn();
            }
    });
    e.preventDefault();
});
//ENQUIRY END


//CONTACT FORM 
$("#ContactForm").on("submit",function(e){
    var enqurl = "{{ url('contact/send') }}";
    $.ajax({
        type: "POST",
        url: enqurl,
        data: $("#ContactForm").serialize(), // serializes the form's elements.
        success: function(data)
            {
                overlayMenuOpen();
                $("#BookingForm").hide();
                $("#enquiry").fadeIn();
            }
    });
    e.preventDefault();
});
//CONTACT FORM END

$(document).ready(function(){

$(function(){

$(document).on( 'scroll', function(){

if ($(window).scrollTop() > 100) {
    $('.scroll-top-wrapper').addClass('show');
} else {
    $('.scroll-top-wrapper').removeClass('show');
}
});

$('.scroll-top-wrapper').on('click', scrollToTop);
});

function scrollToTop() {
verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
element = $('body');
offset = element.offset();
offsetTop = offset.top;
$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}

});


$("#childs").on("change",function(){
$childs = $("#childs").val();
selectorAge($childs);
})


function selectorAge(childs){
$("#childWrapper").empty();
for($i = 0; $i < childs; $i++ ){
var s = $("<select class=\"form-control ages\" name=\"childAge"+($i+1)+"\"/>");
for($p = 0; $p < 15; $p++ ){
    if($p == 0){
    $("<option disabled selected>Child "+($i+1)+" Age</option>").appendTo(s);
    }else{
        $("<option value="+$p+">"+$p+" Year(s)</option>").appendTo(s);
    }
}
(s).appendTo("#childWrapper");
}

}



$("#childsMobile").on("change",function(){
$childs = $("#childsMobile").val();
selectorAgeMobile($childs);
})


function selectorAgeMobile(childs){
$("#childWrapperMobile").empty();
for($i = 0; $i < childs; $i++ ){
var s = $("<select class=\"form-control ages\" name=\"childAge"+($i+1)+"\"/>");
for($p = 0; $p < 15; $p++ ){
    if($p == 0){
    $("<option disabled selected>Child "+($i+1)+" Age</option>").appendTo(s);
    }else{
        $("<option value="+$p+">"+$p+" Year(s)</option>").appendTo(s);
    }
}
(s).appendTo("#childWrapperMobile");
}

}



