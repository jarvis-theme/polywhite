<div id="site-wrapper">
    <!-- /BREADCRUMBS -->
    <div class="breadcrumbs-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-lg-9 center-sm">
                    <div class="breadcrumbs">
                        <ul class="unstyled">
                            <li><a href="{{URL::to('/')}}">Home</a></li>
                            <li class="active">Kontak Kami</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 space20 visible-xs"></div>
                
                <div class="col-xs-12 col-sm-6 col-lg-3 center-sm">
                    <div class="display-mode">
                        <ul class="unstyled float-right"> Kontak Kami </ul>
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
                    @if($kontak->alamat!='')
                    <!-- CHOOSE COLOR -->
                    <div class="section  module-list-items">
                        <div class="widget widget-contact">
                            <h4 class="section-title">Kontak Kami</h4>
                            <div class="widget-inner iconlist">
                                <div class="media">
                                    <div class="pull-left">
                                        <i class="icon-location"></i>
                                    </div>
                                    <div class="media-body">
                                        <p>{{$kontak->nama}}, <br/>{{$kontak->alamat}}</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <i class="icon-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <p>{{$kontak->telepon}}<br/>{{$kontak->hp}}</p>
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
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="clearfix "></div>
                    @foreach(vertical_banner() as $key=>$banner)
                    <div class="section  module-list-items">
                        <div class="cat-image">
                            <a href="{{URL::to($banner->url)}}">
                                {{HTML::image(banner_image_url($banner->gambar), 'Info Promo', array('width'=>'100%'))}}
                            </a>
                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"></div>
                    <!-- /CHOOSE COLOR -->
                </div>
                <!-- /SIDE BAR -->
                <!-- MAIN CONTENT -->
                <div class="col-xs-12 col-sm-8 col-lg-9 main">
                    <!-- GOOGLE MAP -->
                    <div class="section">
                        @if($kontak->lat!='0' || $kontak->lat!='0')
                            <iframe class="maplocation" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
                        @else
                            <iframe class="maplocation" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->alamat }}&amp;aq=0&amp;oq={{ $kontak->alamat }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;hq=&amp;hnear={{ $kontak->alamat }}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
                        @endif
                    </div>
                    <!-- /GOOGLE MAP -->
                    <div class="col-xs-12 col-sm-12 col-lg-12 main">
                        <div class="row">
                            <!-- CONTACT FORM -->
                            <div class="section contact-inner">
                                <h4 class="section-title">Tanya Kami</h4>
                                <div class="section-inner">
                                    <div class="space20"></div>

                                    <form class="form-horizontal contact" action="{{URL::to('kontak')}}" method="post">
                                        <div class="form-group">
                                            <div class="col-xs-12 col-sm-12">
                                                <input required name="namaKontak" id="contactName" type="text" class="form-control" id="inputName" name="name" placeholder="Nama">
                                            </div>
                                            <!-- <label for="inputName" class="col-xs-12 col-sm-3 required" >Nama</label> -->
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12 col-sm-12">
                                                <input required name="emailKontak" id="email" type="text" class="form-control" id="inputEmail" name="email" placeholder="Email">
                                            </div>
                                            <!-- <label for="inputEmail" class="col-xs-12 col-sm-3 required">Email</label> -->
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12 col-sm-12">
                                                <textarea required class="form-control" name="messageKontak" placeholder="Isi pesan"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12 col-sm-12">
                                                <input type="submit" class="btn btn-primary" value="Kirim">
                                            </div>
                                        </div>
                                    </form>
                                    
                                    <!-- CONTACT FORM ALERTS -->
                                    <div class="alert alert-success nodisplay" id="contact_success">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <div class="alert-icon">
                                            <span class="icon-ok"></span>
                                        </div>
                                        <div class="alert-inner">
                                            <strong>Thanks,</strong> your message recieved successfully. We'll get back to you as soon as possible.
                                        </div>
                                    </div>
                                    <!-- /success msg -->
                                    
                                    <div class="alert alert-error nodisplay" id="contact_fail">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <div class="alert-icon">
                                            <span class="icon-close"></span>
                                        </div>
                                        <div class="alert-inner"></div>
                                    </div>
                                    <!-- /error msg -->
                                    <!-- /CONTACT FORM ALERTS -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /CONTACT FORM -->
                </div>
            </div>
        </div>
    </div>
</div>