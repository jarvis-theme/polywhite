<!-- SITE CONTENT  -->
<div id="site-wrapper">
    <br>
    <!-- /BREADCRUMBS -->
    <div class="breadcrumbs-wrapper">
        <div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-lg-9 center-sm">
                    <div class="breadcrumbs">
                        <ul class="unstyled">
                            <li><a href="{{URL::to('/')}}">Home</a></li>
                            <li class="active">Konfirmasi</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 space20 visible-xs"></div>
                
                <div class="col-xs-12 col-sm-6 col-lg-3 center-sm">
                    <div class="display-mode">
                        <!-- <ul class="unstyled float-right"> Konfirmasi Pembayaran </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /BREADCRUMBS -->
    
    <!-- SIDEBAR + MAIN CONTENT CONTAINER -->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <!-- SIDE BAR -->
                <div class="col-xs-12 col-sm-4 col-lg-3 pull-left sidebar">
                    <div class="space50 clearfix"></div>
                    <!-- SIDE BANNER -->
                    <div class="mt20">
                        {{--*/ $i=1 /*--}}
                        @foreach(vertical_banner() as $key=>$banner)
                        <div class="mb10">
                            <a href="{{URL::to($banner->url)}}">
                                {{HTML::image(banner_image_url($banner->gambar),'Info Promo '.$i++)}}
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <!-- SIDE BANNER -->
                </div>
                <!-- /SIDE BAR -->

                <!-- MAIN CONTENT -->
                <div class="col-xs-12 col-sm-8 col-lg-9 main">
                    <!-- Latest products -->
                    <div class="section carousel-iframe">
                        <div class="container">
                            <div class="row carousel-iframe offer">
                                <div class="col-xs-12 col-sm-12">
                                    @if($checkouttype!=2)
                                    <h4 class="section-title">Konfirmasi Order</h4>
                                    <div class="section">
                                        <p>Silakan masukkan kode order yang mau anda cari!</p>
                                        @if($checkouttype==1)
                                        {{-- */ $konfirmasi='konfirmasiorder' /* --}}
                                        @elseif($checkouttype==3)
                                        {{-- */ $konfirmasi='konfirmasipreorder' /* --}}
                                        @else
                                        {{-- */ $konfirmasi='' /* --}}
                                        @endif

                                        {{Form::open(array('url'=>$konfirmasi,'method'=>'post','class'=>'form-horizontal confirm'))}}
                                            <div class="form-group">
                                                <div class="col-xs-12 col-sm-12 col-md-9">
                                                    <input type="text" class="form-control" placeholder="Kode Order" name="kodeorder" placeholder="Nama" required>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn theme"><i class="icon-check"></i> Cari Kode</button>
                                        {{Form::close()}}
                                    </div>
                                    @else
                                    <p>Anda tidak perlu melakukan konfirmasi untuk inquiry</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- LATEST PRODUCTS -->
                </div>
                <!-- /MAIN CONTENT -->
            </div>
        </div>
    </div>
</div>
<!-- /SITE CONTENT -->