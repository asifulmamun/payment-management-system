<?php session_start(); ?>

<?php session_destroy();
	header( "refresh:5; url=/" );
?>

<br><br><center><h1>You are now Logged Out. <br>You will be redirected in <span id="counter">5</span> second(s).</h1></center>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = '/';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>