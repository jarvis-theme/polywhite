<!-- SITE HEADER  -->
<div id="header-container">
    <!-- main header -->
    <div id="header-center">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-xs-7 col-sm-7 logo-container">
                    <strong class="logo">
                    @if( logo_image_url() )
                        <a href="{{URL::to('home')}}">
                            {{HTML::image(logo_image_url(),'logo',array('style'=>'max-height: 100px'))}}
                        </a>
                    @else
                        <a style="text-decoration:none" href="{{URL::to('home')}}"><h1>{{ Theme::place('title') }}</h1></a>
                    @endif
                    </strong>
                </div>
                <!-- /logo -->
                <div class="col-xs-5 col-sm-5 cart-container">
                    <div class="header-cart" style="width: 100%;">
                        <div class="search-cont">
                            <form action="{{URL::to('search')}}" method="post" class="w100">
                                <input id="search" type="text" name="search" class="query" placeholder="Search here">
                                <button class="btn-search"><i class="icon-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- shopping cart -->
                    <div id="shoppingcartplace">
                        {{shopping_cart()}}
                    </div>
                    <!-- /shopping cart -->
                    <div class="header-cart">
                        <div class="top-links center-sm">
                            <ul class="link-menu cl-effect-21">
                                @if ( !is_login() )
                                    <li>{{HTML::link('member', 'Login')}}</li>
                                    <li>{{HTML::link('member/create', 'Register')}}</li>
                                    <li>{{HTML::link('produk', 'Produk')}}</li>
                                    <li>{{HTML::link('blog', 'Blog')}}</li>
                                @else
                                    <li class="dropdown hidden-xs"><a class="dropdown-toggle" data-toggle="dropdown">Akun </a>
                                        <ul class="dropdown-menu">
                                            <li>  {{HTML::link('member', 'My Account')}}</li>
                                            <li> {{HTML::link('logout', 'Logout')}}</li>
                                        </ul>
                                    </li>
                                    <li>{{HTML::link('produk', 'Produk')}}</li>
                                    <li>{{HTML::link('blog', 'Blog')}}</li>
                                    <li>{{HTML::link('checkout', 'Keranjang Belanja')}}</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main header -->
    <!-- Navigation menu -->
    <div id="menu-container">
        <div class="container">
            <div class="inner">
                <!-- main menu -->
                <ul class="main-menu menu visible-lg">
                    <li class="active annonce"><a href="{{URL::to('/')}}"><i class="icon-home2"></i></a></li>
                    @if(count(list_category ()) > 0)
                    @foreach(list_category () as $key=>$menu)
                    <li class="annonce">
                        @if($menu->parent=='0')
                        <a href="{{category_url($menu)}}">{{$menu->nama}}</a>
                            @if(count($menu->anak) > 0)
                            <ul class="sub_menu">
                                <!--Submenu Starts-->
                                @foreach($menu->anak as $key1=>$submenu)
                                    @if($submenu->parent==$menu->id)
                                    <li><a href="{{category_url($submenu)}}">{{$submenu->nama}}</a>
                                        @foreach($submenu->anak as $key3=>$bug2)
                                        @if($bug2->parent==$submenu->id)
                                        <ul>
                                            <li><a href="{{category_url($bug2)}}">{{$bug2->nama}}</a>
                                        </ul>
                                        @endif
                                        @endforeach
                                    </li>
                                    @endif
                                @endforeach
                            </ul>
                            @endif
                        <!--Submenu Ends-->
                        @endif
                    </li>
                    @endforeach
                    @endif
                </ul>
                <!-- /main menu -->
                
                <!-- mobile main menu -->
                <div class="mobile-menu hidden-lg">
                    <div id="dl-menu" class="dl-menuwrapper">
                        <button class="dl-trigger"><i class="icon-menu2"></i></button>
                        <ul class="dl-menu">
                            <li class="active">
                                <a href={{URL::to("/")}}><i class="icon-home"></i></a>
                            </li>
                            @if(count(category_menu()) > 0)
                            @foreach(category_menu() as $key=>$menu)
                            <li>
                                <?php $numItems = count($anMenu);$i = 0; ?>
                                <a href="javsacript:void(0);">{{$menu->nama}}</a>
                                <ul class="dl-submenu">
                                    @foreach($anMenu as $key1=>$submenu)
                                        @if($submenu->parent==$menu->id)
                                            <li><a href="">{{$submenu->nama}}</a></li>
                                        @elseif(++$i === $numItems)
                                            <li><a href="{{category_url($menu)}}">{{$menu->nama}}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                    <!-- /dl-menuwrapper -->
                </div>
                <!-- /mobile main menu -->
            </div>
        </div>
    </div>
    <!-- /Navigation menu -->
</div>
<!-- /SITE HEADER -->