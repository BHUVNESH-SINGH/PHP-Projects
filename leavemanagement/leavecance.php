<?php
$appname = $_GET['apname'];
//echo $appname;


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
<?php include('connect.php');?>
<?php 

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
					<li id="menu_active"><a href="managerhome.php">Home</a></li>
					<li><a href="leaverequest.php">LeaveReQ</a></li>
					
					<li><a href="leavecan.php">LeaveCancel</a></li>
					<li class="bg_none"><a href="SiteMap.html">SiteMap</a></li>
				</ul>
			</nav>
			<div class="wrapper">
				<div class="text1"></div>
				<div class="text2"></div>
				
			</div>
		</header>
<!-- / header -->
	</div>
</div>
<div id="mainl">
        <div class="boxl">
            <div class="paddingl">
			<form name="leavecancel" action="leavecancel.php" method="POST">
			<table width="600" style="margin-left: 25px;" class="leaveap">
			
			    <tr height="50">
					
				</tr>
				<tr height="50" class="r1" style="background-color: #ffffff;">
					<td class="d1">Cancellation details</td><td></td><td></td><td></td>
				</tr>
				<tr height="50" class="r1">
					<td class="d1">Application Id</td><td class="d1">
						<?php
							$result = mysql_query("SELECT * FROM leavecancel where apname = '$appname'");

while($row = mysql_fetch_array($result))
  {
  echo $row['id'] ;
  echo "<br />";
  }
							?>
					</td><td></td>
				</tr>
				<tr height="50" class="r1">
					<td class="d1">Name</td><td class="d1">
						
					<?php
							$result = mysql_query("SELECT * FROM leavecancel where apname = '$appname'");

while($row = mysql_fetch_array($result))
  {
  echo $row['apname'] ;
  echo "<br />";
  }
							?></td><td></td>
				</tr>
				<!--<tr height="50" class="r1">
					<td class="d1">Date Applied</td><td class="d1">
						
						<?php
							$result = mysql_query("SELECT * FROM leavecancel where apname = '$appname'");

while($row = mysql_fetch_array($result))
  {
  echo $row['dateapplied'] ;

  echo "<br />";
  }
							?>
						
				</td><td></td>
				</tr>-->
				<tr height="50" class="r1">
					<td class="d1">Cancel From</td><td class="d1"><?php
							$result = mysql_query("SELECT * FROM leavecancel where apname = '$appname'");

while($row = mysql_fetch_array($result))
  {
  echo $row['cancelfrom'] ;
 
  echo "<br />";
  }
							?>
					
					</td><td class="d15">To</td><td class="d1"><?php
							$result = mysql_query("SELECT * FROM leavecancel where apname = '$appname'");

while($row = mysql_fetch_array($result))
  {
  echo $row['cancelto'] ;
  
  echo "<br />";
  }
							?>
					</td>
				</tr>
				<tr height="50" class="r1">
					<td class="d1">Approved By</td><td class="d1"><?php
							$result = mysql_query("SELECT * FROM leavecancel where apname = '$appname'");

while($row = mysql_fetch_array($result))
  {
  echo $row['approvedby'] ;
  
  echo "<br />";
  }
							?></td><td></td>
				</tr>
				<tr height="50" class="r1">
					<td class="d1">Reason</td><td class="d1"><?php
							$result = mysql_query("SELECT * FROM leavecancel where apname = '$appname'");

while($row = mysql_fetch_array($result))
  {
  echo $row['reason'] ;
  
  echo "<br />";
  }
							?></td><td></td>
				</tr>
				<tr height="50" class="r1">
					<td class="d1">Approved</td><td class="d1">
					<?php
					
					$pend = "Approved";
							$result = mysql_query("SELECT * FROM leavecancel WHERE status != '$pend' and apname = '$appname'");

while($row = mysql_fetch_array($result))
  {
  echo'<a href="approved.php?id='.$row['id'].'">Approved ok</a>';

  }
							?>
					
						
						
					</td><td></td>
				</tr>
				
				<tr height="50" class="r1">
					<td class="d1"></td><td class="d1"></td><td></td>
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