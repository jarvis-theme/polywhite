{{generate_theme_css('polywhite/assets/css/fonts/open-sans/stylesheet.css')}} 
{{generate_theme_css('polywhite/assets/css/fonts/icomoon/style.css')}} 

<!-- CSS styles  -->
{{generate_theme_css('polywhite/assets/css/bootstrap.min.css')}} 
@if($tema->isiCss=='')
	{{generate_theme_css('polywhite/assets/css/style.css?v=002')}} 
@else
	{{generate_theme_css('polywhite/assets/css/editstyle.css?v=002')}} 
@endif
{{generate_theme_css('polywhite/assets/css/responsive.css')}} 
{{generate_theme_css('polywhite/assets/css/animate.css')}} 
<!-- Slider -->
{{generate_theme_css('polywhite/assets/css/flexslider/flexslider.css')}} 
{{generate_theme_css('polywhite/assets/css/flexslider/default.css')}} 

<!-- Other -->
<!--Google Webfont -->
<link href='//fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'>
{{favicon()}} 