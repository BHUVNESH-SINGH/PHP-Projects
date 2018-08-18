
<?php 
    /* $con make a connection with database */
//$con=mysql_connect("localhost","root",""); 
// 
//    //select  database
//mysql_select_db("leavemanagement"); 
 include('db.php');
/* Below two commands will store the data in variables came from form input */
$username=$_POST['username'];
$password=$_POST['password'];
 
/* below two commands are sql injection which stops extra characters as input */
$user=mysql_real_escape_string($username);
$pass=mysql_real_escape_string($password);
 
$query=mysql_query("SELECT * FROM employees where
loginid='$user' AND 
password='$pass' "); 
 
$count=mysql_fetch_row($query);
if($count > 0) 
    /* $count checks if username and password are in same row */
{ 
 //echo "Login Successful";
 $hour = time() + 3600;  
    /* $hour sets cookie storage time for 1 hour */
 
    /* setcookie() function sets cookie after login */
 setcookie("username", $username); 
 setcookie("password", $password);
 
include('emphome.php');
    /* header() function redirect user to members page */
}
else
{ 

echo("<script type='text/javascript'>
	alert('Username or password is incorrect')		
	window.location='leaverequest.php';
	  </script>");
}
?>