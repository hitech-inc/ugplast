@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')

<div class="container">
	@if (Session::has('status'))
	  <div id="myModal" class="modall" style="z-index: 50000">
	    <div class="modal-content">
	      <span class="close" style="opacity: .7">&times;</span>
	      {!! Session::get('status') !!}
	    </div>  
	  </div>  
	@endif
	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12">
			<div class="container" style="margin: 50px auto">
				@include('frontend.partials._contacts')
			</div>
		</div>
	</div>	
</div>

@endsection