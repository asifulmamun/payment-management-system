<?php include 'header.php'; ?>

<?php 
	// Request Check
	if ($_SERVER['REQUEST_METHOD'] != "POST") {
		header("Location:dashboard.php");
	}
	else{
 ?>

<?php 
	$NAME = $_POST['NAME'];
	$MOBILE = $_POST['MOBILE'];
 ?>
 <div class="login_bg">
 	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				    <?php 
						$sql = "SELECT * FROM member where NAME='$NAME' && MOBILE='$MOBILE'";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
					?>
					<div id="login">
						<form action="edit-process-step-2.php" method="post">
					      <input type="hidden" name="ID" value="<?php echo $row["ID"]; ?>">
					      <input type="hidden" name="ACTION" value="1">
					      <input type="text" name="NAME" value="<?php echo $row["NAME"]; ?>">
					      <input type="text" name="MOBILE" value="<?php echo $row["MOBILE"]; ?>">
					      <input type="date" name="DATE" value="<?php echo $row["DATE"]; ?>">
					      <input type="text" name="PAYMENT" value="<?php echo $row["PAYMENT"]; ?>">
					      <button type="submit" name="submit">Submit</button>
					    </form>
					</div>
				    <br>
				    <form action="edit-process-step-2.php" method="post">
				    	<table>
					    	<tr>
					    		<center>
					    			<input type="hidden" name="ID" value="<?php echo $row["ID"]; ?>">
					    			<input type="hidden" name="ACTION" value="0">
					    			<input type="submit" name="submit" value="Delete" title="Delete <?php echo $row["NAME"]; ?>" class="btn btn-danger">
					    		</center>
					    	</tr>
				    	</table>
				    </form>
				     <?php
						    }
						}
					 ?>

			</div>
		</div>
	</div>
</div>




<?php 
	}
	// request method check else end
 ?>
 
<?php include 'footer.php'; ?>
