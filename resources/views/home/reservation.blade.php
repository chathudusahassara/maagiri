@extends('_shared.main')
@section('content')
<section id="header">
    <div class="container-fluid page-head-banner" style="background-image:url(../images/gym.png);">  
    <div class="logo d-none d-sm-block"><a href="{{ url('home') }}"><img src="../images/logo_desktop.svg" data-color="violet" alt="Maagiri Logo"></a></div>
    <div class="logo-mobi d-block d-sm-none"><a href="{{ url('home') }}"><img src="../images/logo_mobile.svg" data-color="violet" alt="Maagiri Logo"></a></div>
                          <div class="container caption-holder">
                              <div class="row">
                              <div class="pp-caption-pages">
                                  <p>RESERVATIONS</p>
                                  <h1 class="d-none d-sm-block">Book your stay with us</h1>
                                  <h4 class="d-block d-sm-none">Book your stay with us</h4>
                              </div>
                            </div>
                          </div>
    </div>
</section>

<div class="container">
<!-- main content here -->


<?php
$eZ_chkin = isset($_REQUEST['eZ_chkin'])?$_REQUEST['eZ_chkin']:'';

$eZ_chkout = isset($_REQUEST['eZ_chkout'])?$_REQUEST['eZ_chkout']:'';
$eZ_Nights = isset($_REQUEST['eZ_Nights'])?$_REQUEST['eZ_Nights']:3;

$eZ_adult = isset($_REQUEST['eZ_adult'])?$_REQUEST['eZ_adult']:1;          
$eZ_child = isset($_REQUEST['eZ_child'])?$_REQUEST['eZ_child']:0;
$eZ_room = isset($_REQUEST['eZ_room'])?$_REQUEST['eZ_room']:1;
$calformat = isset($_REQUEST['calformat'])?$_REQUEST['calformat']:'';
$promotioncode = isset($_REQUEST['promotioncode'])?$_REQUEST['promotioncode']:'';
$HotelId = isset($_REQUEST['HotelId'])?$_REQUEST['HotelId']:'';
$HotelId = '11448';
if($HotelId=='')
{
	echo "Hotel Id Missing ";
	exit;	
}
if($_SERVER['HTTP_HOST']=='192.168.20.65')
	$host="http://192.168.20.65";
else
	$host="https://live.ipms247.com";	

$param="eZ_chkin=".$eZ_chkin."&eZ_chkout=".$eZ_chkout."&eZ_Nights=".$eZ_Nights."&eZ_adult=".$eZ_adult."&eZ_child=".$eZ_child."&eZ_room=".$eZ_room."&calformat=".$calformat."&promotioncode=".$promotioncode."&HotelId=".$HotelId;

$url=$host."/booking/loadroomlisting.php?".$param;

?>
<script type="text/javascript">
var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
var eventer = window[eventMethod];var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
eventer(messageEvent,function(e) {
console.log("parent received message!:  ",e.data);
 if (typeof(e.data.action)!="undefined") { 
  if(e.data.action=="TOP")
  {
 var frametop= (jQuery("#editframe").position().top);
var divtop=e.data.top;
if(parseInt(frametop) > parseInt(divtop))
 var h=parseInt(frametop)-parseInt(divtop)+400;
else
 h=divtop;
 console.log(h);
 jQuery(window).scrollTop(h);
 }
 }
jQuery(".editframe").height(e.data+10);
},false);
</script>
<IFRAME SRC="<?php echo $url;?>" WIDTH=100% HEIGHT=1125 frameborder="0" name="editframe" class="editframe" id="editframe" marginheight="83" marginwidth="188" scrolling="no" align="middle">
</IFRAME>


<!-- end main content here -->
</div>

<div class="spacer-2x"></div>
@endsection