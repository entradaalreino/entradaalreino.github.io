<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "sql2.freesqldatabase.com";
$user = "sql2318442";
$pass = "xM1%xK7!";
$db = "historial";

$con = mysqli_connect($host, $user, $pass, $db);
mysql_select_db($db, $con);

/*
include('connection.php');

$sql = "SELECT iglesia,cura FROM historial WHERE cura=0 ORDER BY fecha DESC LIMIT 1";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo "iglesia:".$row['iglesia']."|email:".$row['cura'].";";
    }
}
*/
?>