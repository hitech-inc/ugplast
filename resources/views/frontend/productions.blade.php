@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')

	<div class="container">
		<h3 id="anchore" class="mainTitle" style="color: transparent;">Перечень выпускаемых труб ТОО «Компания ЮгПласт»</h3>
		<div class="row">
			@include('frontend.partials._sidebar')
			<div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-12 order-2">
				<div class="row">
					@foreach($categorys as $category)
					<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-12">
						<img src="img/products/{{ $category->Picture }}" alt="" style="max-width: 100%; margin-bottom: 25px; border-radius: 8px;">
					</div>

					<div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-12">
						<h3>{{ $category->Name }}</h3>
						<div class="row">
							<div class="container">
								<ul>
								@foreach($category->children as $subCategory)
									<!-- В ссылку передаю $subCategory->Slug. Это значит slug будет выступать в роли id -->
									<a href="{{ url('productions/' . $subCategory->Slug) }}"><li>{{ $subCategory->Name }}</li></a>
								@endforeach
								</ul>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>

@endsection