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
		
		@include('frontend.partials._sidebar')

		<div class="col-12 col-sm-12 col-md-9 col-lg-9 order-1 order-sm-1 order-md-2 order-lg-2" id="content">
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
				</div>
			</div>
			<div class="certificates">
				<h3>Сертификаты | <a href="/certs" target="_blank">Посмотреть все</a></h3>
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
			<div style="height: 270px; overflow: hidden">
				{!! $about->body !!}
			</div>

			<a href="/about" target="_blank">Подробнее<span></span></a>
			@endforeach
		</div>
	</div>
</div> <!-- #container-6 -->
	
@include('frontend.partials._contacts')

@endsection