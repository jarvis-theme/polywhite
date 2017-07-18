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
                            <li><a href="{{URL::to('blog')}}">Blog</a></li>
                            <li class="active">{{$detailblog->judul}}</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 space20 visible-xs"></div>
                
                <div class="col-xs-12 col-sm-6 col-lg-3 center-sm">
                    <div class="display-mode">
                        <!-- <ul class="unstyled float-right top-title"> Blog </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /BREADCRUMBS -->
    
    <!-- SIDEBAR + MAIN CONTENT CONTAINER -->
    <div class="main-content category-page">
        <div class="container">
            <div class="row">
                <!-- SIDE BAR -->
                <div class="col-xs-12 col-sm-4 col-lg-3 sidebar">
                    <!-- Kategori LIST -->
                    <div class="section category-list module-list-items">
                        <h4 class="section-title">Kategori</h4>
                        <div class="section-inner">
                            <ul class="unstyled pretty-list cl-effect-1">
                                @foreach(list_blog_category() as $key=>$value)
                                <li><a href="{{blog_category_url($value)}}">{{$value->nama}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- /CATEGORIES LIST -->

                    <div class="section category-list module-list-items">
                        <h4 class="section-title">Blog Terbaru</h4>
                        <div class="section-inner">
                            <ul class="unstyled pretty-list cl-effect-1">
                                @foreach(recentBlog() as $recent)
                                <li>
                                    <a href="{{blog_url($recent)}}">{{$recent->judul}}</a>
                                    <br />
                                    <small class="blog-time">diposting {{waktuTgl($recent->created_at)}}</small>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /SIDE BAR -->

                <!-- MAIN CONTENT -->
                <div class="col-xs-12 col-sm-8 col-lg-9 main">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 section">
                        <div class="cat-image"><h1 class="section-title">{{$detailblog->judul}}</h1></div>
                        <small class="dateblog">
                            Date: {{waktuTgl($detailblog->created_at)}}
                            @if(!empty($detailbllog->kategori))
                            <span>&nbsp;&nbsp; <i class="icon-tag"></i>&nbsp;<a href="{{URL::to('blog/category/'.$detailblog->kategori->nama)}}">{{$detailblog->kategori->nama}}</a></span>
                            @endif
                        </small>              
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 space20 visible-xs"></div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 desc-out">
                        <div class="description">{{ $detailblog->isi }}</div>
                        <br>
                        {{$fbscript}}
                        {{fbcommentbox(slugBlog($detailblog), '670px', '5', 'light')}}
                    </div>

                    <div class="section zerotop">
                        <div class="col-xs-4 col-sm-12" >
                            @if(prev_blog($detailblog))
                            <ul class="direction-nav pagination-direction float-left">
                                <li><a href="{{blog_url(prev_blog())}}" class="btn btn-prev {{ @$prev->id==''?'disabled':'' }}"><span class="icon-arrow-left10"></span></a></li>
                            </ul>
                            @endif
                            @if(next_blog($detailblog))
                            <ul class="direction-nav pagination-direction float-right">
                                <li><a href="{{blog_url(next_blog())}}" class="btn btn-next {{ @$next->id==''?'disabled':'' }}"><span class="icon-arrow-right9"></span></a></li>
                            </ul>
                            @endif
                        </div>
                    </div>
                    <div class="clearfix "></div>   
                </div>
                <!-- /MAIN CONTENT -->
            </div>
        </div>
    </div>
    <!-- /MAIN CONTENT -->
</div>
<!-- /SITE CONTENT -->