<?php
session_start();
?>
<html>
<head>
<title>Online Quiz - Quiz List</title>
<link href="quiz.css" rel="stylesheet" type="text/css">
<style>
	  .card{
        border-radius: 5px;
        box-shadow: 7px 10px 35px #910031;
        width: 20%;
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
include("database.php");
echo "<h1 class='text-center bg-danger'>Select Subject to Give Quiz</h1>";
$rs=mysqli_query($con,"select * from subject");
echo "<table class='card'>";
while($row=mysqli_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";
?>
</body>
</html>
