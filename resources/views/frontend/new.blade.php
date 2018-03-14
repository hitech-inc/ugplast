@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')

	<div class="container" style="padding-top: 50px;">
		<div class="row">
			@include('frontend.partials._sidebar')
			<div class="col-9">
				<div class="row">
					@foreach( $mynew as $new )
					<h1>{{ $new->title }}</h1>
					<div class="col-3">
						<img src="/img/{{ $new->img }}" alt="">
					</div>
					<div class="col-9">
						{!! $new->body !!}
					</div>
					@endforeach	
				</div>
			</div>
		</div>
	</div>

@endsection