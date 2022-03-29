function multiCarousel(){
	if ( $( "#lg" ).is( ":visible" ) ) {
		do {
			$( "#carouselPlus .carousel-inner" ).children( ".carousel-grid:lt(4)" ).wrapAll( "<div class=\"carousel-item\"><div class=\"row\"></div></div>" );
			$( "#carouselPlus .carousel-inner .carousel-item:first" ).addClass("active");
		} while ( $( "#carouselPlus .carousel-inner" ).children( ".carousel-grid" ).length );
	} else if ( $( "#md" ).is( ":visible" ) ) {
		do {
			$( "#carouselPlus .carousel-inner" ).children( ".carousel-grid:lt(3)" ).wrapAll( "<div class=\"carousel-item\"><div class=\"row\"></div></div>" );
			$( "#carouselPlus .carousel-inner .carousel-item:first" ).addClass("active");
		} while ( $( "#carouselPlus .carousel-inner" ).children( ".carousel-grid" ).length );
	} else {
		do {
			$( "#carouselPlus .carousel-inner" ).children( ".carousel-grid:lt(1)" ).wrapAll( "<div class=\"carousel-item\"><div class=\"row\"></div></div>" );
			$( "#carouselPlus .carousel-inner .carousel-item:first" ).addClass("active");
		} while ( $( "#carouselPlus .carousel-inner" ).children( ".carousel-grid" ).length);
	}
}

var $origin = $("#carouselPlus .carousel-inner").prop("outerHTML");
$(window).on( "load resize", function() {
	$( "#carouselPlus .carousel-inner" ).replaceWith( $origin );
	multiCarousel();
});


$('.slider').slick({
	arrows: false,//左右の矢印はなし
	autoplay: true,//自動的に動き出すか。初期値はfalse。
	autoplaySpeed: 0,//自動的に動き出す待ち時間。初期値は3000ですが今回の見せ方では0
	speed: 6900,//スライドのスピード。初期値は300。
	infinite: true,//スライドをループさせるかどうか。初期値はtrue。
	pauseOnHover: false,//オンマウスでスライドを一時停止させるかどうか。初期値はtrue。
	pauseOnFocus: false,//フォーカスした際にスライドを一時停止させるかどうか。初期値はtrue。
	cssEase: 'linear',//動き方。初期値はeaseですが、スムースな動きで見せたいのでlinear
	slidesToShow: 4,//スライドを画面に4枚見せる
	slidesToScroll: 1,//1回のスライドで動かす要素数
	responsive: [
		{
		breakpoint: 769,//モニターの横幅が769px以下の見せ方
		settings: {
			slidesToShow: 2,//スライドを画面に2枚見せる
		}
	},
	{
		breakpoint: 426,//モニターの横幅が426px以下の見せ方
		settings: {
			slidesToShow: 1.5,//スライドを画面に1.5枚見せる
		}
	}
]
});