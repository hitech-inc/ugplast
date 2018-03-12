@extends('frontend.layouts.master')

@section('content')


	@include('frontend.partials._topMenu')


<div class="container">
	<div class="row">
		@include('frontend.partials._sidebar')
		<div class="col-9">
			<div class="row">
				@foreach( $services as $service )
				<div class="col-3">	
					<img src="img/{{ $service->img }}" alt="" style="max-width: 100%">	
				</div>
				<div class="col-9">
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
	</div>
</div>

@endsection