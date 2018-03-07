@extends('frontend.layouts.master')

@section('content')




	@include('frontend.partials._topMenu')

<div class="container">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				@include('frontend.partials._contacts')
		</div>
	</div>	
</div>

@endsection