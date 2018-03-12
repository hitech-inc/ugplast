@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')

	<div class="container">
		<h3 class="mainTitle" style="color: transparent;">Перечень выпускаемых труб ТОО «Компания ЮгПласт»</h3>
		<div class="row">
			@include('frontend.partials._sidebar')
			<div class="col-9">
				<div class="row">
					@foreach($products as $product)
					<div class="col-3">
						<img src="img/products/{{ $product->Img }}" alt="" style="max-width: 100%; margin-bottom: 25px; border-radius: 8px;">
					</div>

					<div class="col-9">
						<h3>{{ $product->Title }}</h3>
						<p>{{ $product->Body }}</p>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>

@endsection