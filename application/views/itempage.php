<!DOCTYPE html>
<html>
<head>
	<title>Item</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https:/.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="/maxcdnsha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<?php $this->load->view('partials/header'); ?>

	<style type="text/css">
		*{
			padding:0px;
			margin:0px;
		}
		#container {
			margin: 150px 0px 0px 300px;
			width:1010px;
		}
		#leftside {
			width:400px;
			display:inline-block;
			vertical-align:top;
		}
		#thumbs img{
			width:50px;
			height:auto;
			display:block;
			margin-bottom:2px;
		}
		#rightside {
			width:450px;
			display:inline-block;
			vertical-align:top;
		}
		#rightside h3{
			font-style: normal;
			width:300px;
		}
		h4, .btn-group, .click-nav, #addtobagbutton, h5 {
			margin-top:20px;
		}
		#addtobagbutton {
			background-color:black;
			color:white;
		}
		#description {
			padding-top:20px;
			width:300px;
			text-align:left;
		}
		#description h4, p {
			font-style: normal;
		}

		.click-nav {
			background-color: black;
			color:white;
    		position: relative;
    		display: inline-block;
    		border-radius:3px;
		}
		#bottom {
			margin-top:150px;
		}
		#bottom img {
			width:80%;
			height: auto;
		}
		.extra {
			display:inline-block;
		}
		.suggest {
			margin-right:20px;
		}

		.sizes {
			width:50px;
			height:20px;
		}	
		
		.clicker {
			border-radius:5px;
		}

		#sizes select{
			background: black;
			color: white;
			border-radius:5px;
   			width: 123px;
   			padding: 5px;
   			font-size: 16px;
   			line-height: 1;
   			border: 0;
   			height: 34px;
            -webkit-appearance: none;		
        }

		#quantity select{
			background: black;
			color: white;
			border-radius:5px;
   			width: 123px;
   			padding: 5px;
   			font-size: 16px;
   			line-height: 1;
   			border: 0;
   			height: 34px;
            -webkit-appearance: none;
		}
	</style>

	<script type="text/javascript">
		$(document).ready(function(){

			$('img').hover(function() {
				var temp = $(this).attr('src');
				$(this).attr("src", $(this).attr('data-alt-src'));
				$(this).attr("data-alt-src", temp);
			});		
			$('#MT1').hover(function() {
				var temp = $(this).attr('src');
				$(this).attr("src", $(this).attr('data-alt-src'));
				$(this).attr("data-alt-src", temp);
			});		
			$('#T1F').hover(function() {
				$('#MT1').attr("src", $(this).attr('data-alt-src'));
			});		
			$('#T1B').hover(function() {
				$('#MT1').attr("src", $(this).attr('data-alt-src'));
			});
		});
	</script>

</head>
<body>
	<div id="container">
		<div id="thumbs" class='col-md-1'>
			<img id='T1F' src="/assets/currentProducts/<?= $menTees['front_image_filename']?>">
			<img id='T1B' src="/assets/currentProducts/<?= $menTees['back_image_filename']?>">
		</div>		
		<div id='leftside' class='col-md-1'>		
			<img id='MT1' src="/assets/currentProducts/<?= $menTees['front_image_filename']?>" height='460'>
		</div>
		
		<div id="rightside">
			<h3><?= $menTees['name']?></h3>
			<h5><p>$<?= $menTees['price'] ?></p></h5>	

			<form action='/products/add_to_cart' method='post'>
				<div id="sizes"> 
      				<select>
      					<option class="btn btn--lg btn--full u-no-wrap u-padding-l--none u-padding-r--none">Pick Your Size</option>
	    				<option name='size' value='xsmall'>X-Small</option>
	    				<option name='size' value='small'>Small</option>
	    				<option name='size' value='medium'>Medium</option>
	    				<option name='size' value='large'>Large</option>
	    				<option name='size' value='xlarge'>X-Large</option>
  					</select>
				</div><br>

				<div id="quantity">    			
      				<select>
      					<option class="btn btn--lg btn--full u-no-wrap u-padding-l--none u-padding-r--none">Quantity</option>
	    				<option name='quantity' value='one'>One</option>
	    				<option name='quantity' value='two'>Two</option>
	    				<option name='quantity' value='three'>Three</option>
	    				<option name='quantity' value='four'>Four</option>
	    				<option name='quantity' value='five'>Five</option>    				
  					</select> 
				</div>
				<input id="addtobagbutton" class="btn btn--lg btn--full u-no-wrap u-padding-l--none u-padding-r--none" type="submit" value="ADD TO BAG" onclick="" style="overflow: visible;">				
			</form>
			<div id='description'>
				<h4>Description</h4>
					<h5><?= $menTees['description']?></h5>
			</div>
		</div>

		<div id="bottom">
			<h2>Other Items You Might Like...</h2>
			<div class="extra">
				<img id='<?= $shirt['id'] ?>' class='suggest' src="/assets/M_Tees/T2F.jpeg" data-alt-src='/assets/M_Tees/T2B.jpeg'>
				<h6>Feathers Rolled Cap Sleeve Tee</h6>
				<p class='bold'>$34</p>
			</div>

			<div class="extra">
				<img id='3' class='suggest' src="/assets/M_Tees/T3F.jpeg" data-alt-src='/assets/M_Tees/T3B.jpeg'>
				<h6>CPO Boxy Tee</h6>
				<p class='bold'>$24</p>
			</div>

			<div class="extra">
				<img id='4' class='suggest' src="/assets/M_Tees/T4F.jpeg" data-alt-src="/assets/M_Tees/T4B.jpeg">
				<h6>Feathers Long + Loose Scoop Tee</h6>
				<p class='bold'>$25</p>
			</div>
		</div>
	</div>
	<?php $this->load->view('partials/footer'); ?>
</body>
</html>