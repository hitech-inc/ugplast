<!DOCTYPE html>
<html>
	<head>
		<title>Юг Пласт</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
 
		<link rel="stylesheet" href="/css/bootstrap.min.css">

		<link rel="stylesheet" href="/css/style.css">

		<link rel="stylesheet" href="/css/owl.carousel.min.css">
		<link rel="stylesheet" href="/css/lightbox.min.css">
		<!-- mobile-->
		<link rel="stylesheet" href="/css/mobile.css">
		<link rel="stylesheet" href="/css/mobile.sm.css">
		<link rel="stylesheet" href="/css/mobile.md.css">
		<link rel="stylesheet" href="/css/mobile.lg.css">
		<!-- RedConnect -->
		<script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async"
		src="https://web.redhelper.ru/service/main.js?c=yugplastuko"></script>
		<div style="display: none"><a class="rc-copyright" 
		href="http://redconnect.ru">Сервис обратного звонка RedConnect</a></div>
		<!--/RedConnect -->

		<!-- <link rel="shortcut icon" href="asset('img/logo/favicon.png')"> -->
		
	</head>
	<body>
		<header>
			@include('frontend.partials._header')
		</header>
		<div class="page-wrapper">
			@yield('content')
		</div>
		<footer>
			@include('frontend.partials._footer')
		</footer>
		<script src="/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="/js/jquery.totemticker.js"></script>
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
					interval	:	500000,
					speed		:	100
				});
			});
		</script>
		<script src="/js/owl.carousel.min.js"></script>
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

		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/myScript.js"></script>
		<script src="/js/lightbox.min.js"></script>
		<script>
		    lightbox.option({
		      'resizeDuration': 200,
		      'wrapAround': true,
		      'maxWidth' : 1200,
		      'maxHeight' : 1500,
		      'showImageNumberLabel': false
		    })
		</script>
		<script src="/js/jquery.touchSwipe.min.js"></script>
		<script>
			$('.cmn-toggle-switch').click(function() {
	           $('.nav-mobile-wrapper').slideToggle();
	        });

		      //Enable swiping...   
	        $("#carouselExampleIndicators").swipe({
                swipeLeft:function(event, direction, distance, duration, fingerCount) {
                    $("#carouselExampleIndicators").carousel('next'); 
                },
                swipeRight:function(event, direction, distance, duration, fingerCount) {
                    $("#carouselExampleIndicators").carousel('prev'); 
                }
	      	})
		</script>
	</body>
</html>