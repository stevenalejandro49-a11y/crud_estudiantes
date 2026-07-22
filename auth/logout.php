<?php

session_start();
session_destroy();
$_SESSION["cerrada"]=true;
header("Location: ../auth/login.php?logout=1");
exit();

?>