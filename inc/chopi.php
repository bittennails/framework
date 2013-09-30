<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery.tweet.js"></script>
<script src="js/jquery.flickrush.pack.js"></script>
<!--slight variant on Chris Coyier's http://css-tricks.com/convert-menu-to-dropdown/ -->
<script type="text/javascript">
	$(document).ready(function() {
		
			// Create the dropdown bases
			$("<select />").appendTo(".navigation nav");
			
			// Create default option "Go to..."
			$("<option />", {
			   "selected": "selected",
			   "value"   : "",
			   "text"    : "Go to..."
			}).appendTo("nav select");
			
			
			// Populate dropdowns with the first menu items
			$(".navigation nav li a").each(function() {
			 	var el = $(this);
			 	$("<option />", {
			     	"value"   : el.attr("href"),
			    	"text"    : el.text()
			 	}).appendTo("nav select");
			});
			
			//make responsive dropdown menu actually work			
	      	$("nav select").change(function() {
	        	window.location = $(this).find("option:selected").val();
	      	});

	});
</script>
<!--Hook up the flickr feed-->
<!--find your flickr id http://idgettr.com/-->
<script type="text/javascript">  
$(function() {
	$('div#flickrImages').flickrush({
		limit:4,
		id:'44499772@N06',
		random:true
	}); 
});
</script>
<!-- Hook up the FlexSlider -->
<script type="text/javascript">
	$(document).ready(function() {
		$('.flexslider').flexslider({
			directionNav: false,
		});
	});
</script>