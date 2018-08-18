
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
$user=mysqli_real_escape_string($username);
$pass=mysqli_real_escape_string($password);
 
$query=mysqli_query("SELECT * FROM manager where
loginid='$user' AND password='$pass' "); 
 
$count=mysqli_fetch_row($query);
if($count > 0) 
    /* $count checks if username and password are in same row */
{ 
 //echo "Login Successful";
 $hour = time() + 3600;  
    /* $hour sets cookie storage time for 1 hour */
 
    /* setcookie() function sets cookie after login */
 setcookie("username", $username, $hour); 
 setcookie("password", $password, $hour);
 
include('managerhome.php');
    /* header() function redirect user to members page */
}
else
{ 
echo "Username or password is incorrect";
}
?>