<?php include 'header.php'; ?>

<?php 
	// Request Check
	if ($_SERVER['REQUEST_METHOD'] != "POST") {
		header("Location:dashboard.php");
	}
	else{
 ?>

<br><br><center><h1>You will be redirecting in <span id="counter">5</span> second(s).</h1></center>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'dashboard.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>



<?php
	// this page gloabal variable
	$ACTION = $_POST['ACTION'];
	$ID = $_POST['ID'];
	
	if( $ACTION == 1)
	{
		// update variable
		$NAME = $_POST['NAME'];
		$MOBILE = $_POST['MOBILE'];
		$DATE = $_POST['DATE'];
		$PAYMENT = $_POST['PAYMENT'];

		// Update
		$sql = "UPDATE member SET NAME='$NAME', MOBILE='$MOBILE', DATE='$DATE', PAYMENT='$PAYMENT' WHERE ID='$ID'";

		if (mysqli_query($conn, $sql)) {
		    echo "<br><br><center><h1>Record updated successfully. You will be redirecting from this page After 5 Sec</h1></center>";
		    header( "refresh:5; url=dashboard.php" ); 
		} else {
		    echo "<br><br><center><h1>You will be redirecting from this page After 5 Sec. </h1></center><br> Error updating record: " . mysqli_error($conn);
		}

		mysqli_close($conn);
	}
	elseif ( $ACTION == 0)
	{
		// sql to delete a record
		$sql = "DELETE FROM member WHERE ID='$ID'";

		if ($conn->query($sql) === TRUE) {
		    echo "<br><br><center><h1>Record Deleted successfull. You will be redirecting from this page After 5 Sec</h1></center>";
		    header( "refresh:5; url=dashboard.php" );
  		} else {
		    echo "<br><br><center><h1>You will be redirecting from this page After 5 Sec. </h1></center><br> Error deleting record: " . $conn->error;
		}

		$conn->close();
	}

?>

<?php 
	}
	// request method check else end
 ?>
 
<?php include 'footer.php'; ?>