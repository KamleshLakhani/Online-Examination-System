<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
<?php
include("header.php");
include("../database.php");
extract($_REQUEST);
 $id=$_GET['topicid'];
$q=mysqli_query($con,"select * from topic where topicid='$id'");
$res=mysqli_fetch_assoc($q);


if(isset($update))
{

$query="update topic SET name='$topicname',description='$desc' where topicid='$id'";	
mysqli_query($con,$query);
echo "records updated";	
}

?>
<div class="card">
<form name="form1" method="post" onSubmit="return check();">
<h2 class='text-center bg-primary'>Update Topic Details</h2>
  <table class="table table-striped">

 <tr>
        <td height="26"><div align="left"><strong> Topic Name </strong></div></td>
        <td>&nbsp;</td>
	  <td><input class="form-control" value="<?php echo $res['name']; ?>" name="topicname" type="text" id="topicname"></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Description</strong></div></td>
      <td>&nbsp;</td>
      <td><input class="form-control" value="<?php echo $res['description']; ?>" name="desc" type="text" id="desc"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input class="btn btn-primary" type="submit" name="update" value="update" ></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</body>
</html>