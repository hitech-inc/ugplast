@extends('frontend.layouts.master')

@section('content')
	
	@include('frontend.partials._topMenu')
	<div class="container" style="padding: 10px 15px 65px 0">
		<div class="row">
			<div class="col-12">
				<div class="container">
					<h3 class="mainTitle">Прайс листы на 2018 год.</h3>
					<p>ТРУБЫ  полиэтиленовые  ПЭ 100 водопроводные ГОСТ 18599-2001 и газопроводные СТ РК 4437-2004 <a href="/pricelists/priceForSite.xlsx" download>Скачать прайс</a> </p>
					<p>Фитинги и трубы ППР <a href="/pricelists/priceFitingiAndTrubiPpr202018.xlsx" download>Скачать прайс</a>	</p>
				</div>
			</div>
		</div>
	</div>

@endsection