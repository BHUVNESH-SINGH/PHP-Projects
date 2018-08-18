
<?php
include("db.php");
 extract($_POST);
 
 @$pend = "pending";
 

$sql="INSERT INTO leaveapply (apname, totalleave, leavetaken, balanceday,dateapplied, dfrom, dto, leavetype, contactno, reason, verifiedby,status, date)
VALUES
('$_COOKIE[username]','$_POST[totalleave]','$_POST[leavetaken]','$_POST[balanceday]','$_POST[dateapplied]','$_POST[dfrom]','$_POST[dto]','$_POST[leavetype]','$_POST[contactno]','$_POST[reason]','$_POST[verifiedby]','$pend' ,NOW())";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo("<script type='text/javascript'>
	alert('Sended Successfully.')	
	window.location='leave.php';
	  </script>");

?>