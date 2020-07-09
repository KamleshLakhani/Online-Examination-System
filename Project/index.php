<?php
session_start();
?>

<html>
<head>
<title>Welcome to Online Exam</title>
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

<body background="background.svg">
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($con,"select * from user where loginid='$loginid' and password='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}

if (isset($_SESSION[login]))
{
  echo '<table class="card" border="0" align="center">
  <tr class="card2">
    <td valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Subject for Quiz </a></td>
  </tr>
  <tr class="card2">
    <td valign="bottom"> <a href="result.php" class="style4">Result </a></td>
  </tr>
</table>';
		exit;
}
?>

<table class="card" width="100%" border="0">
  
  <tr>
    </div></td>
    		<table align="center">
		<form method="post" action="">
	<br>
	<tr>
					<th class="text-primary">LOGIN ID</th>
					<th>
					<input class="form-control" type="TEXT" title="enter your regitered LOGIN ID"  placeholder="LOGIN ID"  maxlength="10" size="25"  id="loginid2" name="loginid"/></tD>
				</th>
				<tr>
					<th class="text-primary">ENTER PASSWORD</th>
					<th><input class="form-control" type="password" name="pass" id="pass2"/></th>
					</tr>
					       <?php
		  						if(isset($found))
		 						 {
		  							echo "Invalid Username or Password";
		 						 }
		 					 ?>
          </span></td>
         <th></th>
				<th class="errors">
					<input class="btn btn-danger "type="submit" name="submit" id="submit" Value="Login"/>
        <a class="btn btn-success " href="signup.php">New user ? click here</a></th>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>