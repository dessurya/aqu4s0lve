// for product select
	$(".product-select.midle").click(function(){
	    var Name = $(this).data('name');
	    var Desc = $(this).data('desc');
	    var Img  = $(this).data('img');

		if ( !$(this).hasClass("active") ){
			$(".product-select.midle").removeClass("active");
			$(this).addClass("active");

			$('h1#product-name').addClass("load-data");
			$('p#product-desc').addClass("load-data");
			$('img#product-img').addClass("load-data");

			window.setTimeout(function() {
				$('h1#product-name').removeClass("load-data");
				$('p#product-desc').removeClass("load-data");
				$('img#product-img').removeClass("load-data");
			}, 1800);

			window.setTimeout(function() {
				$('h1#product-name').text(Name);
				$('p#product-desc').text(Desc);
				$('img#product-img').attr('src', Img);
			}, 1250);
	    }

	});
// for product select
