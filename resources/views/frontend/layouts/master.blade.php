<!DOCTYPE html>
<html>
	<head>
		<title>Юг Пласт</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<meta name="csrf-token" content="{{ csrf_token() }}" />
 
		<link rel="stylesheet" href="/css/bootstrap.min.css">

		<link rel="stylesheet" href="/css/style.css">

		<link rel="stylesheet" href="/css/owl.carousel.min.css">
		<link rel="stylesheet" href="/css/lightbox.min.css">
		<!-- modal success -->
		<link rel="stylesheet" href="/css/jquery.sweet-modal.min.css">

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
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120735325-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-120735325-1');
		</script>
		<!-- Google analytic end -->
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
		    (function (d, w, c) {
		        (w[c] = w[c] || []).push(function() {
		            try {
		                w.yaCounter49216804 = new Ya.Metrika2({
		                    id:49216804,
		                    clickmap:true,
		                    trackLinks:true,
		                    accurateTrackBounce:true,
		                    webvisor:true
		                });
		            } catch(e) { }
		        });

		        var n = d.getElementsByTagName("script")[0],
		            s = d.createElement("script"),
		            f = function () { n.parentNode.insertBefore(s, n); };
		        s.type = "text/javascript";
		        s.async = true;
		        s.src = "https://mc.yandex.ru/metrika/tag.js";

		        if (w.opera == "[object Opera]") {
		            d.addEventListener("DOMContentLoaded", f, false);
		        } else { f(); }
		    })(document, window, "yandex_metrika_callbacks2");
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/49216804" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
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
		<!-- modal success -->
		<script src="/js/jquery.sweet-modal.min.js"></script>
		<!-- maskedinput -->
		<script src="/js/jquery.maskedinput.min.js"></script>

		<script>
				$.ajaxSetup({
        	headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

        //$("#phone").mask("7(999)999-99-99");
				
				$('form').on('submit', function(e){

					data = $(this).serialize();
					//console.log(data);
					url = $(this).attr('action');
					//console.log(url);
					$.ajax({
						url: url,
						type: 'post',
						data: data,
						success: function(data){
							//console.log(data);
							$.sweetModal({
								content: 'Заявка успешно отравлена.',
								icon: $.sweetModal.ICON_SUCCESS
							});
						}
					});
					e.preventDefault();
				});
		</script>
	</body>
</html>