<?php
$host = "localhost";
$user = "root";
$pass = "";
$link = mysqli_connect($host,$user,$pass);
mysqli_select_db($link, "ta19vfedotov");
mysqli_query($link, "SET NAMES utf8");
?>