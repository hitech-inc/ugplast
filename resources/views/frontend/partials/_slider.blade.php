<div class="col-12" id="slider">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				  	@foreach($sliders as $slider)
				    <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="@if($loop->index == 0) {{ $active = 'active'}} @endif"></li>
				    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li> -->
				    @endforeach
				  </ol>
				  <div class="carousel-inner">
				  	@foreach($sliders as $slider)
				    <div class="carousel-item @if($loop->index == 0) {{ $active = 'active'}} @endif">
					    <img class="d-block w-100" src="img/{{ $slider->img }}" alt="$slider->title">
					    <div class="carousel-caption">
						    <p>{{ $slider->slidertext }}</p>
						</div>
						<div class="more-info">
							<div class="top-more-info">
								<h3>{{ $slider->title }}</h3>
								<p>{{ $slider->body }}</p>
							</div>
							<div class="bottom-more-info">
								<a href="{{ $slider->url }}">Подробнее<span></span></a>
							</div>
						</div>
				    </div>
				    @endforeach
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