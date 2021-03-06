<?php
    
    $index = 'pepci';
    $cat = 'Drink Food';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
			body{margin-top:20px;
	background:#f1f2f7;
	}

	/*panel*/
	.panel {
	    border: none;
	    box-shadow: none;
	}

	.panel-heading {
	    border-color:#eff2f7 ;
	    font-size: 16px;
	    font-weight: 300;
	}

	.panel-title {
	    color: #2A3542;
	    font-size: 14px;
	    font-weight: 400;
	    margin-bottom: 0;
	    margin-top: 0;
	    font-family: 'Open Sans', sans-serif;
	}


	/*product list*/

	.prod-cat li a{
	    border-bottom: 1px dashed #d9d9d9;
	}

	.prod-cat li a {
	    color: #3b3b3b;
	}

	.prod-cat li ul {
	    margin-left: 30px;
	}

	.prod-cat li ul li a{
	    border-bottom:none;
	}
	.prod-cat li ul li a:hover,.prod-cat li ul li a:focus, .prod-cat li ul li.active a , .prod-cat li a:hover,.prod-cat li a:focus, .prod-cat li a.active{
	    background: none;
	    color: #ff7261;
	}

	.pro-lab{
	    margin-right: 20px;
	    font-weight: normal;
	}

	.pro-sort {
	    padding-right: 20px;
	    float: left;
	}

	.pro-page-list {
	    margin: 5px 0 0 0;
	}

	.product-list img{
	    width: 100%;
	    border-radius: 4px 4px 0 0;
	    -webkit-border-radius: 4px 4px 0 0;
	}

	.product-list .pro-img-box {
	    position: relative;
	}
	.adtocart {
	    background: #fc5959;
	    width: 50px;
	    height: 50px;
	    border-radius: 50%;
	    -webkit-border-radius: 50%;
	    color: #fff;
	    display: inline-block;
	    text-align: center;
	    border: 3px solid #fff;
	    left: 45%;
	    bottom: -25px;
	    position: absolute;
	}

	.adtocart i{
	    color: #fff;
	    font-size: 25px;
	    line-height: 42px;
	}

	.pro-title {
	    color: #5A5A5A;
	    display: inline-block;
	    margin-top: 20px;
	    font-size: 16px;
	}

	.product-list .price {
	    color:#fc5959 ;
	    font-size: 15px;
	}

	.pro-img-details {
	    margin-left: -15px;
	}

	.pro-img-details img {
	    width: 100%;
	}

	.pro-d-title {
	    font-size: 16px;
	    margin-top: 0;
	}

	.product_meta {
	    border-top: 1px solid #eee;
	    border-bottom: 1px solid #eee;
	    padding: 10px 0;
	    margin: 15px 0;
	}

	.product_meta span {
	    display: block;
	    margin-bottom: 10px;
	}
	.product_meta a, .pro-price{
	    color:#fc5959 ;
	}

	.pro-price, .amount-old {
	    font-size: 18px;
	    padding: 0 10px;
	}

	.amount-old {
	    text-decoration: line-through;
	}

	.quantity {
	    width: 120px;
	}

	.pro-img-list {
	    margin: 10px 0 0 -15px;
	    width: 100%;
	    display: inline-block;
	}

	.pro-img-list a {
	    float: left;
	    margin-right: 10px;
	    margin-bottom: 10px;
	}

	.pro-d-head {
	    font-size: 18px;
	    font-weight: 300;
	}
	img{
		width: 250px;
		height: 220px;
	}
</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body >
	


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-static-top" href="#"><h2>THE SHOP</h2></a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="main.php">Home</a></li>
        <li><a href="product.php">PRODUCT</a></li>
        <li class="active"><a href="Category.php">CATEGORY</a></li>
        <li><a href="#">ABOUT AS</a></li>
      </ul>
      <form class="navbar-form navbar-left" action="/action_page.php">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="search">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </nav>















  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<div class="container bootdey">
     <div class="col-md-3">
        <section class="panel">
            <div class="panel-body">
                <input type="text" placeholder="Keyword Search" class="form-control" />
            </div>
        </section>
        <section class="panel">
            <header class="panel-heading">
                Category
            </header>
            <div class="panel-body">
                <ul class="nav prod-cat">
                    <li class="<?php $cat=='Drink Food'? 'active':'' ?>">
                        <a href="#" ><i class="fa fa-angle-right"></i> Drink Food
                        </a>
                        <ul class="nav">
                            <li class="<?php $index=='pepci'? 'active':'' ?>">
                                <a href="#">- pepci</a></li>
                            <li class="<?php  $index=='cocakola'? 'active':'' ?>">
                                <a href="#">- cocakola</a></li>

                            <li class="<?php $index=='Gold'? 'active':'' ?>"><a href="#">- Gold</a></li>
                        </ul>
                    </li>
                    <li class="<?php $cat=='Drink Food'? 'active':'' ?>">
                        <a href="#"><i class="fa fa-angle-right"></i> Vegtables</a>
                    </li>
                    <li class="<?php $cat=='Drink Food'? 'active':'' ?>">
                        <a href="#"><i class="fa fa-angle-right"></i> Milk Products </a>
                    </li>
                    <li class="<?php $cat=='Drink Food'? 'active':'' ?>">
                        <a href="#"><i class="fa fa-angle-right"></i> Meat Product</a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="panel">
            <header class="panel-heading">
                Price Range
            </header>
            <div class="panel-body sliders">
                <div id="slider-range" class="slider"></div>
                <div class="slider-info">
                    <span id="slider-range-amount"></span>
                </div>
            </div>
        </section>
        <section class="panel">
            <header class="panel-heading">
                Filter
            </header>
            <div class="panel-body">
                <form role="form product-form">
                    <div class="form-group">
                        <label>Drink</label>
                        <select class="form-control hasCustomSelect" style="-webkit-appearance: menulist-button; width: 231px; position: absolute; opacity: 0; height: 34px; font-size: 12px;">
                            <option>pepic</option>
                            <option>Cocakola</option>
                            <option>Miranda</option>
                            <option>Fanta</option>
                        </select>
                        <span class="customSelect form-control" style="display: inline-block;"><span class="customSelectInner" style="width: 209px; display: inline-block;">Wallmart</span></span>
                    </div>
                    <div class="form-group">
                        <label>Food</label>
                        <select class="form-control hasCustomSelect" style="-webkit-appearance: menulist-button; width: 231px; position: absolute; opacity: 0; height: 34px; font-size: 12px;">
                            <option>White</option>
                            <option>Black</option>
                            <option>Red</option>
                            <option>Green</option>
                        </select>
                        <span class="customSelect form-control" style="display: inline-block;"><span class="customSelectInner" style="width: 209px; display: inline-block;">White</span></span>
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <select class="form-control hasCustomSelect" style="-webkit-appearance: menulist-button; width: 231px; position: absolute; opacity: 0; height: 34px; font-size: 12px;">
                            <option>Small</option>
                            <option>Medium</option>
                            <option>Large</option>
                            <option>Extra Large</option>
                        </select>
                        <span class="customSelect form-control" style="display: inline-block;"><span class="customSelectInner" style="width: 209px; display: inline-block;">Small</span></span>
                    </div>
                    <button class="btn btn-primary" type="submit">Filter</button>
                </form>
            </div>
        </section>
        <section class="panel">
            <header class="panel-heading">
                Best Seller
            </header>
            <div class="panel-body">
                <div class="best-seller">
                    <article class="media">
                        <a class="pull-left thumb p-thumb">
                            <img src="imges/images/item-08.jpg" />
                        </a>
                        <div class="media-body">
                            <a href="#" class="p-head">Item One Tittle</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </article>
                    <article class="media">
                        <a class="pull-left thumb p-thumb">
                            <img src="imges/images/item-05.jpg" />
                        </a>
                        <div class="media-body">
                            <a href="#" class="p-head">Item Two Tittle</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </article>
                    <article class="media">
                        <a class="pull-left thumb p-thumb">
                            <img src="imges/images/item-07.jpg" />
                        </a>
                        <div class="media-body">
                            <a href="#" class="p-head">Item Three Tittle</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </div> 
    <div class="col-md-9">
        <section class="panel">
            <div class="panel-body">
                <div class="pull-right">
                    <ul class="pagination pagination-sm pro-page-list">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">??</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="row product-list">
            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="imges/1.jpg"/>
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$300.00</p>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="imges/4.jpg" alt="" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$400.00</p>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="imges/6.jpg"/>
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$40.00</p>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="imges/11.jpg" alt="" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$80.00</p>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="imges/6.jpg" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$712.00</p>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="imges/10.jpg"/>
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$840.00</p>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="imges/6.jpg" alt="" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$10.00</p>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="imges/12.jpg" alt="" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$105.00</p>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="imges/7.jpeg" alt="" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$735.00</p>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="imges/7.jpg" alt="" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$70.00</p>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="imges/9.jpg" alt="" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$100.00</p>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="imges/3.jpg" alt="" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$50.00</p>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="imges/6.jpg" alt="" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$300.00</p>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="imges/3.jpg" alt="" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$30.00</p>
                    </div>
                </section>
            </div>

            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="imges/1.jpg" alt="" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                        </h4>
                        <p class="price">$35.00</p>
                    </div>
                </section>
            </div>
     
        </div>
    </div>
</div>




  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>