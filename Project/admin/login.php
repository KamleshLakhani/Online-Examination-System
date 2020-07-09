<?php
session_start();
error_reporting(1);
?>
<html>
<head>
<title>Adminstrative AreaOnline Quiz </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<style>
    .card{
        border-radius: 5px;
        box-shadow: 7px 10px 35px #910031;
        width: 30%;
        font-size: 20px;
      }
       .card2{
        border-radius: 5px;
        width: 20%;
        font-size: 20px;
      }
    </style>
</head>

<body bgcolor="lightyellow">
	<center>
<?php
include("header.php");
include("../database.php");
extract($_POST);
if(isset($submit))
{
	$rs=mysqli_query($con,"select * from administrator where loginid='$loginid' and password='$pass'",$cn) or die(mysqli_error());
	if(mysqli_num_rows($rs)<1)
	{
		echo "<BR><BR><BR><BR><div class=head1> Invalid User Name or Password<br>
		<a href='index.php'>Click here to login again </a>
		<div>";
		echo "<script>window.location='index.php'</script>";		
	}
	else
	{
	echo "<script>window.location='login.php'</script>";			
	$_SESSION['alogin']="true";
	}
}
else if(!isset($_SESSION[alogin]))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}

		echo"<h1 class='text-center bg-danger'>Welcome to Admistrative Area</h1>";	


?>



</body>
</html>
