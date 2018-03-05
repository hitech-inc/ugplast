@extends('frontend.layouts.master')

@section('content')
<div class="container" id="container-1">
		<div class="row" id="first-row">
			@include('frontend.partials._slider')
		</div> <!-- row -->
</div><!-- #container-1 -->
@include('frontend.partials._topMenu')
<!-- #container-2 -->
<div class="container" id="container-3">
	<div class="row" id="third-row">
		<div class="col-3" id="sidebar">
			<div class="s-catalogue">
				<h4>Каталог продукции</h4>
				<ul>
					<li><a href="#1">Полиэтиленовые трубы</a></li>
					<li><a href="#2">Сварочные аппараты</a></li>
					<li><a href="#3">Фитинги компрессинговые</a></li>
				</ul>
			</div>
			<div class="s-news">
				<h4>Наши новости</h4>
				<div id="wrapper-news">
					<a href="#" id="news-previous" class="slider-up"><span></span></a> 
						<ul id="vertical-ticker-news">
							<li>
								<p>12</p>
								<p>Январь</p>
								<p>Полиэтиленовые трубы - технология будущего</p>
								<a href="#aa">Подробнее</a>
							</li>
							<li>							
								<p>09</p>
								<p>Февраль</p>
								<p>Сварочные аппараты - технология будущего</p>
								<a href="#aa">Подробнее</a>
							</li>
							<li>								
								<p>21</p>
								<p>Февраль</p>
								<p>Фитинги компрессионные - технология</p>
								<a href="#aa">Подробнее</a>
							</li>
							<li>								
								<p>03</p>
								<p>Март</p>
								<p>Полиэтиленовые трубы - технология будущего</p>
								<a href="#aa">Подробнее</a>
							</li>
						</ul>
		    		<a href="#" id="news-next" class="slider-down"><span></span></a> 
				</div>
			</div>
			<div class="s-gallery">
				<h4>Галерея<p>ФОТО | ВИДЕО</p></h4>
				<div id="wrapper-gallery">
					<a href="#" id="ticker-previous" class="slider-up"><span></span></a> 
						<ul id="vertical-ticker-gallery">
							<li><img src="img/g-slider-img-1.jpg" alt="g-slider-img-1"></li>
							<li><img src="img/g-slider-img-2.jpg" alt="g-slider-img-2"></li>
							<li><img src="img/g-slider-img-3.jpg" alt="g-slider-img-3"></li>
							<li><img src="img/g-slider-img-3.jpg" alt="g-slider-img-3"></li>
						</ul>
		    		<a href="#" id="ticker-next" class="slider-down"><span></span></a> 
				</div>
			</div>
		</div>
		<div class="col-9" id="content">
			@foreach($pages as $page)
			<div class="article-1">
				{!! $page->body !!}
			</div>
			@endforeach
			<div class="services">
				<h3>Наши услуги | <a href="/ourservices" target="_blank">Посмотреть все</a></h3>
				<div class="service-boxes">
					@foreach( $services as $service )
				    <div class="" style="background-image: url('img/{{ $service->img  }}')">
					  	<p>
					  		<a href="{{ $service->id }}">{{ $service->title }}</a>
					  	</p>
				    </div>
				    @endforeach
					<!-- <div class="box2">
					  	<p>
					  		<a href="#">Оценка стоимости и продолжительности работ</a>
					  	</p>
					</div>
					<div class="box3">
					  	<p>
					  		<a href="#">Обеспечение проектирования</a>
					  	</p>
					</div>
					<div class="box4">
					  	<p>
					  		<a href="#">Консультация специалистов и профессионалов</a>
					  	</p>
					</div> -->
				</div>
			</div>
			<div class="certificates">
				<h3>Сертификаты | <a href="#show">Посмотреть все</a></h3>
				<div class="cert-boxes owl-carousel">
					<div class="item"><a href="img/cert-1.jpg" data-lightbox="roadtrip"><img src="img/cert-1-min.jpg" alt=""></a></div>
					<div class="item"><a href="img/cert-2.jpg" data-lightbox="roadtrip"><img src="img/cert-2-min.jpg" alt=""></a></div>
					<div class="item"><a href="img/cert-1.jpg" data-lightbox="roadtrip"><img src="img/cert-1-min.jpg" alt=""></a></div>
					<div class="item"><a href="img/cert-2.jpg" data-lightbox="roadtrip"><img src="img/cert-2-min.jpg" alt=""></a></div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- #container-3 -->
<div class="container" id="container-4">
	@foreach( $blocks as $block )
	<div class="row" id="fourth-row" style="background-image: url('img/{{$block->img}}')">
		<div class="col-12" id="pipes">
				<h3>{{ $block->title }}</h3>
				<p>{{ $block->body }}</p>
				<a href="#more">Подробнее<span></span></a>	
		</div>
	</div>
	@endforeach
</div> <!-- #container-4 -->
<div class="container" id="container-5">
	<div class="row" id="fifth-row">
		<div class="col-12" id="advantages">
			<h3>Преимущества работы с нами</h3>

				<div class="adv-boxes">
					@foreach( $advantages as $advantage )
				    <div class="abox">
				    	<img src="img/{{ $advantage->img }}" alt="#1">
					  	<p>
					  		{{ $advantage->body }}
					  	</p>
				    </div>
				  @endforeach  
				</div>


		</div>
	</div>
</div> <!-- #container-5 -->
<div class="container" id="container-6">
	<div class="row" id="sixth-row">
		<div class="col-12" id="about">
			@foreach( $pAbout as $about )
			<h1>{!! $about->title !!}</h1>
			<p>
				{!! $about->body !!}
			</p>

			<a href="/about" target="_blank">Подробнее<span></span></a>
			@endforeach
		</div>
	</div>
</div> <!-- #container-6 -->
<div class="container" id="container-7">
	<div class="row" id="seventh-row">
		<div class="col-8" id="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11800.54866961717!2d69.58207222941076!3d42.31827303326112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDE5JzA1LjciTiA2OcKwMzUnMjcuMCJF!5e0!3m2!1sru!2skz!4v1519988348934" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-4" id="feedback">
			<h3>Оставьте заявку</h3>
			<form action="">
				<input type="text" name="name" placeholder="Ваше имя">
				<input type="text" name="phone" placeholder="Ваш телефон">
				<input type="text" name="email" placeholder="Ваш e-mail">
				<input type="submit" value="Отправить">
			</form>
		</div>
	</div>
</div> <!-- #container-7 -->
@endsection