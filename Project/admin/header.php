<head>
<style>
	  .card{
        border-radius: 5px;
        box-shadow: 7px 10px 35px #910031;
        background-color: orange;
        width: 100%;
        font-size: 20px;
      }
       .card2{
        border-radius: 5px;
        width: 20%;
        font-size: 20px;
      }
	  </style>

</head>

<table>
<tr>
    <td width="10%">
     <img border="0" src="header.jpg" width="100%" height="200" align="right"></td>
  </tr>

</table>
  <Table width="100%">
  <tr>
  <td>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	
<?php
	if(isset($_SESSION['alogin']))
	{
	
	 echo "<h4 class='text-success text-center btn btn-success'>
	 <div class='card' align=\"left\"><strong>
	 <a href=\"viewsub.php\">  view Subject</a>&emsp;&emsp;
		<a href=\"testview.php\"> view Topic</a>&emsp;&emsp;  
	 <a href=\"questiondelete.php\">View Question</a>&emsp;&emsp;
	 <a href=\"showuser.php\"> view user</a></strong>
	 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	 <strong><a href=\"login.php\">Admin Home</a>&emsp;
	 <a href=\"signout.php\">Signout</a></strong>&emsp;&emsp;
	 </div></h4>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
		</td>
	
  </tr>
  
</table>
