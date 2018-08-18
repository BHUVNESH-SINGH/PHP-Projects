<?php
include('connect.php');
@$username= $_SESSION['login'];
?>
<br/>
<?php
echo htmlentities(@$_SESSION['login'], ENT_QUOTES, 'UTF-8');


?>