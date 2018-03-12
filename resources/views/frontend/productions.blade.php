@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')

	<div class="container">
		<h3 class="mainTitle" style="color: transparent;">Перечень выпускаемых труб ТОО «Компания ЮгПласт»</h3>
		<div class="row">
			@include('frontend.partials._sidebar')
			<div class="col-9">
				<div class="row">
					<input type="hidden" id="{{$rowId = 0}}">
					@foreach($subCategorys as $subCategory)
						@if($subCategory->parent_id == $rowId)
						 	<div class="col-4">
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
					<div class="col-4">{{ $subCategory->Name }}</div>
					<input type="hidden" id="{{ $rowId = $subCategory->parent_id }}">
						@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>

@endsection