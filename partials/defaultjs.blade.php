<!-- Javascripts  -->
<!--[if IE 8]><script src="js/respond.min.js"></script><![endif]-->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
{{--HTML::script(dirTemaToko().'polywhite/assets/js/lib/jquery.min.js')--}}
{{--HTML::script(dirTemaToko().'polywhite/assets/js/lib/modernizr.min.js')--}}
{{--HTML::script(dirTemaToko().'polywhite/assets/js/lib/bootstrap.min.js')--}}
{{--HTML::script(dirTemaToko().'polywhite/assets/js/lib/package.min.js')--}}
{{--HTML::script(dirTemaToko().'polywhite/assets/js/lib/scripts.js')--}}
{{--HTML::script(dirTemaToko().'polywhite/assets/js/lib/jquery.flexslider.min.js')--}}

<script>
    /*jQuery(function($) {
        var $slider = $('#top-slider > .flexslider');
        $slider.imagesLoaded(function() {
            $slider.flexslider({
                animation: 'slide',
                easing: 'easeInBack',
                useCSS: false,
                animationSpeed: 1000,
                slideshow: false,
                smoothHeight: true,
                start: function(slider) {
                    // wrap control nav inside container
                    var $controlNav = $slider.find('.flex-control-nav');                    
                    $controlNav.wrap('<div class="flex-pagination-container" />').wrap('<div class="container" />').wrap('<div class="col-xs-12 col-sm-12" />');
                    $controlNav.fadeIn();
                    
                    center_caption(slider);
                }
            });
        });
        $(window).on('throttledresize', function() {
            $slider.find('.flex--slide .caption-body').each(function() {
                var $caption = $(this),
                    captionH = $caption.outerHeight(),
                    sliderH = $slider.height(),
                    top = (sliderH - captionH) / 2;
            
                $caption.css( 'top', top + 'px' );
            });
        });
    });*/
</script>

{{--HTML::script(dirTemaToko().'polywhite/assets/js/lib/jquery.carouFredSel.min.js')--}}

<script data-main="http://{{Request::server('SERVER_NAME').'/'.dirTemaToko()}}polywhite/assets/js/app-main" src="/js/require.js"></script>