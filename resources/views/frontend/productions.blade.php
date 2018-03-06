@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')

	<div class="container">
		<h3 class="mainTitle">Перечень выпускаемых труб ТОО «Компания ЮгПласт»</h3>
		<div class="row">
			@foreach( $productions as $product )
			<div class="col-4">
				<img src="img/products/{{ $product->Img }}" alt="" class="productionsImg">
			</div>
			<div class="col-8">
				<h4>{{ $product->Title }}</h4>
				<p>{!! $product->Body !!}</p>
			</div>
			@endforeach
		</div>
	</div>

@endsection