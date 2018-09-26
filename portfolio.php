<!DOCTYPE html>
<html lang="en">
<head>
<title>Gallery - Emperor Photo Shop</title>
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
include 'includes/style-gallery.php'
?>

<script>

$(window).load(function() {
	// isotop
	var $container = $('#isotope-items'),
		$optionSet = $('#isotope-options'), 
	    $optionSets = $('#isotope-filters'), 
	    $optionLinks = $optionSets.find('a'); 
    $container.isotope({ 
        filter: '*',
        layoutMode: 'fitRows'
    });  
   	$optionLinks.click(function(){ 
   		var $this = $(this); 
    	// don't proceed if already selected 
		if ( $this.hasClass('selected') ) { 
			return false; 
		}    		
   		$optionSet.find('.selected').removeClass('selected'); 
   		$this.addClass('selected');

        var selector = $(this).attr('data-filter'); 
        $container.isotope({ 
            filter: selector            
        }); 
      	return false; 
    });    	
	$(window).on("resize", function( event ) {	
		$container.isotope('reLayout');		
	});		

	// touchTouch
	$('.thumb-isotope .thumbnail a').touchTouch();
	

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
	<h1>Gallery</h1>

<div class="row">
	<div class="span12">
		<div id="isotope-options">
            <ul id="isotope-filters" class="clearfix">
                <li><a href="#" class="selected" data-filter="*">Show All</a></li> 
	            <li><a href="#" data-filter=".isotope-filter1">Category 1</a></li> 
	            <li><a href="#" data-filter=".isotope-filter2">Category 2</a></li> 
	            <li><a href="#" data-filter=".isotope-filter3">Category 3</a></li> 	             
            </ul>            
        </div>
        <ul class="thumbnails" id="isotope-items">		  
            <li class="span4 isotope-element isotope-filter1">
				<div class="thumb-isotope">
					<div class="thumbnail clearfix">
						<a href="images/gallery01.jpg">
							<figure>
								<img src="images/gallery01.jpg" alt=""><em></em>
							</figure>
						</a>
						<div class="caption">
							<p>
								Lorem ipsum dolor sit amet conse ctetur adipisicin el Mauris vel dui facilisis lacus 
							</p>
						</div>
					</div>
				</div>
            </li>
            <li class="span4 isotope-element isotope-filter2">
				<div class="thumb-isotope">
					<div class="thumbnail clearfix">
						<a href="images/gallery02.jpg">
							<figure>
								<img src="images/gallery02.jpg" alt=""><em></em>
							</figure>
						</a>
						<div class="caption">
							<p>
								Lorem ipsum dolor sit amet conse ctetur adipisicin el Mauris vel dui facilisis lacus 
							</p>
						</div>
					</div>
				</div>
            </li>
            <li class="span4 isotope-element isotope-filter3">
				<div class="thumb-isotope">
					<div class="thumbnail clearfix">
						<a href="images/gallery03.jpg">
							<figure>
								<img src="images/gallery03.jpg" alt=""><em></em>
							</figure>
						</a>
						<div class="caption">
							<p>
								Lorem ipsum dolor sit amet conse ctetur adipisicin el Mauris vel dui facilisis lacus 
							</p>
						</div>
					</div>
				</div>
            </li>
            <li class="span4 isotope-element isotope-filter1">
				<div class="thumb-isotope">
					<div class="thumbnail clearfix">
						<a href="images/gallery04.jpg">
							<figure>
								<img src="images/gallery04.jpg" alt=""><em></em>
							</figure>
						</a>
						<div class="caption">
							<p>
								Lorem ipsum dolor sit amet conse ctetur adipisicin el Mauris vel dui facilisis lacus 
							</p>
						</div>
					</div>
				</div>
            </li>
            <li class="span4 isotope-element isotope-filter2">
				<div class="thumb-isotope">
					<div class="thumbnail clearfix">
						<a href="images/gallery05.jpg">
							<figure>
								<img src="images/gallery05.jpg" alt=""><em></em>
							</figure>
						</a>
						<div class="caption">
							<p>
								Lorem ipsum dolor sit amet conse ctetur adipisicin el Mauris vel dui facilisis lacus 
							</p>
						</div>
					</div>
				</div>
            </li>
            <li class="span4 isotope-element isotope-filter3">
				<div class="thumb-isotope">
					<div class="thumbnail clearfix">
						<a href="images/gallery06.jpg">
							<figure>
								<img src="images/gallery06.jpg" alt=""><em></em>
							</figure>
						</a>
						<div class="caption">
							<p>
								Lorem ipsum dolor sit amet conse ctetur adipisicin el Mauris vel dui facilisis lacus 
							</p>
						</div>
					</div>
				</div>
            </li>
            <li class="span4 isotope-element isotope-filter1">
				<div class="thumb-isotope">
					<div class="thumbnail clearfix">
						<a href="images/gallery07.jpg">
							<figure>
								<img src="images/gallery07.jpg" alt=""><em></em>
							</figure>
						</a>
						<div class="caption">
							<p>
								Lorem ipsum dolor sit amet conse ctetur adipisicin el Mauris vel dui facilisis lacus 
							</p>
						</div>
					</div>
				</div>
            </li>
            <li class="span4 isotope-element isotope-filter3">
				<div class="thumb-isotope">
					<div class="thumbnail clearfix">
						<a href="images/gallery08.jpg">
							<figure>
								<img src="images/gallery08.jpg" alt=""><em></em>
							</figure>
						</a>
						<div class="caption">
							<p>
								Lorem ipsum dolor sit amet conse ctetur adipisicin el Mauris vel dui facilisis lacus 
							</p>
						</div>
					</div>
				</div>
            </li>
            <li class="span4 isotope-element isotope-filter3">
				<div class="thumb-isotope">
					<div class="thumbnail clearfix">
						<a href="images/gallery09.jpg">
							<figure>
								<img src="images/gallery09.jpg" alt=""><em></em>
							</figure>
						</a>
						<div class="caption">
							<p>
								Lorem ipsum dolor sit amet conse ctetur adipisicin el Mauris vel dui facilisis lacus 
							</p>
						</div>
					</div>
				</div>
            </li>
        </ul>
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