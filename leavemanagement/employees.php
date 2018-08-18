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
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page1">
<?php include('db.php');?>
<?php $username= $_COOKIE['username'];?>
<div class="body3"></div>
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div id="logo_box">
				<h1><a href="index.html" id="logo">Leave Management System For MNC<span></span></a></h1>
			</div>
			<nav>
				<ul id="menu">
					<li id="menu_active"><a href="adminhome.php">Home</a></li>
					<li><a href="employees.php">Employees</a></li>
					<li><a href="#">Projects</a></li>
					<li><a href="#">Contacts</a></li>
					<li class="bg_none"><a href="#">SiteMap</a></li>
				</ul>
			</nav>
			<div class="wrapper">
				<div class="text1">Leave management System for</div>
				<div class="text2">Multi national company</div>
				<ul id="icons">
					<li><span>Follow Us!</span></li>
					<li><a href="#"><img src="images/icon1.jpg" alt=""></a></li>
					<li><a href="#"><img src="images/icon2.jpg" alt=""></a></li>
					<li><a href="#"><img src="images/icon3.jpg" alt=""></a></li>
				</ul>
			</div>
		</header>
<!-- / header -->
	</div>
</div>

<div id="mainl">
        <div class="boxl">
            <div class="paddingl">
			
			
		<?php

$db= mysql_connect('localhost','root','');
if (!$db)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db('leavemanagement',$db);
  
    $query="select * from employees";


$result=mysql_query($query);

$num_rows=mysql_num_rows($result);


if($num_rows <= 0)
{

    echo "<p><i>No Match Found!</i></p>";
}
else
{
echo'<table class="ste" width="800" style="line-height:30px;">';
echo'<tr>';
    echo'<td>&nbsp;</td>';
    echo'<td>User-Id</td>';
	echo'<td>Login-Id</td>';
	echo'<td>Name</td>';
	echo'<td>Company</td>';
	echo'<td>Contact No</td>';
	echo'<td>Email</td>';
	echo'<td>Smartcard No</td>';
	
echo'</tr>';
	


	while($row = mysql_fetch_array($result))
	{
	echo'<tr>';
    echo'<td>&nbsp;</td>';
    echo'<td>'.$row["0"].'</td>';
	echo'<td>'.$row["1"].'</td>';
	echo'<td>'.$row["3"].'</td>';
	echo'<td>'.$row["7"].'</td>';
	echo'<td>'.$row["6"].'</td>';
	echo'<td>'.$row["5"].'</td>';
	echo'<td>'.$row["9"].'</td>';
	
	
echo'</tr>';

			
		
	}
}

echo'</table>';


mysql_close($db);
?>
							
							
							<table>
								<tr>
									<td></td><td></td><td></td><td></td>
								</tr>
							</table>
			</div>
			</div>
			</div>
			
			
			<div class="main">
<!-- footer -->
	<footer>
		
		<div class="under2"></div>
		<div class="wrapper font_size">
			<div class="pad">
				<a href="#" target="_blank">Website</a> designed by Chennaisunday.com<br>
				<a href="#" target="_blank">3D Models</a> provided by Chennaisunday.com
			</div>
		</div>
	</footer>
<!-- / footer -->
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>