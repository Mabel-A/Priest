<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.codexcoder.com/themeforest/html/peace/peace-html/peace-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Nov 2022 06:10:29 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ALEXENDRIA</title>

    <!-- css include -->
    <link rel='stylesheet' id='bootstrap-css' href='{{ asset('assets/css/bootstrap.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='fontawesome-css' href='{{ asset('assets/css/font-awesome.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='theme-css-css' href='{{ asset('assets/css/theme-style.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='peace-style-css' href='{{ asset('style.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='masterslider-css' href='{{ asset('assets/css/masterslider.main.css') }}' type='text/css'
        media='all' />
    <!-- js inlcude -->
    <script type='text/javascript' src='{{ asset('assets/js/jquery.js') }}'></script>
</head>

<body class="home page">
    <!-- preloader start  -->
    <div id="preloader">
        <div id="loader">
            <div class="loader-inner ball-scale-multiple">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div><!-- /#loader -->
    </div><!-- /#preloader -->



    <!--  header start  -->
    <header id="top-section">
        <div class="container">
            <div class="col-sm-4 hidden-xs address">
                <div class="pull-left">
                    <ul>
                        <li><i class="fa fa-phone"></i> +237</li>
                        <li><i class="fa fa-envelope-o"></i> Email@Domain.com</li>
                    </ul>
                </div><!-- pull left  -->
            </div><!-- /.address -->

            <div class="col-sm-4 col-xs-12">
                <div class="logo text-center">
                    <a href="/"> <img src="{{ asset('images/logo.png') }}" alt="Peace" /> </a>
                </div><!-- /.logo -->
            </div>

            <div class="social-search pull-right hidden-xs">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i><span></span></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i><span></span></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i><span></span></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i><span></span></a></li>
                </ul>

                <div id="site-search">
                    <a href="#"><i class="fa fa-search"></i></a>
                    <form class="search-form" action="#" method="get">
                        <input type="text" name="s" id="topSearchField" class="form-control" value=""
                            placeholder="Type &amp; Hit Enter...">
                        <i class="fa fa-close"></i>
                    </form>
                </div><!--  site search  -->

                <div id="top-cart">
                    <a href="#" id="top-cart-trigger" class="hd-icons">
                        <i class="fa fa-shopping-cart"></i><span>0</span>
                    </a>

                    <div class="top-cart-content">
                        <div class="top-cart-title">
                            <h4>Shopping Cart</h4>
                        </div><!--  top cart title  -->

                        <div class="top-cart-items">
                            <div class="empty">No products in the cart.</div>
                        </div><!-- top cart item-->
                    </div><!--  top cart content -->
                </div><!--  top cart  -->
            </div><!-- /.social-search -->
        </div><!-- /.container -->

        <!--  menu slider start -->
        <div class="menu-slider">
            <nav id="peace-menu">
                <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#responsive-icon" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div><!--  navbar-header -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="responsive-icon">
                        <div class="menu-menu-1-container">

                            <ul class="nav navbar-nav text-center nav navbar-nav text-center">

                                <li class="dropdown active">
                                    <a title="Home" href="/" class="dropdown-toggle"
                                        aria-haspopup="true">Home </a>
                                    <ul role="menu" class=" dropdown-menu">
                                        {{--  <li class="active"><a title="index.html" href="#">Home Page
                                                Christian</a></li>
                                        <li><a title="Home Page - Muslim" href="home-two.html">Home Page Muslim</a>
                                        </li>
                                        <li><a title="Home Page - Hindu" href="home-three.html">Home Page Hindu</a>
                                        </li> --}}
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a title="Events" class="dropdown-toggle" aria-haspopup="true"
                                        href="/event">Events </a>
                                    <ul role="menu" class=" dropdown-menu">
                                        {{--  <li><a title="Event Defaults" href="/event">Event</a></li> --}}
                                        {{--  <li><a title="Event Defaults" href="event-two-column.html">Event Two
                                                Column</a></li>
                                        <li><a title="Event Defaults" href="event-three-column.html">Event Three
                                                Column</a></li> --}}
                                    </ul>
                                </li>

                                {{--   <li class="dropdown">
                                    <a title="Causes" href="causes-single.html" data-toggle="dropdown"
                                        class="dropdown-toggle" aria-haspopup="true">Causes <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li><a title="Causes 2 Col" href="causes-single.html">Causes single</a></li>
                                        <li><a title="Causes 3 Col" href="causes-two-column.html">Causes 2 Col</a>
                                        </li>
                                    </ul>
                                </li> --}}

                                <li class="dropdown">
                                    <a title="Gallery" href="/gallery" class="dropdown-toggle"
                                        aria-haspopup="true">Gallery </a>
                                    <ul role="menu" class=" dropdown-menu">
                                        {{-- <li><a title="Gallery Default" href="gallery.html">Gallery Default</a></li>
                                        <li><a title="Gallery 2 Columns" href="gallery-two-column.html">Gallery 2
                                                Columns</a></li>
                                        <li><a title="Gallery 3 Columns" href="gallery-three-column.html">Gallery 3
                                                Columns</a></li> --}}
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a title="Sermons" href="/sermon" aria-haspopup="true">Sermons
                                    </a>
                                    <ul role="menu" class=" dropdown-menu">
                                        {{--  <li><a title="Sermon Single" href="sermons-single.html">Sermon Single</a></li>
                                        <li><a title="Sermons 2 Col" href="sermons-two-column.html">Sermons 2 Col</a>
                                        </li> --}}
                                    </ul>
                                </li>
                                {{-- 
                                <li class="dropdown">
                                    <a title="News/Blog" href="blog-single.html" data-toggle="dropdown"
                                        class="dropdown-toggle" aria-haspopup="true">News/Blog <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li><a title="Blog Default" href="blog-single.html">Blog Default</a></li>
                                        <li><a title="Blog 2 Columns" href="blog-two-column.html">Blog 2 Columns</a>
                                        </li>
                                    </ul>

                                </li> --}}
                                {{-- <li><a title="Shop" href="shop.html">Shop</a></li> --}}
                                <li class="dropdown"><a title="Contact Us" href="/contact-us" aria-haspopup="true"
                                        class="dropdown-toggle">Contact Us</a>
                                </li>
                                {{--  <li><a title="Contact Us" href="404page.html">404</a></li> --}}
                                <li class="button-skew"><a class="donate-button" href="/donate"><span> Donate Now <i
                                                class="fa fa-heart"></i></span></a></li>
                            </ul>
                        </div><!-- menu-menu-1-container  -->
                    </div><!-- /.navbar-collapse -->
                </div><!-- container  -->
            </nav><!-- peace-menu -->
        </div><!-- /.menu-slider -->
    </header>
    <!-- end header  -->
    @yield('content')
