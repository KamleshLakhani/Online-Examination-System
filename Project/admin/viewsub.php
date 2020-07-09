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
$sql=mysqli_query($con,"select * from subject");	
	
	echo "<table class='card'>";
	echo "<tr><th colspan=5 class='card2'><a class='btn btn-danger' href='subadd.php'>Add Subject</a></th></tr>";
	echo "<tr><th class='text-primary'>ID</th><th class='text-primary'>Subject Name</th>
	<th class='text-primary'>Update</th>
	<th class='text-primary'>Delete</th></tR>";
	
	while($result=mysqli_fetch_assoc($sql))
	{
$id=$result['subjectid'];
	
	echo "<tr>";	
	echo "<td>".$result['subjectid']. "</td>";
	echo "<td>".$result['subjectname']."</td>";
	echo "<td><a href='subupdate.php?sub_id=$id'>Update</a></td>";
	echo "<td><a href='subdelete.php?sub_id=$id'>Delete</a></td>";
	echo "</tr>";
	}
	echo "</table>";

}
?>
</body>
</html>
