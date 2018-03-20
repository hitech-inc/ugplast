@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')

	<div class="container" style="padding-top: 50px;">
		<div class="row">
			@include('frontend.partials._sidebar')
			<div class="col-9 order-2">
				<div class="row">
					<h1>{{ $mynew->title }}</h1>
					<div class="col-3">
						<img src="/img/news/{{ $mynew->img }}" alt="" style="max-width: 100%; border-radius: 8px">
					</div>
					<div class="col-9">
						{!! $mynew->body !!}
						<a href="/all-news" class="backButton"><span class=""></span>Назад</a>
					</div>	
				</div>
			</div>
		</div>
	</div>

@endsection