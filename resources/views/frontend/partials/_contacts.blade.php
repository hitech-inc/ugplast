<div class="container" id="container-7">
	<div class="row" id="seventh-row">
		<div class="col-12 col-sm-12 col-md-8 col-lg-8" id="map">
	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11800.54866961717!2d69.58207222941076!3d42.31827303326112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDE5JzA1LjciTiA2OcKwMzUnMjcuMCJF!5e0!3m2!1sru!2skz!4v1519988348934" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe> -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2952.1779816587373!2d69.71039331487897!3d42.274723948480016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDE2JzI5LjAiTiA2OcKwNDInNDUuMyJF!5e0!3m2!1sru!2skz!4v1520831483105" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-12 col-sm-12 col-md-4 col-lg-4" id="feedback">
			<h3>Оставьте заявку</h3>
			<form action="/sendmail" method="POST">
				{{ csrf_field() }}
				<input type="text" name="name" placeholder="Ваше имя">
				<input type="text" name="phone" placeholder="Ваш телефон">
				<input type="text" name="email" placeholder="Ваш e-mail">
				<input type="submit" value="Отправить">
			</form>
		</div>
	</div>
</div> <!-- #container-7 -->