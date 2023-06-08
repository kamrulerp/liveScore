

<?php
include('inc/header.php');
$msg = "";

?>


		
		<div class="phpcoding">
		<section class="headeroption">
		<h2 style="text-align:center">Please Log in</h2>
		</section>
		<span><?php echo $msg;?></span>
		<?php if(isset($_GET['id'])){?>
		<a href="view.php">Go Back</a>
		<?php } ?>
		<section class="container">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-row row">
			
			<div class="form-group col-md-6">
			<label for="">User Name:</label>
			<input type="text" name="email" class="form-control" value="">
			</div>
			</div>
			
			<div class="form-row row">
			<div class="form-group col-md-6">
			<label for="">Password:</label>
			<input type="password" name="password" class="form-control" value="">
			</div>
			</div>
			
			<div class="form-row row">
		<div class="pt-2 pb-2" align="left">


			<button  type="submit" name="submit" class="btn btn-success">Login</button>
			
			</div>
		</div>
		</form>
		</section>
<?php include('inc/footer.php');?>

