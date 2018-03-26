@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')

	<div class="container">
		<h3 class="mainTitle">Сертификаты</h3>
		<div class="row">
			@include('frontend.partials._sidebar')
			<div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-12 order-2">
				<div class="row">
					<!-- <div class="cert-boxes"> -->
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-12">
							<div class="item">
								<a href="img/cert-1.jpg" data-lightbox="roadtrip"><img src="img/cert-1-min.jpg" alt="" class="imgMaxWidth"></a>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-12">
							<div class="item">
								<a href="img/cert-2.jpg" data-lightbox="roadtrip"><img src="img/cert-2-min.jpg" alt="" class="imgMaxWidth"></a>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-12">
							<div class="item">
								<a href="img/cert-1.jpg" data-lightbox="roadtrip"><img src="img/cert-1-min.jpg" alt="" class="imgMaxWidth"></a>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-12">
							<div class="item">
								<a href="img/cert-2.jpg" data-lightbox="roadtrip"><img src="img/cert-2-min.png" alt="" class="imgMaxWidth"></a>
							</div>
						</div>
					<!-- </div> -->
				</div>
			</div>
		</div>
	</div>

@endsection