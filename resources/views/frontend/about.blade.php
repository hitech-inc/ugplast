@extends('frontend.layouts.master')

@section('content')
<div class="container" style="margin-bottom: 25px;">
	@include('frontend.partials._topmenu')
</div>

<div class="container">
	<div class="row">
		@foreach( $abouts as $about )
		<div class="col-12">
			<h1>{{ $about->title }}</h1>
			<p>{!! $about->body !!}</p>
		</div>
		@endforeach
	</div>
</div>

@endsection