<!-- FLEXSLIDER CONTAINER -->
<div id="top-slider" class="flexslider-container container">
    <div class="flexslider">
        <!-- BEGIN SLIDES -->
        <ul class="slides">
            @foreach(slideshow() as $val)
            <li>
                <center>
                    @if($val->text=='')
                    <a href="#">
                    @else
                    <a href="{{filter_link_url($val->text)}}" target="_blank">
                    @endif
                        {{HTML::image(slide_image_url($val->gambar),'Slide',array('style'=>'height:435px;width:auto'))}}
                    </a>
                </center>
            </li>
            @endforeach
        </ul>
        <!-- #END SLIDES -->
    </div>
</div>
<!-- /FLEXSLIDER CONTAINER -->