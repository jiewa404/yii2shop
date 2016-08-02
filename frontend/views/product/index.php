
<body>

<div class="wrapper">
    <!-- ============================================================= TOP NAVIGATION ============================================================= -->
    <nav class="top-bar animate-dropdown">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-margin">
                <ul>
                    <li><a href="index.html">首页</a></li>
                    <li><a href="category-grid.html">所有分类</a></li>
                    <li><a href="cart.html">我的购物车</a></li>
                    <li><a href="orders.html">我的订单</a></li>
                </ul>
            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-6 no-margin">
                <ul class="right">
                    <li><a href="authentication.html">注册</a></li>
                    <li><a href="authentication.html">登录</a></li>
                </ul>
            </div><!-- /.col -->
        </div><!-- /.container -->
    </nav><!-- /.top-bar -->
    <!-- ============================================================= TOP NAVIGATION : END ============================================================= -->		<!-- ============================================================= HEADER ============================================================= -->
    <header>
        <div class="container no-padding">

            <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                <!-- ============================================================= LOGO ============================================================= -->
                <div class="logo">
                    <a href="index.html">
                        <img alt="logo" src="static/images/logo.PNG" width="233" height="54"/>
                    </a>
                </div><!-- /.logo -->
                <!-- ============================================================= LOGO : END ============================================================= -->		</div><!-- /.logo-holder -->

            <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder no-margin">
                <div class="contact-row">
                    <div class="phone inline">
                        <i class="fa fa-phone"></i> (+086) 123 456 7890
                    </div>
                    <div class="contact inline">
                        <i class="fa fa-envelope"></i> contact@<span class="le-color">jason.com</span>
                    </div>
                </div><!-- /.contact-row -->
                <!-- ============================================================= SEARCH AREA ============================================================= -->
                <div class="search-area">
                    <form>
                        <div class="control-group">
                            <input class="search-field" placeholder="搜索商品" />

                            <ul class="categories-filter animate-dropdown">
                                <li class="dropdown">

                                    <a class="dropdown-toggle"  data-toggle="dropdown" href="category-grid.html">所有分类</a>

                                    <ul class="dropdown-menu" role="menu" >
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">电子产品</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">电子产品</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">电子产品</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html">电子产品</a></li>

                                    </ul>
                                </li>
                            </ul>

                            <a style="padding:15px 15px 13px 12px" class="search-button" href="#" ></a>

                        </div>
                    </form>
                </div><!-- /.search-area -->
                <!-- ============================================================= SEARCH AREA : END ============================================================= -->		</div><!-- /.top-search-holder -->

            <div class="col-xs-12 col-sm-12 col-md-3 top-cart-row no-margin">
                <div class="top-cart-row-container">

                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
                    <div class="top-cart-holder dropdown animate-dropdown">

                        <div class="basket">

                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <div class="basket-item-count">
                                    <span class="count">3</span>
                                    <img src="static/images/icon-cart.png" alt="" />
                                </div>

                                <div class="total-price-basket">
                                    <span class="lbl">您的购物车:</span>
                    <span class="total-price">
                        <span class="sign">￥</span><span class="value">3219</span>
                    </span>
                                </div>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <div class="basket-item">
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 no-margin text-center">
                                                <div class="thumb">
                                                    <img alt="" src="static/images/products/product-small-01.jpg" />
                                                </div>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 no-margin">
                                                <div class="title">前端课程</div>
                                                <div class="price">￥270.00</div>
                                            </div>
                                        </div>
                                        <a class="close-btn" href="#"></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="basket-item">
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 no-margin text-center">
                                                <div class="thumb">
                                                    <img alt="" src="static/images/products/product-small-01.jpg" />
                                                </div>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 no-margin">
                                                <div class="title">Java课程</div>
                                                <div class="price">￥270.00</div>
                                            </div>
                                        </div>
                                        <a class="close-btn" href="#"></a>
                                    </div>
                                </li>

                                <li>
                                    <div class="basket-item">
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-4 no-margin text-center">
                                                <div class="thumb">
                                                    <img alt="" src="static/images/products/product-small-01.jpg" />
                                                </div>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 no-margin">
                                                <div class="title">PHP课程</div>
                                                <div class="price">￥270.00</div>
                                            </div>
                                        </div>
                                        <a class="close-btn" href="#"></a>
                                    </div>
                                </li>


                                <li class="checkout">
                                    <div class="basket-item">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <a href="cart.html" class="le-button inverse">查看购物车</a>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <a href="checkout.html" class="le-button">去往收银台</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div><!-- /.basket -->
                    </div><!-- /.top-cart-holder -->
                </div><!-- /.top-cart-row-container -->
                <!-- ============================================================= SHOPPING CART DROPDOWN : END ============================================================= -->		</div><!-- /.top-cart-row -->

        </div><!-- /.container -->

        <!-- ========================================= NAVIGATION ========================================= -->
        <nav id="top-megamenu-nav" class="megamenu-vertical animate-dropdown">
            <div class="container">
                <div class="yamm navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mc-horizontal-menu-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div><!-- /.navbar-header -->
                    <div class="collapse navbar-collapse" id="mc-horizontal-menu-collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">电子产品</a>
                                <ul class="dropdown-menu">
                                    <li><div class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-4">
                                                    <h2>Laptops &amp; Notebooks</h2>
                                                    <ul>
                                                        <li><a href="#">Power Supplies Power</a></li>
                                                        <li><a href="#">Power Supply Testers Sound </a></li>
                                                        <li><a href="#">Sound Cards (Internal)</a></li>
                                                        <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                        <li><a href="#">Other</a></li>
                                                    </ul>
                                                </div><!-- /.col -->

                                                <div class="col-xs-12 col-sm-4">
                                                    <h2>Computers &amp; Laptops</h2>
                                                    <ul>
                                                        <li><a href="#">Computer Cases &amp; Accessories</a></li>
                                                        <li><a href="#">CPUs, Processors</a></li>
                                                        <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                                        <li><a href="#">Graphics, Video Cards</a></li>
                                                        <li><a href="#">Interface, Add-On Cards</a></li>
                                                        <li><a href="#">Laptop Replacement Parts</a></li>
                                                        <li><a href="#">Memory (RAM)</a></li>
                                                        <li><a href="#">Motherboards</a></li>
                                                        <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                                        <li><a href="#">Motherboard Components &amp; Accs</a></li>
                                                    </ul>
                                                </div><!-- /.col -->

                                                <div class="col-xs-12 col-sm-4">
                                                    <h2>Dekstop Parts</h2>
                                                    <ul>
                                                        <li><a href="#">Power Supplies Power</a></li>
                                                        <li><a href="#">Power Supply Testers Sound</a></li>
                                                        <li><a href="#">Sound Cards (Internal)</a></li>
                                                        <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                        <li><a href="#">Other</a></li>
                                                    </ul>
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->
                                        </div><!-- /.yamm-content --></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">电子产品</a>
                                <ul class="dropdown-menu">
                                    <li><div class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-4">
                                                    <h2>Laptops &amp; Notebooks</h2>
                                                    <ul>
                                                        <li><a href="#">Power Supplies Power</a></li>
                                                        <li><a href="#">Power Supply Testers Sound </a></li>
                                                        <li><a href="#">Sound Cards (Internal)</a></li>
                                                        <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                        <li><a href="#">Other</a></li>
                                                    </ul>
                                                </div><!-- /.col -->

                                                <div class="col-xs-12 col-sm-4">
                                                    <h2>Computers &amp; Laptops</h2>
                                                    <ul>
                                                        <li><a href="#">Computer Cases &amp; Accessories</a></li>
                                                        <li><a href="#">CPUs, Processors</a></li>
                                                        <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                                        <li><a href="#">Graphics, Video Cards</a></li>
                                                        <li><a href="#">Interface, Add-On Cards</a></li>
                                                        <li><a href="#">Laptop Replacement Parts</a></li>
                                                        <li><a href="#">Memory (RAM)</a></li>
                                                        <li><a href="#">Motherboards</a></li>
                                                        <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                                        <li><a href="#">Motherboard Components &amp; Accs</a></li>
                                                    </ul>
                                                </div><!-- /.col -->

                                                <div class="col-xs-12 col-sm-4">
                                                    <h2>Dekstop Parts</h2>
                                                    <ul>
                                                        <li><a href="#">Power Supplies Power</a></li>
                                                        <li><a href="#">Power Supply Testers Sound</a></li>
                                                        <li><a href="#">Sound Cards (Internal)</a></li>
                                                        <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                        <li><a href="#">Other</a></li>
                                                    </ul>
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->
                                        </div><!-- /.yamm-content --></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">电子产品</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Computer Cases &amp; Accessories</a></li>
                                    <li><a href="#">CPUs, Processors</a></li>
                                    <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                    <li><a href="#">Graphics, Video Cards</a></li>
                                    <li><a href="#">Interface, Add-On Cards</a></li>
                                    <li><a href="#">Laptop Replacement Parts</a></li>
                                    <li><a href="#">Memory (RAM)</a></li>
                                    <li><a href="#">Motherboards</a></li>
                                    <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">电子产品</a>
                                <ul class="dropdown-menu">
                                    <li><div class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-4">
                                                    <h2>Laptops &amp; Notebooks</h2>
                                                    <ul>
                                                        <li><a href="#">Power Supplies Power</a></li>
                                                        <li><a href="#">Power Supply Testers Sound </a></li>
                                                        <li><a href="#">Sound Cards (Internal)</a></li>
                                                        <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                        <li><a href="#">Other</a></li>
                                                    </ul>
                                                </div><!-- /.col -->

                                                <div class="col-xs-12 col-sm-4">
                                                    <h2>Computers &amp; Laptops</h2>
                                                    <ul>
                                                        <li><a href="#">Computer Cases &amp; Accessories</a></li>
                                                        <li><a href="#">CPUs, Processors</a></li>
                                                        <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                                        <li><a href="#">Graphics, Video Cards</a></li>
                                                        <li><a href="#">Interface, Add-On Cards</a></li>
                                                        <li><a href="#">Laptop Replacement Parts</a></li>
                                                        <li><a href="#">Memory (RAM)</a></li>
                                                        <li><a href="#">Motherboards</a></li>
                                                        <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                                        <li><a href="#">Motherboard Components &amp; Accs</a></li>
                                                    </ul>
                                                </div><!-- /.col -->

                                                <div class="col-xs-12 col-sm-4">
                                                    <h2>Dekstop Parts</h2>
                                                    <ul>
                                                        <li><a href="#">Power Supplies Power</a></li>
                                                        <li><a href="#">Power Supply Testers Sound</a></li>
                                                        <li><a href="#">Sound Cards (Internal)</a></li>
                                                        <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                        <li><a href="#">Other</a></li>
                                                    </ul>
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->
                                        </div><!-- /.yamm-content --></li>
                                </ul>
                            </li>


                            <li class="dropdown yamm-fw">
                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">电子产品</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-3">
                                                    <h2>Laptops &amp; Notebooks</h2>
                                                    <ul>
                                                        <li><a href="#">Power Supplies Power</a></li>
                                                        <li><a href="#">Power Supply Testers Sound </a></li>
                                                        <li><a href="#">Sound Cards (Internal)</a></li>
                                                        <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                        <li><a href="#">Other</a></li>
                                                    </ul>
                                                </div><!-- /.col -->

                                                <div class="col-xs-12 col-sm-3">
                                                    <h2>Computers &amp; Laptops</h2>
                                                    <ul>
                                                        <li><a href="#">Computer Cases &amp; Accessories</a></li>
                                                        <li><a href="#">CPUs, Processors</a></li>
                                                        <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                                        <li><a href="#">Graphics, Video Cards</a></li>
                                                        <li><a href="#">Interface, Add-On Cards</a></li>
                                                        <li><a href="#">Laptop Replacement Parts</a></li>
                                                        <li><a href="#">Memory (RAM)</a></li>
                                                        <li><a href="#">Motherboards</a></li>
                                                        <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                                        <li><a href="#">Motherboard Components &amp; Accs</a></li>
                                                    </ul>
                                                </div><!-- /.col -->

                                                <div class="col-xs-12 col-sm-3">
                                                    <h2>Desktop Parts</h2>
                                                    <ul>
                                                        <li><a href="#">Power Supplies Power</a></li>
                                                        <li><a href="#">Power Supply Testers Sound</a></li>
                                                        <li><a href="#">Sound Cards (Internal)</a></li>
                                                        <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                        <li><a href="#">Other</a></li>
                                                    </ul>
                                                </div><!-- /.col -->

                                                <div class="col-xs-12 col-sm-3">
                                                    <h2>Laptops &amp; Notebooks</h2>
                                                    <ul>
                                                        <li><a href="#">Power Supplies Power</a></li>
                                                        <li><a href="#">Power Supply Testers Sound </a></li>
                                                        <li><a href="#">Sound Cards (Internal)</a></li>
                                                        <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                        <li><a href="#">Other</a></li>
                                                    </ul>
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->
                                        </div><!-- /.yamm-content -->
                                    </li>
                                </ul>
                            </li><!-- /.yamm-fw -->


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">电子产品</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Motherboard Components &amp; Accs</a></li>
                                    <li><a href="#">Power Supplies Power</a></li>
                                    <li><a href="#">Power Supply TestersSound </a></li>
                                    <li><a href="#">Sound Cards (Internal)</a></li>
                                    <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                    <li><a href="#">Other</a></li>
                                </ul>
                            </li>


                            <li class="dropdown hidden-md">
                                <a href="#" class="dropdown-toggle" data-hover="dropdown">电子产品</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Laptops &amp; Notebooks</a></li>
                                    <li><a href="#">RTV</a></li>
                                    <li><a href="#">TV &amp; Audio</a></li>
                                    <li><a href="#">Gadgets</a></li>
                                    <li><a href="#">Cameras</a></li>
                                </ul>
                            </li>

                            <li class="dropdown navbar-right hidden-md">
                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">电子产品</a>
                                <ul class="dropdown-menu">
                                    <li><div class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-4">
                                                    <h2>Laptops &amp; Notebooks</h2>
                                                    <ul>
                                                        <li><a href="#">Power Supplies Power</a></li>
                                                        <li><a href="#">Power Supply Testers Sound </a></li>
                                                        <li><a href="#">Sound Cards (Internal)</a></li>
                                                        <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                        <li><a href="#">Other</a></li>
                                                    </ul>
                                                </div><!-- /.col -->

                                                <div class="col-xs-12 col-sm-4">
                                                    <h2>Computers &amp; Laptops</h2>
                                                    <ul>
                                                        <li><a href="#">Computer Cases &amp; Accessories</a></li>
                                                        <li><a href="#">CPUs, Processors</a></li>
                                                        <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                                        <li><a href="#">Graphics, Video Cards</a></li>
                                                        <li><a href="#">Interface, Add-On Cards</a></li>
                                                        <li><a href="#">Laptop Replacement Parts</a></li>
                                                        <li><a href="#">Memory (RAM)</a></li>
                                                        <li><a href="#">Motherboards</a></li>
                                                        <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                                        <li><a href="#">Motherboard Components &amp; Accs</a></li>
                                                    </ul>
                                                </div><!-- /.col -->

                                                <div class="col-xs-12 col-sm-4">
                                                    <h2>Dekstop Parts</h2>
                                                    <ul>
                                                        <li><a href="#">Power Supplies Power</a></li>
                                                        <li><a href="#">Power Supply Testers Sound</a></li>
                                                        <li><a href="#">Sound Cards (Internal)</a></li>
                                                        <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                        <li><a href="#">Other</a></li>
                                                    </ul>
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->
                                        </div><!-- /.yamm-content --></li>
                                </ul>
                            </li>
                        </ul><!-- /.navbar-nav -->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.navbar -->
            </div><!-- /.container -->
        </nav><!-- /.megamenu-vertical -->
        <!-- ========================================= NAVIGATION : END ========================================= -->
    </header>
    <!-- ============================================================= HEADER : END ============================================================= -->		<section id="category-grid">
        <div class="container">

            <!-- ========================================= SIDEBAR ========================================= -->
            <div class="col-xs-12 col-sm-3 no-margin sidebar narrow">

                <!-- ========================================= PRODUCT FILTER ========================================= -->
                <div class="widget">
                    <h1>商品筛选</h1>
                    <div class="body bordered">

                        <div class="category-filter">
                            <h2>品牌</h2>
                            <hr>
                            <ul>
                                <li><input checked="checked" class="le-checkbox" type="checkbox"  /> <label>Samsung</label> <span class="pull-right">(2)</span></li>
                                <li><input  class="le-checkbox" type="checkbox" /> <label>Dell</label> <span class="pull-right">(8)</span></li>
                                <li><input  class="le-checkbox" type="checkbox" /> <label>Toshiba</label> <span class="pull-right">(1)</span></li>
                                <li><input  class="le-checkbox" type="checkbox" /> <label>Apple</label> <span class="pull-right">(5)</span></li>
                            </ul>
                        </div><!-- /.category-filter -->

                        <div class="price-filter">
                            <h2>价格</h2>
                            <hr>
                            <div class="price-range-holder">

                                <input type="text" class="price-slider" value="" >

                <span class="min-max">
                    Price: ￥89 - ￥2899
                </span>
                <span class="filter-button">
                    <a href="#">筛选</a>
                </span>
                            </div>
                        </div><!-- /.price-filter -->

                    </div><!-- /.body -->
                </div><!-- /.widget -->
                <!-- ========================================= PRODUCT FILTER : END ========================================= -->
                <div class="widget">
                    <h1 class="border">特价商品</h1>
                    <ul class="product-list">
                        <li>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 no-margin">
                                    <a href="#" class="thumb-holder">
                                        <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-small-01.jpg" />
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 no-margin">
                                    <a href="#">Netbook Acer </a>
                                    <div class="price">
                                        <div class="price-prev">￥2000</div>
                                        <div class="price-current">￥1873</div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 no-margin">
                                    <a href="#" class="thumb-holder">
                                        <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-small-02.jpg" />
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 no-margin">
                                    <a href="#">PowerShot Elph 115 16MP Digital Camera</a>
                                    <div class="price">
                                        <div class="price-prev">￥2000</div>
                                        <div class="price-current">￥1873</div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 no-margin">
                                    <a href="#" class="thumb-holder">
                                        <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-small-03.jpg" />
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 no-margin">
                                    <a href="#">PowerShot Elph 115 16MP Digital Camera</a>
                                    <div class="price">
                                        <div class="price-prev">￥2000</div>
                                        <div class="price-current">￥1873</div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 no-margin">
                                    <a href="#" class="thumb-holder">
                                        <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-small-01.jpg" />
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 no-margin">
                                    <a href="#">Netbook Acer</a>
                                    <div class="price">
                                        <div class="price-prev">￥2000</div>
                                        <div class="price-current">￥1873</div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 no-margin">
                                    <a href="#" class="thumb-holder">
                                        <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-small-02.jpg" />
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 no-margin">
                                    <a href="#">PowerShot Elph 115 16MP Digital Camera</a>
                                    <div class="price">
                                        <div class="price-prev">￥2000</div>
                                        <div class="price-current">￥1873</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div><!-- /.widget -->
                <!-- ========================================= FEATURED PRODUCTS ========================================= -->
                <div class="widget">
                    <h1 class="border">推荐商品</h1>
                    <ul class="product-list">

                        <li class="sidebar-product-list-item">
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 no-margin">
                                    <a href="#" class="thumb-holder">
                                        <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-small-01.jpg" />
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 no-margin">
                                    <a href="#">Netbook Acer </a>
                                    <div class="price">
                                        <div class="price-prev">￥2000</div>
                                        <div class="price-current">￥1873</div>
                                    </div>
                                </div>
                            </div>
                        </li><!-- /.sidebar-product-list-item -->

                        <li class="sidebar-product-list-item">
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 no-margin">
                                    <a href="#" class="thumb-holder">
                                        <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-small-02.jpg" />
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 no-margin">
                                    <a href="#">PowerShot Elph 115 16MP Digital Camera</a>
                                    <div class="price">
                                        <div class="price-prev">￥2000</div>
                                        <div class="price-current">￥1873</div>
                                    </div>
                                </div>
                            </div>
                        </li><!-- /.sidebar-product-list-item -->

                        <li class="sidebar-product-list-item">
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 no-margin">
                                    <a href="#" class="thumb-holder">
                                        <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-small-03.jpg" />
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 no-margin">
                                    <a href="#">PowerShot Elph 115 16MP Digital Camera</a>
                                    <div class="price">
                                        <div class="price-prev">￥2000</div>
                                        <div class="price-current">￥1873</div>
                                    </div>
                                </div>
                            </div>
                        </li><!-- /.sidebar-product-list-item -->

                        <li class="sidebar-product-list-item">
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 no-margin">
                                    <a href="#" class="thumb-holder">
                                        <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-small-01.jpg" />
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 no-margin">
                                    <a href="#">Netbook Acer </a>
                                    <div class="price">
                                        <div class="price-prev">￥2000</div>
                                        <div class="price-current">￥1873</div>
                                    </div>
                                </div>
                            </div>
                        </li><!-- /.sidebar-product-list-item -->

                        <li class="sidebar-product-list-item">
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 no-margin">
                                    <a href="#" class="thumb-holder">
                                        <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-small-02.jpg" />
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 no-margin">
                                    <a href="#">PowerShot Elph 115 16MP Digital Camera</a>
                                    <div class="price">
                                        <div class="price-prev">￥2000</div>
                                        <div class="price-current">￥1873</div>
                                    </div>
                                </div>
                            </div>
                        </li><!-- /.sidebar-product-list-item -->

                    </ul><!-- /.product-list -->
                </div><!-- /.widget -->
                <!-- ========================================= FEATURED PRODUCTS : END ========================================= -->
            </div>
            <!-- ========================================= SIDEBAR : END ========================================= -->

            <!-- ========================================= CONTENT ========================================= -->

            <div class="col-xs-12 col-sm-9 no-margin wide sidebar">

                <section id="recommended-products" class="carousel-holder hover small">

                    <div class="title-nav">
                        <h2 class="inverse">推荐商品</h2>
                        <div class="nav-holder">
                            <a href="#prev" data-target="#owl-recommended-products" class="slider-prev btn-prev fa fa-angle-left"></a>
                            <a href="#next" data-target="#owl-recommended-products" class="slider-next btn-next fa fa-angle-right"></a>
                        </div>
                    </div><!-- /.title-nav -->

                    <div id="owl-recommended-products" class="owl-carousel product-grid-holder">
                        <div class="no-margin carousel-item product-item-holder hover size-medium">
                            <div class="product-item">
                                <div class="ribbon red"><span>sale</span></div>
                                <div class="image">
                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-11.jpg" />
                                </div>
                                <div class="body">
                                    <div class="title">
                                        <a href="single-product.html">LC-70UD1U 70" class aquos 4K ultra HD</a>
                                    </div>
                                    <div class="brand">sharp</div>
                                </div>
                                <div class="prices">
                                    <div class="price-current text-right">￥1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button">加入购物车</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.carousel-item -->

                        <div class="no-margin carousel-item product-item-holder hover size-medium">
                            <div class="product-item">
                                <div class="ribbon blue"><span>new!</span></div>
                                <div class="image">
                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-12.jpg" />
                                </div>
                                <div class="body">
                                    <div class="title">
                                        <a href="single-product.html">cinemizer OLED 3D virtual reality TV Video</a>
                                    </div>
                                    <div class="brand">zeiss</div>
                                </div>
                                <div class="prices">

                                    <div class="price-current text-right">￥1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button">加入购物车</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.carousel-item -->

                        <div class="no-margin carousel-item product-item-holder hover size-medium">
                            <div class="product-item">
                                <div class="image">
                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-13.jpg" />
                                </div>
                                <div class="body">
                                    <div class="title">
                                        <a href="single-product.html">s2340T23" full HD multi-Touch Monitor</a>
                                    </div>
                                    <div class="brand">dell</div>
                                </div>
                                <div class="prices">
                                    <div class="price-current text-right">￥1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button">加入购物车</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.carousel-item -->

                        <div class="no-margin carousel-item product-item-holder hover size-medium">
                            <div class="product-item">
                                <div class="ribbon blue"><span>new!</span></div>
                                <div class="image">
                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-14.jpg" />
                                </div>
                                <div class="body">
                                    <div class="title">
                                        <a href="single-product.html">kardon BDS 7772/120 integrated 3D</a>
                                    </div>
                                    <div class="brand">harman</div>
                                </div>
                                <div class="prices">
                                    <div class="price-current text-right">￥1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button">加入购物车</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.carousel-item -->

                        <div class="no-margin carousel-item product-item-holder hover size-medium">
                            <div class="product-item">
                                <div class="ribbon green"><span>bestseller</span></div>
                                <div class="image">
                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-15.jpg" />
                                </div>
                                <div class="body">
                                    <div class="title">
                                        <a href="single-product.html">netbook acer travel B113-E-10072</a>
                                    </div>
                                    <div class="brand">acer</div>
                                </div>
                                <div class="prices">
                                    <div class="price-current text-right">￥1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button">加入购物车</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.carousel-item -->

                        <div class="no-margin carousel-item product-item-holder hover size-medium">
                            <div class="product-item">
                                <div class="image">
                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-16.jpg" />
                                </div>
                                <div class="body">
                                    <div class="title">
                                        <a href="single-product.html">iPod touch 5th generation,64GB, blue</a>
                                    </div>
                                    <div class="brand">apple</div>
                                </div>
                                <div class="prices">
                                    <div class="price-current text-right">￥1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button">加入购物车</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.carousel-item -->

                        <div class="no-margin carousel-item product-item-holder hover size-medium">
                            <div class="product-item">
                                <div class="image">
                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-13.jpg" />
                                </div>
                                <div class="body">
                                    <div class="title">
                                        <a href="single-product.html">s2340T23" full HD multi-Touch Monitor</a>
                                    </div>
                                    <div class="brand">dell</div>
                                </div>
                                <div class="prices">
                                    <div class="price-current text-right">￥1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button">加入购物车</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.carousel-item -->

                        <div class="no-margin carousel-item product-item-holder hover size-medium">
                            <div class="product-item">
                                <div class="ribbon blue"><span>new!</span></div>
                                <div class="image">
                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-14.jpg" />
                                </div>
                                <div class="body">

                                    <div class="title">
                                        <a href="single-product.html">kardon BDS 7772/120 integrated 3D</a>
                                    </div>
                                    <div class="brand">harman</div>
                                </div>
                                <div class="prices">

                                    <div class="price-current text-right">￥1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button">加入购物车</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.carousel-item -->

                    </div><!-- /#recommended-products-carousel .owl-carousel -->
                </section><!-- /.carousel-holder -->
                <section id="gaming">
                    <div class="grid-list-products">
                        <h2 class="section-title">所有商品</h2>

                        <div class="control-bar">
                            <div id="popularity-sort" class="le-select" >
                                <select data-placeholder="sort by popularity">
                                    <option value="1">1-100 个用户</option>
                                    <option value="2">101-200 个用户</option>
                                    <option value="3">200+ 个用户</option>
                                </select>
                            </div>

                            <div id="item-count" class="le-select">
                                <select>
                                    <option value="1">24个/页</option>
                                    <option value="2">48个/页</option>
                                    <option value="3">32个/页</option>
                                </select>
                            </div>

                            <div class="grid-list-buttons">
                                <ul>
                                    <li class="grid-list-button-item active"><a data-toggle="tab" href="#grid-view"><i class="fa fa-th-large"></i> 图文</a></li>
                                    <li class="grid-list-button-item "><a data-toggle="tab" href="#list-view"><i class="fa fa-th-list"></i> 列表</a></li>
                                </ul>
                            </div>
                        </div><!-- /.control-bar -->

                        <div class="tab-content">
                            <div id="grid-view" class="products-grid fade tab-pane in active">

                                <div class="product-grid-holder">
                                    <div class="row no-margin">

                                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                            <div class="product-item">
                                                <div class="ribbon red"><span>sale</span></div>
                                                <div class="image">
                                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-01.jpg" />
                                                </div>
                                                <div class="body">
                                                    <div class="label-discount green">-50% sale</div>
                                                    <div class="title">
                                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                </div>
                                                <div class="prices">
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="price-current pull-right">￥1199.00</div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="add-cart-button">
                                                        <a href="single-product.html" class="le-button">加入购物车</a>
                                                    </div>

                                                </div>
                                            </div><!-- /.product-item -->
                                        </div><!-- /.product-item-holder -->

                                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                            <div class="product-item">
                                                <div class="ribbon blue"><span>new!</span></div>
                                                <div class="image">
                                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-02.jpg" />
                                                </div>
                                                <div class="body">
                                                    <div class="label-discount clear"></div>
                                                    <div class="title">
                                                        <a href="single-product.html">White lumia 9001</a>
                                                    </div>
                                                    <div class="brand">nokia</div>
                                                </div>
                                                <div class="prices">
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="price-current pull-right">￥1199.00</div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="add-cart-button">
                                                        <a href="single-product.html" class="le-button">加入购物车</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-item -->
                                        </div><!-- /.product-item-holder -->

                                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-03.jpg" />
                                                </div>
                                                <div class="body">
                                                    <div class="label-discount clear"></div>
                                                    <div class="title">
                                                        <a href="single-product.html">POV Action Cam</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                </div>
                                                <div class="prices">
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="price-current pull-right">￥1199.00</div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="add-cart-button">
                                                        <a href="single-product.html" class="le-button">加入购物车</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-item -->
                                        </div><!-- /.product-item-holder -->

                                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                            <div class="product-item">
                                                <div class="ribbon red"><span>sale</span></div>
                                                <div class="ribbon green"><span>bestseller</span></div>
                                                <div class="image">
                                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-04.jpg" />
                                                </div>
                                                <div class="body">
                                                    <div class="label-discount clear"></div>
                                                    <div class="title">
                                                        <a href="single-product.html">Netbook Acer TravelMate B113-E-10072</a>
                                                    </div>
                                                    <div class="brand">acer</div>
                                                </div>
                                                <div class="prices">
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="price-current pull-right">￥1199.00</div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="add-cart-button">
                                                        <a href="single-product.html" class="le-button">加入购物车</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-item -->
                                        </div><!-- /.product-item-holder -->

                                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                            <div class="product-item">
                                                <div class="ribbon red"><span>sale</span></div>
                                                <div class="image">
                                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-01.jpg" />
                                                </div>
                                                <div class="body">
                                                    <div class="label-discount green">-50% sale</div>
                                                    <div class="title">
                                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                </div>
                                                <div class="prices">
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="price-current pull-right">￥1199.00</div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="add-cart-button">
                                                        <a href="single-product.html" class="le-button">加入购物车</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-item -->
                                        </div><!-- /.product-item-holder -->

                                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                            <div class="product-item">
                                                <div class="ribbon blue"><span>new!</span></div>
                                                <div class="image">
                                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-02.jpg" />
                                                </div>
                                                <div class="body">
                                                    <div class="label-discount clear"></div>
                                                    <div class="title">
                                                        <a href="single-product.html">White lumia 9001</a>
                                                    </div>
                                                    <div class="brand">nokia</div>
                                                </div>
                                                <div class="prices">
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="price-current pull-right">￥1199.00</div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="add-cart-button">
                                                        <a href="single-product.html" class="le-button">加入购物车</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-item -->
                                        </div><!-- /.product-item-holder -->

                                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-03.jpg" />
                                                </div>
                                                <div class="body">
                                                    <div class="label-discount clear"></div>
                                                    <div class="title">
                                                        <a href="single-product.html">POV Action Cam</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                </div>
                                                <div class="prices">
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="price-current pull-right">￥1199.00</div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="add-cart-button">
                                                        <a href="single-product.html" class="le-button">加入购物车</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-item -->
                                        </div><!-- /.product-item-holder -->

                                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                            <div class="product-item">
                                                <div class="ribbon red"><span>sale</span></div>
                                                <div class="ribbon green"><span>bestseller</span></div>
                                                <div class="image">
                                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-04.jpg" />
                                                </div>
                                                <div class="body">
                                                    <div class="label-discount clear"></div>
                                                    <div class="title">
                                                        <a href="single-product.html">Netbook Acer TravelMate B113-E-10072</a>
                                                    </div>
                                                    <div class="brand">acer</div>
                                                </div>
                                                <div class="prices">
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="price-current pull-right">￥1199.00</div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="add-cart-button">
                                                        <a href="single-product.html" class="le-button">加入购物车</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-item -->
                                        </div><!-- /.product-item-holder -->

                                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-03.jpg" />
                                                </div>
                                                <div class="body">
                                                    <div class="label-discount clear"></div>
                                                    <div class="title">
                                                        <a href="single-product.html">POV Action Cam</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                </div>
                                                <div class="prices">
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="price-current pull-right">￥1199.00</div>
                                                </div>
                                                <div class="hover-area">
                                                    <div class="add-cart-button">
                                                        <a href="single-product.html" class="le-button">加入购物车</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-item -->
                                        </div><!-- /.product-item-holder -->

                                    </div><!-- /.row -->
                                </div><!-- /.product-grid-holder -->

                                <div class="pagination-holder">
                                    <div class="row">

                                        <div class="col-xs-12 col-sm-6 text-left">
                                            <ul class="pagination ">
                                                <li class="current"><a  href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">next</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-xs-12 col-sm-6">
                                            <div class="result-counter">
                                                Showing <span>1-9</span> of <span>11</span> results
                                            </div>
                                        </div>

                                    </div><!-- /.row -->
                                </div><!-- /.pagination-holder -->
                            </div><!-- /.products-grid #grid-view -->

                            <div id="list-view" class="products-grid fade tab-pane ">
                                <div class="products-list">

                                    <div class="product-item product-item-holder">
                                        <div class="ribbon red"><span>sale</span></div>
                                        <div class="ribbon blue"><span>new!</span></div>
                                        <div class="row">
                                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                <div class="image">
                                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-01.jpg" />
                                                </div>
                                            </div><!-- /.image-holder -->
                                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                <div class="body">
                                                    <div class="label-discount green">-50% sale</div>
                                                    <div class="title">
                                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                    <div class="excerpt">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt.</p>
                                                    </div>
                                                </div>
                                            </div><!-- /.body-holder -->
                                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                <div class="right-clmn">
                                                    <div class="price-current">￥1199.00</div>
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="availability"><label>存货:</label><span class="available">  现货</span></div>
                                                    <a class="le-button" href="#">加入购物车</a>
                                                </div>
                                            </div><!-- /.price-area -->
                                        </div><!-- /.row -->
                                    </div><!-- /.product-item -->


                                    <div class="product-item product-item-holder">
                                        <div class="ribbon green"><span>bestseller</span></div>
                                        <div class="row">
                                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                <div class="image">
                                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-02.jpg" />
                                                </div>
                                            </div><!-- /.image-holder -->
                                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                <div class="body">
                                                    <div class="label-discount clear"></div>
                                                    <div class="title">
                                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                    <div class="excerpt">
                                                        <div class="star-holder">
                                                            <div class="star" data-score="4"></div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt.</p>
                                                    </div>
                                                </div>
                                            </div><!-- /.body-holder -->
                                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                <div class="right-clmn">
                                                    <div class="price-current">￥1199.00</div>
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="availability"><label>存货:</label><span class="not-available">无货</span></div>
                                                    <a class="le-button disabled" href="#">加入购物车</a>
                                                </div>
                                            </div><!-- /.price-area -->
                                        </div><!-- /.row -->
                                    </div><!-- /.product-item -->


                                    <div class="product-item product-item-holder">
                                        <div class="ribbon red"><span>sell</span></div>
                                        <div class="row">
                                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                <div class="image">
                                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-03.jpg" />
                                                </div>
                                            </div><!-- /.image-holder -->
                                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                <div class="body">
                                                    <div class="label-discount clear"></div>
                                                    <div class="title">
                                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                    <div class="excerpt">
                                                        <div class="star-holder">
                                                            <div class="star" data-score="2"></div>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt. </p>
                                                    </div>
                                                </div>
                                            </div><!-- /.body-holder -->
                                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                <div class="right-clmn">
                                                    <div class="price-current">￥1199.00</div>
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="availability"><label>存货:</label><span class="available">现货</span></div>
                                                    <a class="le-button" href="#">加入购物车</a>
                                                </div>
                                            </div><!-- /.price-area -->
                                        </div><!-- /.row -->
                                    </div><!-- /.product-item -->

                                    <div class="product-item product-item-holder">
                                        <div class="row">
                                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                <div class="image">
                                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-04.jpg" />
                                                </div>
                                            </div><!-- /.image-holder -->
                                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                <div class="body">
                                                    <div class="label-discount green">-50% sale</div>
                                                    <div class="title">
                                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                    <div class="excerpt">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt. </p>
                                                    </div>
                                                </div>
                                            </div><!-- /.body-holder -->
                                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                <div class="right-clmn">
                                                    <div class="price-current">￥1199.00</div>
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="availability"><label>存货:</label><span class="available">  现货</span></div>
                                                    <a class="le-button" href="#">加入购物车</a>
                                                </div>
                                            </div><!-- /.price-area -->
                                        </div><!-- /.row -->
                                    </div><!-- /.product-item -->

                                    <div class="product-item product-item-holder">
                                        <div class="ribbon green"><span>bestseller</span></div>
                                        <div class="row">
                                            <div class="no-margin col-xs-12 col-sm-4 image-holder">
                                                <div class="image">
                                                    <img alt="" src="static/images/blank.gif" data-echo="static/images/products/product-05.jpg" />
                                                </div>
                                            </div><!-- /.image-holder -->
                                            <div class="no-margin col-xs-12 col-sm-5 body-holder">
                                                <div class="body">
                                                    <div class="label-discount clear"></div>
                                                    <div class="title">
                                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                                    </div>
                                                    <div class="brand">sony</div>
                                                    <div class="excerpt">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis euismod erat sit amet porta. Etiam venenatis ac diam ac tristique. Morbi accumsan consectetur odio ut tincidunt.</p>
                                                    </div>
                                                </div>
                                            </div><!-- /.body-holder -->
                                            <div class="no-margin col-xs-12 col-sm-3 price-area">
                                                <div class="right-clmn">
                                                    <div class="price-current">￥1199.00</div>
                                                    <div class="price-prev">￥1399.00</div>
                                                    <div class="availability"><label>存货:</label><span class="available">  现货</span></div>
                                                    <a class="le-button" href="#">加入购物车</a>
                                                </div>
                                            </div><!-- /.price-area -->
                                        </div><!-- /.row -->
                                    </div><!-- /.product-item -->

                                </div><!-- /.products-list -->

                                <div class="pagination-holder">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 text-left">
                                            <ul class="pagination">
                                                <li class="current"><a  href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">next</a></li>
                                            </ul><!-- /.pagination -->
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="result-counter">
                                                Showing <span>1-9</span> of <span>11</span> results
                                            </div><!-- /.result-counter -->
                                        </div>
                                    </div><!-- /.row -->
                                </div><!-- /.pagination-holder -->

                            </div><!-- /.products-grid #list-view -->

                        </div><!-- /.tab-content -->
                    </div><!-- /.grid-list-products -->

                </section><!-- /#gaming -->
            </div><!-- /.col -->
            <!-- ========================================= CONTENT : END ========================================= -->
        </div><!-- /.container -->
    </section><!-- /#category-grid -->		<!-- ============================================================= FOOTER ============================================================= -->

