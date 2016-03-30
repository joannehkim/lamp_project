<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome to NastyKev</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <title></title>
<!-- CSS here -->
<link rel="stylesheet" type="text/css" href="/assets/home_view_style.css">

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>

<?php
$this->load->view('/partials/header.php');
?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/assets/banner_2.png" alt="Chania">
    </div>

    <div class="item">
      <img src="/assets/banner_1.png" alt="Chania">
    </div>

    <div class="item">
      <img src="/assets/banner_3.png" alt="Flower">
    </div>

    <div class="item">
      <img src="/assets/banner_4.png" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="shop">
SHOP WOMEN
</div>
<div class="shop">
SHOP MEN
</div>

<div id = 'container'>
	<div class = 'subcontent'>
		<a href = '/Products/item'>
    <img src="/assets/adidas.png">
    <img src = '/assets/image_2.png'></a>
    <div class="shop_bottom">
      SHOP OUTERWEAR
    </div>
	</div>
	<div class = 'subcontent'>
    <img src="/assets/denim.png">
		<img src = '/assets/image_1.png'>
    <div class="shop_bottom">
      SHOP NEW ARRIVALS
    </div>
	</div>
	<div class = 'subcontent'>
    <img src="/assets/basics.png">
		<img src = '/assets/image_3.png'>
    <div class="shop_bottom">
      SHOP SHIRTS
    </div>
	</div>
</div>



<div class="footer">
  <div class="col-l-5"></div>
  <div class="col-l-4" id="newsletter">
    <h3>NEWSLETTER</h3>
    <p class="white">Subscribe to our newsletter and get 10% off your first purchase!</p>
<form class="form-inline" role="form">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <button type="submit" class="btn btn-default" id="submit">Submit</button>
</form>
  <div class="col-xs-4">
    <h3 class="footer_header">My Account</h3>
      <ul>
        <li><a href="#">Order History</a></li>
      </ul>
  </div>
  <div class="col-xs-4 col-centered">
    <h3 class="footer_header">Customer Care</h3>
      <ul>
        <li><a href="#">Shipping Information</a></li>
        <li><a href="#">Returns</a></li>
     </ul>
   </div>
   <div class="col-xs-4">
      <h3 class="footer_header">About Us</h3>
       <ul>
         <li><a href="#">Contact</a></li>
         <li><a href="#">Store Location</a></li>
       </ul>
   </div>
  </div>
</div>
</div>

</body>
</html>