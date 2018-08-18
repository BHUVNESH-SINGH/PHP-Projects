
<?php
include("connect.php");
 extract($_POST);

$sql="INSERT INTO employees (loginid,firstname, lastname, password, email,mobileno,company, domain, smartcard, date)
VALUES
('$_POST[username]','$_POST[firstname]','$_POST[lastname]','$_POST[password]','$_POST[email]','$_POST[mobileno]','$_POST[company]','$_POST[domain]','$_POST[smartcard]',NOW())";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo("<script type='text/javascript'>
	alert('$username Created Successfully.')	
	window.location='index.php';
	  </script>");

?>