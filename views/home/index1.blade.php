<div class="main-content category-page">
    <div class="container">
        <div class="row">
            <!-- SIDE BAR -->
            <div class="col-xs-12 col-sm-4 col-lg-3 sidebar">
                <div>
                    {{pluginSidePowerup()}}
                </div>
                <!-- BANNER MODULE -->
                <div class="mt20">
                    {{--*/ $i=1 /*--}}
                    @foreach(vertical_banner() as $key=>$banner)
                    <div class="mb10">
                        <a href="{{URL::to($banner->url)}}">
                            {{HTML::image(banner_image_url($banner->gambar), 'Info Promo '.$i++)}} 
                        </a>
                    </div>
                    @endforeach
                </div>
                <!-- /BANNER MODULE -->
                <hr>
                <div>
                    <h2>Hubungi Kami</h2>
                    @if($shop->telepon)
                        <span class="side-contact">Telpon : <b>{{$shop->telepon}}</b></span><br>
                    @endif
                    @if($shop->hp)
                        <span class="side-contact">SMS  : <b>{{$shop->hp}}</b></i></span><br>
                    @endif
                    @if($shop->bb)
                        <span class="side-contact">BBM  : <b>{{$shop->bb}}</b></span><br>
                    @endif
                </div>
                <hr>
                <div id="home-testi">
                    <h2>Testimonial</h2>
                    <ul>
                        @foreach (list_testimonial() as $items)
                        <li><i>"{{$items->isi}}"</i><br /><small class="side-contact">oleh <b>{{$items->nama}}</b></small></li>
                        @endforeach
                    </ul>
                    <b><a class="pull-right nodecor" href="{{URL::to('testimoni')}}">Lainnya..</a></b>
                </div>
            </div>
            <!-- SIDE BAR ENDS-->
            <!--MAIN CONTENT STARTS-->
            <div class="col-xs-12 col-sm-8 col-lg-9 main">
                <div id="product-list-container" class="mt20 offer products-container portrait three-column" data-layout="grid">
                    <div class="row">
                        @foreach(list_product(Input::get('show'), @$category, @$collection) as $myproduk)
                        <div class="mix col-xs-12 col-sm-6 col-lg-4">
                            <div class="product" data-name="Demo Product1">
                                <a href="{{product_url($myproduk)}}" class="product-link clearfix">
                                    @if(is_terlaris($myproduk))
                                       <div class="ribbon hot">Terlaris</div>
                                    @elseif(is_produkbaru($myproduk))
                                       <span class="ribbon new">Baru</span>
                                    @elseif(is_outstok($myproduk))
                                        <div class="ribbon empty">Kosong</div>
                                    @endif
                                    <div class="product-thumbnail">
                                        {{HTML::image(product_image_url($myproduk->gambar1,'medium'), $myproduk->nama,array('title'=>'product','class'=>'image-prod',"onerror"=>"this.src='//d3kamn3rg2loz7.cloudfront.net/img/no-image-product.png'"))}}
                                    </div>
                                </a>
                                
                                <div class="product-info clearfix">
                                    <h4 class="title left">
                                        <a href="{{product_url($myproduk)}}">{{short_description($myproduk->nama, 20)}}</a>
                                    </h4>
                                    @if($setting->checkoutType!=2)
                                    <div class="details">
                                        <div class="product-price">
                                            @if($myproduk->hargaCoret != 0)
                                            <span class="price-old">{{price($myproduk->hargaCoret)}}</span>
                                            @endif 
                                            <span class="price-new">{{price($myproduk->hargaJual)}}</span> 
                                        </div>
                                    </div>
                                    @endif
                                    <div class="listdescription">
                                        <div class="text"><p>{{short_description($myproduk->deskripsi, 130)}}</p></div>
                                        <div class="add-to-cart">
                                            <a onclick="window.location.href='{{product_url($myproduk)}}'" class="btn btn-primary btn-iconed"><i class="icon-cart2"></i><span>Lihat Produk</span></a>
                                        </div>
                                    </div>
                                    
                                    <a title="Add To Cart" class="add-to-cart">
                                        <span class="icon-shopcart"></span>
                                    </a>
                                </div>
                            </div>
                        </div>  
                        @endforeach  
                    </div>
                </div>
                <!-- /PRODUCT AREA -->

                <!-- PAGINATION -->
                <div class="pagination-container">
                    <div class="row">
                        <div class="col-xs-8 col-sm-8">
                            {{list_product(Input::get('show'), @$category, @$collection)->appends(array('show' => Input::get('show')))->links()}}
                        </div>
                    </div>
                </div>
                <!-- PAGINATION -->
            </div>
            <!--MAIN CONTENT ENDS-->
        </div>
    </div>
</div>