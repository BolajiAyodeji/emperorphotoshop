<!DOCTYPE html>
<html lang="en">
<head>
<title>404</title>
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

<body class="subpage">
<div id="main">

<header>
    
<?php
include 'includes/nav.php'
?>

</header>	

<div id="slider" class="clearfix">
<div class="grad1"></div>	
<div id="camera_wrap">
		
</div>	
</div>

<div id="content">
<div class="container">
<div class="row">
	<div class="span12">
		
		<h1>Sorry!</h1>

		<div class="row">
			<div class="span7">
				<div class="page-404">
					<p class="txt1">404</p>
					<p class="txt2">PAGE NOT FOUND</p>
				</div>
			</div>
			<div class="span5">	
			<p>
				Nulla pharetra dignissim enim. Nam cursus eros ut massa. Proin rutrum. Donec non urna non leo aliquam cursus. Vivamus ornare viverra lacus. Fusce id sapien. Donec rhoncus, enim sit amet sodales elementum, elit odio sagittis erat, at tincidunt leo neque non pede. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maurrsus pretium tortor. 
			</p>			
				<p>
					The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
				</p>
				<p>
					Please try using our search box below to look for information on the website
				</p>

				<form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form clearfix" >
					<input type="text" name="s" value='Search' onBlur="if(this.value=='') this.value='Search'" onFocus="if(this.value =='Search' ) this.value=''">
					<a href="#" onClick="document.getElementById('search-form').submit()"></a>
				</form>
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