<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
</head>
<?php
session_start();
if($_SESSION["lid"]=="")
{
	header("location:index.php");
}

?>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="index.php"><span class="color-highlight">K</span>erala <span class="color-highlight">S</span>tate <span class="color-highlight">A</span>thletics <span class="color-highlight">A</span>ssociation</a></a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="active"><a href="adminHome.php">Home</a></li>
          <li><a href="collegeView.php">College Approve</a></li>
          <li><a href="athleteView.php">Athlete Approve</a></li>
          <li><a href="meetRegister.php">Meet Register</a></li>
          <li><a href="resultPublish.php">Result Publish</a></li>
          <li><a href=".php">Point Table</a></li>
          <li><a href=".php">Records</a></li>
          <li><a href="logout.php">Log Out</a></li>
        </ul>

      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
</div>
<br><br><br>