<!-- Web Fonts  -->
<!-- If you want to use google font remove this comment block and local font stylesheet
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
-->
{{generate_theme_css('polywhite/assets/css/fonts/open-sans/stylesheet.css')}} 
{{generate_theme_css('polywhite/assets/css/fonts/icomoon/style.css')}} 

<!-- CSS styles  -->
{{generate_theme_css('polywhite/assets/css/bootstrap.min.css')}} 
@if($tema->isiCss=='')
	{{generate_theme_css('polywhite/assets/css/style.css?v=001')}} 
@else
	{{generate_theme_css('polywhite/assets/css/editstyle.css')}} 
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