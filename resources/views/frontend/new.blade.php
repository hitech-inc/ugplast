@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')

	<div class="container" style="padding-top: 50px;">
		<div class="row">
			@include('frontend.partials._sidebar')
			<div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-12 order-2">
				<div class="row">
					<div class="container">
						<h1 class="pagesTitle">{{ $mynew->title }}</h1>
						<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-12">
							<img src="/img/news/{{ $mynew->img }}" alt="" style="max-width: 100%; border-radius: 8px">
						</div>
						<div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-12">
							{!! $mynew->body !!}
							<a href="/all-news" class="backButton"><span class=""></span>Назад</a>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>

@endsection