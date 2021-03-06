@extends('frontend.layouts.master')

@section('content')

	@include('frontend.partials._topMenu')

	<div class="container">
		<h3 class="mainTitle">Руководство</h3>
		<div class="row">
			@include('frontend.partials._sidebar')
			<div class="col-lg-9 col-md-9 col-sm-9 col-xl-9 col-12 order-2">
				<div class="row">
					<div class="container">
						<div class="col-12 col-md-12 col-sm-12" style="text-align: center;">
							<img class="imgMaxWidth" src="img/director.jpg" alt="Азамат Таскынов, генеральный директор" style="border-radius: 8px">
							<h4 style="margin-top: 25px; margin-bottom: 0">Азамат Таскынов</h4>
							<p style="margin-bottom: 25px">Генеральный директор</p>
						</div>
					</div>
					<div style="border-top: 1px solid #ccc; width: 80%; height: 1px; margin: 0 auto; margin-bottom: 25px;"></div>
					<div class="container">
						<div class="col-12 col-md-12 col-sm-12" style="text-align: center;">
							<img class="imgMaxWidth" src="img/injener.jpg" alt="Нурлан Темирбаев, Главный инжерен технолог" style="border-radius: 8px">
							<h4 style="margin-top: 25px; margin-bottom: 0">Нурлан Темирбаев</h4>
							<p style="margin-bottom: 15px">Главный инженер технолог</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection