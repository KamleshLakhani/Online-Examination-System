<?php
session_start();
?>
<html>
<head>
<title>Online Quiz - Test List</title>
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
<body>
<?php
include("header.php");
include("database.php");
extract($_GET);
$rs1=mysqli_query($con,"select * from subject where subjectid=$subid");
$row1=mysqli_fetch_array($rs1);
echo "<h1 align=center><font color=blue> $row1[1]</font></h1>";
$rs=mysqli_query($con,"select * from topic where subjectid=$subid");
if(mysqli_num_rows($rs)<1)
{
	echo "<br><br><h2 class=head1> No Questions for this Subject </h2>";
	exit;
}
echo "<h2 class=head1> Select Topic Name to Appear in Exam</h2>";
echo "<table align=center class='card'>";

while($row=mysqli_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=quiz.php?testid=$row[0]&subid=$subid><font size=4>$row[2]</font></a>";
}
echo "</table>";
?>
</body>
</html>
