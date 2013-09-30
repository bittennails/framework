<?php $thisPage="full-width-video"; ?>
<?php 
	$title = "Custom Page Title Here: ie: Full Width Video!";
	$description = "Custom meta description here";
	$keywords = "meta, keywords, go, here";
	include("inc/head.php");
?>
<?php include("inc/header.php"); ?>
<!-- Content -->
<div class="horiz-full int-content clearfix">
	<div class="container">			
		<div class="sixteen columns">
				<article class="sub">
					<header>
						<h4>Video of the week</h4>
					</header>
					<!--video-->
					<figure>
						<div class="embed">
							<iframe src="http://player.vimeo.com/video/66307750?title=038byline=038portrait=0" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		  				</div>
		  				<figcaption>
	  						<a href="http://vimeo.com/66307750" target="_blank">Isle of Awe Land</a> from <a href="http://vimeo.com/abteen" target="_blank">Abteen Bagheri</a>
	  					</figcaption>
					</figure>
				</article><!--end sub-->
		</div><!--end sixteen cols-->
	</div><!--end container-->
</div><!--end horiz-full-->
<!-- Footer -->
<?php include("inc/footer.php"); ?>