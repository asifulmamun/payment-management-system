<?php include 'header.php'; ?>
<?php session_start(); ?>
<?php 

	if (empty($_SESSION['username'])) {
		header('Location:dashboard.php');
	}
	else{
 ?>
<div class="login_bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div id="login">
					<form action="edit-process.php" method="post">
				          <input placeholder="Name" type="text" name="NAME">
				          <input placeholder="Mobile" type="text" name="MOBILE">
				          <button type="submit" name="submit">Submit</button>
					</form>
<center><h1 style="color:red">If you should not sure correct Name And Mobile Number <a href="show.php">Go To List and see</a> then try edit.</h1></center>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
	} // else end for log in

 ?>
<?php include 'footer.php'; ?>
