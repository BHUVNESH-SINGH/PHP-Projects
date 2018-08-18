<?php
/******************************************************
------------------Required Configuration---------------
Please edit the following variables so the project can
work correctly.
******************************************************/

//We log to the DataBase

$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("leavemanagement",$cn)  or die("Could connect to Database");


//Username of the Administrator
$admin='admin';

/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//project Home Page
//$url_home = 'index.php';

//Design Name
//$design = 'default';


/******************************************************
----------------------Initialization-------------------
******************************************************/
//include('init.php');
session_start();

header('Content-type: text/html;charset=UTF-8');
if(!isset($_SESSION['login']) and isset($_COOKIE['login'], $_COOKIE['login']))
{
	$cnn = mysql_query('select password,id,photo,sex from employees where loginid="'.mysql_real_escape_string($_COOKIE['username']).'"');
	$dn_cnn = mysql_fetch_array($cnn);
	if(sha1($dn_cnn['login'])==$_COOKIE['login'] and mysql_num_rows($cnn)>0)
	{
		$_SESSION['login'] = $_COOKIE['username'];
		$_SESSION['userid'] = $dn_cnn['id'];
		$_SESSION['sex'] = $dn_cnn['sex'];
		$_SESSION['photo'] = $dn_cnn['photo'];
	}
	
}
?>