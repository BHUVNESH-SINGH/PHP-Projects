<?php

unset($_COOKIE["username"]); 
session_destroy();

header("Location: index.php");
?>