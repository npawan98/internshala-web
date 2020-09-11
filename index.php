<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head><title>E-Store |s Electronic Goods Dealers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<style>
		.thumbnail{
			display: block;
			max-width: 100%;
			height: auto;
		}

	.zoom:hover {
  -ms-transform: scale(1.5);
  -webkit-transform: scale(1.5);
  transform: scale(1.5); 
}
	 
	</style>
</head>
<body style="font-family: Montserrat">
<?php
if(!isset($_SESSION['id'])){ 
	require 'header_logged_out.php';
	?>

<div class="container-fluid" style="margin-top: 80px; margin-bottom: 100px">
	<div class="row row-style-login-page-pannel">
		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Oneplus 8 Pro</div>
				<div class="panel-body">
					<center><img  class="img-responsive zoom"  src="images\phones\op8pro.png" width = "175" height = "175">
					<b> One Plus 8Pro <br></b>Price: ₹54,999/-</center>
					<button class="btn btn-primary form-control" type="button" value="Submit" data-toggle="modal" data-target="#pz" name="btn">Order Now!</button>
				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Apple Iphone11 ProMax</div>
				<div class="panel-body">
					<center><img  class="img-responsive zoom" src="images\phones\iphone_11.png">
					<b> Apple Iphone 11 ProMax <br></b>Price: ₹131,000/-</center>
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>
				</div>
			</div>
		</div>

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Samsung S10 Plus</div>
				<div class="panel-body" >
					<center><img  class="img-responsive zoom" src="images\phones\s10plus.png" width = "100" height = "100">
					<b> Samsung S10 Plus <br></b>Price: ₹57,999/-</center>
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>
				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Apple Iphone SE 2020</div>
				<div class="panel-body" >
					<center><img  class="img-responsive zoom" src="images\phones\iphone_se.png" width = "200" height = "20">
					<b> Apple Iphone SE 2020 <br></b>Price: ₹56,000/-</center>
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>
				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Iphone 11</div>
				<div class="panel-body" >
					<center><img  class="img-responsive zoom" src="images\phones\iphone11.png" width = "172" height = "172">
					<b> Iphone 11 <br></b>Price: ₹73,999/-</center>
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>
				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Samsung galaxy S20 Ultra</div>
				<div class="panel-body">
					<center><img  class="img-responsive zoom" src="images\phones\s20.png" width="155" height="155">
					<b>Samsung galaxy S20 Ultra<br></b>Price: ₹97,999/-</center>
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>
				</div>
			</div>
		</div>	
	</div>
</div>
<!-- -->

<div style="background-color: #333; color:white ;">
<?php require 'foot.php' ?>
</div>
<?php } else { 
	require 'header_logged_in.php'; 
?>

<div  class="container" style="margin-top: 60px;">
<b>
<?php
echo "Hi ".$_SESSION['name'];
 ?>
</b>
</div>
<!-- -->
<div class="container-fluid" style="margin-top: 80px; margin-bottom: 100px">
	<div class="row row-style-login-page-pannel">
		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Oneplus 8 Pro (Product id : #1)</div>
				<div class="panel-body">
					<center><img  class="img-responsive zoom"  src="images\phones\op8pro.png" width = "175" height = "175">
					<b> One Plus 8Pro <br></b>Price: ₹54,999/-</center>
					<form method="post" action="cart_added.php">
					<button class="btn btn-primary form-control" type="submit" value="1"  name="prodno" data-toggle="modal" data-target="#all" onclick = "myFunction()">Add to Cart</button>
                </form>
				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Apple Iphone11 ProMax (Product id : #2)</div>
				<div class="panel-body">
					<center><img  class="img-responsive zoom" src="images\phones\iphone_11.png">
					<b> Apple Iphone 11 ProMax <br></b>Price: ₹131,000/-</center>
					<form method="post" action="cart_added.php">
					<button class="btn btn-primary form-control" type="submit" value="2"  name="prodno" data-toggle="modal" data-target="#all" onclick = "myFunction()">Add to Cart</button>
                </form>
				</div>
			</div>
		</div>

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Samsung S10 Plus (Product id : #3)</div>
				<div class="panel-body" >
					<center><img  class="img-responsive zoom" src="images\phones\s10plus.png" width = "100" height = "100">
					<b> Samsung S10 Plus <br></b>Price: ₹57,999/-</center>
					<form method="post" action="cart_added.php">
					<button class="btn btn-primary form-control" type="submit" value="3"  name="prodno" data-toggle="modal" data-target="#all" onclick = "myFunction()">Add to Cart</button>
                </form>
				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Apple Iphone SE 2020 (Product id : #4)</div>
				<div class="panel-body" >
					<center><img  class="img-responsive zoom" src="images\phones\iphone_se.png" width = "200" height = "20">
					<b> Apple Iphone SE 2020 <br></b>Price: ₹56,000/-</center>
					<form method="post" action="cart_added.php">
					<button class="btn btn-primary form-control" type="submit" value="4"  name="prodno" data-toggle="modal" data-target="#all" onclick = "myFunction()">Add to Cart</button>
                </form>
				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Iphone 11 (Product id : #5)</div>
				<div class="panel-body" >
					<center><img  class="img-responsive zoom" src="images\phones\iphone11.png" width = "172" height = "172">
					<b> Iphone 11 <br></b>Price: ₹73,999/-</center>
					<form method="post" action="cart_added.php">
					<button class="btn btn-primary form-control" type="submit" value="5"  name="prodno" data-toggle="modal" data-target="#all" onclick = "myFunction()">Add to Cart</button>
                </form>
				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Samsung galaxy S20 Ultra (Product id : #6)</div>
				<div class="panel-body">
					<center><img  class="img-responsive zoom" src="images\phones\s20.png" width="155" height="155">
					<b>Samsung galaxy S20 Ultra<br></b>Price: ₹97,999/-</center>
					<form method="post" action="cart_added.php">
					<button class="btn btn-primary form-control" type="submit" value="6"  name="prodno" data-toggle="modal" data-target="#all" onclick = "myFunction()">Add to Cart</button>
                </form>
				</div>
			</div>
		</div>	
	</div>
</div>
<div style="background-color: #333; color:white ;">
<?php require 'foot.php' ?>
</div>

<?php } ?>


<?php require 'login_modal.php'; ?>
</body>
<script>
	function myFunction() {
  alert("Added to cart!");
}
</script>

</html>

