<!-- FLEXSLIDER CONTAINER -->
<div id="top-slider" class="flexslider-container container">
    <div class="flexslider">
    
        <!-- BEGIN SLIDES -->
        <ul class="slides">
            <li>
                {{HTML::image(slide_image_url('banner-width1.jpg'),'slide-1',array('alt'=>'banner1','style'=>'max-height:435px'))}}
            </li>
            <li>
                {{HTML::image(slide_image_url('banner-width2.jpg'),'slide-2',array('alt'=>'banner2','style'=>'max-height:435px'))}}
            </li>
            <li>
                {{HTML::image(slide_image_url('banner-width3.jpg'),'slide-3',array('alt'=>'banner3','style'=>'max-height:435px'))}}
            </li>
        </ul>
        <!-- #END SLIDES -->
        
    </div>
</div>
<!-- /FLEXSLIDER CONTAINER -->


<!--Banner Ends
@foreach(getBanner(2) as $banner)
    <a href="{{URL::to($banner->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$banner->gambar)}}"/></a>
@endforeach