<!DOCTYPE html>
<html lang="en">
<head>
<title>Emperor Photo Shop - Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" Content="As a community, we intend to help integrate the act of open source contribution into African developers whilst strongly advocating the movement of free and open source software." />
		<meta name="keywords" Content="Emperor Photo Shop, EPS, photography, videography, ecommerce, camera, canon, nikon, photo studio, photographer" />
		<!-- Twitter card -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@empyphotos" />
        <meta name="twitter:creator" content="@empyphotos" />
        <meta name="twitter:title" content="Emperor Photo Shop" /> 
		<meta name="twitter:description" content="We shoot without killing! We sell photography and videography equipments and accessories." />
		<meta name="twitter:image" content="images/logo-social.jpg" />
		<!-- Open graph -->
        <meta property="og:site_name" content="Emperor Photo Shop" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Emperor Photo Shop" />
        <meta property="og:url" content="https://emperorphotoshop.com/" />
        <meta property="og:description" content="We shoot without killing! We sell photography and videography equipments and accessories." />
        <meta property="og:image" content="images/icon-social.jpg" />

<?php
include 'includes/styles.php'
?>

<script type="text/javascript" src="js/touchTouch.jquery.js"></script>
<script>
$(document).ready(function() {
	// camera
	$('#camera_wrap').camera({
		//thumbnails: true
		height: '58%',
		hover: false,
		loader: 'none',
		navigation: true,
		pagination: false,
		navigationHover: false,
		mobileNavHover: false,
		playPause: false,
		pauseOnClick: false,
		time: 7000,
		transPeriod: 1500,
		minHeight: '500px'
	});

	//	carouFredSel
	$('.carousel.main ul').carouFredSel({
		auto: {
			timeoutDuration: 4000					
		},
		responsive: true,
		prev: '.prev',
		next: '.next',
		width: '100%',
		scroll: {
			items: 1,
			duration: 1000,
			easing: "easeOutExpo"
		},			
		items: {
        	width: '300',
			height: 'auto',	//	optionally resize item-height			  
			visible: {
				min: 2,
				max: 4
			}
		},
		mousewheel: false,
		swipe: {
			onMouse: true,
			onTouch: true
			}
	});
	$(window).bind("resize",updateSizes_vat).bind("load",updateSizes_vat);
	function updateSizes_vat(){
		$('.carousel.main ul').trigger("updateSizes");
	}
	updateSizes_vat();

	
	
	// touchTouch
	$('.thumb-carousel .thumbnail a').touchTouch();

}); //
$(window).load(function() {
	
	

}); //
</script>		
<!--[if lt IE 8]>
		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>  
	<![endif]-->    

<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>      
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>

<body>
<div id="main">

<header>

<?php
include 'includes/nav.php'
?>

</header>	

<div id="slider" class="clearfix">
<div class="grad1"></div>	
<div id="camera_wrap">
	<div data-src="images/slider1.jpg"></div>
	<div data-src="images/slider2.jpg"></div>
	<div data-src="images/slider3.jpg"></div>
</div>	
</div>

<div id="content">
<div class="container">
<div class="row">
<div class="span12">
	<div class="banners">
		<div class="row">
			<div class="span4 banner banner1">
				<div class="banners_inner">
					<div class="banners_inner2">
						<div class="txt1">
							Wedding
						</div>
						<div class="kand1"></div>
						<img src="images/banner1.jpg" alt="" class="img">
						<div class="txt2">
							Suspendisse potenti. Vivamus sed tellus. Nulla facilisi. Pellentesque habitant morbi tristique.
						</div>
						<a href="#" class="button0">read more</a>
					</div>
				</div>
			</div>
			<div class="span4 banner banner1">
				<div class="banners_inner">
					<div class="banners_inner2">
						<div class="txt1">
							Personal
						</div>
						<div class="kand1"></div>
						<img src="images/banner2.jpg" alt="" class="img">
						<div class="txt2">
							Suspendisse potenti. Vivamus sed tellus. Nulla facilisi. Pellentesque habitant morbi tristique.
						</div>
						<a href="#" class="button0">read more</a>
					</div>
				</div>
			</div>
			<div class="span4 banner banner1">
				<div class="banners_inner">
					<div class="banners_inner2">
						<div class="txt1">
							Commercial
						</div>
						<div class="kand1"></div>
						<img src="images/banner3.jpg" alt="" class="img">
						<div class="txt2">
							Suspendisse potenti. Vivamus sed tellus. Nulla facilisi. Pellentesque habitant morbi tristique.
						</div>
						<a href="#" class="button0">read more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="intro">
		<div class="row">
			<div class="span4 block1">
				<img src="images/intro01.jpg" alt="">
				<div class="corner1"></div>
			</div>
			<div class="span8">
				<div class="block2">
					<div class="txt1">
						Hello!
					</div>
					<div class="txt2">
						My name is Agunsoye Oloruntoba, and i love photography!
					</div>
					<div class="txt3">
						Suspendisse potenti. Vivamus sed tellus. Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean lectus. Integer cursus massa quis justo. Vivamus ullamcorper semper dui. Morbi metus purus, ultrices a, porttitor eget, mattis ut, lectus. Vestibulum viverra. Sed id neque. Sed orci. Pellentesque vitae neque id enim eleifend vehicula. Integer pulvinar nisl vitae wisi. 
					</div>
					<div class="text-right"><a href="toba.php" class="button1">Read more about me</a></div>
				</div>
			</div>
		</div>
	</div>
<div class="slider2">
	<div class="carousel-title">Recent Works</div>
	<a class="prev" href="#"></a>
	<a class="next" href="#"></a>
	<div class="carousel-box row">
		<div class="inner span12">			
			<div class="carousel main">
				<ul>
					<li>
						<div class="thumb-carousel">
							<div class="thumbnail clearfix">
								<a href="images/carousel01.jpg">
									<figure>
										<img src="images/carousel01.jpg" alt="Image-nature"><em></em>
									</figure>
								</a>								
							</div>
						</div>
					</li>
					<li>
						<div class="thumb-carousel">
							<div class="thumbnail clearfix">
								<a href="images/carousel02.jpg">
									<figure>
										<img src="images/carousel02.jpg" alt="Image-lady"><em></em>
									</figure>
								</a>								
							</div>
						</div>
					</li>
					<li>
						<div class="thumb-carousel">
							<div class="thumbnail clearfix">
								<a href="images/carousel03.jpg">
									<figure>
										<img src="images/carousel03.jpg" alt="Image-food"><em></em>
									</figure>
								</a>								
							</div>
						</div>
					</li>
					<li>
						<div class="thumb-carousel">
							<div class="thumbnail clearfix">
								<a href="images/carousel04.jpg">
									<figure>
										<img src="images/carousel04.jpg" alt="Image-nature"><em></em>
									</figure>
								</a>								
							</div>
						</div>
					</li>
					<li>
						<div class="thumb-carousel">
							<div class="thumbnail clearfix">
								<a href="images/carousel01.jpg">
									<figure>
										<img src="images/carousel01.jpg" alt="Image-nature"><em></em>
									</figure>
								</a>								
							</div>
						</div>
					</li>
					<li>
						<div class="thumb-carousel">
							<div class="thumbnail clearfix">
								<a href="images/carousel02.jpg">
									<figure>
										<img src="images/carousel02.jpg" alt="Image-lady"><em></em>
									</figure>
								</a>								
							</div>
						</div>
					</li>
					<li>
						<div class="thumb-carousel">
							<div class="thumbnail clearfix">
								<a href="images/carousel03.jpg">
									<figure>
										<img src="images/carousel03.jpg" alt="Image-food"><em></em>
									</figure>
								</a>								
							</div>
						</div>
					</li>
					<li>
						<div class="thumb-carousel">
							<div class="thumbnail clearfix">
								<a href="images/carousel04.jpg">
									<figure>
										<img src="images/carousel04.jpg" alt="Image-nature"><em></em>
									</figure>
								</a>								
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>	



</div>	
</div>	
</div>	
</div>

<footer>

<?php
include 'includes/footer.php'
?>

</footer>


</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>