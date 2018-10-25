<?php include 'header.php'; ?>
<?php session_start(); ?>
<?php 

	if (empty($_SESSION['username'])) {
		header('Location:dashboard.php');
	}
	else{
 ?>
<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">SL</th>
			      <th scope="col">Name</th>
			      <th scope="col">Mobile</th>
			      <th scope="col">Date</th>
			      <th scope="col">Paymnet Status</th>
			    </tr>
			  </thead>
			  <tbody>
			    <?php 
					$sql = "SELECT * FROM member";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) {
				?>
			    <tr>
			      <th scope="row"><?php echo $row["ID"]; ?></th>
			      <td><?php echo $row["NAME"]; ?></td>
			      <td><?php echo $row["MOBILE"]; ?></td>
			      <td><?php echo $row["DATE"]; ?></td>
			      <td>
			      	<?php echo $row["PAYMENT"]; ?>
			      	<?php 
			      		if ($row["PAYMENT"] >= $paidMax) {
			      			echo '<span style="color:green;"><i class="fa fa-check-square" aria-hidden="true"></i> Paid</span>';
			      		}
			      		if ($row["PAYMENT"] < $paidMax) {
			      			echo '<span style="color:red;"><i class="fa fa-times" aria-hidden="true"></i> Unpaid</span>';
			      		}
			      	 ?>
			      </td>
			    </tr>
			     <?php
					    }
					}
				 ?>
			  </tbody>
			</table>
		</div>
	</div>
</div>
<?php 
	} // else end for log in

 ?>
<?php include 'footer.php'; ?>
