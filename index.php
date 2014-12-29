<?php
    include_once('includes/configuration.php');
    session_start();
    error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Welcome all to Achievers Institute For Compitative Exams ::</title>
<link href="themes/generic.css" rel="stylesheet" type="text/css" />
    <link href="themes/4/slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="themes/4/jquery-slider.js" type="text/javascript"></script>
    <script src="themes/4/tooltip.js" type="text/javascript"></script>
    <link href="themes/4/tooltip.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #FEFCFC;
}
-->
</style>
<link href="style.css" rel="stylesheet" type="text/css" />


<link href="css/slide.css" rel="stylesheet" type="text/css" />

<link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript" src="jquery_002.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	var autoPlayTime=4000;
	autoPlayTimer = setInterval( autoPlay, autoPlayTime);
	function autoPlay(){
		Slidebox('next');
	}
	$('#slidebox .next').click(function () {
		Slidebox('next','stop');
	});
	$('#slidebox .previous').click(function () {
		Slidebox('previous','stop');
	});
	var yPosition=($('#slidebox').height()-$('#slidebox .next').height())/2;
	$('#slidebox .next').css('top',yPosition);
	$('#slidebox .previous').css('top',yPosition);
	$('#slidebox .thumbs a:first-child').removeClass('thumb').addClass('selected_thumb');
	$("#slidebox .content").each(function(i){
		slideboxTotalContent=i*$('#slidebox').width();	
		$('#slidebox .container').css("width",slideboxTotalContent+$('#slidebox').width());
	});
});

function Slidebox(slideTo,autoPlay){
    var animSpeed=1000; //animation speed
    var easeType='easeInOutExpo'; //easing type
	var sliderWidth=$('#slidebox').width();
	var leftPosition=$('#slidebox .container').css("left").replace("px", "");
	if( !$("#slidebox .container").is(":animated")){
		if(slideTo=='next'){ //next
			if(autoPlay=='stop'){
				clearInterval(autoPlayTimer);
			}
			if(leftPosition==-slideboxTotalContent){
				$('#slidebox .container').animate({left: 0}, animSpeed, easeType); //reset
				$('#slidebox .thumbs a:first-child').removeClass('thumb').addClass('selected_thumb');
				$('#slidebox .thumbs a:last-child').removeClass('selected_thumb').addClass('thumb');
			} else {
				$('#slidebox .container').animate({left: '-='+sliderWidth}, animSpeed, easeType); //next
				$('#slidebox .thumbs .selected_thumb').next().removeClass('thumb').addClass('selected_thumb');
				$('#slidebox .thumbs .selected_thumb').prev().removeClass('selected_thumb').addClass('thumb');
			}
		} else if(slideTo=='previous'){ //previous
			if(autoPlay=='stop'){
				clearInterval(autoPlayTimer);
			}
			if(leftPosition=='0'){
				$('#slidebox .container').animate({left: '-'+slideboxTotalContent}, animSpeed, easeType); //reset
				$('#slidebox .thumbs a:last-child').removeClass('thumb').addClass('selected_thumb');
				$('#slidebox .thumbs a:first-child').removeClass('selected_thumb').addClass('thumb');
			} else {
				$('#slidebox .container').animate({left: '+='+sliderWidth}, animSpeed, easeType); //previous
				$('#slidebox .thumbs .selected_thumb').prev().removeClass('thumb').addClass('selected_thumb');
				$('#slidebox .thumbs .selected_thumb').next().removeClass('selected_thumb').addClass('thumb');
			}
		} else {
			var slide2=(slideTo-1)*sliderWidth;
			if(leftPosition!=-slide2){
				clearInterval(autoPlayTimer);
				$('#slidebox .container').animate({left: -slide2}, animSpeed, easeType); //go to number
				$('#slidebox .thumbs .selected_thumb').removeClass('selected_thumb').addClass('thumb');
				var selThumb=$('#slidebox .thumbs a').eq((slideTo-1));
				selThumb.removeClass('thumb').addClass('selected_thumb');
			}
		}
	}
}
</script>


<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>
</head>

<body>
<div id="wrapper"  style="height:1500px;">

  <div id="container">
    <div id="containerline"></div>
    
    <!-- Header File Starts Here -->
    <?php require_once('header.php');?>
    
    <!-- Menu Starts Here -->
    <?php require_once('menu.php');?>
    
    
    <div id="bannercontainer">
     <div id="newscontainer1">
      <div id="newscontainer">
        
        <div class="text2" id="newsbg">News &amp; Events</div>
        
        
        <div id="newscontainer2">
        
       <marquee align="left" behavior="scroll" direction="up" onmouseover="stop" scrollamount="2">
        <span class="news">Banking sector in India has always been one of the most preferred destinations for</span> <br />
          <br />
            <span class="news">Banking sector in India has always been one of the most preferred destinations for</span> <br />
            <br />

 <span class="news"> Banking sector in India has always been one of the most preferred destinations for </span><br />
 
 <br />

 <span class="news"> Banking sector in India has always been one of the most preferred destinations for </span><br />
 
 <br />

 <span class="news"> Banking sector in India has always been one of the most preferred destinations for </span><br />
 </marquee>
</div>
      </div>
      
      
      <div id="newscontainershadow"></div>
     </div>
      
      
      
      <div id="bannercontainermain">
      <div id="bannercontainer2">
        <div id="bannercontainer3">
        <div id="slidebox">
<div style="top: 139.5px;" class="next"></div>
<div style="top: 139.5px;" class="previous"></div>
<div class="thumbs">
<a href="#" onclick="Slidebox('1');return false" class="selected_thumb">1</a> 
<a href="#" onclick="Slidebox('2');return false" class="thumb">2</a> 
<a href="#" onclick="Slidebox('3');return false" class="thumb">3</a> 
<a href="#" onclick="Slidebox('4');return false" class="thumb">4</a> 
</div>
	<div style="width:664px; left: 0px;" class="container">
    	<div class="content">
        <div style="float:left;"><img align="right" style="margin-right:0px; margin-top:0px;" src="images/banner.gif" /></div>
        </div>
        <div class="content">
        	<div style="float:left;"><img align="right" style="margin-right:0px; margin-top:0px;" src="images/banner2.gif" /></div>
        </div>
        <div class="content">
        	<div style="float:left;"><img align="right" style="margin-right:0px; margin-top:0px;" src="images/banner3.gif" /></div>
        </div>
        <div class="content">
        	<div style="float:left;"><img align="right" style="margin-right:0px; margin-top:0px;" src="images/banner4.gif" /></div>
        </div>
	</div>
</div>
        
        
        </div>
      </div>
      
      
      <div id="bannershadow"></div>
      </div>
    </div>
    
    
    
    <div id="subcontainermain">
    
      <div id="bankrecentcontainer">
        <div class="text2" id="bankrecentbg">Bank Recent Notifications</div>
        
        
        <div id="bankrecencontent">
        <a href="#" class="bodytext2">Eligibility For IBPS POsEligibility For IBPS POs</a> <br />
<a href="#" class="bodytext2">Indian Overseas Bank Recruiting 480 POs </a>
        
        <br />

        <a href="#" class="bodytext2">Eligibility For IBPS </a>
        
        <br />

        <a href="#" class="bodytext2">BPS RRBs </a>
        
        <br />

        <a href="#" class="bodytext2">SBI to Hire 10000 Officers </a>
        
        <br />

        <a href="#" class="bodytext2">Eligibility For IBPS </a>
        
          <br />

        <a href="#" class="bodytext2">Eligibility For IBPS </a>
        
          <br />

        <a href="#" class="bodytext2">Eligibility For IBPS </a>
        
          <br />

        <a href="#" class="bodytext2">Eligibility For IBPS </a>
        </div>
        
        
        <div id="recentbg" style="padding-top:20px; text-align:center;"><a href="#" class="head">Recent Bank Updates</a></div>
        
        <div style="float:left; width:260px; margin-top:8px; height:10px;"></div>
        
      </div>
      
      
      
      
      <div id="welcontainermain">
        <div class="weltext" id="welcombg">&nbsp;&nbsp;&nbsp;Welcome to Achievers Institute For Competitive Exams</div>
        
        <div class="bodytext" id="welcomcontent">
          <div align="justify">Banking sector in India has always been one of the most preferred destinations for employment. In this decade, this sector has emerged as a sunrise sector in the Indian economy. The Banking Industry is recruiting in a big way. In the next five years, banks will have to recruit almost 9-11 lakh people; a number that will inflate with new Banking Licenses and the Financial Inclusion initiatives.</div>
        </div>
        
        
        
        <div id="readcontent"><a href="#" class="readmore">Readmore...</a></div>
        
        
        
        <div id="welcomcontent2">
          <div id="bankcontainer">
            <div class="banktext" id="bankcontainerbg">Bankers Training</div>
            
            
            <div id="bankcontainerimage"><img src="images/bankimage.gif" width="306" height="140" /></div>
            
            
            
            <div id="bankcontainertext">
            <a href="#" class="banktext2">Bank Probationary Officers(PO)

              </a><br />
              <a href="#" class="banktext2">Bank Clerical Exam Coaching              </a><br />
              <a href="#" class="banktext2">IBPS Exam Coaching              </a><br />
              <a href="#" class="banktext2">Interview Coaching </a></div>
          </div>
          
          
          
          <div id="bankexam">
            <div class="banktext" id="bankexamrbg">Bank Exam Coaching</div>
            
            
            <div id="bankexamimage"><img src="images/bankimage.gif" width="306" height="140" /></div>
            
            
            <div id="bankexamtext"> 
            <a href="#" class="banktext2">Bank Probationary Officers(PO)

              </a><br />
              <a href="#" class="banktext2">Bank Clerical Exam Coaching              </a><br />
              <a href="#" class="banktext2">IBPS Exam Coaching              </a><br />
            <a href="#" class="banktext2">Interview Coaching </a></div>
          </div>
        </div>
      </div>
    </div>
    
    
    <div id="gallerycontainer">
      <div class="ourselectedtext" id="galleryimage">Our Selected<br />
      Students</div>
      
      
      <div id="galleryline"></div>
      
      
      <div id="galleryimages2">
      <div class="div2">
        <div id="mcts1">
            <img src="images/photo.gif" onMouseOver="tooltip.pop(this, 'This is the first slide')" />
            <img src="images/photo2.gif" onMouseOver="tooltip.pop(this, 'dsdsadsadasdasdasdada')" />
            <img src="images/photo.gif" onMouseOver="tooltip.pop(this, 'adadadadadadadadadadadad')" />
            <img src="images/photo2.gif" onMouseOver="tooltip.pop(this, 'This is the first slide')" />
            <img src="images/photo2.gif" onMouseOver="tooltip.pop(this, 'dsdsadsadasdasdasdada')" />
            <img src="images/photo.gif" onMouseOver="tooltip.pop(this, 'adadadadadadadadadadadad')" />
           
            <img src="images/photo2.gif" onMouseOver="tooltip.pop(this, 'adadadadadadadadadadadad')" />
            <img src="images/photo.gif" onMouseOver="tooltip.pop(this, 'dasharath')" />
            <img src="images/photo2.gif" onMouseOver="tooltip.pop(this, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...')" />
            <img src="images/photo.gif" onMouseOver="tooltip.pop(this, 'dasharath')" />
            <img src="images/thumbnail-slider-8.jpg" onMouseOver="tooltip.pop(this, 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur')" />
        </div>
    </div>
      
      
      </div>
    </div>
    
    
    <div id="line"></div>
    
    
    <!-- Footer Starts Here -->
    <?php require_once('footer.php');?>
    
    <div class="copytext" id="footer">All Copy Rights Reserved by &copy; Achievers4aspirants.com</div>
  </div>
</div>
</body>
</html>
