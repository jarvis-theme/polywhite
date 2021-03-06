<!-- /BREADCRUMBS -->
<div class="breadcrumbs-wrapper">
    <div>
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-9 center-sm">
                <div class="breadcrumbs">
                    <ul class="unstyled">
                        <li><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href="{{URL::to('member')}}">Member</a></li>
                        <li class="active">Order History</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 space20 visible-xs"></div>
            
            <div class="col-xs-12 col-sm-6 col-lg-3 center-sm">
                <div class="display-mode">
                    <!-- <ul class="unstyled float-right"> Order History </ul> -->
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
                <!-- CHOOSE COLOR -->
                <div class="section  module-list-items">
                    <h4 class="section-title">Menu Member</h4>
                    <div class="section-inner">
                        <ul class="unstyled pretty-list arrow-list cl-effect-1">
                            <li><a class="active" href="{{URL::to('member')}}">Order History</a></li>
                            <li><a href="{{URL::to('member/'.$user->id.'/edit')}}">Profil Information</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /CHOOSE COLOR -->
                
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
                <!-- CART ITEMS -->
                <div class="mt10 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Kode</th>
                                <th class="product-name">Detail Order</th>
                                <th class="product-qty">Tgl Order</th>
                                <th class="product-price">Total</th>
                                <th class="product-thumbnail">No Resi</th>
                                <th class="product-action"></th>
                                <a class="pr_name" href="#">{{date('d M Y')}}</a>
                            </tr>
                        </thead>
                        <tbody>
                        @if($setting->checkoutType==1)
                            @foreach (list_order() as $item)
                            <tr>
                                <td>
                                    <div>
                                        @if($item->status!=2 || $item->status!=3)
                                        <a href="{{URL::to('konfirmasipreorder/'.$item->id)}}">
                                        @else
                                        <a>
                                        @endif
                                        {{ prefixOrder().$item->kodeOrder }}</a>
                                    </div>
                                </td>
                                <td>
                                    @foreach ($item->detailorder as $detail)
                                        <div>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}</div><br>
                                    @endforeach
                                    @if($item->status==0)
                                        <small>Status: </small><span class="label label-warning">Pending</span>
                                    @elseif($item->status==1)
                                        <small>Status: </small><span class="label label-info">Konfirmasi diterima</span>
                                    @elseif($item->status==2)
                                        <small>Status: </small><span class="label label-info">Pembayaran diterima</span>
                                    @elseif($item->status==3)
                                        <small>Status: </small><span class="label label-success">Terkirim</span>
                                    @elseif($item->status==4)
                                        <small>Status: </small><span class="label label-default">Batal</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="qty-btngroup">{{ waktu($item->tanggalOrder) }}</div>
                                </td>
                                <td>
                                    <span class="price">{{ price($item->total) }}</span>
                                </td>
                                <td>
                                    <span>{{ $item->noResi }}</span>
                                </td>
                                <td>
                                    @if($item->status!=2 || $item->status!=3)
                                    <a href="{{URL::to('konfirmasiorder/'.$item->id)}}" title="Konfirmasi Order"><span class="icon-eye"></span></a>
                                    @else
                                    <span class="icon-checkmark"></span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        @elseif($setting->checkoutType==2)
                            @foreach ($inquiry as $item)
                            <tr>
                                <td>
                                    <div><a href="#">{{prefixOrder().$item->kodeInquiry}}</a></div>
                                </td>
                                <td>
                                    @foreach ($item->detailInquiry as $detail)
                                        <div>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}</div><br>
                                    @endforeach
                                    <small>Status: </small>
                                    @if($item->status==0)
                                        <span class="label label-warning">Pending</span>
                                    @elseif($item->status=1)
                                        <span class="label label-important">Konfirmasi diterima</span>
                                    @elseif($item->status==2)
                                        <span class="label label-info">Batal</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="qty-btngroup">{{ waktu($item->tanggalOrder) }}</div>
                                </td>
                                <td>
                                    <span class="price">{{ price($item->total) }}</span>
                                </td>
                                <td>
                                    @if($item->status!=2 || $item->status!=3)
                                    <a href="{{URL::to('konfirmasiorder/'.$item->id)}}" title="Konfirmasi Order"><span class="icon-eye"></span></a>
                                    @else
                                    <span class="icon-checkmark"></span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            @if ($inquiry->count()==0)
                            <tr>
                                <td colspan="2">
                                    <span>Inquiry anda masih kosong.</span>
                                </td>
                            </tr>
                            @endif
                        @else
                            @foreach (list_order() as $item)
                            <tr>
                                <td>
                                    <div><a href="#">{{ prefixOrder().$item->kodeOrder }}</a></div>
                                </td>
                                <td>
                                    @foreach ($item->detailorder as $detail)
                                        <div>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}</div><br>
                                    @endforeach
                                    <small>Status: </small>
                                    @if($item->status==0)
                                    <span class="label label-warning">Pending</span>
                                    @elseif($item->status==1)
                                    <span class="label label-important">Konfirmasi DP diterima</span>
                                    @elseif($item->status==2)
                                    <span class="label label-info">DP terbayar</span>
                                    @elseif($item->status==3)
                                    <span class="label label-info">Menunggu pelunasan</span>
                                    @elseif($item->status==4)
                                    <span class="label label-info">Pembayaran lunas</span>
                                    @elseif($item->status==5)
                                    <span class="label label-success">Terkirim</span>
                                    @elseif($item->status==6)
                                    <span class="label label-default">Batal</span>
                                    @elseif($item->status==7)
                                    <span class="label label-info">Konfirmasi Pelunasan diterima</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="qty-btngroup">{{ waktu($item->tanggalOrder) }}</div>
                                </td>
                                <td>
                                    <span class="price">{{ price($item->total) }}</span>
                                </td>
                                <td>
                                    @if($item->status!=2 || $item->status!=3)
                                    <a href="{{URL::to('konfirmasipreorder/'.$item->id)}}" title="Konfirmasi Order"><span class="icon-eye"></span></a>
                                    @else
                                    <span class="icon-checkmark"></span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                {{ list_order()->links() }}
                <!-- /CART ITEMS -->
            </div>
            <!-- /MAIN CONTENT -->
        </div>
    </div>
</div>