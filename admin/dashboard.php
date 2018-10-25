<?php include 'header.php'; ?>
<?php session_start(); ?>
<?php 

	if (empty($_SESSION['username'])) {
		header('Location:index.php');
	}
	else{
 ?>
<div class="container">
	<div class="row border">
		<div class="col-md-12 col-sm-12">
			<div class="text-center">
				<br>
				<h1 style="color:green;font-family: 'Anton', sans-serif;">You Have A Power - You can do Anythings</h1>
				<br>
			</div>
			<div id="dashboard" class="text-center">
				<div class="dashboardAllButton">
					<div class="mbutton">
						<span class="absolute"><a href="/"><i class="fa fa-home" aria-hidden="true"></i><br><b>Home</b></a></span>
					</div>
					<div class="mbutton">
						<span class="absolute"><a href="add.php"><i class="fa fa-plus" aria-hidden="true"></i><br><b>Add Member</b></a></span>
					</div>
					<div class="mbutton">
						<span class="absolute"><a href="edit.php"><b><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <i class="fa fa-trash-o" aria-hidden="true"></i> <br> Edit Member</b></a></span>
					</div>
					<div class="mbutton">
						<span class="absolute"><a href="show.php"><i class="fa fa-eye" aria-hidden="true"></i><br><b>Show Member</b></a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
	} // else end for log in

 ?>
<?php include 'footer.php'; ?>