<?php include 'header.php'; ?>
<?php session_start(); ?>
<?php 

	if (!empty($_SESSION['username'])) {
		$user = $_SESSION['username'];
		$message = 'You are already Logged. Mr. '.$user;
	}
	else{
		$message = 'Enter You Log In Iformation For Operation';
	}
 ?>
<div class="login_bg">
	<div class="container">
		<div class="row">
			<div col-md-4 col-sm-12>
				
			</div>
			<div col-md-4 col-sm-12>
				<div class="text-center">
					<br><br>
					<h2 class="log-info"><?php echo $message; ?></h2>
					<br>
				</div>
				<div id="login">
					<form action="/admin/log_in.php" method="post">
					    <input type="text" name="USERNAME" placeholder="Enter You Username">
					    <input type="password" name="PASSWORD" placeholder="Enter Your Password">
					  <button type="submit" name="submit">Submit</button>
					</form>
				</div>
			</div>
			<div col-md-4 col-sm-12>
				
			</div>
		</div>
	</div>
</div>
<br>
<?php include 'footer.php'; ?>