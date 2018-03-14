<div class="col-12 col-sm-12 col-md-3 col-lg-3 order-2 order-sm-2 order-md-1 order-lg-1" id="sidebar">
	<div class="s-catalogue">
		<a href="/productions" target="_blank"><h4>Каталог продукции</h4></a>
		<ul>
			<li><a href="/productions/#anchore" target="_blank">Полиэтиленовые трубы</a></li>
			<!-- <li><a href="#2">Сварочные аппараты</a></li> -->
			<li><a href="/productions/#anchore" target="_blank">Фитинги компрессинговые</a></li>
		</ul>
	</div>
	<div class="s-news">
		<a href="/all-news" target="_blank">
			<h4>Наши новости</h4>	
		</a>
		<div id="wrapper-news">
			<a href="#" id="news-previous" class="slider-up"><span></span></a> 
			<ul id="vertical-ticker-news">
				@foreach( App\Models\news::getnews() as $sidebarNew )
				<li>
					<p>{{ Carbon\Carbon::parse( $sidebarNew->created_at )->format('d') }}</p>
					<p>{{ Carbon\Carbon::parse( $sidebarNew->created_at )->format('F') }}</p>
					<p>{{ $sidebarNew->title }}</p>
					<a href="#aa">Подробнее</a>
				</li>
				@endforeach
			</ul>
		   <a href="#" id="news-next" class="slider-down"><span></span></a> 
		</div>
	</div>
	<div class="s-gallery">
		<a href="/gallery" target="_blank"><h4>Галерея<p>ФОТО | ВИДЕО</p></h4></a>
		<div id="wrapper-gallery">
			<a href="#" id="ticker-previous" class="slider-up"><span></span></a> 
			<ul id="vertical-ticker-gallery">
				<li><img src="/img/g-slider-img-222.jpg" alt="g-slider-img-1"></li>
				<li><img src="/img/g-slider-img-333.jpg" alt="g-slider-img-2"></li>
				<li><img src="/img/g-slider-img-444.jpg" alt="g-slider-img-3"></li>
				<li><img src="/img/g-slider-img-555.jpg" alt="g-slider-img-3"></li>
			</ul>
		  <a href="#" id="ticker-next" class="slider-down"><span></span></a> 
		</div>
	</div>
</div>