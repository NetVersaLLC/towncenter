<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TownCenter</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
		<link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
		<script src="http://vjs.zencdn.net/c/video.js"></script>
		<script src="js/videosub-0.9.9.js"></script>
		<link rel="stylesheet" type="text/css" href="css/skin.css" />
		<script type="text/javascript">
			jQuery(document).ready(function() {
			    jQuery('#mycarousel').jcarousel({
			    	wrap: 'circular'
			    });
				if($('.video-js').height()==$(window).height()){
					$('.vjs-default-skin .vjs-controls').css('bottom','0');
				}
				jQuery(window).resize(function() {
					if($('.video-js').height()==$(window).height()){
						$('.vjs-default-skin .vjs-controls').css('bottom','0');
					}
				});
			});
		</script>	
        
                <!-- Begin Google Analytics -->
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37561318-1']);
  _gaq.push(['_setDomainName', 'towncenter.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
        <!-- End Google Analytics --><!-- Start Visual Website Optimizer Asynchronous Code -->
<script type='text/javascript'>
var _vwo_code=(function(){
var account_id=25492,
settings_tolerance=2000,
library_tolerance=1500,
use_existing_jquery=false,
// DO NOT EDIT BELOW THIS LINE
f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
</script>
<!-- End Visual Website Optimizer Asynchronous Code -->

	<style>
		.video-js {
			background-color: none;
		    background-image: url(/movie.png);
		    background-size:890px 501px;
			margin-left:33px;
		}
		#tcvideo {
			cursor: pointer;
		}
		.vjs-big-play-button{
			display:none !important;
		}
		.vjs-default-skin .vjs-controls{
			visibility:visible !important;
			opacity:1 !important;
			bottom:-38px;
		}
		.banner{
			background:url(images/video_background.png) no-repeat;
			width:960px;
			height:600px;
			margin-left:-5px;
			padding-top:22px;
			margin-bottom:-25px;
		}
	</style>

	</head>

	<body>
		<?php include 'header.php'; ?>
		<section>
			<article>
				<div class="container">
					<div class="row-fluid span12">
						<div class="banner">
							  <video id="tcvideo" class="video-js vjs-default-skin" preload="none" width="890" height="501" poster="/movie.png" data-setup="{}" controls>
							    <source src="movie.mp4" type='video/mp4' />
							    <source src="movie.webm" type='video/webm' />
							    <source src="movie.ogv" type='video/ogg' />
								<!-- <track src="movie.srt" kind="subtitle" srclang="en-US" label="English" /> -->
							  </video>
						</div>
					</div>
				</div>
			</article>
			<article>
				<div class="container">
					<div class="row-fluid span12">
						<div class="span8">
							<div class="content_1">
								<p class="title_txt">What is TownCenter?</p>
							</div>
							<div class="content_2">
								<img src="images/big_logo.png" alt=""/>
								<p class="con_txt">TownCenter lets you manage, update and promote your Business Listing in every online database such as; Google+ Local, Facebook, Twitter, Yelp, Foursquare and countless more.</p>
								<div class="b25"></div>
								<p class="con_txt">Simply put, it's a system designed to help your business thrive, by maximizing your online visibility. When people in your area search for a product or service you provide, TownCenter allows you to easily help these potential customers find your company, along with the most current and complete information - Including directory info - your locations and how to contact you - as well as dynamic information, such as current specials and upcoming events, sales and promotions.</p>
							</div>
						</div>
						<div class="span4">
							<div class="content_action">
								<form class="action_sub" action="" method="post">
									<p class="action_title mb_20"><b>Start here!</b> Check to see how your business appears across the internet.</p>
									<p class="action_txt mb_20">Enter you business information below.</p>
									<input type="text" id="bussiness_name" name="bussiness_name" placeholder="Business name" class="action_input_1 mb_12"/>
									<input type="text" id="bussiness_number" name="bussiness_number" placeholder="Business telephone number" class="action_input_1 mb_12"/>
									<input type="text" id="zip_code" name="zip_code" placeholder="Zip Code" class="action_input_1 mb_20"/>
									<input type="submit" class="scan_now" value="submit"/>
								</form>
							</div>
						</div>
					</div>
					<div class="row-fluid span12">
						<p class="title_txt">TownCenter Network</p>
						<p class="con_txt">Our network consists of the top local search properties across platforms – online, mobile & navigation devices. These sites, including Yahoo!, MapQuest, Yelp and a host of other properties, get over 150,000,000 unique visitors every month in the US.</p>
						<ul id="mycarousel" class="jcarousel-skin-tango">
						    <li><a href="http://www.google.com" target="_blank"><img src="images/link_img_1.png" alt="" /></a></li>
						    <li><a href="http://www.facebook.com" target="_blank"><img src="images/link_img_2.png" alt="" /></a></li>
						    <li><a href="http://www.twitter.com" target="_blank"><img src="images/link_img_3.png" alt="" /></a></li>
						    <li><a href="http://www.mapquest.com" target="_blank"><img src="images/link_img_4.png" alt="" /></a></li>
						    <li><a href="http://www.foursquare.com" target="_blank"><img src="images/link_img_5.png" alt="" /></a></li>
						    <li><a href="http://www.yahoo.com" target="_blank"><img src="images/link_img_6.png" alt="" /></a></li>
						    <li><a href="http://www.linkedin.com" target="_blank"><img src="images/link_img_7.png" alt="" /></a></li>
						    <li><a href="http://www.yelp.com" target="_blank"><img src="images/link_img_8.png" alt="" /></a></li>
						    <li><a href="http://www.local.com" target="_blank"><img src="images/link_img_9.png" alt="" /></a></li>
						    <li><a href="http://www.whitepages.com" target="_blank"><img src="images/link_img_10.png" alt="" /></a></li>
						    <li><a href="http://www.citysearch.com" target="_blank"><img src="images/link_img_11.png" alt="" /></a></li>
						</ul>
					</div>
					<div class="row-fluid span12">
						<div class="content_3_back"></div>
						<div class="content_3">
							<div class="span4">
								<div class="content_4">
									<p class="con_title">Businesses face several challeges managing their online presence.</p>
									<p class="con_sub_txt">Business information changes regularly, not only as a business opens, closes, or moves.</p>
									<p class="con_sub_txt">But also with special offers, new products, employee hires, holiday hours and more. </p>
									<p class="con_sub_txt">Jumbled and inconsistent information creates a frustrated and misinformed user.</p>
								</div>
							</div>
							<div class="span4">
								<div class="content_5">
									<p class="sub_title">Here are a few clients proudly using TownCenter already. </p>
									<img src="images/marks.png" alt=""/>
								</div>
							</div>
							<div class="span4">
								<div class="content_4">
									<p class="con_title">TownCenter's one-point control saves you hours.</p>
									<p class="con_sub_txt">Setup takes just minutes and your listings will go live in no time!</p>
									<p class="con_sub_txt">Communicate with the large crowd of sites through one simple database listing. </p>
									<p class="con_sub_txt">TownCenter will keep posted business information current on 45+ (growing quickly) of the most popularly used sites.</p>
									<a href="#" class="scan_now"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</article>
		</section>
		<?php include 'footer.php'; ?>
	<!-- Begin clicky tracking code -->
<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100593955); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100593955ns.gif" /></p></noscript>

</body>
</html>
