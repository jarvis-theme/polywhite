<!-- SITE FOOTER -->
<div id="footer-container" class="footer-container">
    
    <div class="footer-powered alt">
        <div class="container">
        
            <div class="row">

                @foreach($tautan as $key=>$group)
                <!-- WIDGET LINKS -->
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <div class="widget wdgt-linklist">
                        <div class="widget-inner">
                            <h4 class="widget-header">{{$group->nama}}</h4>
                            <ul class="cl-effect-1">
                                @foreach($group->link as $key=>$link)
                                    <li>
                                        @if($link->halaman=='1')
                                            @if($link->linkTo == 'halaman/about-us')
                                            <a href={{"'".URL::to(strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
                                            @else
                                            <a href={{"'".URL::to("halaman/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
                                            @endif
                                        @elseif($link->halaman=='2')
                                            <a href={{"'".URL::to("blog/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
                                        @elseif($link->url=='1')
                                            <a href="{{strtolower($link->linkTo)}}">{{$link->nama}}</a>
                                        @else
                                            <a href={{"'".URL::to(strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
                                        @endif
                                    </li>                        
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach  
                <!-- WIDGET: CONTACT US -->
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <div class="widget widget-contact">
                        <h4 class="widget-header">Contact Us</h4>
                        <div class="widget-inner iconlist">
                        
                            <div class="media">
                                <div class="pull-left">
                                    <i class="icon-location"></i>
                                </div>
                                <div class="media-body">
                                    <p>{{@$kontak->alamat}}, <br/>{{@$kontak->kota->city}}, {{@$kontak->negara->country}} {{@$kontak->kodepos}}</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <i class="icon-phone"></i>
                                </div>
                                <div class="media-body">
                                    <p>{{@$kontak->telepon}}<br/>{{@$kontak->hp}}</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <i class="icon-mail6"></i>
                                </div>
                                <div class="media-body">
                                    <p><a href="mailto:{{$kontak->email}}">{{@$kontak->email}}</a></p>
                                </div>
                            </div>
                            @if($kontak->ym)
                            <div class="media">
                                <div class="pull-left">
                                    <i class="icon-chat2"></i>
                                </div>
                                <div class="media-body">
                                    <p>{{ymyahoo(@$kontak->ym)}}</p>
                                </div>
                            </div>
                            @endif
                            
                        </div>
                    </div>
                    <div class="space40 hidden-lg"></div>
                </div>
                <!-- /WIDGET: CONTACT US -->
                
                <!-- /WIDGET LINKS -->
                <!-- SUBSCRIPTION -->
                <div class="col-xs-12 col-sm-12 col-lg-12">
                    <div class="widget widget-subs">
                        <ul class="card-icons">
                            @foreach(list_banks() as $value)
                            <li>{{HTML::image(bank_logo($value))}}</li>
                            @endforeach
                            @if(list_payments()[0]->aktif == 1)
                            <li><img src="{{URL::to('img/bank/paypal.png')}}" alt="support paypal" /></li>
                            @endif
                            @if(list_payments()[2]->aktif == 1)
                            <li><img src="{{URL::to('img/bank/ipaymu.jpg')}}" alt="support ipaymu" /></li>
                            @endif
                            @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
                            <li><img src="{{URL::to('img/bank/doku.jpg')}}" alt="support doku myshortcart" /></li>
                            @endif
                        </ul>
                    </div>
                    <div class="space40 hidden-lg"></div>
                </div>
                <!-- /SUBSCRIPTION -->
            </div>
        
        </div>
    </div>
    
    <div class="footer-inner">
        <div class="container">
        
            <div class="row">
            
                <div class="col-xs-12 col-sm-6 copyright center-sm">
                     Copyright &copy; {{date('Y')}} {{ Theme::place('title') }} | All Rights Reserved | Powered by <a style="text-decoration: none;" target="_blank" href="http://jarvis-store.com">Jarvis Store</a>
                </div>
                
                <div class="col-xs-12 space10 visible-xs"></div>
                
                <div class="col-xs-12 col-sm-6 header-social-icons multicolor center-sm">
                    <ul>
                        @if($kontak->tw)
                        <li><a target="_blank" href="{{URL::to($kontak->tw)}}" ><i class="icon-twitter"></i></a></li>
                        @endif
                        @if($kontak->fb)
                        <li><a target="_blank" href="{{URL::to($kontak->fb)}}" ><i class="icon-facebook"></i></a></li>
                        @endif
                        @if($kontak->ig)
                        <li><a target="_blank" href="{{URL::to($kontak->ig)}}" ><i class="icon-instagram"></i></a></li>
                        @endif
                        @if($kontak->gp)
                        <li><a target="_blank" href="{{URL::to($kontak->gp)}}" ><i class="icon-google-plus"></i>/a></li>
                        @endif
                    </ul>
                </div>
        
            </div>
            
        </div>
    </div>
    
</div>
<!-- /SITE FOOTER -->
{{pluginPowerup()}}