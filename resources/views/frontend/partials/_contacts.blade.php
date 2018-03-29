<style>
	span#spnPhoneStatus
{
    font-weight:bold;
}
</style>
<div class="container" id="container-7">
	<div class="row" id="seventh-row">
		<div class="col-12 col-sm-12 col-md-8 col-lg-8" id="map">
	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11800.54866961717!2d69.58207222941076!3d42.31827303326112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDE5JzA1LjciTiA2OcKwMzUnMjcuMCJF!5e0!3m2!1sru!2skz!4v1519988348934" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe> -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2952.1779816587373!2d69.71039331487897!3d42.274723948480016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDE2JzI5LjAiTiA2OcKwNDInNDUuMyJF!5e0!3m2!1sru!2skz!4v1520831483105" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-12 col-sm-12 col-md-4 col-lg-4" id="feedback">
			<h3>Оставьте заявку</h3>
			<p id="message" >Пожалуйста, заполните все поля формы!</p>
			<form action="/sendmail" method="post" name="myForm" onsubmit="return validateForm()">
				{{--<input type="hidden" id="token" value="{{ csrf_token() }}">--}}
				{{ csrf_field() }}
				<input type="text" name="name" placeholder="Ваше имя" id="username">
				<input type="text" name="phone" placeholder="Ваш телефон" id="phone">
				<input type="text" name="email" placeholder="Ваш e-mail" id="email">
				<input type="submit" value="Отправить" id="btn">
			</form>
		</div>
	</div>
</div> <!-- #container-7 -->

<script>
	function validateForm() {
		//validate phone
		var re = /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,17}(\s*)?$/;
	    var myPhone = document.getElementById('phone').value;
	    var valid = re.test(myPhone);
	    //alert(myPhone);

	  // validate email
		var x = document.forms["myForm"]["email"].value;
		var atpos = x.indexOf("@");
		var dotpos = x.lastIndexOf(".");
		var name = document.getElementById("username").value;
		var phone = document.getElementById("phone").value;
		if (name == ""){
			$("#username").attr('placeholder', 'Введите Имя').val('').css({'border':'2px solid red'});
		}
		else $("#username").css('border', '2px solid green'); 

		if (phone == ""){
			$("#phone").attr('placeholder', 'Введите Номер телефона').val('').css({'border':'2px solid red'});
		}

		else if(!valid) $("#phone").attr('placeholder', 'Введите например: +77775556677').val('').css({'border':'2px solid red'});

		else $("#phone").css('border', '2px solid green');

		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
			// alert("Not a valid e-mail address");
			$("#email").val('').css({'border':'2px solid red'});
			$("#email").attr("placeholder", "Введите корректный email");
		}
		else $("#email").css('border', '2px solid green');
		return valid;
	}
</script>