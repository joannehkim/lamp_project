<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Shirts</title>
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
		img{
			max-width:100%;
			max-height:100%;
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
    			$(this).attr("src", "/assets/womenShirts/WT1b.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/womenShirts/WT1a.jpeg");
    		});

    		//Changes second image
    		$('#2').hover(function() {
    			$(this).attr("src", "/assets/womenShirts/WT2b.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/womenShirts/WT2a.jpeg");
    		});

    		//Changes third image
    		$('#3').hover(function() {
    			$(this).attr("src", "/assets/womenShirts/WT3b.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/womenShirts/WT3a.jpeg");
    		});

    		//Changes fourth image
    		$('#4').hover(function() {
    			$(this).attr("src", "/assets/womenShirts/WT4b.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/womenShirts/WT4a.jpeg");
    		});

    		//Changes fifth image
    		$('#5').hover(function() {
    			$(this).attr("src", "/assets/womenShirts/WT5b.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/womenShirts/WT5a.jpeg");
    		});

    		//Changes sixth image
    		$('#6').hover(function() {
    			$(this).attr("src", "/assets/womenShirts/WT6b.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/womenShirts/WT6a.jpeg");
    		});

    		//Changes seventh image
    		$('#7').hover(function() {
    			$(this).attr("src", "/assets/womenShirts/WT7b.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/womenShirts/WT7a.jpeg");
    		});

    		//Changes eigth image
    		$('#8').hover(function() {
    			$(this).attr("src", "/assets/womenShirts/WT8b.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/womenShirts/WT8a.jpeg");
    		});
    		
    		//Changes ninth image
    		$('#9').hover(function() {
    			$(this).attr("src", "/assets/womenShirts/WT9b.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/womenShirts/WT9a.jpeg");
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
		<h2>SHIRTS</h2>
		
		<div class="classContent">

			<div class="product">
				<img id = "1" class="picSize" src="/assets/womenShirts/WT1a.jpeg" alt="Tee 1"/>
				<h6>Tie-Dye Marnie Tee</h6>
				<p class='bold'>$34</p>
			</div>
			<div class="product">
				<img id = "2" class="picSize" src="/assets/womenShirts/WT2a.jpeg" alt="Hoodie 2"/>
				<h6>Robin Scoop Tee</h6>
				<p class='bold'>$29</p>
			</div>
			<div class="product">
				<img id = "3" class="picSize" src="/assets/womenShirts/WT3a.jpeg" alt="Hoodie 3"/>
				<h6>Project Social T Renee Henley Tee</h6>
				<p class='bold'>$24</p>
			</div>
			<div class="product">
				<img id = "4" class="picSize" src="/assets/womenShirts/WT4a.jpeg" alt="Hoodie 4"/>
				<h6>Grateful Dead Tie-Dye Bear Tee</h6>
				<p class='bold'>$39</p>
			</div>
			<div class="product">
				<img id = "5" class="picSize" src="/assets/womenShirts/WT5a.jpeg" alt="Hoodie 5"/>
				<h6>Truly Madly Deeply Liv Henley Tee</h6>
				<p class='bold'>$34</p>
			</div>
			<div class="product">
				<img id = "6" class="picSize" src="/assets/womenShirts/WT6a.jpeg" alt="Hoodie 6"/>
				<h6>Truly Madly Deeply Myles Thermal Top</h6>
				<p class='bold'>$29</p>
			</div>
			<div class="product">
				<img id = "7" class="picSize" src="/assets/womenShirts/WT7a.jpeg" alt="Hoodie 7"/>
				<h6>Junk Food The Who Tour Tee</h6>
				<p class='bold'>$45</p>
			</div>
			<div class="product">
				<img id = "8" class="picSize" src="/assets/womenShirts/WT8a.jpeg" alt="Hoodie 8"/>
				<h6>The Strokes Boyfriend Tee</h6>
				<p class='bold'>$39</p>
			</div>
			<div class="product">
				<img id = "9" class="picSize" src="/assets/womenShirts/WT9a.jpeg" alt="Hoodie 9"/>
				<h6>Silence + Noise Thea Top </h6>
				<p class='bold'>$39</p>
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
</body>
</html>