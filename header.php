<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Shop | Pari Designer Boutique</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="<?=APP_URL?>assets/img/icon/logo.png">

<link rel="stylesheet" href="<?=APP_URL?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=APP_URL?>assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?=APP_URL?>assets/css/slicknav.css">
<link rel="stylesheet" href="<?=APP_URL?>assets/css/flaticon.css">
<link rel="stylesheet" href="<?=APP_URL?>assets/css/animate.min.css">
<link rel="stylesheet" href="<?=APP_URL?>assets/css/price_rangs.css">
<link rel="stylesheet" href="<?=APP_URL?>assets/css/magnific-popup.css">
<link rel="stylesheet" href="<?=APP_URL?>assets/css/fontawesome-all.min.css">
<link rel="stylesheet" href="<?=APP_URL?>assets/css/themify-icons.css">
<link rel="stylesheet" href="<?=APP_URL?>assets/css/slick.css">
<link rel="stylesheet" href="<?=APP_URL?>assets/css/nice-select.css">
<link rel="stylesheet" href="<?=APP_URL?>assets/css/style.css">
</head>
<body>
<style type="text/css">
    .errorShow p{
            font-family: "Jost",sans-serif;
    color: #301A22;
    font-size: 12px;
    line-height: 30px;
    margin-bottom: -12px;
    font-weight: 400;
    line-height: 1.6;
    }
</style>
<div id="preloader-active">
<div class="preloader d-flex align-items-center justify-content-center">
<div class="preloader-inner position-relative">
<div class="preloader-circle"></div>
<div class="preloader-img pere-text">
<img src="assets/img/icon/logo.png" alt="loder">
</div>
</div>
</div>
</div>

<header>
<div class="header-area">
<div class="header-top d-none d-sm-block">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="d-flex justify-content-between flex-wrap align-items-center">
<div class="header-info-left">
<ul>
<li><a href="#">About Us</a></li>
<li><a href="#">Privacy</a></li>
<li><a href="#">FAQ</a></li>
<li><a href="#">Careers</a></li>
</ul>
</div>
<div class="header-info-right d-flex">
<ul class="order-list">
<li><a href="#">My Wishlist</a></li>
<li><a href="#">Track Your Order</a></li>
</ul>
<ul class="header-social">
<li><a href="#"><i class="fab fa-facebook"></i></a></li>
<li> <a href="#"><i class="fab fa-instagram"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
<li> <a href="#"><i class="fab fa-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="header-mid header-sticky">
<div class="container">
<div class="menu-wrapper">

<div class="logo">
<a href="<?=APP_URL?>"><img src="<?=APP_URL?>assets/img/logo/logo.png" style="width:25%" alt=""></a>
</div>

<div class="main-menu d-none d-lg-block">
<nav>

<ul id="navigation">

<li><a href="<?=APP_URL?>">Home</a></li>
<li><a href="categories.html">Women</a></li>
<li><a href="<?=APP_URL?>measurements">Measurements</a></li>
<li class="new"><a href="categories.html">Baby Collection</a></li>
<li><a href="#">Pages <i class="fas fa-angle-down"></i></a>
<ul class="submenu">
<li><a href="<?=APP_URL?>login">Login</a></li>
<li><a href="cart.html">Cart</a></li>
<li><a href="pro-details.html">Product Details</a></li>
<li><a href="checkout.html">Product Checkout</a></li>
</ul>
</li>
<li><a href="blogs.html">Blog</a></li>

<li><a href="<?=APP_URL?>contact">Contact</a></li>
</ul>
</nav>
</div>

<div class="header-right">
<ul>
<li>
<div class="nav-search search-switch hearer_icon">
<a id="search_1" href="javascript:void(0)">
<span class="flaticon-search"></span>
</a>
</div>
</li>
<li> <?php if(!empty(logindata())){ ?>
	<a href="<?=APP_URL?>account"><span class="flaticon-user"></span></a>
<?php }else{
	?>
	<a href="<?=APP_URL?>login"><span class="flaticon-user"></span></a>
	<?php
} ?>
</li>
<li class="cart"><a href="cart.html"><span class="flaticon-shopping-cart"></span></a> </li>
</ul>
</div>
</div>

<div class="search_input" id="search_input_box">
<form class="search-inner d-flex justify-content-between ">
<input type="text" class="form-control" id="search_input" placeholder="Search Here">
<button type="submit" class="btn"></button>
<span class="ti-close" id="close_search" title="Close Search"></span>
</form>
</div>

<div class="col-12">
<div class="mobile_menu d-block d-lg-none"></div>
</div>
</div>
</div>
<div class="header-bottom text-center">

<p>Sale Up To 50% Biggest Discounts. Hurry! Limited Perriod Offer <a href="#" class="browse-btn">Shop Now</a></p>
</div>
</div>
</header>
