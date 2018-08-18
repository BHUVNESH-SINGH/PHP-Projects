<?php
//$appname = $_GET['apname'];
//echo $appname;
?>

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("leavemanagement", $con);

$approved = "Approved";



mysql_query("UPDATE leaveapply SET status = '$approved' WHERE id='".mysql_real_escape_string($_REQUEST["id"])."'");



mysql_close($con);
echo("<script type='text/javascript'>
	alert('Thank You')		
	window.location='leaverequest.php';
	  </script>");
?>
