@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')

	<div class="container">
		<h3 class="mainTitle" style="color: transparent;">Перечень выпускаемых труб ТОО «Компания ЮгПласт»</h3>
		<div class="row">
			@include('frontend.partials._sidebar')
			<div class="col-9">
				<div class="row">
					@foreach($categorys as $category)
					<div class="col-3">
						<img src="img/products/{{ $category->Picture }}" alt="" style="max-width: 100%; margin-bottom: 25px; border-radius: 8px;">
					</div>

					<div class="col-9">
						<h3>{{ $category->Name }}</h3>
						<div class="row">
							<ul>
							@foreach($category->children as $subCategory)
								<!-- В ссылку передаю $subCategory->Slug. Это значит slug будет выступать в роли id -->
								<a href="{{ url('productions/' . $subCategory->Slug) }}"><li>{{ $subCategory->Name }}</li></a>
							@endforeach
							</ul>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>

@endsection