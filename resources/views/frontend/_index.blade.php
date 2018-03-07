@extends('frontend.layouts.master')

@section('content')
<div class="container" id="container-1">
		<div class="row" id="first-row">
			<div class="col-12" id="slider">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
					    <img class="d-block w-100" src="img/slider-img.jpg" alt="First slide">
					    <div class="carousel-caption">
						    <p>У нас есть технологии для производства высококачественных  политиленовых и полипропиленовых труб</p>
						</div>
						<div class="more-info">
							<div class="top-more-info">
								<h3>Что стоит знать  о полиэтиленовых трубах?</h3>
								<p>На нашем рынке пластиковые трубы появились сравнительно недавно, а вот во всем мире они широко применяются уже больше 65 лет </p>
							</div>
							<div class="bottom-more-info">
								<a href="#podrobnee">Подробнее<span></span></a>
							</div>
						</div>
				    </div>
				    <div class="carousel-item">
				        <img class="d-block w-100" src="img/slider-img.jpg" alt="Second slide">
					    <div class="carousel-caption">
						    <p>У нас есть технологии для производства высококачественных  политиленовых и полипропиленовых труб</p>
						</div>
						<div class="more-info">
							<div class="top-more-info">
								<h3>Что стоит знать  о полиэтиленовых трубах?</h3>
								<p>На нашем рынке пластиковые трубы появились сравнительно недавно, а вот во всем мире они широко применяются уже больше 65 лет </p>
							</div>
							<div class="bottom-more-info">
								<a href="#podrobnee">Подробнее<span></span></a>
							</div>
						</div>						
				    </div>
				    <div class="carousel-item">
				        <img class="d-block w-100" src="img/slider-img.jpg" alt="Third slide">
					    <div class="carousel-caption">
						    <p>У нас есть технологии для производства высококачественных  политиленовых и полипропиленовых труб</p>
						</div>
						<div class="more-info">
							<div class="top-more-info">
								<h3>Что стоит знать  о полиэтиленовых трубах?</h3>
								<p>На нашем рынке пластиковые трубы появились сравнительно недавно, а вот во всем мире они широко применяются уже больше 65 лет </p>
							</div>
							<div class="bottom-more-info">
								<a href="#podrobnee">Подробнее<span></span></a>
							</div>
						</div>			 
				    </div>
				    <div class="carousel-item">
				        <img class="d-block w-100" src="img/slider-img.jpg" alt="Fourth slide">
					    <div class="carousel-caption">
						    <p>У нас есть технологии для производства высококачественных  политиленовых и полипропиленовых труб</p>
						</div>	
						<div class="more-info">
							<div class="top-more-info">
								<h3>Что стоит знать  о полиэтиленовых трубах?</h3>
								<p>На нашем рынке пластиковые трубы появились сравнительно недавно, а вот во всем мире они широко применяются уже больше 65 лет </p>
							</div>
							<div class="bottom-more-info">
								<a href="#podrobnee">Подробнее<span></span></a>
							</div>
						</div>				        
				    </div>
				    <div class="carousel-item">
				        <img class="d-block w-100" src="img/slider-img.jpg" alt="Fifth slide">
					    <div class="carousel-caption">
						    <p>У нас есть технологии для производства высококачественных  политиленовых и полипропиленовых труб</p>
						</div>
						<div class="more-info">
							<div class="top-more-info">
								<h3>Что стоит знать  о полиэтиленовых трубах?</h3>
								<p>На нашем рынке пластиковые трубы появились сравнительно недавно, а вот во всем мире они широко применяются уже больше 65 лет </p>
							</div>
							<div class="bottom-more-info">
								<a href="#podrobnee">Подробнее<span></span></a>
							</div>
						</div>					        
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div><!-- carousel -->
			</div><!-- #slider -->
		</div> <!-- row -->
</div><!-- #container-1 -->
<div class="container" id="container-2">
	<div class="row" id="second-row">
		<div class="col-12" id="botnav">
			<ul>
				<li><a href="#1">Главная</a></li>
				<li><a href="#2">О нас</a></li>
				<li><a href="#3">Продукция</a></li>
				<li><a href="#4">Прайс-листы</a></li>
				<li><a href="#5">Сертификаты</a></li>
				<li><a href="#6">Контакты</a></li>
			</ul>
		</div>
	</div>
</div> <!-- #container-2 -->
<div class="container" id="container-3">
	<div class="row" id="third-row">
		<div class="col-12 col-sm-12 col-md-3 col-lg-3 order-2 order-sm-1 order-md-1 order-lg-1" id="sidebar">
			<div class="s-catalogue">
				<h4>Каталог продукции</h4>
				<ul>
					<li><a href="#1">Полиэтиленовые трубы</a></li>
					<li><a href="#2">Сварочные аппараты</a></li>
					<li><a href="#3">Фитинги компрессинговые</a></li>
				</ul>
			</div>
			<div class="s-news">
				<h4>Наши новости</h4>
				<div id="wrapper-news">
					<a href="#" id="news-previous" class="slider-up"><span></span></a> 
						<ul id="vertical-ticker-news">
							<li>
								<p>12</p>
								<p>Январь</p>
								<p>Полиэтиленовые трубы - технология будущего</p>
								<a href="#aa">Подробнее</a>
							</li>
							<li>							
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
							</li>
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
		<div class="col-12 col-sm-12 col-md-9 col-lg-9 order-1 order-sm-2 order-md-2 order-lg-2" id="content">
			<div class="article-1">
				<h3>Добро пожаловать на сайт Компании "ЮгПласт"</h3>
				<p>ТОО «ЮгПласт» занимается изготовлением и поставкой качественных трубопроводных систем из полиэтилена. <br>
Мы предлагаем комплексный подход к решению Ваших проблем: квалифицированные консультации, оперативные поставки, профессиональный монтаж, надежное сервисное обслуживание. <br>
     В ассортименте компании: <br>	
- Трубы из полиэтилена низкого давления высокой плотности<br>
- Широкий ряд компрессионных фитингов <br>
- Сварочные аппараты для стыковой сварки полиэтиленовых труб</p>
			</div>
			<div class="article-2">
				<h3>ЗАВОД ПО ПРОИЗВОДСТВУ ПОЛИЭТИЛЕНОВЫХ ТРУБ В КАЗАХСТАНЕ</h3>
				<p>ТОО «ЮгПласт» завод полиэтиленовых труб» производит и реализует ПЭ трубы для газопроводов, водопроводов и канализаций в Казахстане (ЮгПласт ЗКО), а также предоставляет сопутствующие услуги по монтажу трубопроводов любой сложности.
				<br><br>
				Мы предлагаем покупателям широкий ассортимент ПЭ труб, произведенных в соответствии со стандартами, предъявляемыми к продукции данной категории.  
				<br><br>
				Трубы для транспортировки воды производятся в диаметре от 32 до 630 мм, для <br>
				газа – от 32 до 630 мм.</p>
			</div>
			<div class="services">
				<h3>Наши услуги | <a href="#show">Посмотреть все</a></h3>
				<div class="service-boxes">
				    <div class="box1">
					  	<p>
					  		<a href="#">Осуществеление монтажа труб</a>
					  	</p>
				    </div>
					<div class="box2">
					  	<p>
					  		<a href="#">Оценка стоимости и продолжительности работ</a>
					  	</p>
					</div>
					<div class="box3">
					  	<p>
					  		<a href="#">Обеспечение проектирования</a>
					  	</p>
					</div>
					<div class="box4">
					  	<p>
					  		<a href="#">Консультация специалистов и профессионалов</a>
					  	</p>
					</div>
				</div>
			</div>
			<div class="certificates">
				<h3>Сертификаты | <a href="#show">Посмотреть все</a></h3>
				<div class="cert-boxes owl-carousel">
					<div class="item"><img src="img/cert-1.jpg" alt=""></div>
					<div class="item"><img src="img/cert-2.jpg" alt=""></div>
					<div class="item"><img src="img/cert-1.jpg" alt=""></div>
					<div class="item"><img src="img/cert-2.jpg" alt=""></div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- #container-3 -->
<div class="container" id="container-4">
	<div class="row" id="fourth-row">
		<div class="col-12" id="pipes">
			<h3>ПЭ ТРУБА С ЗАЩИТНЫМ ПОКРЫТИЕМ В КАЗАХСТАНЕ</h3>
			<p>Благодаря повышенной прочности трубы с такой защитой могут использоваться в самых жестких условиях прокладки - при траншейной укладке без засыпки, при использовании современных бестраншейных технологий, а также при работе с нестабильными грунтами. <br> 
			В случае необходимости при монтаже покрытие может быть частично удалено по краям трубы, если возникнет необходимость в использовании муфтовой сварки. При стыковой сверке удаление покрытия не требуется.</p>
			<a href="#more">Подробнее<span></span></a>
		</div>
	</div>
</div> <!-- #container-4 -->
<div class="container" id="container-5">
	<div class="row" id="fifth-row">
		<div class="col-12" id="advantages">
			<h3>Преимущества работы с нами</h3>

				<div class="adv-boxes">
				    <div class="abox">
				    	<img src="img/adv-1.png" alt="#1">
					  	<p>
					  		Собственная лаборатория контролирует процесс производства труб и полностью исключает возможность выпуска бракованной продукции
					  	</p>
				    </div>
					<div class="abox">
						<img src="img/adv-2.png" alt="#2">
					  	<p>
							Завод «ЮгПласт» прошел аттестацию и рекомендован в качестве поставщика трубной продукции к проектам, финансируемым государством
					  	</p>
					</div>
					<div class="abox">
						<img src="img/adv-3.png" alt="#3">
					  	<p>
					  		На предприятии постоянно внедряются самое современное оборудование и новейшие технологии переработки пластмасс
					  	</p>
					</div>
					<div class="abox">
						<img src="img/adv-4.png" alt="#4">
					  	<p>
							Вся продукция сертифицирована
					  	</p>
					</div>
				</div>


		</div>
	</div>
</div> <!-- #container-5 -->
<div class="container" id="container-6">
	<div class="row" id="sixth-row">
		<div class="col-12" id="about">
			<h1>О компании</h1>
			<p>
			ТОО «Компания ЮгПласт», завод по производству высококачественных полиэтиленовых и полипропиленовых труб в г.Шымкент       Южно-Казахстанской области. <br>
			Наш завод был запущен в 2012 году в индустриальной зоне «Онтустік» находящегося в г.Шымкент, в рамках Государственной программы «Дорожная карта бизнеса - 2020» и Государственной программы по Форсированному Индустриально-Инновационному развитию Республики Казахстан. <br>
			 Выпускаем высококачественные полиэтиленовые трубы  для газоснабжения, водоснабжения и напорной канализации  и полипропиленовые для горячего водоснабения и отопления на новейшем оборудовании немецкой фирмы «KraussMaffei Technologies Gmbh», соответствующих самым современным мировым стандартам.

			</p>

			<a href="#more">Подробнее<span></span></a>
		</div>
	</div>
</div> <!-- #container-6 -->
<div class="container" id="container-7">
	<div class="row" id="seventh-row">
		<div class="col-12 col-sm-12 col-md-8 col-lg-8 " id="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11800.54866961717!2d69.58207222941076!3d42.31827303326112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDE5JzA1LjciTiA2OcKwMzUnMjcuMCJF!5e0!3m2!1sru!2skz!4v1519988348934" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-12 col-sm-12 col-md-4 col-lg-4" id="feedback">
			<h3>Оставьте заявку</h3>
			<form action="">
				<input type="text" name="name" placeholder="Ваше имя">
				<input type="text" name="phone" placeholder="Ваш телефон">
				<input type="text" name="email" placeholder="Ваш e-mail">
				<input type="submit" value="Отправить">
			</form>
		</div>
	</div>
</div> <!-- #container-7 -->
@endsection