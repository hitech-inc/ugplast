@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')

	<div class="container">
		<h3 class="mainTitle">{{ $category->Name }}</h3>
		<div class="row">
			@include('frontend.partials._sidebar')
			<div class="col-md-9 col-sm-9 col-xs-12">
				<div class="row">
					<div class="table-responsive">
						<table class="table table-striped table-hover">
							<tr>
								<th>Диаметр р, мм</th>
								<th>мм</th>
								<th>кг</th>
								<th>Цена, с НДС</th>
							</tr>
							@foreach($products as $product)
							<tr>
								<td>{{ $product->Img }}</td>
								<td>{{ $product->mm }}</td>
								<td>{{ $product->kg }}</td>
								<td>{{ $product->price }}</td>
							</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection