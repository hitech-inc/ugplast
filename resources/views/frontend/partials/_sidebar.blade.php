<div class="col-3" id="sidebar">
	<div class="s-catalogue">
		<h4>Каталог продукции</h4>
		<ul>
			<li><a href="#1">Полиэтиленовые трубы</a></li>
			<li><a href="#2">Сварочные аппараты</a></li>
			<li><a href="#3">Фитинги компрессинговые</a></li>
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
				<!-- <li>							
					<p>09</p>
					<p>Февраль</p>
					<p>Сварочные аппараты - технология будущего</p>
					<a href="#aa">Подробнее</a>
				</li>
				<li>								
					<p>21</p>
					<p>Февраль</p>
					<p>Фитинги компрессионные - технология</p>
					<a href="#aa">Подробнее</a>
				</li>
				<li>								
					<p>03</p>
					<p>Март</p>
					<p>Полиэтиленовые трубы - технология будущего</p>
					<a href="#aa">Подробнее</a>
				</li> -->
			</ul>
		   <a href="#" id="news-next" class="slider-down"><span></span></a> 
		</div>
	</div>
	<div class="s-gallery">
		<h4>Галерея<p>ФОТО | ВИДЕО</p></h4>
		<div id="wrapper-gallery">
			<a href="#" id="ticker-previous" class="slider-up"><span></span></a> 
			<ul id="vertical-ticker-gallery">
				<li><img src="img/g-slider-img-1.jpg" alt="g-slider-img-1"></li>
				<li><img src="img/g-slider-img-2.jpg" alt="g-slider-img-2"></li>
				<li><img src="img/g-slider-img-3.jpg" alt="g-slider-img-3"></li>
				<li><img src="img/g-slider-img-3.jpg" alt="g-slider-img-3"></li>
			</ul>
		  <a href="#" id="ticker-next" class="slider-down"><span></span></a> 
		</div>
	</div>
</div>