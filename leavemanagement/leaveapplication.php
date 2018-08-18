<?php include('connect.php');?>
<?php

extract($_POST);
$appname = $_COOKIE['username'];

$rs=mysql_query("select * from leaveapply where apname='$appname'");
if (mysql_num_rows($rs)>0)
{

echo("<script type='text/javascript'>
	alert('You are already applied for a leave!')		
	window.location='viewappliedleave.php';
	  </script>");
	//echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>	
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/datetimepicker.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page12">

<?php 
// if (@login($_POST['username'],$_POST['password']) == TRUE)
//    {
//        // User logged in. store username in session variables
//        session_register("username");
//        $_SESSION['login'] = $_POST['username'];
//    }
//echo login();
@$username= $_COOKIE['username'];?>
<div class="body3"></div>
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div id="logo_box">
				<h1><a href="#" id="logo">Leave Management System For MNC<span></span></a></h1>
			</div>
			<nav>
				<ul id="menu">
					<li id="menu_active"><a href="emphome.php">Home</a></li>
					<li><a href="deduct.php">Deduct</a></li>
					<li><a href="leave.php">Leave</a></li>
					<li><a href="leavestatus.php">leavestatus</a></li>
					<li class="bg_none"><a href="SiteMap.html">SiteMap</a></li>
				</ul>
			</nav>
			<div class="wrapper">
				<div class="text1"></div>
				<div class="text2"></div>
				
			</div><div class="inner_copy">More <a href="#">Website Templates</a> at TemplateMonster.com!</div>
		</header>
<!-- / header -->
	</div>
</div>
<div id="mainl">
        <div class="boxl">
            <div class="paddingl">
			<form name="leaveapply" action="leaveapply.php" method="POST">
			<table width="600" style="margin-left: 25px;" class="leaveap">
			
			    <tr height="50">
					
				</tr>
				<tr height="50" class="r1" style="background-color: #ffffff;">
					<td class="d1">Applicant</td><td>
						
					</td><td></td><td></td>
				</tr>
				<tr height="50" class="r1">
					<td class="d1">Id</td><td class="d1">
					
					<label>
						<?php
							$result = mysql_query("SELECT * FROM employees where loginid = '$username'");

while($row = mysql_fetch_array($result))
  {
  echo $row['id'] ;
  echo "<br />";
  }
							?></label>
					</td><td></td><td></td>
				</tr>
				<tr height="50" class="r1">
					<td class="d1">Name</td><td class="d1"><?php echo $_COOKIE['username'];?></td><td></td><td></td>
				</tr>
				<tr height="50" class="r1" style="background-color: #ffffff;">
					<td class="d1">Annual Leave <span>Information</span></td><td></td><td></td><td></td>
				</tr>
				<tr height="50" class="r1">
					<td class="d1">Total Leave</td><td class="d1"><input type="text" name="totalleave" id="totalleave"/></td><td></td><td></td>
				</tr>
				<tr height="50" class="r1">
					<td class="d1">Leave Taken</td><td class="d1">
						
					<input type="text" name="leavetaken" id="leavetaken"/>
						
					
						
					</td><td></td><td></td>
				</tr>
				<tr height="50" class="r1">
					<td class="d1">Balance Day</td><td class="d1"><input  type="text" name="balanceday" id="balanceday"/></td><td></td><td></td>
				</tr>
				<tr height="50" class="r1" style="background-color: #ffffff;">
					<td class="d1">Details Of Event</td><td></td><td></td><td></td>
				</tr>
				<tr height="50" class="r1">
					<td class="d1">Date Applied</td><td class="d1"><input type="text" name="dateapplied" id="dateapplied"/>
						<a href="javascript:NewCal('dateapplied','ddmmmyyyy')">
						
					<img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
						
					</td><td></td>
				</tr>
				<tr height="50" class="r1">
					<td class="d1">Leavetype</td><td class="d1"><input type="text" name="leavetype" id="leavetype"/></td><td></td>
				</tr>
				<tr height="50" class="r1">
					<td class="d1">Leave From</td><td class="d1"><input type="text" name="dfrom" id="dfrom"/>
					
						<a href="javascript:NewCal('dfrom','ddmmmyyyy')">
						
					<img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
					
					</td><td class="d1">Upto</td><td class="d1"><input type="text" name="dto" id="dto"/>
						<a href="javascript:NewCal('dto','ddmmmyyyy')">
						
					<img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
					</td>
				</tr>
				<tr height="50" class="r1">
					<td class="d1">Contact No</td><td class="d1"><input type="text" name="contactno" id="contactno"/></td><td></td>
				</tr>
				<tr height="50" class="r1">
					<td class="d1">Leave Reason</td><td class="d1"><input type="text" name="reason" id="reason"/></td><td></td>
				</tr>
				<tr height="50" class="r1" style="background-color: #ffffff;">
					<td class="d1">Verification and Approved</td><td></td><td></td><td></td>
				</tr>
				<tr height="50" class="r1">
					<td class="d1">Verified By</td><td class="d1"><input type="text" name="verifiedby" id="verifiedby"/></td><td></td>
				</tr>
				
				<tr height="50" class="r1">
					<td class="d1"></td><td class="d1"><input type="submit" value="submit"/>&nbsp;<input type="submit" value="clear"/></td><td></td>
				</tr>
			</table>
		</form>
			</div>
							</div>
						</div>
						
						<div class="main12">
<!-- footer -->
	<footer>
		<div class="wrapper">
			
			
		</div>
		<div class="under2"></div>
		<div class="wrapper font_size">
			<div class="pad">
				<a href="#" target="_blank">Website template</a> designed by TemplateMonster.com<br>
				<a href="#" target="_blank">3D Models</a> provided by Templates.com
			</div>
		</div>
	</footer>
<!-- / footer -->
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>