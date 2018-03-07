@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')


<div class="container" id="container-3">
	<div class="row" id="third-row">
		@include('frontend.partials._sidebar')

		@foreach( $abouts as $about )
		<div class="col-9 col-xl-9">
			<h1>{{ $about->title }}</h1>
			<p>{!! $about->body !!}</p>
		</div>
		@endforeach
	</div>
</div>

@endsection