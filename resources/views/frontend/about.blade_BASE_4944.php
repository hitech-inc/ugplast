@extends('frontend.layouts.master')

@section('content')
<div class="container" style="margin-bottom: 25px;">
	@include('frontend.partials._topMenu')
</div>

<div class="container" id="container-3">
	<div class="row" id="third-row">
		@include('frontend.partials._sidebar')

		@foreach( $abouts as $about )
		<div class="col-9">
			<h1>{{ $about->title }}</h1>
			<p>{!! $about->body !!}</p>
		</div>
		@endforeach
	</div>
</div>

@endsection