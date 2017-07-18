<div class="breadcrumbs-wrapper">
    <div class="">
        <br>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-9 center-sm">
                <div class="breadcrumbs">
                    <ul class="unstyled">
                        <li><a href="{{URL::to('/')}}">Home</a></li>
                        <li class="active">Login Area</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 space20 visible-xs"></div>
            
            <div class="col-xs-12 col-sm-6 col-lg-3 center-sm">
                <div class="display-mode">
                    <!-- <ul class="unstyled float-right top-title"> Login Area </ul> -->
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
            <div class="col-xs-12 col-sm-4 col-lg-3 pull-right sidebar">
                <!-- Banner -->
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
                <!-- /Banner -->
            </div>
            <!-- /SIDE BAR -->

            <!-- MAIN CONTENT -->
            <div class="col-xs-12 col-sm-8 col-lg-9 main">
                <div class="section">
                    <form action="{{URL::to('member/login')}}" method="post" enctype="multipart/form-data">
                        <p>Silahkan Login untuk menikmati kemudahan dalam berbelanja. Cepat dan Mudah dalam bertransaksi. Mudah untuk mengetahui Riwayat Pemesanan dan Status Pemesanan produk.</p>
                        <h2><b>Login</b></h2>
                        <div class="content">
                            <table class="form">
                                <tbody>
                                    <tr>
                                        <td>E-Mail:</td>
                                        <td><input type="text" placeholder="email" name="email" value="{{ Input::old('email') }}" required></td>
                                    </tr>
                                    <tr>
                                        <td>Password:</td>
                                        <td><input type="password" placeholder="******" name="password" required></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><a href="{{URL::to('member/forget-password')}}">Lupa Password ?</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="buttons">
                            <div class="left"><input type="submit" value="Login" class="button"></div>
                            <div class="right">
                                <a href="{{URL::to('member/create')}}" class="button">Daftar Sekarang </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- MAIN CONTENT -->
        </div>
    </div>
</div>