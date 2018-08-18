
<?php
//include("connect.php");
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("leavemanagement",$cn)  or die("Could connect to Database");


extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from admin where loginid='$username' and password='$password'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$_POST['username'];
		
	}
}
if (isset($_SESSION["login"]))
{
include("adminhome.php");
//header("Location: http://localhost/site/home.php");
}
 if(isset($found))
		  {
		  	echo("<script type='text/javascript'>
	alert('Invalid Username or Password')	
	window.location='index.php';
	  </script>");
		  }
          mysql_close($cn);
?>