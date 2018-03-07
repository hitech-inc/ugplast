@extends('frontend.layouts.master')

@section('content')

<div class="container">

	@include('frontend.partials._topMenu')
	
	<div class="row">
		@include('frontend.partials._sidebar')
		<div class="col-9">
			<div class="row">
				<div class="col-12">
					@include('frontend.partials._contacts')
				</div>
			</div>
		</div>
	</div>	
</div>

@endsection