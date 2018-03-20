@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')

	<div class="container">
		<h3 class="mainTitle">Сертификаты</h3>
		<div class="row">
			@include('frontend.partials._sidebar')
			<div class="col-9 order-2">
				<div class="row">
					<div class="cert-boxes owl-carousel">
					<div class="item"><a href="img/cert-1.jpg" data-lightbox="roadtrip"><img src="img/cert-1-min.jpg" alt=""></a></div>
					<div class="item"><a href="img/cert-2.jpg" data-lightbox="roadtrip"><img src="img/cert-2-min.jpg" alt=""></a></div>
					<div class="item"><a href="img/cert-1.jpg" data-lightbox="roadtrip"><img src="img/cert-1-min.jpg" alt=""></a></div>
					<div class="item"><a href="img/cert-2.jpg" data-lightbox="roadtrip"><img src="img/cert-2-min.jpg" alt=""></a></div>
				</div>
				</div>
			</div>
		</div>
	</div>

@endsection