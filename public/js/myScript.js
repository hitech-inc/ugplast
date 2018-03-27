
				

$(document).ready(function () {	

	var url = 'http://localhost:8000/gallery';
	 //Create a new link with the url as its href:
	var a = $('<a>', {
		href: url
	});
	var sResult = a.prop('pathname')
	console.log(sResult);	

	if (sResult == '/gallery' && $(window).width() <= '995'){
		$('.lb-container div.lb-nav').css('top', '0');
	}

	function windowSize(){
		if ($(window).width() <= '995'){
	      	$('.lb-container div.lb-nav').css("top", '50%');
	      	$('.lb-dataContainer').css("margin-top", '-67%');
	  } 
	  else if($(window).width() >= '995') {
	  	$('.lb-container div.lb-nav').css("top", '200%');
	  	$('.lb-dataContainer').css("margin-top", '-20%');
	  }
	}
	//$(window).load(windowSize); // при загрузке
	//$(window).resize(windowSize); // при изменении размеров
	// или "два-в-одном", вместо двух последних строк:
	$(window).on('load resize',windowSize);

});

