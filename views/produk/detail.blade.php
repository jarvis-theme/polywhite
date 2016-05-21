<div id="site-wrapper">
    <br>
    <!-- /BREADCRUMBS -->
    <div class="breadcrumbs-wrapper">
        <div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-lg-12 center-sm">
                    <div class="breadcrumbs">
                        <ul class="unstyled">
                            <li><a href="{{URL::to('/')}}">Home</a></li>
                            <li><a href="{{URL::to('produk')}}">Produk</a></li>
                            <li><span>{{$produk->nama}}</span></li>
                        </ul>
                    </div>
                </div>
              
                <div class="col-xs-12 col-sm-12 space20 visible-xs"></div>
              
                <div class="col-xs-12 col-sm-6 center-sm">
                    <div class="display-mode">
                        <!-- <ul class="unstyled float-right"> PAUL SMITH SHOES & ACCESSORIES </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /BREADCRUMBS -->
    
    <!-- CONTENT CONTAINER -->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <!-- SIDE BAR -->
                <div class="col-xs-12 col-sm-4 col-lg-3 pull-left sidebar">
                    <!-- CATEGORIES LIST -->
                    <div class="accordionmenu section">
                        <h4 class="section-title">Kategori</h4>
                        @foreach(list_category() as $key=>$menu)
                            @if($menu->parent=='0')
                            <a class="menuitem submenuheader" href="{{category_url($menu)}}" >{{$menu->nama}}</a>
                            @foreach($menu->anak as $key=>$submenu)
                                @if($menu->id == $submenu->parent)
                                <div class="submenu">
                                    <ul class="unstyled pretty-list arrow-list cl-effect-1">
                                        <li><a href="{{category_url($submenu)}}">{{$submenu->nama}}</a></li>
                                    </ul>
                                </div>
                                @endif
                            @endforeach
                            @endif
                        @endforeach
                    </div>

                    <!-- BANNER MODULE -->
                    <div class="accordionmenu section">
                        <!-- <h4 class="section-title">BANNER</h4> -->
                        @foreach(vertical_banner() as $key=>$banner)
                        <div class="section banner-show banner">
                            <a href="{{URL::to($banner->url)}}">
                                {{HTML::image(banner_image_url($banner->gambar),'Info Promo',array('width'=>'100%'))}} 
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <!-- /BANNER MODULE -->
                </div>
                <!-- /SIDE BAR -->

                <!-- MAIN CONTENT -->
                <div class="col-xs-12 col-sm-8 col-lg-9 main">
                    <!-- SINGLE PRODUCT DETAILS -->
                    <div class="section product-single">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="product-album" >
                                    <a href="#">
                                        {{HTML::image(product_image_url($produk->gambar1,'large'),$produk->nama)}} 
                                    </a>
                    
                                    <ul class="unstyled ">
                                        @if($produk->gambar2)
                                        <li class="slides"><a href="javascript:void(0);">{{HTML::image(product_image_url($produk->gambar2, 'medium'), $produk->nama.'1')}}</a></li>
                                        @endif
                                        @if($produk->gambar3)
                                        <li class="slides"><a href="javascript:void(0);">{{HTML::image(product_image_url($produk->gambar3, 'medium'), $produk->nama.'2')}}</a></li>
                                        @endif
                                        @if($produk->gambar4)
                                        <li class="slides"><a href="javascript:void(0);">{{HTML::image(product_image_url($produk->gambar4, 'medium'), $produk->nama.'3')}}</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="productpage-info clearfix">
                                    <h3 class="title">
                                        <a href="#">{{$produk->nama}}</a>
                                    </h3>
                                    <div class="description">
                                    @if(@$po)
                                        <br>
                                        <div>
                                            <p>
                                                Tanggal mulai pemesanan : {{waktuDbBalik($po->tanggalmulai)}}<br>
                                                @if($po->kuota=='0')
                                                    Tanggal akhir pemesanan : {{waktuDbBalik($po->tanggalakhir)}}
                                                @elseif($po->tanggalakhir=='0000-00-00')
                                                    Kuota minimum proses pre-order : {{$po->kuota}}
                                                @endif
                                                <br>
                                                DP : {{$po->dp}}
                                            </p>
                                        </div>
                                    @endif
                                    @if($setting->checkoutType!=2)
                                        <div class="prices autowidth">
                                            <span class="off-price">{{ price($produk->hargaJual) }}  </span>
                                            @if($produk->hargaCoret!=0)
                                            <s class="orginal-price"> {{ price($produk->hargaCoret) }} </s>
                                            @endif
                                        </div>
                                    @endif  
                                        <br>
                                        <form action="#" id="addorder">
                                        @if($setting->checkoutType==3 && !$po)
                                            <span>Belum memasuki periode pemesanan</span>
                                        @else
                                            @if(@$po)
                                                @if(@$availablepo=='1')
                                                <div class="size_info">
                                                    @if($opsiproduk->count()>0)
                                                    Opsi : <select name="opsiproduk">
                                                        @foreach ($opsiproduk as $key => $opsi)
                                                        <option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
                                                            {{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    @endif
                                                </div>
                                                
                                                <div class="space30 clearfix"></div>
                                                
                                                <div class="clearfix">
                                                    Jumlah : <input class="compact" type="text" name="qty" value="1" size="2" id="qty-input">
                                                </div>
                                                
                                                <div class="space30 clearfix"></div>
                                                
                                                <div class="add-to-cart">
                                                    <input type="submit" id="button-cart" class="btn btn-primary btn-iconed" value="Pre Order">
                                                </div>

                                                @else
                                                <span>Belum memasuki periode pemesanan</span>
                                                @endif
                                            @else
                                                @if($opsiproduk->count() > 0)
                                                Opsi : <select name="opsiproduk">
                                                    @foreach ($opsiproduk as $key => $opsi)
                                                    <option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
                                                        {{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @endif
                                                
                                                <div class="space30 clearfix"></div>

                                                <div class="clearfix">
                                                    Jumlah : <input type="text" class="qty compact" name="qty" value="1" size="2" id="qty-input">
                                                </div>
                                                
                                                <div class="space30 clearfix"></div>
                                                
                                                <div class="add-to-cart">
                                                    <input type="submit" id="button-cart" class="btn btn-primary btn-iconed" value="Beli">
                                                </div>
                                            @endif
                                        @endif
                                        </form>
                                        <!-- <div class="space20 clearfix"></div> -->
                                        <!-- <div class="minimum">This product has a minimum quantity of 2</div> -->
                                        <!-- <div class="space20 clearfix"></div> -->
                                  
                                        <!-- /SHARE CONTENT --><!-- 
                                        <div class="space20 clearfix"></div>
                                        <div class="review">
                                            <div><a onclick="$('a[href=\'#profile\']').trigger('click');">Write Review</a></div>
                                        </div> -->

                                        <div class="space20 clearfix"></div>
                                        <br><br>
                                        <div class="sosmed">
                                            {{sosialShare(product_url($produk))}}
                                        </div>
                                        <!-- /SHARE CONTENT -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /SINGLE PRODUCT DETAILS -->
                    <div class="bs-example bs-example-tabs">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Description</a></li>
                            <li><a href="#detail" data-toggle="tab">Detail</a></li>
                            <li><a href="#review" data-toggle="tab">Review</a></li>
                            <!-- <li class="dropdown">
                                <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                                    <li><a href="#dropdown1" tabindex="-1" data-toggle="tab">Polos</a></li>
                                    <li><a href="#dropdown2" tabindex="-1" data-toggle="tab">About</a></li>
                                </ul>
                            </li> -->
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="home"><p>{{$produk->deskripsi}}</p></div>
                            <div class="tab-pane fade" id="detail">
                                <ul>
                                    <li><span>Berat:</span> {{$produk->berat}} gram</li>
                                    <li><span>Stock:</span> {{$produk->stok}}</li>
                                    <li><span>Brand:</span> {{$produk->vendor}}</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="review">{{ pluginComment(product_url($produk), @$produk) }}</div>
                        </div>
                    </div>

                    @if(count(other_product($produk)) > 0)
                    <!-- RELATED PRODUCTS -->
                    <div class="section carousel-iframe">
                        <div class="container">
                            <div class="row carousel-iframe offer">
                                <div class="col-xs-12 col-sm-12">
                                    <h4 class="section-title">RELATED PRODUCTS</h4>
                                    <div class="section-inner">
                                        <!-- carousel control nav direction -->
                                        <div class="carousel-direction-arrows">
                                            <ul class="direction-nav carousel-direction">
                                                <li>
                                                    <a class="crsl-prev btn" href="#">
                                                        <span class="icon-arrow-left10"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="crsl-next btn" href="#">
                                                      <span class="icon-arrow-right9"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /carousel control nav direction -->

                                        <!-- carousel wrapper -->
                                        <div class="carousel-wrapper row" data-minitems="1" data-maxitems="4" data-loop="true" data-autoplay="false" data-slideshow-speed="3000" data-speed="300">
                                            <ul class="products-container product-grid carousel-list portrait ">
                                                @foreach(other_product($produk) as $myproduk)
                                                <li>
                                                    <div class="product">
                                                        <a href="{{product_url($myproduk)}}" class="product-link clearfix">
                                                            @if(is_terlaris($myproduk))
                                                           <div class="ribbon hot">Terlaris</div>
                                                            @elseif(is_produkbaru($myproduk))
                                                           <span class="ribbon new">Baru</span>
                                                            @elseif(is_outstok($myproduk))
                                                            <div class="ribbon empty">Kosong</div>
                                                            @endif
                                                            <div class="product-thumbnail">
                                                                {{HTML::image(product_image_url($myproduk->gambar1,'medium'), $myproduk->nama, array('class' => 'img-otherprod'))}}
                                                            </div>
                                                        </a>
                                                        <div class="product-info clearfix">
                                                            <h4 class="title">
                                                              <a href="{{product_url($myproduk)}}">{{$myproduk->nama}}</a>
                                                            </h4>
                                                            @if($setting->checkoutType!=2)
                                                            <div class="details">
                                                                <div class="product-price">
                                                                    @if(!empty($myproduk->hargaCoret))
                                                                    <span class="price-old">{{price($myproduk->hargaCoret)}}</span> 
                                                                    @endif
                                                                    <span class="price-new">{{price($myproduk->hargaJual)}}</span> 
                                                                </div>
                                                            </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <!-- /CAROUSEL WRAPPER -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /RELATED PRODUCTS -->
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /SITE CONTENT -->