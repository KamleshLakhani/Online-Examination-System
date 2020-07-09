<?php
session_start();
?>

<html>
<head>
<title>Administrative Login - Online Examination System</title>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<style>
    .card{
        border-radius: 5px;
        box-shadow: 7px 10px 35px #910031;
        width: 300px;
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
<?php
include("header.php");
?>
<center>
    <div class="card" style="background-color: orange">
<h1>Adminstrative Login</h1>
<form name="form1" method="post" action="login.php">

<table>
    <td>Login ID </td>
    <td><input name="loginid" type="text" id="loginid"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input name="pass" type="password" id="pass"></td>
  </tr>
  
  <tr>
    <td class="style2">&nbsp;</td>
    <td><input class="btn btn-primary" name="submit" type="submit" id="submit" value="Login"></td>
  </tr>
</table></td>
  </tr>
</table>
</div>
</form>
</body>
</html>
