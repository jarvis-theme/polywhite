var dirTema = document.getElementsByTagName('link')[1].getAttribute('href');

require.config({
	baseUrl: '/',
    urlArgs: "v=001",
	waitSeconds : 30,
	shim: {
		"bootstrap"	: {
			deps : ['jquery'],
		},
		"caroufredsel" : {
			deps : ['jquery'],
		},
		"flexslider" : {
			deps : ['jquery','lib_packages'],
		},
		"dl_menu" : {
			deps : ['jquery','modernizr'],
		},
		"mixitup" : {
			deps : ['jquery'],
		},
		'jq_ui' : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
		"hoverIntent" : {
			deps : ['jquery'],
		},
		"pretty_check" : {
			deps : ['jquery'],
		},
		"jq_zoom" : {
			deps : ['jquery'],
		},
		"waypoint" : {
			deps : ['jquery'],
		},
		"nouislider" : {
			deps : ['jquery'],
		},
		"ddaccordion" : {
			deps : ['jquery'],
		},
	},

	paths: {
		// LIBRARY
		jquery 			: ['http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min', dirTema+'assets/js/lib/jquery.min'],
		bootstrap 		: dirTema+'assets/js/lib/bootstrap.min',
		carouFredSel	: dirTema+'assets/js/lib/jquery.carouFredSel.min',
		cart			: 'js/shop_cart',
		flexslider		: dirTema+'assets/js/lib/jquery.flexslider.min',
		jq_ui			: 'js/jquery-ui',
		jq_zoom			: dirTema+'assets/js/lib/jquery.zoom-min',
		lib_packages	: dirTema+'assets/js/lib/package.min',
		mixitup			: dirTema+'assets/js/lib/jquery.mixitup.min',
		modernizr		: dirTema+'assets/js/lib/modernizr.min',
		noty			: 'js/jquery.noty',
		nouislider		: dirTema+'assets/js/lib/jquery.nouislider.min',
		scripts			: dirTema+'assets/js/lib/scripts',

		dl_menu			: dirTema+'assets/js/lib/dlMenu',
		hoverIntent		: dirTema+'assets/js/lib/hoverIntent',
		images_loaded	: dirTema+'assets/js/lib/imagesLoaded',
		pretty_check	: dirTema+'assets/js/lib/prettyCheckable',
		waypoint		: dirTema+'assets/js/lib/waypoint',
		ddaccordion		: dirTema+'assets/js/lib/ddaccordion',

		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		home            : dirTema+'assets/js/pages/home',
		member          : dirTema+'assets/js/pages/member',
		main            : dirTema+'assets/js/pages/default',
		produk          : dirTema+'assets/js/pages/produk',
		category        : dirTema+'assets/js/pages/category',
		search        	: dirTema+'assets/js/pages/search',
	}
});
require([
	'router',
	'bootstrap',
	'main',
	'cart',
], function(router,b,main,cart)
{
	// HOME
	router.define('/','home@run');
	router.define('home', 'home@run');

	// PRODUK
	router.define('produk/*', 'produk@run');

	// SEARCH
	// router.define('search/*', 'search@run');

	main.run();
	router.run();
	cart.run();
});