<!DOCTYPE html>
<html>

<head>
<title>How To Create Image Carousel</title>

<script src="js/code_js.js"></script>

<script>
$(document).ready(function() {
	$(".start_image").show();
	$("#carousel_image").hover(function(){$(".carousel_button").show();},function(){$(".carousel_button").hide();})
	$(".carousel_button").on('click',function(){
		var id = $(this).attr('id');
		var nav;
		if(id=="previous_image") {
			nav = $("img.start_image").prev('img');
			if(nav.length == 0) nav = $("img").last();
		} else if(id=="next_image") {
			nav = $("img.start_image").next('img');
			if(nav.length == 0) nav = $("img").first();
		}
		$("img.start_image").hide();
		$("img.start_image").removeClass("start_image");
		nav.addClass("start_image");
		nav.fadeIn(1000);
	});	
});
</script>

<style type="text/css">
.carousel_button {
	display:none;
	cursor:pointer;
	position: absolute;
	top: 100px;
	opacity: 0.8;
	padding: 10px;
	background: #333;
	color: #FFF;
	font-weight: bold;
	font-size: 20px;

	}
#previous_image {
	left:0px;
	}
	
#next_image {
	right:0px;
	}
	
#carousel_image img {
	display:none;
	}
	
#carousel_image {
	position:relative;
	width:300px;
	height:200px;
	}
</style>

</head>

<body>

<center>
<div id="carousel_image" style="margin:50px;">
	<img class="start_image" src="image/33.png" style="margin-left:-275px;">
	<img src="image/22.jpg" style="margin-left:-275px;">
	<img src="image/11.png" style="margin-left:-275px;">
	<img src="image/44.jpg" style="margin-left:-275px;">
	<img src="image/55.jpg" style="margin-left:-275px;">
	
	<div class="carousel_button" id="previous_image" style="margin-left:-260px; margin-top:100px;">
		<input type="button" value="Previous">
	</div>
	<div class="carousel_button" id="next_image" style="margin-right:-255px; margin-top:100px;">
		<input type="button" value="Next">
	</div>	
</div>
</center>

</body>
</html>