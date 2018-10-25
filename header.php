<?php 
	include 'function/connection.php'; // connection
	include 'function/function.php'; // variable
 ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="assest/css/bootstrap.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" type="text/css" href="assest/css/font-awesome.min.css">
	<!-- font-family: 'Roboto', sans-serif; -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
	<!-- font-family: 'Anton', sans-serif; -->
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

	<!-- main style -->
	<link rel="stylesheet" type="text/css" href="style.css">

    <title><?php title(); ?></title>
</head>
<body>

	<!-- nav -->
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="/">KPMHS Freinds</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="/">Home</a></li>
	      <li><a href="/admin/dashboard.php">Dashboard</a></li>
	      <li><a href="/admin/add.php">Add Member</a></li>
	      <li><a href="/admin/edit.php">Edit/Delete Member</a></li>
	      <li><a href="/admin/show.php">List Of Member With All Details</a></li>
	      <li><a href="/admin">Log In</a></li>
	      <li><a href="/admin/log_out.php">Log Out</a></li>
	    </ul>
	  </div>
	</nav>