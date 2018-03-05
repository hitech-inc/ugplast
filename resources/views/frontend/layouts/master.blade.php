<!DOCTYPE html>
<html>
	<head>
		<title>Юг Пласт</title>
			
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/lightbox.min.css">
		<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
	</head>
	<body>
		<header>
			@include('frontend.partials._header')
		</header>
		<div class="container-fluid">
			@yield('content')
		</div>
		<footer>
			@include('frontend.partials._footer')
		</footer>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.totemticker.js"></script>
		<script type="text/javascript">
			$(function(){
				$('#vertical-ticker-gallery').totemticker({
					row_height	:	'170px',
					next		:	'#ticker-next',
					previous	:	'#ticker-previous',
					stop		:	'#stop',
					start		:	'#start',
					mousestop	:	true,
					interval	:	50000,
					speed		:	100
				});
			});
			$(function(){
				$('#vertical-ticker-news').totemticker({
					row_height	:	'88px',
					next		:	'#news-next',
					previous	:	'#news-previous',
					mousestop	:	true,
					interval	:	50000,
					speed		:	100
				});
			});
		</script>
		<script src="js/owl.carousel.min.js"></script>
		<script>
			$('.owl-carousel').owlCarousel({
			    loop:true,
			    margin:10,
			    nav:false,
			    autoplay: true,
			    autoplayTimeout: 3000,
			    responsive:{
			        0:{
			            items:1
			        },
			        600:{
			            items:3
			        },
			        1000:{
			            items:5
			        }
			    }
			})

			
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!-- <script src="js/bootstrap.js"></script> -->
		<script src="js/myScript.js"></script>
		<script src="js/lightbox.min.js"></script>
		<script>
		    lightbox.option({
		      'resizeDuration': 200,
		      'wrapAround': true,
		      'maxWidth' : 1200,
		      'maxHeight' : 1500,
		      'showImageNumberLabel': false
		    })
		</script>
	</body>
</html>