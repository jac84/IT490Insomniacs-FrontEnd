<?php 

//testing session
session_start();

$_SESSION["user"] = "user";
$_SESSION["uid"] = 12345;

echo "session vars: ". $_SESSION["user"] . ", " . $_SESSION["uid"];

?>