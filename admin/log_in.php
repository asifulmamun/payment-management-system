<?php include 'header.php' ?>
<?php session_start(); ?>
<?php
	
	// variable
	$USERNAME = $_POST['USERNAME'];
	$PASSWORD = $_POST['PASSWORD'];

	// log in information check
	if ($USERNAME == 'asifulmamun' && $PASSWORD == "kpmhs") {
		$_SESSION['username'] = $USERNAME;
		$_SESSION['password'] = $PASSWORD;
?>



<br><br><br><center><h1>You are success to Log in. You will be redirected in <span id="counter">5</span> second(s).</h1></center>
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
	}
	else
	{
		header('Location:index.php');
	} // condition for log in
 ?>
 <?php include 'footer.php' ?>