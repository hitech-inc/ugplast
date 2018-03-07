@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')


<div class="container" id="container-3">
	<div class="row" id="third-row">
		@include('frontend.partials._sidebar')

		@foreach( $abouts as $about )
<<<<<<< HEAD
		<div class="col-9 col-xl-9">
=======
		<div class="col-12 col-sm-12 col-md-9 col-lg-9 order-1 order-sm-2 order-md-2 order-lg-2">
>>>>>>> mobile_design
			<h1>{{ $about->title }}</h1>
			<p>{!! $about->body !!}</p>
		</div>
		@endforeach
	</div>
</div>

@endsection