@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')

	<div class="container">
		<h3 class="mainTitle">{{ $category->Name }}</h3>
		<div class="row">
			@include('frontend.partials._sidebar')
			<div class="col-md-9 col-sm-9 col-lg-9 col-xl-9 col-12 order-2">
				<div class="row">
					@foreach( $products as $product )
					<div class="col-12">
						<img class="productsImg" src="/img/products/{{ $product->Img }}" alt="">
						<div class="productContent">{!! $product->Body !!}</div>
					</div>
					@endforeach
					{{--<div class="table-responsive">
						<table class="table table-striped table-hover">
							<tr>
								<th>Диаметр р, мм</th>
								<th>мм</th>
								<th>кг</th>
								<th>Цена, с НДС</th>
							</tr>
							@foreach($products as $product)
							<tr>
								<td>{{ $product->diametr_mm }}</td>
								<td>{{ $product->mm }}</td>
								<td>{{ $product->kg }}</td>
								<td>{{ $product->price }}</td>
							</tr>
							@endforeach
						</table>
					</div>--}}
				</div>
			</div>
		</div>
	</div>

@endsection