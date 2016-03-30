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
			color:black;
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
    			$(this).attr("src", "/assets/mensHoodies/MH1b.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/mensHoodies/MH1a.jpeg");
    		});

    		//Changes second image
    		$('#2').hover(function() {
    			$(this).attr("src", "/assets/mensHoodies/MH2b.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/mensHoodies/MH2a.jpeg");
    		});

    		//Changes third image
    		$('#3').hover(function() {
    			$(this).attr("src", "/assets/mensHoodies/MH3b.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/mensHoodies/MH3a.jpeg");
    		});

    		//Changes fourth image
    		$('#4').hover(function() {
    			$(this).attr("src", "/assets/mensHoodies/MH4b.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/mensHoodies/MH4a.jpeg");
    		});

    		//Changes fifth image
    		$('#5').hover(function() {
    			$(this).attr("src", "/assets/mensHoodies/MH5b.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/mensHoodies/MH5a.jpeg");
    		});

    		//Changes sixth image
    		$('#6').hover(function() {
    			$(this).attr("src", "/assets/mensHoodies/MH6b.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/mensHoodies/MH6a.jpeg");
    		});

    		//Changes seventh image
    		$('#7').hover(function() {
    			$(this).attr("src", "/assets/mensHoodies/MH7b.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/mensHoodies/MH7a.jpeg");
    		});

    		//Changes eigth image
    		$('#8').hover(function() {
    			$(this).attr("src", "/assets/mensHoodies/MH8b.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/mensHoodies/MH8a.jpeg");
    		});

    		//Changes ninth image
    		$('#9').hover(function() {
    			$(this).attr("src", "/assets/mensHoodies/MH9b.jpeg");
    		}, function() {
    			$(this).attr("src", "/assets/mensHoodies/MH9a.jpeg");
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
				<img id = "1" class="picSize" src="/assets/mensHoodies/MH1a.jpeg" alt="Hoodie 1"/>
				<h6>Without Walls Anorak Jacket</h6>
				<p class='bold'>$99</p>
			</div>
			<div class="product">
				<img id = "2" class="picSize" src="/assets/mensHoodies/MH2a.jpeg" alt="Hoodie 2"/>
				<h6>Alpha Skymaster Bomber Jacket</h6>
				<p class='bold'>$149</p>
			</div>
			<div class="product">
				<img id = "3" class="picSize" src="/assets/mensHoodies/MH3a.jpeg" alt="Hoodie 3"/>
				<h6>Rothco Security Coaches Jacket</h6>
				<p class='bold'>$59</p>
			</div>
			<div class="product">
				<img id = "4" class="picSize" src="/assets/mensHoodies/MH4a.jpeg" alt="Hoodie 4"/>
				<h6>OBEY Suede Bomber Jacket</h6>
				<p class='bold'>$215</p>
			</div>
			<div class="product">
				<img id = "5" class="picSize" src="/assets/mensHoodies/MH5a.jpeg" alt="Hoodie 5"/>
				<h6>Chums Mountain Anorak Jacket</h6>
				<p class='bold'>$130</p>
			</div>
			<div class="product">
				<img id = "6" class="picSize" src="/assets/mensHoodies/MH6a.jpeg" alt="Hoodie 6"/>
				<h6>Calvin Klein Denim Trucker Jacket</h6>
				<p class='bold'>$99</p>
			</div>
			<div class="product">
				<img id = "7" class="picSize" src="/assets/mensHoodies/MH7a.jpeg" alt="Hoodie 7"/>
				<h6>Patagonia Classic Retro-X Jacket</h6>
				<p class='bold'>$229</p>
			</div>
			<div class="product">
				<img id = "8" class="picSize" src="/assets/mensHoodies/MH8a.jpeg" alt="Hoodie 8"/>
				<h6>adidas Sport Luxe Track Jacket</h6>
				<p class='bold'>$69</p>
			</div>
			<div class="product">
				<img id = "9" class="picSize" src="/assets/mensHoodies/MH9a.jpeg" alt="Hoodie 9"/>
				<h6>Newline Imotion Stormy Sky Jacket</h6>
				<p class='bold'>$110</p>
			</div>
		</div>

	</div>


</div>

<?php $this->load->view('/partials/footer');?>



</body>
</html>