<?php
$servername="sql12.freemysqlhosting.net";
$username="sql12599089";
$password="qYKI6bwqKS";
$database="sql12599089";
$con = mysqli_connect($servername,$username,$password,$database);
if(!$con){
    die("connection failed : ".mysqli_error($con));
}
?>