<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('/partials/header');?>
	<title>SHIPPING & RETURNS</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="/assets/home_view_style.css">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <h2>Welcome!</h2>
    </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="row">
            <div class="col-md-11">
            	<legend><h2>Shipping</h2></legend>
                <h4 class="about_us">Free Standard Shipping on U.S. Orders Over $75</h4>
            </div>

            <div class="col-md-11">
            	<legend><h2>Returns</h2></legend>
                <h4 class="about_us">We accept returns within 30 days of purchase. All original tags must be attached.</h4>
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
    <label for="email"></label>
    <input type="email" class="form-control" id="email" placeholder="Email address...">
  </div>
  <button type="submit" class="btn btn-secondary" id="submit">Submit</button>
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
        <li><a href="/users/shipping_returns">Shipping & Returns</a></li>
     </ul>
   </div>
   <div class="col-xs-4">
      <h3 class="footer_header">About Us</h3>
       <ul>
         <li><a href="#">History</a></li>
         <li><a href="#">Contact Us</a></li>
       </ul>
   </div>
  </div>
</div>
</div>


</body>
</html>