<?php
//Create connection credentials
/*&$db_host = "localhost";
$db_name = "quizzer";
$db_user =  "root";
$db_pass = "";*/
//Remote database connection credentials
$db_host = "remotemysql.com";
$db_name = "NhQd82hxIE";
$db_user =  "8aIOzEjsKx";
$db_pass = "NhQd82hxIE";

//Create mySqli object

$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);



//Error Handler
if($mysqli->connect_error){
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
?>