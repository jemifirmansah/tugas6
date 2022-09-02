<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop | E-Shopper</title>
    <link href="{{url('public')}}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/css/price-range.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/css/animate.css" rel="stylesheet">
	<link href="{{url('public')}}/assets/css/main.css" rel="stylesheet">
	<link href="{{url('public')}}/assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('public')}}/assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('public')}}/assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('public')}}/assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{url('public')}}/assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="home"><img src="{{url('public')}}/assets/images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="home">Home</a></li>
							<li><a href="shop">Product</a></li>
							<li><a href="product">Product Details</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<form action="{{ url('shop/filter') }}" method="POST">
							@csrf
                                <div class="header-search-wrapper">
                                    <label for="#" class="sr-only">Search</label>
                                    <input type="text" class="form-control" name="nama" value="{{ $nama ?? '' }}">
                                </div><!-- End .header-search-wrapper -->
                            </form>
						</div>
					</div>
				</div>
				</div>
			</div>
	</header>


	
	<section id="advertisement">
		<div class="container">
		<div class="products">
                        <div class="row">
                            @foreach ($list_produk as $produk)
                            <div class="col-4 col-md-3 col-lg-3 col-xl-2">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="{{ url('product', $produk->id) }}">
                                            <img src="{{ url('public') }}/assets/images/home/product1.jpg" alt="Product image" class="product-image">
                                        </a>
										<div class="text-center">
											<button type="button" class="btn btn-fefault cart">
												<i class="fa fa-shopping-cart"></i>
												Add to cart
											</button>
										</div>
                                    </figure><!-- End .product-media -->
                                    <div class="productinfo text-center">
                                        <h4 class="product-title"><a href="{{ url('product', $produk->id) }}">{{ $produk->nama }}</a></h4>
                                        <div class="product-price">
                                            stok :{{ $produk->stok }}
                                        </div>
                                        <div class="product-price">
                                            Rp.{{number_format($produk->harga) }}
                                        </div>
                                    </div>
                                </div><!-- End .product -->
                            </div>
                            @endforeach
                        </div><!-- End .row -->
		</div>
	</section>
	

	<footer id="footer"><!--Footer-->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{url('public')}}/assets/js/jquery.js"></script>
	<script src="{{url('public')}}/assets/js/price-range.js"></script>
    <script src="{{url('public')}}/assets/js/jquery.scrollUp.min.js"></script>
	<script src="{{url('public')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{url('public')}}/assets/js/jquery.prettyPhoto.js"></script>
    <script src="{{url('public')}}/assets/js/main.js"></script>
</body>
</html>