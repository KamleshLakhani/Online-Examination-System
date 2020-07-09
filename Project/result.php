<?php
session_start();
?>
<html>
<head>
<title>Online Quiz  - Result </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
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
include("database.php");
extract($_SESSION);
$rs=mysqli_query($con,"select t.name,r.date,r.total,r.obtained from topic t, result r where
t.topicid=r.topicid and r.loginid='$login'",$cn) or die(mysqli_error());

echo "<h1 class=head1> Result </h1>";
if(mysqli_num_rows($rs)<1)
{
	echo "<br><br><h1 class=head1> You have not given any quiz</h1>";
	exit;
}
echo "<table class='card' border=1 align=center><tr class=style2><td width=300>Test Name <td>Date <td> Total <td> Obtained";


while($row=mysqli_fetch_row($rs))
{

	echo "<tr class=style8><td>$row[0] <td align=center> $row[1] <td align=center> $row[2]  <td align=center> $row[3]";
}
echo "</table>";
?>
</body>
</html>
