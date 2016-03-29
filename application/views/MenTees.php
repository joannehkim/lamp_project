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
		img{
			max-width:100%;
			max-height:100%;
		}
	</style>

	<script type="text/javascript">
    	$(document).ready(function(){

    		//Changes first image
    		$('#1').hover(function() {
    			$(this).attr("src", "/assets/M_Tees/T1B.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/M_Tees/T1F.jpeg");
    		});

    		//Changes second image
    		$('#2').hover(function() {
    			$(this).attr("src", "/assets/M_Tees/T2B.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/M_Tees/T2F.jpeg");
    		});

    		//Changes third image
    		$('#3').hover(function() {
    			$(this).attr("src", "/assets/M_Tees/T3B.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/M_Tees/T3F.jpeg");
    		});

    		//Changes fourth image
    		$('#4').hover(function() {
    			$(this).attr("src", "/assets/M_Tees/T4B.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/M_Tees/T4F.jpeg");
    		});

    		//Changes fifth image
    		$('#5').hover(function() {
    			$(this).attr("src", "/assets/M_Tees/T5B.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/M_Tees/T5F.jpeg");
    		});

    		//Changes sixth image
    		$('#6').hover(function() {
    			$(this).attr("src", "/assets/M_Tees/T6B.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/M_Tees/T6F.jpeg");
    		});

    		//Changes seventh image
    		$('#7').hover(function() {
    			$(this).attr("src", "/assets/M_Tees/T7B.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/M_Tees/T7F.jpeg");
    		});

    		//Changes eigth image
    		$('#8').hover(function() {
    			$(this).attr("src", "/assets/M_Tees/T8B.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/M_Tees/T8F.jpeg");
    		});
    		
    		//Changes ninth image
    		$('#9').hover(function() {
    			$(this).attr("src", "/assets/M_Tees/T9B.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/M_Tees/T9F.jpeg");
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
				<img id = "1" class="picSize" src="/assets/M_Tees/T1F.jpeg" alt="Tee 1"/>
				<h6>UO Galaxy Pocket Tee</h6>
				<p class='bold'>$20</p>
			</div>
			<div class="product">
				<img id = "2" class="picSize" src="/assets/M_Tees/T2F.jpeg" alt="Hoodie 2"/>
				<h6>Feathers Rolled Cap Sleeve Tee</h6>
				<p class='bold'>$34</p>
			</div>
			<div class="product">
				<img id = "3" class="picSize" src="/assets/M_Tees/T3F.jpeg" alt="Hoodie 3"/>
				<h6>CPO Boxy Tee</h6>
				<p class='bold'>$24</p>
			</div>
			<div class="product">
				<img id = "4" class="picSize" src="/assets/M_Tees/T4F.jpeg" alt="Hoodie 4"/>
				<h6>Feathers Long + Loose Scoop Tee</h6>
				<p class='bold'>$25</p>
			</div>
			<div class="product">
				<img id = "5" class="picSize" src="/assets/M_Tees/T5F.jpeg" alt="Hoodie 5"/>
				<h6>OBEY Heath Pocket Tee</h6>
				<p class='bold'>$42</p>
			</div>
			<div class="product">
				<img id = "6" class="picSize" src="/assets/M_Tees/T6F.jpeg" alt="Hoodie 6"/>
				<h6>Ben Davis Pocket Tee</h6>
				<p class='bold'>$24</p>
			</div>
			<div class="product">
				<img id = "7" class="picSize" src="/assets/M_Tees/T7F.jpeg" alt="Hoodie 7"/>
				<h6>CPO Rush Printed Band Collar Shirt</h6>
				<p class='bold'>$49</p>
			</div>
			<div class="product">
				<img id = "8" class="picSize" src="/assets/M_Tees/T8F.jpeg" alt="Hoodie 8"/>
				<h6>The Narrows Destroyed Seam Tee</h6>
				<p class='bold'>$38</p>
			</div>
			<div class="product">
				<img id = "9" class="picSize" src="/assets/M_Tees/T9F.jpeg" alt="Hoodie 9"/>
				<h6>adidas Street Kangaroo Pocket Tee</h6>
				<p class='bold'>$55</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>