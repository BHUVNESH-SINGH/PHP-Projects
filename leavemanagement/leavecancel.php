<?php
include("db.php");
 extract($_POST);
 
 $abc = $_POST['dateapplied'];

$sql="INSERT INTO leavecancel (apname, dateapplied, cancelfrom, cancelto, reason, approvedby, date)
VALUES
('$_COOKIE[username]','$abc','$_POST[cancelfrom]','$_POST[cancelto]','$_POST[reason]','$_POST[approvedby]',NOW())";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo("<script type='text/javascript'>
	alert('Sended Successfully.')	
	window.location='leave.php';
	  </script>");

?>