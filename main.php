<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
  <!-- <link rel="stylesheet" href="footer/css/ionicons.min.css">
  <link rel="stylesheet" href="footer/css/style.css"> -->
<style>
  * {
    box-sizing: border-box;
  }

  body {
    font-family: Arial;
    padding: 10px;
    background: #f1f1f1;
  }

  /* Header/Blog Title */
  .header {
    padding: 30px;
    text-align: center;
    background: white;
  }

  .header h1 {
    font-size: 50px;
  }

  /* Style the top navigation bar */
  .topnav {
    overflow: hidden;
    background-color: #333;
  }

  /* Style the topnav links */
  .topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  #hamada a:hover{
    background-color: #333;
    color: white;
  }

  /* Change color on hover */
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }

  /* Create two unequal columns that floats next to each other */
  /* Left column */
  .leftcolumn {   
    float: left;
    width: 75%;
  }

  /* Right column */
  .rightcolumn {
    float: left;
    width: 25%;
    background-color: #f1f1f1;
    padding-left: 20px;
  }

  /* Fake image */
  .fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
  }
   .fakeimg img{
      width: 100;
      height: 100%;
  } 

  /* Add a card effect for articles */
  .card {
    background-color: white;
    padding: 20px;
    margin-top: 20px;
  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Footer */
  .footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
  }

  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
      width: 100%;
      padding: 0;
    }
  }

  /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
  @media screen and (max-width: 400px) {
    .topnav a {
      float: none;
      width: 100%;
    }
  }
</style>
  <title>OnlineMarkert</title>
</head>
<body >
  

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-static-top" href="#"><h2>THE SHOP</h2></a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="product.php">PRODUCT</a></li>
        <li><a href="Category.php">CATEGORY</a></li>
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

<div class="header" style="background-image: url(imges/gif.jpg);">
  <h1>My SuperMarket</h1>
  <p>Resize the browser window to see the effect.</p>
 </div>
    <!--block one-->
 <div class="row">
  <div class="leftcolumn">
    <div class="card"><!--start of contanier-->
      <h2>Offer Markert</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg" style="height:200px;">
        <img src="imges/1.jpg" alt="">
        <img src="imges/2.jpg" alt="">
        <img src="imges/4.jpg" alt="">
        <img src="imges/12.jpg" alt="">
        <img src="imges/10.jpg" alt="">
        <img src="imges/7.jpg" alt="">
      </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
 
    <!--block tow-->
    <div class="card">
      <h2>New PRODUCT</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">
        <img src="imges/images/item-01.jpg">
        <img src="imges/images/item-02.jpg">
        <img src="imges/images/item-08.jpg">
        <img src="imges/images/item-07.jpg">
        <img src="imges/images/item-05.jpg">
        <img src="imges/images/item-06.jpg">
        <img src="imges/images/item-17.jpg">
        <img src="imges/images/item-14.jpg"> 
      </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div><!--end of container-->


  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">
        <img src="imges/instgram.png"  style="border: 20px; margin: 8px; cursor:pointer" >
        <img src="imges/facebook2.jpg"  style="border: 20px; margin: 8px; cursor:pointer" >
        <img src="imges/tiwter.png" style="border: 20px; margin: 8px; cursor:pointer" >
      </div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>



    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg" style="background:white">
          <a href="https:www.facebook.com" id="hamada"><p>Meats Product Offer</p></a>
      </div>
      <div class="fakeimg" style="background:white">
        <a href="https:www.facebook.com" id="hamada"><p>Milk product Offer</p></a>
      </div>
      <div class="fakeimg" style="background:white">
        <a href="https:www.facebook.com" id="hamada"><p>Vegtable product Offer</p></a>
      </div>
    </div>

    <div class="card">
      <h3>Follow Us</h3>
      <a id="hamada" href="https:www.facebook.com" style="text-decoration: none;"><p>www.onlineMarket</p></a>
    </div>
  </div>
</div> 



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</body>
</html>


<!--
  <div id="main" style="width: 300px; height: 300px; background-color: antiquewhite ;float: left; ">
    <img src="imges/2.jpg" alt="" width="100%" height="85%"><br>
    <button class="form-control btn btn-primary" style="border-radius: 20px;width: 100px;margin-left: 80px;margin-top: 6px;">Add to car</button>
  </div>
  

  <div id="main" style="width: 300px; height: 300px; background-color: antiquewhite ;float: left;">
    <img src="imges/2.jpg" alt="" width="100%" height="85%"><br>
    <button class="form-control btn btn-primary" style="border-radius: 20px;width: 100px;margin-left: 80px;margin-top: 6px;">Add to car</button>
  </div>

<div id="main" style="width: 300px; height: 300px; background-color: antiquewhite ;float: left;">
    <img src="imges/2.jpg" alt="" width="100%" height="85%"><br>
    <button class="form-control btn btn-primary" style="border-radius: 20px;width: 100px;margin-left: 80px;margin-top: 6px;">Add to car</button>
  </div>
-->