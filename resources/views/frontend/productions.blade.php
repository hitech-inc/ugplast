@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')

	<div class="container">
		<h3 class="mainTitle" style="color: transparent;">Перечень выпускаемых труб ТОО «Компания ЮгПласт»</h3>
		<div class="row">
			@include('frontend.partials._sidebar')
			<div class="col-9">
				<div class="row">
					@foreach($Categorys as $category)
					<div class="col-3">
						<img src="img/products/{{ $category->Picture }}" alt="" style="max-width: 100%; margin-bottom: 25px; border-radius: 8px;">
					</div>

					<div class="col-9">
						<h3>{{ $category->Name }}</h3>
						<div class="row">
							<ul>
							@foreach($subCategorys as $subCategory)
								<a href="{{ url('productions/' . $products->id) }}"><li>{{ $subCategory->Name }}</li></a>
							@endforeach
							</ul>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			{{--<div class="col-9">
				<div class="row">
					<input type="hidden" id="{{$rowId = 0}}">
					@foreach($subCategorys as $subCategory)
						@if($subCategory->parent_id == $rowId)
						 	<div class="col-3">
						 		<img src="" alt="">
						 		{{$subCategory->Name}}
							</div>
					 		<input type="hidden" id="{{$rowId = $subCategory->parent_id}}">
					 	@else
				</div>
						@foreach($Categorys as $Category)
					 		@if($Category->id == $subCategory->parent_id)
					 			<h3>{{ $Category->Name }}</h3>
							@endif	
					 	@endforeach	
				<div class="row">
					<div class="col-3">
						<img src="img/products/{{$Category->Picture}}" alt="" style="max-width: 100%; border-radius: 8px">
					</div>
					<div class="col-3">{{ $subCategory->Name }}</div>
					<input type="hidden" id="{{ $rowId = $subCategory->parent_id }}">
						@endif
					@endforeach
				</div>
			</div>--}}
		</div>
	</div>

@endsection