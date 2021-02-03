<?php
//Create connection credentials
/*&$db_host = "localhost";
$db_name = "quizzer";
$db_user =  "root";
$db_pass = "";*/
//Remote database connection credentials
$db_host = "remotemysql.com";
$db_name = "NSiMyYrEp3";
$db_user =  "owmHLA0mRW";
$db_pass = "NSiMyYrEp3";

//Create mySqli object

$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);



//Error Handler
if($mysqli->connect_error){
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
?>