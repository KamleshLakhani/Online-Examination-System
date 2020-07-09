<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<style>
	  .card{
        border-radius: 5px;
        box-shadow: 7px 10px 35px #910031;
        width: 50%;
        font-size: 20px;
      }
       .card2{
        border-radius: 5px;
        width: 20%;
        font-size: 20px;
      }
	  </style>

</head>
<body>
<?php
include("header.php");
include("../database.php");
{

		$sql=mysqli_query($con,"Select * From user");	
		echo "<table class='card'>";
		echo"<h1 class='text-center bg-danger'>Registered User Detail</h1>";
		echo "<tr>
		<th class='text-primary'>UserID</th>
				<th class='text-primary'>LoginID</th>
	<th class='text-primary'>Name</th>
	<th class='text-primary'>Delete User</th></tR>";
	
	while($result=mysqli_fetch_assoc($sql))
	{
	$userid=$result['userid'];
	
	echo "<tr>";	
	echo "<td>".$result['userid']. "</td>";
	echo "<td>".$result['loginid']."</td>";
	echo "<td>".$result['name']."</td>";
	
	echo "<td><a href='userdelete.php?username=$userid'>Delete</span></a></td>";
	echo "</tr>";
	echo"</div>";
	}
	echo "</table>";
		
}

?>