@extends('frontend.layouts.master')

@section('content')

<div class="container" style="margin-bottom: 25px;">
	@include('frontend.partials._topmenu')
</div>

<div class="container">
	<div class="row">
		@foreach( $services as $service )
		<div class="col-4">
			<img src="img/{{ $service->img }}" alt="">
		</div>
		<div class="col-8">
			<h2>
				{{ $service->title }}
			</h2>
			<p>
				{{ $service->body }}
			</p>
		</div>
		@endforeach
	</div>
</div>

@endsection