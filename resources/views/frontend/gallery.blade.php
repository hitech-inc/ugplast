@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')
	@if ($currentUrl == 1)
		<style>
			.lb-container div.lb-nav{
				top: 0 !important;
			}
		</style>
	@endif
	<div class="container">
		<h3 class="mainTitle">Галерея</h3>
		<div class="row" id="third-row">
			@include('frontend.partials._sidebar')
			<div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-12 order-2">
				<div class="row">
					<div class="container galleryContainer">
						<div class="col-12 col-md-4 col-sm-4 col-lg-4 col-xl-4 galleryBlocks">
							<div class="galleryImg">
								<a href="img/gallery/IMG_9489.jpg" data-lightbox="roadtrip"><img src="img/gallery/IMG_9489.jpg" alt=""></a>
							</div>
						</div>
						<div class="col-12 col-md-4 col-sm-4 col-lg-4 col-xl-4 galleryBlocks">
							<div class="galleryImg">
								<a href="img/gallery/IMG_9538.jpg" data-lightbox="roadtrip" alt=""><img src="img/gallery/IMG_9538.jpg" alt=""></a>
							</div>
						</div>
						<div class="col-12 col-md-4 col-sm-4 col-lg-4 col-xl-4 galleryBlocks">
							<div class="galleryImg">
								<a href="img/gallery/IMG_9549.jpg" data-lightbox="roadtrip" alt=""><img src="img/gallery/IMG_9549.jpg" alt=""></a>
							</div>
						</div>
						<div class="col-12 col-md-4 col-sm-4 col-lg-4 col-xl-4 galleryBlocks">
							<div class="galleryImg">
								<a href="img/gallery/IMG_9551.jpg" data-lightbox="roadtrip" alt=""><img src="img/gallery/IMG_9551.jpg" alt=""></a>
							</div>
						</div>
						<div class="col-12 col-md-4 col-sm-4 col-lg-4 col-xl-4 galleryBlocks">
							<div class="galleryImg">
								<a href="img/gallery/IMG_9554.jpg" data-lightbox="roadtrip" alt=""><img src="img/gallery/IMG_9554.jpg" alt=""></a>
							</div>
						</div>
						<div class="col-12 col-md-4 col-sm-4 col-lg-4 col-xl-4 galleryBlocks">
							<div class="galleryImg">
								<a href="img/gallery/IMG_9559.jpg" data-lightbox="roadtrip" alt=""><img src="img/gallery/IMG_9559.jpg" alt=""></a>
							</div>
						</div>
						<div class="col-12 col-md-4 col-sm-4 col-lg-4 col-xl-4 galleryBlocks">
							<div class="galleryImg">
								<a href="img/gallery/IMG_9577.jpg" data-lightbox="roadtrip" alt=""><img src="img/gallery/IMG_9577.jpg" alt=""></a>
							</div>
						</div>
						<div class="col-12 col-md-4 col-sm-4 col-lg-4 col-xl-4 galleryBlocks">
							<div class="galleryImg">
								<a href="img/gallery/IMG_9582.jpg" data-lightbox="roadtrip" alt=""><img src="img/gallery/IMG_9582.jpg" alt=""></a>
							</div>
						</div>
						<div class="col-12 col-md-4 col-sm-4 col-lg-4 col-xl-4 galleryBlocks">
							<div class="galleryImg">
								<a href="img/gallery/IMG_9585.jpg" data-lightbox="roadtrip" alt=""><img src="img/gallery/IMG_9585.jpg" alt=""></a>
							</div>
						</div>
						<div class="col-12 col-md-4 col-sm-4 col-lg-4 col-xl-4 galleryBlocks">
							<div class="galleryImg">
								<a href="img/gallery/IMG_9602.jpg" data-lightbox="roadtrip" alt=""><img src="img/gallery/IMG_9602.jpg" alt=""></a>
							</div>
						</div>
						<div class="col-12 col-md-4 col-sm-4 col-lg-4 col-xl-4 galleryBlocks">
							<div class="galleryImg">
								<a href="img/gallery/IMG_9604.jpg" data-lightbox="roadtrip" alt=""><img src="img/gallery/IMG_9604.jpg" alt=""></a>
							</div>
						</div>
						<div class="col-12 col-md-4 col-sm-4 col-lg-4 col-xl-4 galleryBlocks">
							<div class="galleryImg">
								<a href="img/gallery/IMG_9606.jpg" data-lightbox="roadtrip" alt=""><img src="img/gallery/IMG_9606.jpg" alt=""></a>
							</div>
						</div>
						<div class="col-12 col-md-4 col-sm-4 col-lg-4 col-xl-4 galleryBlocks">
							<div class="galleryImg">
								<a href="img/gallery/IMG_9620.jpg" data-lightbox="roadtrip" alt=""><img src="img/gallery/IMG_9620.jpg" alt=""></a>
							</div>
						</div>
						<div class="col-12 col-md-4 col-sm-4 col-lg-4 col-xl-4 galleryBlocks">
							<div class="galleryImg">
								<a href="img/gallery/IMG_9622.jpg" data-lightbox="roadtrip" alt=""><img src="img/gallery/IMG_9622.jpg" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection