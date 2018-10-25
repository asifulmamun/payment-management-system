<?php include 'header.php'; ?>
<?php session_start(); ?>
<?php 

	if (empty($_SESSION['username'])) {
		header('Location:dashboard.php');
	}
	else{
 ?>

	<!-- Form For Add Member -->
	<div class="main_container">	
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<br><br>
					<div class="text-center">
						<h1 class="white">
							Enter Details For Add Member
						</h1>
					</div>
					<div class="add_form">
						<form action="add-process.php" method="post">
							<input type="text" name="NAME" placeholder="Name">					
							<input type="text" name="MOBILE" placeholder="Phone Number">
							<input type="DATE" name="DATE">			
							<input type="text" name="PAYMENT" placeholder="Paid Amount">
							<input type="submit" name="submit" value="Submit">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
	} // else end for log in

 ?>
<?php include 'footer.php'; ?>