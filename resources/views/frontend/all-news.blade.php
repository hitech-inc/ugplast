@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')

	<div class="container">
		<h3 class="mainTitle">Наши новости</h3>
		<div class="row">
			@foreach( $news as $new )
			<div class="col-12">
				<h4>{{ $new->title }}</h4>
				<p>{!! $new->body !!}</p>
				<a href="{{ url('all-news/' . $new->slug) }}" class="linkMore">Подробнее<span></span></a>
			</div>
			@endforeach
		</div>
	</div>

@endsection