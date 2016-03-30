<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Outerwear</title>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<?php $this->load->view('partials/header'); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css" >
		*{
			padding: 0px;
			margin: 0px;
		}
		#container{
			margin:0px;
/*			border: 5px dotted red;*/
			width: 1010px;
			margin: 130px 0px 0px 140px; 
			
		}
		.categories{
			height: 400px;
			width: 190px;
			display: inline-block;
			vertical-align: top;
		}
		.rightSide{
			/*border: 2px dotted black;*/
			display: inline-block;
			vertical-align: top;
			width: 805px;
		}
		.classContent{
			text-align: center;
		}
		.product{
			width: 230px;
			height: 430px;
			text-align: center;
			display:inline-block;
			margin: 5px;
			vertical-align: top;
		}
		.picSize{
			height: 365px;
			width: 230px;

		}
		.bold{
			font-weight: bold;
		}
		ul{
			list-style: none;
		}
		li{
			margin-left: 20px;
		}

		/* Footer style */
		.footer {
			background-color: black;
			height: 300px;
		    margin-top: 80px;
		}

	</style>

	<script type="text/javascript">
    	$(document).ready(function(){

    		//Changes first image
    		$('#1').hover(function() {
    			$(this).attr("src", "/assets/W_Hoodies/WH1B.png");
    		}, function() {
    			$(this).attr("src", "/assets/W_Hoodies/WH1A.png");
    		});

    		//Changes second image
    		$('#2').hover(function() {
    			$(this).attr("src", "/assets/W_Hoodies/WH2B.png");
    		}, function() {
    			$(this).attr("src", "/assets/W_Hoodies/WH2A.png");
    		});

    		//Changes third image
    		$('#3').hover(function() {
    			$(this).attr("src", "/assets/W_Hoodies/WH3B.png");
    		}, function() {
    			$(this).attr("src", "/assets/W_Hoodies/WH3A.png");
    		});

    		//Changes fourth image
    		$('#4').hover(function() {
    			$(this).attr("src", "/assets/W_Hoodies/WH4B.png");
    		}, function() {
    			$(this).attr("src", "/assets/W_Hoodies/WH4A.png");
    		});

    		//Changes fifth image
    		$('#5').hover(function() {
    			$(this).attr("src", "/assets/W_Hoodies/WH5B.png");
    		}, function() {
    			$(this).attr("src", "/assets/W_Hoodies/WH5A.png");
    		});

    		//Changes sixth image
    		$('#6').hover(function() {
    			$(this).attr("src", "/assets/W_Hoodies/WH6B.png");
    		}, function() {
    			$(this).attr("src", "/assets/W_Hoodies/WH6A.png");
    		});

    		//Changes seventh image
    		$('#7').hover(function() {
    			$(this).attr("src", "/assets/W_Hoodies/WH7B.png");
    		}, function() {
    			$(this).attr("src", "/assets/W_Hoodies/WH7A.png");
    		});

    		//Changes eigth image
    		$('#8').hover(function() {
    			$(this).attr("src", "/assets/W_Hoodies/WH8B.png");
    		}, function() {
    			$(this).attr("src", "/assets/W_Hoodies/WH8A.png");
    		});
    		
    		//Changes ninth image
    		$('#9').hover(function() {
    			$(this).attr("src", "/assets/W_Hoodies/WH9B.png");
    		}, function() {
    			$(this).attr("src", "/assets/W_Hoodies/WH9A.png");
    		});
    	});
	</script>
</head>
<body>

<div id='container'>

	<div class='categories'>
		<h3>Category</h3>
		<ul>
			<li><a href="#">View All</a></li>
			<li><a href="#">Shirts</a></li>
			<li><a href="#">Outerwear</a></li>
		</ul>
	</div>

	<div class="rightSide">
		<h2>OUTERWEAR</h2>
		
		<div class="classContent">

			<div class="product">
				<img id = "1" class="picSize" src="/assets/W_Hoodies/WH1A.png" alt="Tee 1"/>
				<h6>Project Social T So Fluffy Sweatshirt</h6>
				<p class='bold'>$49</p>
			</div>
			<div class="product">
				<img id = "2" class="picSize" src="/assets/W_Hoodies/WH2A.png" alt="Hoodie 2"/>
				<h6>Project Social T Ava Overlap Hoodie</h6>
				<p class='bold'>$59</p>
			</div>
			<div class="product">
				<img id = "3" class="picSize" src="/assets/W_Hoodies/WH3A.png" alt="Hoodie 3"/>
				<h6>adidas Originals Double Logo Sweatshirt</h6>
				<p class='bold'>$59</p>
			</div>
			<div class="product">
				<img id = "4" class="picSize" src="/assets/W_Hoodies/WH4A.png" alt="Hoodie 4"/>
				<h6>adidas Originals Leaf Camo Hoodie</h6>
				<p class='bold'>$75</p>
			</div>
			<div class="product">
				<img id = "5" class="picSize" src="/assets/W_Hoodies/WH5A.png" alt="Hoodie 5"/>
				<h6>BDG Streaky Raglan Sweatshirt</h6>
				<p class='bold'>$39</p>
			</div>
			<div class="product">
				<img id = "6" class="picSize" src="/assets/W_Hoodies/WH6A.png" alt="Hoodie 6"/>
				<h6>Calvin Klein For UO Cropped Hoodie</h6>
				<p class='bold'>$79</p>
			</div>
			<div class="product">
				<img id = "7" class="picSize" src="/assets/W_Hoodies/WH7A.png" alt="Hoodie 7"/>
				<h6>adidas Originals Helsinki Sweatshirt</h6>
				<p class='bold'>$70</p>
			</div>
			<div class="product">
				<img id = "8" class="picSize" src="/assets/W_Hoodies/WH8A.png" alt="Hoodie 8"/>
				<h6>Sub Urban Riot Kale Pullover</h6>
				<p class='bold'>$59</p>
			</div>
			<div class="product">
				<img id = "9" class="picSize" src="/assets/W_Hoodies/WH9A.png" alt="Hoodie 9"/>
				<h6>Silence + Noise Bleeker Drapey Cardigan</h6>
				<p class='bold'>$59</p>
			</div>
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
         <li><a href="/users/history">History</a></li>
         <li><a href="#">Contact Us</a></li>
       </ul>
   </div>
  </div>
</div>
</div>

</body>
</html>