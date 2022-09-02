<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details | E-Shopper</title>
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
    <link rel="shortcut icon" href="{{url('public')}}/assets/images/ico/favicon.ico">
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
								<li><a href="Login"><i class="fa fa-lock"></i> Login</a></li>
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
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section>
		<div class="container">				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{ url('public') }}/assets/images/home/product1.jpg" alt="" />
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2>{{$produk->nama}}</h2>
								<p>Web ID: 1089772</p>
								<img src="{{url('public')}}/assets/images/product-details/rating.png" alt="" />
								<span>
									<span>Rp. {{number_format($produk->harga)}}</span>
									<label>Quantity:</label>
									<input type="text" value="3" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
								<p>{!! nl2br($produk->deskripsi) !!}</p>
								<a href=""><img src="{{url('public')}}/assets/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
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