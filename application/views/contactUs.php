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

<style>

	#container{
		height: 500px;
		margin-top: 70px;
	}
	.ul_head{
		font-weight: bold;
		font-size: 15px;
	}
	.ul_title{
		text-align: center;
	}
	.bold{
		font-size: 12px
		font-weight: bold;
	}
	ul{
		list-style-type: none;
	}
	.home, .contact, .storeInfo{
		display: inline-block;
		vertical-align: top;
		margin: 5px 0px 0px;
	}
	iframe{
		height: 200px;
		width: 308px;
	}
	.home{
		height: 200px;
		width: 200px;
		padding: 30px 0px 0px ;
		margin-left: 65px;
	}
	.contact{
		margin-left: 62px;
	}
	.storeInfo{
		margin-left:100px;
	}

</style>

</head>

<?php
$this->load->view('/partials/header.php');
?>
<body>

<div id='container'>

	<div class="home">
		<p><a class='black' href="/Products">HOME</a></p>
		<p class='line'><a class='black' href="#">ABOUT US</a></p>
	</div>

	<div class="contact">
		<h1 class='ul_title'>CONTACT US</h1>
		<ul>
			<li><img src="/assets/phone.png"><span class='ul_head'>PHONE</span></li>
			<li>USA: 1-175-555-KPCK <span class='bold'>(IN ENGLISH & KOREAN)</span></li>
			<li>INTERNATIONAL: +1-562-555-SWAG <span class='bold'>(ENGLISH ONLY)</span></li>
			<li>FAX: +1-818-555-2016</li>
		</ul>

		<ul>
			<li><img src="/assets/mail.png"><span class='ul_head'>EMAIL</span></li>
			<li>Email us anytime and we will get back to you within 24hrs. </li>
			<li><a class='black' href="#">sales@KPCK.com</a></li>
		</ul>
	</div>

	<div class="storeInfo">
		<div class="hours">
			<h3>HOURS OF OPERATION</h3>
			<h5>LOS ANGELES, CA</h5>
			<table>
				<tr>
					<td>MON - THUR</td>
					<td>7AM - 8PM</td>
				</tr>
				<tr>
					<td>FRI</td>
					<td>7AM - 5PM</td>
				</tr>
				<tr>
					<td>SAT</td>
					<td>7AM - 3PM</td>
				</tr>				
				<tr>
					<td>SUN</td>
					<td>7AM - 3PM</td>
				</tr>
			</table>

		</div>

		<div class="office">
			<h3>MAIN OFFICE</h3>

			<h5>KPCK</h5>
			<h5>175 E Olive Ave</h5>
			<h5>Burbank, CA 91502</h5>

		</div>
		<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJw6RwwlCVwoARiC7bawFo8kA&key=AIzaSyB1nE-MHOHZwi4CcywzU9lRhGe9hyLv4S4" allowfullscreen></iframe>
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