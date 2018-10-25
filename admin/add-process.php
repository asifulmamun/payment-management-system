<?php 

	include '../function/connection.php'; // connection

 ?>

<?php 
	// Request Check
	if ($_SERVER['REQUEST_METHOD'] != "POST") {
		header("Location:add.php");
	}
	else{
 ?>

<?php 

	// variable
	$NAME = $_POST['NAME'];
	$MOBILE = $_POST['MOBILE'];
	$DATE = $_POST['DATE'];
	$PAYMENT = $_POST['PAYMENT'];
 ?>

<?php

 	// query for insert data
 	$insert = "INSERT INTO `member` (`ID`, `NAME`, `MOBILE`, `DATE`, `PAYMENT`) VALUES (NULL, '$NAME', '$MOBILE', '$DATE', '$PAYMENT')";
		
		if (mysqli_query($conn, $insert)) {
?>
		<br><br><br><center><h1>New record created successfully <a href='add.php'>Go</a> To Dashboard...<br> Or, You will be redirected in <span id="counter">5</span> second(s) in List Of Member With Full Details For Temp..</h1></center>
		<script type="text/javascript">
		function countdown() {
		    var i = document.getElementById('counter');
		    if (parseInt(i.innerHTML)<=0) {
		        location.href = 'tempshow.php';
		    }
		    i.innerHTML = parseInt(i.innerHTML)-1;
		}
		setInterval(function(){ countdown(); },1000);
		</script>

<?php
		} else {

			echo "<br><br>" . $insert . "<br>" . mysqli_error($conn);
?>

		<br><center><h1>New record created Faill. You can retry after <span id="counter">5</span> second(s).</h1></center>
		<script type="text/javascript">
		function countdown() {
		    var i = document.getElementById('counter');
		    if (parseInt(i.innerHTML)<=0) {
		        location.href = 'add.php';
		    }
		    i.innerHTML = parseInt(i.innerHTML)-1;
		}
		setInterval(function(){ countdown(); },1000);
		</script>

<?php
		}

		mysqli_close($conn);

  ?>

  <?php 
	}
	// request method check else end
 ?>