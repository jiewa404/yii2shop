
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
    </header>

    <!-- ============================================================= HEADER : END ============================================================= -->		<section id="cart-page">
        <div class="container">
            <!-- ========================================= CONTENT ========================================= -->
            <div class="col-xs-12 col-md-9 items-holder no-margin">

                <div class="row no-margin cart-item">
                    <div class="col-xs-12 col-sm-2 no-margin">
                        <a href="#" class="thumb-holder">
                            <img class="lazy" alt="" src="static/images/products/product-small-01.jpg" />
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-5 ">
                        <div class="title">
                            <a href="#">white lumia 9001</a>
                        </div>
                        <div class="brand">sony</div>
                    </div>

                    <div class="col-xs-12 col-sm-3 no-margin">
                        <div class="quantity">
                            <div class="le-quantity">
                                <form>
                                    <a class="minus" href="#reduce"></a>
                                    <input name="quantity" readonly="readonly" type="text" value="1" />
                                    <a class="plus" href="#add"></a>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-2 no-margin">
                        <div class="price">
                            $2000.00
                        </div>
                        <a class="close-btn" href="#"></a>
                    </div>
                </div><!-- /.cart-item -->

                <div class="row no-margin cart-item">
                    <div class="col-xs-12 col-sm-2 no-margin">
                        <a href="#" class="thumb-holder">
                            <img class="lazy" alt="" src="static/images/products/product-small-01.jpg" />
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-5">
                        <div class="title">
                            <a href="#">white lumia 9001 </a>
                        </div>
                        <div class="brand">sony</div>
                    </div>

                    <div class="col-xs-12 col-sm-3 no-margin">
                        <div class="quantity">
                            <div class="le-quantity">
                                <form>
                                    <a class="minus" href="#reduce"></a>
                                    <input name="quantity" readonly="readonly" type="text" value="1" />
                                    <a class="plus" href="#add"></a>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-2 no-margin">
                        <div class="price">
                            $2000.00
                        </div>
                        <a class="close-btn" href="#"></a>
                    </div>
                </div><!-- /.cart-item -->

                <div class="row no-margin cart-item">
                    <div class="col-xs-12 col-sm-2 no-margin">
                        <a href="#" class="thumb-holder">
                            <img class="lazy" alt="" src="static/images/products/product-small-01.jpg" />
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-5">
                        <div class="title">
                            <a href="#">white lumia 9001 </a>
                        </div>
                        <div class="brand">sony</div>
                    </div>

                    <div class="col-xs-12 col-sm-3 no-margin">
                        <div class="quantity">
                            <div class="le-quantity">
                                <form>
                                    <a class="minus" href="#reduce"></a>
                                    <input name="quantity" readonly="readonly" type="text" value="1" />
                                    <a class="plus" href="#add"></a>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-2 no-margin">
                        <div class="price">
                            $2000.00
                        </div>
                        <a class="close-btn" href="#"></a>
                    </div>
                </div><!-- /.cart-item -->

                <div class="row no-margin cart-item">
                    <div class="col-xs-12 col-sm-2 no-margin">
                        <a href="#" class="thumb-holder">
                            <img class="lazy" alt="" src="static/images/products/product-small-01.jpg" />
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-5">
                        <div class="title">
                            <a href="#">white lumia 9001 </a>
                        </div>
                        <div class="brand">sony</div>
                    </div>

                    <div class="col-xs-12 col-sm-3 no-margin">
                        <div class="quantity">
                            <div class="le-quantity">
                                <form>
                                    <a class="minus" href="#reduce"></a>
                                    <input name="quantity" readonly="readonly" type="text" value="1" />
                                    <a class="plus" href="#add"></a>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-2 no-margin">
                        <div class="price">
                            $2000.00
                        </div>
                        <a class="close-btn" href="#"></a>
                    </div>
                </div><!-- /.cart-item -->
            </div>
            <!-- ========================================= CONTENT : END ========================================= -->

            <!-- ========================================= SIDEBAR ========================================= -->

            <div class="col-xs-12 col-md-3 no-margin sidebar ">
                <div class="widget cart-summary">
                    <h1 class="border">商品购物车</h1>
                    <div class="body">
                        <ul class="tabled-data no-border inverse-bold">
                            <li>
                                <label>购物车总价</label>
                                <div class="value pull-right">$8434.00</div>
                            </li>
                            <li>
                                <label>运费</label>
                                <div class="value pull-right">$10</div>
                            </li>
                        </ul>
                        <ul id="total-price" class="tabled-data inverse-bold no-border">
                            <li>
                                <label>订单总价</label>
                                <div class="value pull-right">$8444.00</div>
                            </li>
                        </ul>
                        <div class="buttons-holder">
                            <a class="le-button big" href="checkout.html" >去结算</a>
                            <a class="simple-link block" href="index.html" >继续购物</a>
                        </div>
                    </div>
                </div><!-- /.widget -->

                <div id="cupon-widget" class="widget">
                    <h1 class="border">使用优惠券</h1>
                    <div class="body">
                        <form>
                            <div class="inline-input">
                                <input data-placeholder="请输入优惠券码" type="text" />
                                <button class="le-button" type="submit">使用</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.widget -->
            </div><!-- /.sidebar -->

            <!-- ========================================= SIDEBAR : END ========================================= -->
        </div>
    </section>		<!-- ============================================================= FOOTER ============================================================= -->

