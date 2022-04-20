<?php

define("username","root");
define("password","");
define("host","127.0.0.2:3307");
define("db","alumni_db");

$conn=new mysqli(host,username,password,db);
if($conn->connect_errno){
    die("Connection failed :".$conn->connect_errno);
}
else{
    // echo "Connection Successful";
}

?>